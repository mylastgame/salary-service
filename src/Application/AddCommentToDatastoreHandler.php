<?php


namespace App\Application;


use App\Domain\Entity\Comment;
use App\Domain\ValueObject\CommentUpsertedEvent;
use JMS\Serializer\SerializerInterface;

class AddCommentToDatastoreHandler
{
    /**
     * @var SerializerInterface
     */
    protected $serializer;

    public function __construct(SerializerInterface $serializer)
    {

        $this->serializer = $serializer;
    }

    public function handle(CommentUpsertedEvent $event)
    {
        $data = $event->getData();

        /** @var Comment $comment */
        $comment = $this->serializer->deserialize($this->serializer->serialize($data, 'json'), Comment::class, 'json');

        return $comment->getComment();
    }
}