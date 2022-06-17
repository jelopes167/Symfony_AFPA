<?php

namespace App\Form;

use App\Entity\Gite;
use App\Entity\Equipement;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\NumberType;

class GiteType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            
            ->add('nom')
            ->add('descriptiion')
            ->add('surface')
            ->add('chambres')
            ->add('couchage')
            ->add('equipements', EntityType::class,[
                "class" =>Equipement::class,
                "choice_label"=>"name",
                "multiple" =>"true",
                'mapped' => false,
                "label"=>false,
                "expanded"=>false
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Gite::class,
        ]);
    }
}
