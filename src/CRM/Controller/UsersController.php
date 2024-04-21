<?php
namespace App\CRM\Controller;


use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Entity\Users;
use App\Form\UsersAddType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;

class UsersController extends AbstractController
{

    #[Route('/users/index', name: 'users')]
    public function index(): Response
    {   
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
        
        return $this->render('users/index.html.twig', [
            'controller_name' => 'UsersController',
        ]);
    }   
    
    #[Route('/users/all', name: 'users_all')]
    public function allUsers(EntityManagerInterface $em)
    {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

        $users = $em->getRepository(Users::class)->findAll();
        return $this->render('users/all.html.twig', ['users' => $users]);
    }
}