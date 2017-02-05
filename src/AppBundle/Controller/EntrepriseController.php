<?php
namespace AppBundle\Controller;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * Description of EntrepriseController
 *
 * @author fahmedal
 */
class EntrepriseController extends Controller {
    /**
     * @Route("/informations-entreprise", name="informations-entreprise")
     */
    public function completerInformationsEntreprise(Request $request)
    {
        $username = $this->getUser();
        $userManager = $this->get('fos_user.user_manager');
        $user = $userManager->findUserByUsername($username);
        $form = $this->createForm(\AppBundle\Form\EntrepriseInfosType::class,$user);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $user = $form->getData();
            $userManager->updateUser($user,true);
            return $this->redirectToRoute('homepage');
        }
        
        return $this->render('informations-entreprise.html.twig', array('form'=>$form->createView()));
    }
}
