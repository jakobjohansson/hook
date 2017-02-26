<?php
class Hook {
    private $secret = null;
    private $headers;
    private $contentType;
    private $event;
    private $algorithm;
    private $signature;
    private $payload;

    public function __construct() {
        return $this->setHeaders();
    }

    public function setSecret(String $secret) {
        $this->secret = $secret;
    }

    public function setHeaders() {
        $this->headers = apache_request_headers();
        if ($this->checkHeaders()) {
            $this->event = $this->headers['X-GitHub-Event'];
            list($this->algorithm, $this->signature) = explode("=", $this->headers['X-Hub-Signature'], 2);
            $this->contentType = $this->headers['Content-Type'];
            $this->fetchPayload();
            return $this->checkSecret();
        } else {
            return false;
        }
    }

    public function checkHeaders() {
        return array_key_exists('X-GitHub-Event', $this->headers) &&
        array_key_exists('X-Hub-Signature', $this->headers);
    }

    public function fetchPayload() {
        switch ($this->contentType) {
            case 'application/json':
                $this->payload = json_decode(file_get_contents('php://input'));
            break;
            case 'application/x-www-form-urlencoded':
                $this->payload = $_POST['payload'];
            break;
        }
    }

    public function checkSecret() {
        return hash_equals(hash_hmac($this->algorithm, $this->payload, $this->secret), $this->signature);
    }
}
