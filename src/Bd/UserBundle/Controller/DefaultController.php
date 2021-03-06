<?php

namespace Bd\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\SecurityContext;
class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('BdUserBundle:Default:index.html.twig', array('name' => $name));
    }

    public function loginAction()
	{
		// Si le visiteur est déjà identifié, on le redirige vers l'accueil
		if ($this->get('security.context')->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
		  return $this->redirect($this->generateUrl('bd_imhotep_homepage'));
		}

		$request = $this->getRequest();
		$session = $request->getSession();

		// On vérifie s'il y a des erreurs d'une précédente soumission du formulaire
		if ($request->attributes->has(SecurityContext::AUTHENTICATION_ERROR)) {
		  $error = $request->attributes->get(SecurityContext::AUTHENTICATION_ERROR);
		} else {
		  $error = $session->get(SecurityContext::AUTHENTICATION_ERROR);
		  $session->remove(SecurityContext::AUTHENTICATION_ERROR);
		}

		return $this->render('BdUserBundle:Default:login.html.twig', array(
		  // Valeur du précédent nom d'utilisateur entré par l'internaute
		  'last_username' => $session->get(SecurityContext::LAST_USERNAME),
		  'error'         => $error,
		));
	}

	//get all users
	public function usersAction() {
	    //access user manager services 

	   	$userManager = $this->get('fos_user.user_manager');
	    $users = $userManager->findUsers();


	    return $this->render('BdUserBundle:Default:users.html.twig', array('users' =>   $users));
	}
	
}
