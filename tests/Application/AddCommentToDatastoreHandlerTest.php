<?php


namespace App\Tests\Application;


use App\Application\AddCommentToDatastoreHandler;
use App\Domain\ValueObject\CommentUpsertedEvent;
use JMS\Serializer\SerializerInterface;
use Liip\FunctionalTestBundle\Test\WebTestCase;

class AddCommentToDatastoreHandlerTest extends WebTestCase
{
    /** @test */
    public function itHandleComments()
    {
        $requestFile = __DIR__ . '/AddCommentsToDatastoreHandlerTest/request.json';
        $request = file_get_contents($requestFile);

        /** @var SerializerInterface $serializer */
        $serializer = self::bootKernel()->getContainer()->get('jms_serializer');
        $event = $serializer->deserialize($request, CommentUpsertedEvent::class, 'json');

        $handler = new AddCommentToDatastoreHandler($serializer);
        $result = $handler->handle($event);

        $this->assertEquals('Hello world comment', $result);
    }
}