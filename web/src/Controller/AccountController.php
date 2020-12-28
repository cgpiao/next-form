<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AccountController extends BaseController
{
   #[Route('/account', name: 'account')]
   public function index(): Response
   {
      return $this->render('account/index.html.twig', [
         'controller_name' => 'AccountController',
      ]);
   }

   #[Route('/login', name: 'login')]
   public function login(): Response
   {

      return $this->render('account/login.html.twig', [
         'controller_name' => $this->translator->trans('Symfony is great'),
      ]);
   }
}
