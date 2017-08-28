<?php

namespace GitHub\Event\Repository;

/**
 * GitHub organization event class.
 *
 * @category   API
 *
 * @author     Jakob Johansson
 * @copyright  2017
 * @license    https://github.com/jakobjohansson/webhook-api/blob/master/LICENSE.txt MIT-License
 */
class PublicRepository extends \GitHub\Event\Event
{
    /**
     * The output to be sent to front end.
     *
     * @return string
     */
    public function __toString()
    {
        return $this->sender->login." just made the <a href='".$this->repository->html_url
        ."'>".$this->repository->full_name.'</a> repository public.';
    }
}
