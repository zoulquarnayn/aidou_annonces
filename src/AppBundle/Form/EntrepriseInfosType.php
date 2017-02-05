<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class EntrepriseInfosType extends AbstractType{
    public function buildForm(FormBuilderInterface $builder, array $options) {
              
        $builder->add('nomEntreprise', null, array(
            'label'=>'Nom',
            'attr' => array('placeholder' => 'Le nom de votre entreprise')
        ));
        
        $builder->add('telephoneEntreprise', null, array(
            'label'=>'Telephone',
            'attr' => array('placeholder' => 'Le numéro de téléphone de votre entreprise')
        ));
        
        $builder->add('adresseEntreprise', null, array(
            'label'=>'Adresse',
            'attr' => array('placeholder' => 'L\'adresse de votre entreprise')
        ));
        
        $builder->add('villeEntreprise', null, array(
            'label'=>'Ville',
            'attr' => array('placeholder' => 'La ville de votre entreprise')
        ));
        
        $builder->add('bpEntreprise', IntegerType::class , array(
            'label'=>'Boîte postale',
            'attr' => array('placeholder' => 'La boîte postale de votre entreprise')
        ));
        
        $builder->add('save', SubmitType::class, array('label' => 'Valider','attr'=>array('class'=>'btn btn-success')));

    }
}
