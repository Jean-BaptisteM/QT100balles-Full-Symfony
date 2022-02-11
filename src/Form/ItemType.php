<?php

namespace App\Form;

use App\Entity\Item;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\UrlType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Range;
use Symfony\Component\Validator\Constraints\Url;

class ItemType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name', TextType::class, [
                'label' => 'Nom *',
                'constraints' => [
                    new NotBlank([
                        'message' => 'Ce champ ne peut être vide',
                    ]),
                ],
            ])
            ->add('year', IntegerType::class, [
                'label' => 'Année entre 1980 et 1999 *',
                'constraints' => [
                    new NotBlank([
                        'message' => 'Ce champ ne peut être vide',
                    ]),
                    new Range([
                        'min' => 1980,
                        'max' => 1999,
                    ]),
                ],
                'attr' => [
                    'min' => 1980,
                    'max' => 1999,
                ]
            ])
            // ->add('image', TextType::class, [
            //     'label' => 'Image',
            //     'required' => false,
            //     'constraints' => [
            //         new Length([
            //             'max' => 50,
            //             'maxMessage' => 'Le nom de votre image ne doit pas dépasser 50 caractères',
            //         ]),
            //     ],
            // ])
            ->add('image', FileType::class, [
                'label' => 'Image',
                'mapped' => false,
                'required' => false,
            ])
            ->add('preface', TextareaType::class, [
                'label' => 'Préface max 2000 caractères *',
                'required' => false,
                'constraints' => [
                    new NotBlank([
                        'message' => 'Ce champ ne peut être vide',
                    ]),
                    new Length([
                        'max' => 2000
                    ]),
                ],
            ])
            ->add('video', UrlType::class, [
                'label' => 'URL de la publicité',
                'required' => false,
                'constraints' => [
                    new Url(),
                ]
            ])
            ->add('item_categories', null, [
                'label' => 'Catégorie *',
                'required' => true,
                'multiple' => false,
                'expanded' => true,
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Item::class,
        ]);
    }
}
