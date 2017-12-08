<?php
/**
 * Created by PhpStorm.
 * User: Rym
 * Date: 29-Nov-16
 * Time: 9:27 PM
 */

namespace MyApp\UserBundle\Form;
use Doctrine\DBAL\Types\DateType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TicketForm extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('libelleTicket')
            ->add('prixTicket')
            ->add('nbrTicketDispo')
            ->add('matchMatch',EntityType::class, array(
                'class'=>'MyAppUserBundle:Matches',
                'multiple'=>false))
            ->add('stadeStade',EntityType::class, array(
                'class'=>'MyAppUserBundle:stade',
                'choice_label'=>'libelleStade',
                'multiple'=>false,'label'=>' le stade'))
            ->setMethod('GET')
            ->add('save',SubmitType::class);
    }
    public function configureOptions(OptionsResolver $resolver){

    }
    public function getName(){
        return'user_bundle_ticket_form';
    }

}