<?php

namespace App\Controller;

use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class FirstController extends AbstractController
{
    #[Route('/essai', name: 'app_home_page')]
    public function index(EntityManagerInterface $entityManager,UserPasswordHasherInterface $userPasswordHasher ): Response
    {

        
        return $this->render('index/index.html.twig', [
            
        ]);
    }
}
