<?php

namespace App\Controller;

use App\Entity\SortieEntity;
use App\Form\SortieFormType;
use Doctrine\ORM\EntityManagerInterface;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SortieController extends AbstractController
{
    #[Route('/sortie', name: 'app_sortie')]
    public function ajoutform(Request $reqForm, EntityManagerInterface $em): Response
    {
        // creation de sortie
        $sortie= new SortieEntity();

        //crea du form
        $formsortie=$this->createForm(SortieFormType::class,$sortie);

// traitement de la requete
        $formsortie->handleRequest($reqForm);

        //verif soumission et validation du form
        if ($formsortie->isSubmitted() && $formsortie->isValid()){

            //STOCKAGE
            $em->persist($sortie);
            $em->flush();

            }




        return $this->render('sortie/OrgaSortie.html.twig', [
            'formsortie' => $formsortie->createView(),
        ]);
    }
}
