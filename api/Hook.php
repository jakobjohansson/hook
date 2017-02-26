<?php
class Hook {
    protected $headers;
    protected $contentType;
    protected $payload = null;
    protected $apiMessages = [];

    public function __construct($service = null, $secret = null) {
        if ($service === "GitHub") {
            return new GitHubHook($secret);
        } else {
            $this->fetchHeaders();
            $this->fetchPayload();
        }
    }

    public function getPayload() {
        return $this->payload;
    }

    public function getApiMessages() {
        return $this->apiMessages();
    }

    protected function fetchHeaders() {
        $this->headers = apache_request_headers();
        $this->contentType = $this->headers['Content-Type'];
    }

    protected function fetchPayload() {
        switch ($this->contentType) {
            case 'application/json':
                $this->payload = json_decode(file_get_contents('php://input'));
            break;
            case 'application/x-www-form-urlencoded':
                $this->payload = $_POST['payload'];
            break;
            default:
                $this->apiMessages[] = "Invalid Content Type";
        }
    }

}
