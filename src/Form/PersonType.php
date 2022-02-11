<?php

namespace App\Form;

use App\Entity\Person;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\UrlType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Url;

class PersonType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('firstname', TextType::class, [
                'label' => 'Nom complet ou Pseudo *',
                'constraints' => [
                    new NotBlank([
                        'message' => 'Ce champ ne peut être vide',
                    ]),
                ],
            ])
            // ->add('lastname', TextType::class, [
            //     'label' => 'Nom',
            //     'required' => false,
            // ])
            ->add('birthdate', DateType::class, [
                'label' => 'Date de naissance',
                'widget' => 'single_text',
                'required' => false,
            ])
            ->add('nationality', TextType::class, [
                'label' => 'Nationalité',
                'required' => false,
            ])
            ->add('image', UrlType::class, [
                'label' => 'URL de l\'image',
                'required' => false,
                'constraints' => [
                    new Url(),
                ]
            ])
            ->add('category', ChoiceType::class, [
                'label' => 'Acteur, Réalisateur ou Animateur? *',
                'choices' => [
                    'Acteur' => 'Acteur',
                    'Réalisateur' => 'Réalisateur',
                    'Animateur' => 'Animateur',
                ],
                'required' => true,
                'multiple' => false,
                'expanded' => true,
            ])
            ->add('medias', null, [
                'label' => 'Médias en rapport avec la personne',
                'required' => false,
                'multiple' => true,
            ])
            // ->add('created_at')
            // ->add('updated_at')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Person::class,
        ]);
    }
}
