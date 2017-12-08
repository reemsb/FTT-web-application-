<?php

/**
 * Created by PhpStorm.
 * User: Rym
 * Date: 25-Nov-16
 * Time: 12:18 AM
 */
namespace MyApp\UserBundle\Form;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ClubForm extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('libelleClub')
            ->add('adresseClub')
            ->add('villeClub')
            ->add('numeroTelephone')
            ->add('numeroFax')
            ->add('nbrTerrain')
            ->add('budgetClub')
            ->setMethod('GET')
            ->add('save',SubmitType::class);
    }
    public function configureOptions(OptionsResolver $resolver){

    }
    public function getName(){
        return'user_bundle_club_form';
    }

}