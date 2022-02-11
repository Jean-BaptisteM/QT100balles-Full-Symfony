<?php

namespace App\Form;

use App\Entity\Media;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\UrlType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Range;
use Symfony\Component\Validator\Constraints\Url;

class MediaType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('title', TextType::class, [
                'label' => 'Titre *',
                'constraints' => [
                    new NotBlank([
                        'message' => 'Ce champ ne peut être vide',
                    ]),
                ],
            ])
            ->add('original_title', TextType::class, [
                'label' => 'Titre Original',
                'required' => false,
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
            ->add('duration', IntegerType::class, [
                'label' => 'Durée en min',
                'required' => false,
                'constraints' => [
                    new Range([
                        'min' => 30,
                        'max' => 320,
                    ]),
                ],
                'attr' => [
                    'min' => 30,
                    'max' => 320,
                ]
            ])
            ->add('nb_season', IntegerType::class, [
                'label' => 'Nombre de saisons',
                'required' => false,
                'constraints' => [
                    new Range([
                        'min' => 0,
                        'max' => 200,
                    ]),
                ],
                'attr' => [
                    'min' => 0,
                    'max' => 200,
                ]
            ])
            ->add('nb_episode', IntegerType::class, [
                'label' => 'Nombre d\'épisodes',
                'required' => false,
                'constraints' => [
                    new Range([
                        'min' => 0,
                        'max' => 1000,
                    ]),
                ],
                'attr' => [
                    'min' => 0,
                    'max' => 1000,
                ]
            ])
            ->add('duration_episode', IntegerType::class, [
                'label' => 'Durée d\'un épisode',
                'required' => false,
                'constraints' => [
                    new Range([
                        'min' => 0,
                        'max' => 200,
                    ]),
                ],
                'attr' => [
                    'min' => 0,
                    'max' => 200,
                ]
            ])
            ->add('image', UrlType::class, [
                'label' => 'URL de l\'image',
                'required' => false,
                'constraints' => [
                    new Url(),
                ]
            ])
            ->add('preface', TextareaType::class, [
                'label' => 'Préface max 300 caractères',
                'required' => false,
                'constraints' => [
                    new Length([
                        'max' => 300
                    ]),
                ],
            ])
            ->add('synopsis', TextareaType::class, [
                'label' => 'Synopsis max 300 caractères',
                'required' => false,
                'constraints' => [
                    new Length([
                        'max' => 500
                    ]),
                ],
            ])
            ->add('summary', TextareaType::class, [
                'label' => 'Résumé max 2500 caractères *',
                'constraints' => [
                    new Length([
                        'max' => 5000
                    ]),
                    new NotBlank(),
                ],
            ])
            ->add('anecdote', TextareaType::class, [
                'label' => 'Anecdote max 500 caractères',
                'required' => false,
                'constraints' => [
                    new Length([
                        'max' => 500
                    ]),
                ],
            ])
            ->add('trailer', UrlType::class, [
                'label' => 'URL de la bande annonce',
                'required' => false,
                'constraints' => [
                    new Url(),
                ]
            ])
            ->add('types', null, [
                'label' => 'Genre',
                'required' => false,
            ])
            ->add('media_categories', null, [
                'label' => 'Catégorie *',
                'required' => true,
                'multiple' => false,
                'expanded' => true,
            ])
            ->add('persons', null, [
                'label' => 'Personnes en rapport avec le support',
                'required' => false,
                'multiple' => true,
            ])
            // ->add('users')
            // ->add('user')
            // ->add('created_at')
            // ->add('updated_at')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Media::class,
        ]);
    }
}
