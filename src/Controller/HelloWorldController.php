<?php
/**
 * Hello World controller
 */
namespace App\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class HelloWorldController
 * @package App\Controller
 */
class HelloWorldController extends AbstractController
{
    /**
     * @return Response
     *
     * @param string $name User input
     *
     * @Route(
     *     "/hello/{name}",
     *     defaults={"name":"World"},
     *     requirements={"name": "[a-zA-Z]+"}
     *
     * )
     *
     */
    public function index(string $name): Response
    {
        return $this->render(
            'hello-world/index.html.twig',
        ['name' => $name]
        );
    }

}