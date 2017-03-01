<?php
namespace GitHub\Event\Project;
/**
 * GitHub project column event class.
 *
 * @category   API
 * @package    webhook-api
 * @author     Jakob Johansson
 * @copyright  2017
 * @license    https://github.com/jakobjohansson/webhook-api/blob/master/LICENSE.txt MIT-License
 */
class Column extends \GitHub\Event\Event {

    /**
     * The action performed on the project column
     * @var string
     */
    public $action = "";

    /**
     * The project column object
     * @var Object
     */
    public $project_column = "";

    /**
     * The output to be sent to front end
     * @return string
     */
    public function __toString() {
        return $this->sender->login . " just " . $this->action
        . " a project column in the <a href='" . $this->repository->html_url
        . "'>" . $this->repository->full_name . "</a> repository.";
    }
}
