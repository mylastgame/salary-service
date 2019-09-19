<?php


namespace App\Controller;


use App\Entity\Test;
use Doctrine\ORM\EntityManagerInterface;
use GuzzleHttp\Client;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class IndexController extends AbstractController
{
    public function index(EntityManagerInterface $em)
    {
        $client = new Client();
//        $client->request('GET', 'http://salary-service/create-claim', [
//           'claim' => "{
//                id: 1,
//                type: 1
//                manager_id: 2
//           }"
//        ]);
        return $this->render('app/index.html.twig');
    }
}