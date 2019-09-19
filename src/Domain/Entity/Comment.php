<?php


namespace App\Domain\Entity;


class Comment
{
    private $userId;
    private $topicId;
    private $comment;

    /**
     * @return mixed
     */
    public function getComment()
    {
        return $this->comment;
    }

}