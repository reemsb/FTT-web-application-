<?php
/**
 * Created by PhpStorm.
 * User: Rym
 * Date: 01-Dec-16
 * Time: 3:19 PM
 */

namespace MyApp\UserBundle\Form;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class StadeForm extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('libelleStade')
            ->add('adresseStade')
            ->add('villeStade')
            ->add('typeStade')
            ->add('capaciteStade')
            ->setMethod('GET')
            ->add('save',SubmitType::class);
    }
    public function configureOptions(OptionsResolver $resolver){

    }
    public function getName(){
        return'user_bundle_stade_form';
    }

}