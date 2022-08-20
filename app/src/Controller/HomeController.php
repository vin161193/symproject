<?php
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class HomeController
{
    /**
     * @Route("/", name="index", methods="GET")
     */
    public function __invoke()
    {
        return new Response(
            'Welcome to first serverless project', 
             Response::HTTP_OK
        );
    }
}