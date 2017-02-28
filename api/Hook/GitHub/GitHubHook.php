<?php
namespace Hook\GitHub;
/**
 * GitHub service for the webhook-api.
 * This hook is returned if specified in the static service function.
 * Will provide authorization if secret is provided.
 *
 * @category   API
 * @package    webhook-api
 * @author     Jakob Johansson
 * @copyright  2017
 * @license    https://github.com/jakobjohansson/webhook-api/blob/master/LICENSE.txt MIT-License
 */
class GitHubHook extends \Hook\Hook {

    /**
     * Authorization key to be provided from the user
     * @var String null
     */
    private $secret = null;

    /**
     * The X-GitHub-Event header, i.e push, issue, etc
     * @var String
     */
    private $event;

    /**
     * The hash string from the X-GitHub-Signature header
     * @var String
     */
    private $signature;

    /**
     * The hash algorithm used in the X-GitHub-Signature header
     * @var String
     */
    private $algorithm;

    /**
     * The events the API will listen to
     * @var Array
     */
    public $listeners = [];

    /**
     * Checking for X-GitHub-Event header and authorizing
     * @param String $secret the authorization key
     */
    public function __construct($secret = null) {
        $this->fetchHeaders();

        if (!array_key_exists('X-GitHub-Event', $this->headers)) {
            $this->apiMessages[] = "GitHub Event header not present";
        } else {
            $this->event = $this->headers['X-GitHub-Event'];
        }

        if (isset($secret)) {
            $this->secret = $secret;
            return $this->auth();
        } else {
            $this->fetchPayload();
        }
    }

    /**
     * Authorizing method with the helper functions secretValidator() and checkSecret()
     * Sends message to apiMessages if a problem occurs
     * @return boolean true | false
     */
    protected function auth() {
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

    /**
     * Compares the hashes provided by the webhook and the user
     * @return boolean hash
     */
    protected function checkSecret() {
        return hash_equals(hash_hmac($this->algorithm, $this->secretValidator(), $this->secret), $this->signature);
    }

    /**
     * Returns the payload temporarily for authorization needed in checkSecret()
     * @return Array payload
     */
    protected function secretValidator() {
        switch ($this->contentType) {
            case 'application/json':
                return file_get_contents('php://input');
            break;
            case 'application/x-www-form-urlencoded':
                return $_POST['payload'];
            break;
        }
    }

    /**
     * Sets the events to listen to
     * Needs to be declared to create any output
     * Empty array watches all events
     * Can be complemented with callback functions
     * @param  Array $listeners Array of events
     * @return Object | false   false if event is not being watched
     */
    public function listen(array $listeners) {
        $default = ['push', 'issues', 'repository', 'commit_comment',
        'create', 'delete', 'fork', 'gollum', 'issue_comment', 'label',
        'member', 'membership', 'milestone', 'organization', 'org_block',
        'page_build', 'project_card', 'project_column', 'project',
        'public', 'pull_request_review', 'pull_request_review_comments',
        'pull_request', 'status', 'team', 'team_add', 'watch', 'release'];

        if (empty($listeners)) {
            $this->listeners = $default;
        } else {
            foreach ($listeners as $listener => $callback) {
                if (!in_array($listener, $default) && !in_array($callback, $default)) {
                    $this->apiMessages[] = "Can't watch an invalid event";
                    return false;
                }
            }
            $this->listeners = $listeners;
        }

        if (!array_key_exists($this->event, $this->listeners) && !in_array($this->event, $this->listeners)) {
            $this->event = (isset($this->event)) ?: "any";
            $this->apiMessages[] = "Not watching $this->event event";
            return false;
        } else {
            switch($this->event) {

                case 'push':
                    $this->output = new GitHubPushEvent($this->payload);
                break;

                case 'commit_comment':
                    $this->output = new GitHubCommitCommentEvent($this->payload);
                break;

                case 'create':
                    $this->output = new GitHubCreateEvent($this->payload);
                break;

                case 'delete':
                    $this->output = new GitHubDeleteEvent($this->payload);
                break;

                case 'fork':
                    $this->output = new GitHubForkEvent($this->payload);
                break;

                case 'gollum':
                    $this->output = new GitHubGollumEvent($this->payload);
                break;

                case 'issues':
                    $this->output = new GitHubIssuesEvent($this->payload);
                break;

                case 'issue_comment':
                    $this->output = new GitHubIssueCommentEvent($this->payload);
                break;

                case 'label':
                    $this->output = new GitHubLabelEvent($this->payload);
                break;

                case 'member':
                    $this->output = new GitHubMemberEvent($this->payload);
                break;

                case 'membership':
                    $this->output = new GitHubMembershipEvent($this->payload);
                break;

                case 'milestone':
                    $this->output = new GitHubMilestoneEvent($this->payload);
                break;

                case 'organization':
                    $this->output = new GitHubOrganizationEvent($this->payload);
                break;

                case 'org_block':
                    $this->output = new GitHubOrganizationBlockEvent($this->payload);
                break;

                case 'page_build':
                    $this->output = new GitHubPageBuildEvent($this->payload);
                break;

                case 'project_card':
                    $this->output = new GitHubProjectCardEvent($this->payload);
                break;

                case 'project_column':
                    $this->output = new GitHubProjectColumnEvent($this->payload);
                break;
            }

            if (isset($this->listeners[$this->event])) {
                call_user_func($this->listeners[$this->event], $this->output);
            }
        }
    }
}
