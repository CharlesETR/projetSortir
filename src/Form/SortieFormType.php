<?php

namespace App\Form;

use App\Entity\SortieEntity;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SortieFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
           // ->add('idSortie')
            ->add('nom', options:[
                'label'=>'Nom de la sortie'
           ])
            ->add('duree',options:[
                'label'=>"Durée de l'activité"
            ])
            ->add('dateLimiteInscription',options:[
                'label'=>"Date limite des insriptions à l'activité"
            ])
            ->add('nbInscription',options:[
                'label'=>"Nombre d'inscrit"
            ])
            ->add('etat',options:[
                'label'=>"Statut de l'activite"
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => SortieEntity::class,
        ]);
    }
}
