<?php

namespace UEO\ChoixBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ModuleType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('intitule')
            ->add('semestre')
            ->add('contenu')
            ->add('nbInscrits')
            ->add('nbPlaces')
            ->add('professeur1')
            ->add('professeur2')
            ->add('professeur3')
            ->add('professeur4')
            ->add('professeur5')
            ->add('professeur6')
            ->add('professeur7')
            ->add('professeur8')
            ->add('professeur9')
            ->add('professeur10')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'UEO\ChoixBundle\Entity\Module'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'ueo_choixbundle_module';
    }
}
