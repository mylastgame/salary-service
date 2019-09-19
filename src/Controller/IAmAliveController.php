<?php


namespace App\Controller;


use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class IAmAliveController
{
    public function handle(Request $request)
    {
        return new Response('');
    }
}