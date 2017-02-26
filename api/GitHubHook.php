<?php
class GitHubHook extends Hook {
    private $secret = null;
    private $event;
    private $algorithm;
    private $signature;

    public function __construct($secret = null) {
        $this->fetchHeaders();
        if (!array_key_exists('X-GitHub-Event', $this->headers)) {
            $this->apiMessages[] = "GitHub Event header not present";
            return false;
        }
        $this->event = $this->headers['X-GitHub-Event'];

        if (isset($secret)) {
            $this->secret = $secret;
            return $this->auth();
        }
    }

    public function auth() {
        if (!array_key_exists('X-Hub-Signature', $this->headers)) {
            $this->apiMessages[] = "No signature provided";
            return false;
        }

        list($this->algorithm, $this->signature) = explode("=", $this->headers['X-Hub-Signature'], 2);
        if (!$this->checkSecret()) {
            $this->apiMessages[] = "Signature not authorized";
            return false;
        } else {
            $this->fetchPayload();
            return true;
        }
    }

    protected function checkSecret() {
        return hash_equals(hash_hmac($this->algorithm, $this->secretValidator(), $this->secret), $this->signature);
    }

    protected function secretValidator() {
        switch ($this->contentType) {
            case 'application/json':
                return json_decode(file_get_contents('php://input'));
            break;
            case 'application/x-www-form-urlencoded':
                return $_POST['payload'];
            break;
        }
    }
}
 ?>
