<?php

namespace UEO\ChoixBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ParcoursType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('intitule')
            ->add('nbOptions')
            ->add('dateDebutChoixS1')
            ->add('dateFinChoixS1')
            ->add('dateDebutChoix2')
            ->add('dateFinChoixS2')
            ->add('intituleCourt')
            ->add('anneeFormation')
            ->add('emailResponsable')
            ->add('specialite')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'UEO\ChoixBundle\Entity\Parcours'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'ueo_choixbundle_parcours';
    }
}
