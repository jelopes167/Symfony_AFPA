<?php

namespace App\Controller\admin;

use App\Entity\Gite;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;


class AdminController extends AbstractController
{

    /**
     * @Route ("/admin", name="admin_index")
     */
    public function index(ManagerRegistry $doctrine) {
$repository = $doctrine->getRepository(Gite::class);
$gites = $repository ->findAll();


        return $this ->render ("admin/index.html.twig",[
        "menu"  => "admin",
        "gites" => $gites
    ]);
    }
}