<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\BlogRepository;
use Symfony\Component\HttpFoundation\Response;

class DefeultController extends AbstractController
{
    /**
     * @Route("/", name="defeult")
     */

    public function index(BlogRepository $blogRepository): Response
    {
        return $this->render('defeult/index.html.twig', [
            'blog' => $blogRepository->findAll(),
        ]);
    }}