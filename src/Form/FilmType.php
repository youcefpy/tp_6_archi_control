<?php

namespace App\Form;

use App\Entity\Acteur;
use App\Entity\Film;
use App\Entity\Realisateur;
use App\Entity\Utilisateur;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class FilmType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('titre')
            ->add('duree', null, [
                'widget' => 'single_text',
            ])
            ->add('annee_sortie', null, [
                'widget' => 'single_text',
            ])
            ->add('id_realisateur', EntityType::class, [
                'class' => Realisateur::class,
                'choice_label' => 'id',
            ])
            ->add('acteurs', EntityType::class, [
                'class' => Acteur::class,
                'choice_label' => 'id',
                'multiple' => true,
            ])
            ->add('utilisateurs', EntityType::class, [
                'class' => Utilisateur::class,
                'choice_label' => 'id',
                'multiple' => true,
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Film::class,
        ]);
    }
}
