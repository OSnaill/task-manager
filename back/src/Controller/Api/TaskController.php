<?php

namespace App\Controller\Api;

use App\Repository\TaskRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/api/task', name: 'app_api_task_')]
class TaskController extends AbstractController
{
    #[Route('/', name: 'index')]
    public function index(TaskRepository $taskRepository): Response
    {
        return $this->json($taskRepository->findAll());
    }
}
