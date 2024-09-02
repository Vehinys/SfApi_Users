<?php

namespace App\Controller;

use App\HttpClient\ApiHttpClient;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\component\HttpFoundation\Request;

class ApiController extends AbstractController
{
    #[Route('/users', name: 'users_list')]
    public function index(
        
        ApiHttpClient $apiHttpClient
        
    ): Response {

        $users = $apiHttpClient->getUsers();
        return $this->render('user/index.html.twig', [
            'users' => $users
        ]);
    }
}
