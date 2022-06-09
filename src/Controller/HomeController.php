<?php

namespace App\Controller;

use App\Entity\Gite;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

    class HomeController extends AbstractController{

 
 /** 
 *@Route("/", name="home")
 */
        public function index (ManagerRegistry $doctrine)
        {
                     $repository = $doctrine ->getRepository(Gite::class);
                     $gites = $repository->findAll();
dump($gites);

             /* $manager = $doctrine ->getManager();

              $gite = new Gite();
              $gite -> setNom("Mon premier Gite")
                     -> setDescriptiion("Et consequat ut velit velit qui magna nulla dolore id irure ullamco non ullamco.")
                     -> setSurface(400)
                     -> setCouchage(5)
                     ->setChambres(3);


              $manager ->persist($gite);
              $manager->flush(); */

                return $this ->render("home/index.html.twig",[
                     "title" => "Bienvenue sur mon site",
                     "message" => "Hello world ! Bienvenue sur mon site",
                     "menu" => "home",
                     "gites" => $gites

                ]);
                
        }


        /** 
 *@Route("/contact", name="contact")
 */

        public function contact()
        {
        return $this ->render("home/contact.html.twig",[

              "menu" =>"contact"
        ]);
        }

    }