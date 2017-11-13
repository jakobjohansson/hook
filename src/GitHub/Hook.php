<?php

namespace Hook\GitHub;

use Hook\Request;
use Hook\Hook as BaseHook;
use Hook\Traits\Authenticates;

class Hook extends BaseHook
{
    use Authenticates;

    /**
     * The algorithm used on the hash.
     *
     * @var string
     */
    private $algorithm;

    /**
     * Create a new Hook instance.
     *
     * @param string $secret
     * @param array $map
     *
     * @return mixed
     */
    public function __construct($secret = null, array $map)
    {
        $this->map($map);

        if (!Request::header('HTTP_X_GITHUB_EVENT')) {
            $this->errors[] = 'GitHub Event header not present';

            return;
        }

        $this->event = Request::header('HTTP_X_GITHUB_EVENT');

        if (isset($secret)) {
            $this->secret = $secret;

            return $this->auth();
        }
    }

    /**
     * Authenticate the request provided a signature.
     *
     * @return bool
     */
    private function auth()
    {
        if (!Request::header('HTTP_X_HUB_SIGNATURE')) {
            $this->errors[] = 'No signature provided';

            return false;
        }

        if (strpos(Request::header('HTTP_X_HUB_SIGNATURE'), 'sha1=') !== 0) {
            return false;
        }

        list($this->algorithm, $this->signature) = explode('=', Request::header('HTTP_X_HUB_SIGNATURE'), 2);

        if (!$this->validate()) {
            $this->errors[] = 'Signature not authorized';

            return false;
        }

        return $this->authenticated = true;
    }

    /**
     * Compare the signature and the secret.
     *
     * @return bool
     */
    private function validate()
    {
        return hash_equals(
            hash_hmac(
                $this->algorithm,
                json_encode(Request::payload()),
                $this->secret
            ),
            $this->signature
        );
    }
}
