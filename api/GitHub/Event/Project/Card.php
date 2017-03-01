<?php
namespace GitHub\Event\Project;
/**
 * GitHub project card event class.
 *
 * @category   API
 * @package    webhook-api
 * @author     Jakob Johansson
 * @copyright  2017
 * @license    https://github.com/jakobjohansson/webhook-api/blob/master/LICENSE.txt MIT-License
 */
class Card extends \Event {

    /**
     * The action performed on the project card
     * @var string
     */
    public $action = "";

    /**
     * The project card object
     * @var Object
     */
    public $project_card = "";

    /**
     * The output to be sent to front end
     * @return string
     */
    public function __toString() {
        return $this->sender->login . " just " . $this->action
        . " a project card in the <a href='" . $this->repository->html_url
        . "'>" . $this->repository->full_name . "</a> repository.";
    }
}
