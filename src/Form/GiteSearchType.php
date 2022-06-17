<?php

namespace App\Form;

use App\Entity\Gite;
use App\Entity\Equipement;
use App\Entity\GiteSearch;
use App\Repository\EquipementRepository;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;

class GiteSearchType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('minSurface', IntegerType::class,[
                "required"=>false,
                "label"=> false,
                "attr" => ["placeholder" => "Surface minimum"]
            ])
            ->add('minChambres', IntegerType::class,[
                "required"=>false,
                "label"=> false,
                "attr" => ["placeholder" => "Nombre de chambres minimum"]
            ])
            ->add('minCouchage', IntegerType::class,[
                "required"=>false,
                "label"=> false,
                "attr" => ["placeholder" => "Nombre de couchages minimum"]
            ])

            ->add('equipements', EntityType::class,[
                "class" =>Equipement::class,
                "choice_label"=>"name",
                "multiple" =>"true",
                'mapped' => false,
                "label"=>false,
                "expanded"=>false
            ])



            ->add ('submit',SubmitType::class,[
                "label"=> "Rechercher",
                "attr" => ["class" => "btn-warning"]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => GiteSearch::class,
        ]);
    }


}

