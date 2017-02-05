<?php
namespace AppBundle\Listener;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of RegistrationListener
 *
 * @author fahmedal
 */
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;



/**
 * Listener responsible for adding the default user role at registration
 */
class RegistrationListener implements EventSubscriberInterface
{
    public static function getSubscribedEvents()
    {
        return array(FormEvents::POST_SUBMIT => 'setRole');
    }

    public function setRole(FormEvent $event)
    {
        $aRoles = array('ROLE_USER');
        $user = $event->getForm()->getData();
        if($user->getEstUneEntreprise()==='true'){
            $aRoles[] = 'ROLE_ENTREPRISE';
        }
        $user->setRoles($aRoles);
   }}
