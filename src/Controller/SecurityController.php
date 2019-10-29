<?php
namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
class SecurityController extends AbstractController
{
    /**
     * @Route("/login", name="login")
     * @param AuthenticationUtils $authentication_utils
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function login(AuthenticationUtils $authentication_utils)
    {
        $error = $authentication_utils->getLastAuthenticationError();
        $last_username = $authentication_utils->getLastUsername();
        dump($error);
        return $this->render('security/login.html.twig',[
            'error' => $error,
            'last_username' => $last_username,
            'current_menu' => 'admin'
        ]);
    }
} 