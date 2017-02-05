<?php

// src/AppBundle/Form/RegistrationType.php

namespace AppBundle\Form;

use AppBundle\Listener\RegistrationListener;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class RegistrationType extends AbstractType {

    public function buildForm(FormBuilderInterface $builder, array $options) {
        
         //est une entreprise ou pas ?
        $builder->add('estUneEntreprise', ChoiceType::class, array(
            'expanded' => true,
            'multiple' => false,
            'choices' => array(
                'Particulier' => 'false',
                'Entreprise' => 'true',
            ),
            'label'=>'Compte :',
            'label_attr' => array(
                'class' => 'radio-inline'
            ),
            'choices_as_values' => true,
        ));
        //CIVILITE
        $builder->add('civilite', ChoiceType::class, array(
            'expanded' => true,
            'multiple' => false,
            'choices' => array(
                'Mr' => 'Mr',
                'Mme' => 'Mme',
            ),
            'label'=>'Civilité :',
            'label_attr' => array(
                'class' => 'radio-inline'
            ),
            'choices_as_values' => true,
        ));
        //NOM
        $builder->add('nom', null, array(
            'attr' => array('placeholder' => 'Votre nom de famille')
        ));
        //PRENOM
        $builder->add('prenom', null, array(
            'attr' => array('placeholder' => 'Votre prénom')
        ));
        
        $builder->addEventSubscriber(new RegistrationListener());
    }

    public function getParent() {
        return 'fos_user_registration';
    }

    public function getName() {
        return 'app_user_registration';
    }

}
