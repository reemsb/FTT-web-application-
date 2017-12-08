<?php
/**
 * Created by PhpStorm.
 * User: Rym
 * Date: 01-Dec-16
 * Time: 9:30 PM
 */

namespace MyApp\UserBundle\Form;


use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ReservationForm extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('dateRecuperationTicket')
            ->add('ticketTicket',EntityType::class, array(
                'class'=>'MyAppUserBundle:Ticket',
                'multiple'=>false,'label'=>' les tickets disponibles',

                ))
            ->add('block',ChoiceType::class, array(
                'choices' => array(
                    'block A' => true,
                    'block B' => false,
                    'block C' => false,
                    'block D' => null,
                )))
            ->add('seat',EntityType::class, array(
                'class'=>'MyAppUserBundle:Ticket',
                'multiple'=>false,'label'=>' les tickets disponibles'))
            ->add('seat', 'choice', array(
                'choices' => array($obj1, $obj2),
                'choice_labels' => function ($obj) {
                    return 'Label for ' . $obj->name;
                },
            ->setMethod('GET')
            ->add('reserver',SubmitType::class);
    }
    public function configureOptions(OptionsResolver $resolver){

    }
    public function getName(){
        return'user_bundle_reservation_form';
    }
}