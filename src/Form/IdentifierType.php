<?php

namespace App\Form;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class IdentifierType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('password', PasswordType::class, [
                'label' => 'Entrez le code secret',
                // @link  https://symfony.com/doc/current/reference/forms/types/text.html#attr
                'attr' => [
                    'placeholder' => 'saisissez 4 caractères',
                    'minlength' => 4,
                    'maxlength' => 4
                    ]
            ])
            ;
    }
}