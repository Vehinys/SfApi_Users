<?php

namespace App\HttpClient;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpClient\HttpClient;
use Symfony\Contracts\HttpClient\HttpClientInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;


class ApiHttpClient extends AbstractController
{
    private $httpClient;

    public function __construct(HttpClientInterface $jph)
    {
        $this->httpClient = $jph;
    }

    public function getUsers()
    {
        $response = $this->httpClient->request('GET', '?results=15', [
            'verify_peer' => false,
        ]);

        return $response->toArray();
    }
}