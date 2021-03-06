<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;


class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('email', EmailType::class)
            ->add('password', PasswordType::class);
        // ->add('password', RepeatedType::class, [
        //     'type' => PasswordType::class,
        //     'invalid_message' => 'The password fields must match.',
        //     'options' => ['attr' => ['class' => 'password-field']],
        //     'required' => true,
        //     'first_options'  => ['label' => 'mot de passe'],
        //     'second_options' => ['label' => 'confirmation mot de passe'],
        // ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'csrf_protection' => false,
            'data_class' => User::class,
        ]);
    }
}
