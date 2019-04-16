<?php

  namespace App\Controller;

  use App\Entity\Task;
  use App\Repository\TaskRepository;
  use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
  use Symfony\Component\HttpFoundation\Response;
  use Symfony\Component\Routing\Annotation\Route;

  /**
   * Class TaskController
   * @package App\Controller
   *
   * @Route("/task")
   */


  class TaskController extends AbstractController
  {
      /**
       * @param App\Repository\TaskRepository $repository Task repository
       * @return \Symfony\Component\HttpFoundation\Response HTTP response
       *
       * @Route("/",
       *     name="task_index",
       *     )
       */
        public function index(TaskRepository $repository): Response
        {
            return $this->render(
                    'task/index.html.twig',
                ['task' => $repository->findAll()]);
        }

      /**
       * @param TaskRepository $repository
       * @return Response
       *
       * @Route("/{id}",
       *     name="task_view",
       *     requirements={"id": "[1-9]\d*"}
       * )
       */
      public function view(Task $task): Response
      {
          return $this->render(
              'task/view.html.twig',
          ['task'=>$task]);
      }
  }