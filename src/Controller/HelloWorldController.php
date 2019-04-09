<?php
/**
 * Hello World controller
 */
namespace App\Controller;

#use http\Env\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class HelloWorldController
 * @package App\Controller
 */
class HelloWorldController
{
    /**
     * @return Response
     *
     * @param string $name User input
     *
     * @Route(
     *     "/{name}",
     *     defaults={"name":"World"},
     *     requirements={"name": "[a-zA-Z]+"},
     *     name="helloworld_index",
     * )
     *
     */
    public function index(string $name): Response
    {
        return new Response('Hello '.$name.'!');
    }

}