<?php

namespace App\Controller;

use App\Entity\User;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CompteController extends AbstractController
{
    #[Route('/compte/{id}', name: 'app_compte')]
    public function index(ManagerRegistry $doctrine,$id): Response
    {

        
        $repository=$doctrine->getRepository(User::class);

        $user=$repository->find($id);
        

        
        
      
        

        return $this->render('compte/index.html.twig',[
            'personne'=>$user,
        ]);
    }
}
