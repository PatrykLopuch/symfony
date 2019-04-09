<?php
/**
 * Test controller.
 */

namespace App\Controller;

use App\Repository\TestRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class TestController.
 *
 * @Route("/test")
 */
class TestController extends AbstractController
{
    /**
     * Index action.
     *
     * @param \App\Repository\TestRepository $repository Repository
     *
     * @return \Symfony\Component\HttpFoundation\Response HTTP response
     *
     * @Route(
     *     "/",
     *     name="test_index"
     * )
     */
    public function index(TestRepository $repository): Response
    {
        return $this->render(
            'test/index.html.twig',
            ['data' => $repository->findAll()]
        );
    }
}