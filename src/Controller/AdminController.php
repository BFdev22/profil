<?php

namespace App\Controller;

use App\Entity\PendingApprove;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class AdminController extends AbstractController
{
    #[Route('/admin', name: 'app_admin')]
    public function index(EntityManagerInterface $em): Response
    {
        $allPending = $em->getRepository(PendingApprove::class)->createQueryBuilder('p')->where('p.state = 0')->getQuery()->getResult();

        return $this->render('admin/index.html.twig', [
            'controller_name' => 'AdminController',
            'pendings' => $allPending
        ]);
    }
}
