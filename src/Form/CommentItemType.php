<?php

namespace App\Form;

use App\Entity\CommentItem;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\File;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;

class CommentItemType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('content', TextareaType::class, [
                'label' => 'Ajouter un commentaire:',
                'constraints' => [
                    new NotBlank([
                        'message' => 'Ce champs ne peut être vide',
                    ]),
                    new Length([
                       'max' => 500,
                       'maxMessage' => 'Le message doit contenir {{ limit }} caractères au maximum',
                    ]),
                ],
                'attr'  => [
                    'class' => 'form-control'
                ]
            ])
            //! ->add('user_rate')
            // j'utilise pas parent directement, je vais faire un parentid caché, pour 
            //stocker l'id parent du commentaire auquel on répond
            //et je mets un mapped a false pour lui dire que ce champs n'existe pas dans ma bdd
            ->add('parentid', HiddenType::class, [
                'mapped' => false,
            ])
            ->add('image', FileType::class, [
                'label' => 'Joindre une image (jpg, jpeg, png acceptés)',
                'required' => false,
                'constraints' => [
                    new File([
                         'maxSize' => '2M',
                         'mimeTypes' => [
                             'image/png',
                             'image/x-png',
                             'image/jpg',
                             'image/x-jpg',
                             'image/jpeg',
                             'image/x-jpeg',
                         ],
                         'mimeTypesMessage' => 'Fichiers acceptés: jpg, jpeg, et png',
                   ]),
            ]
            ])
            ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => CommentItem::class,
        ]);
    }
}
