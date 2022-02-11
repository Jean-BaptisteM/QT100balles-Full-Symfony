<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints\Email;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class UserTypeAdmin extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nickname', TextType::class, [
                'label' => 'Pseudo *',
                'constraints' => [
                    new NotBlank(),
                ]
            ])
            ->add('email', EmailType::class, [
                'label' => 'E-mail *',
                'constraints' => [
                    new Email(),
                    new NotBlank(),
                ],
            ])
            ->add('password', RepeatedType::class, [
                'label' => 'password',
                'type' => PasswordType::class,
                'first_options'  => ['label' => 'Mot de passe *'],
                'second_options' => ['label' => 'Confirmez le mot de passe *'],
                'invalid_message' => 'Les deux mots de passe doivent être identiques',
                'required' => false, // On veut permettre de ne pas modifier le mdp à chaque fois
                'mapped' => false,
            ])
            ->add('image', FileType::class, [
                'label' => 'Télécharger votre image de profil',
                'mapped' => false,
                'required' => false,
            ])
            ->add('description', TextareaType::class, [
                'label' => 'Quand vous étiez petit(e) vous croyiez que : ?',
                'required' => false,
            ])
            ->add('roles', ChoiceType::class, [
                "label" => "Rôles",
                'choices' => [
                    'User' => 'ROLE_USER',
                    'Modérateur' => 'ROLE_MODERATOR',
                    'Admin' => 'ROLE_ADMIN',
                ],
                // Avec ces deux options à true, on s'assure d'avoir des checkboxes
                'multiple' => true,
                'expanded' => true,
            ])
            ->add('charte', CheckboxType::class, [
                'label' => false,
                'required' => true,
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
