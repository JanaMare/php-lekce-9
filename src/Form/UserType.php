<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('login')
            ->add('name')
            ->add('email')
            ->add('birthdate')
            ->add('website')
            ->add('country', ChoiceType::class, [
                'choices'=>[
                    'CZ'=>'cz',
                    'SK'=>'sk'
                ]
            ])
            ->add('favouriteCategory', ChoiceType::class,[
                'choices'=>[
                    'Food'=>'food',
                    'Clothes'=>'clothes',
                    'Electronics'=>'electronics'
                ]
            ])
            ->add('defaultVat')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
