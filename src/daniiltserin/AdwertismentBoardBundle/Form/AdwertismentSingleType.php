<?php

namespace daniiltserin\AdwertismentBoardBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AdwertismentSingleType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('authorId')
            ->add('header')
            ->add('price')
            ->add('text')
            ->add('city')
            ->add('street')
            ->add('map')
            ->add('rooms')
            ->add('phone')
            ->add('mark')
            ->add('floor')
            ->add('photo')
            ->add('qGender')
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'daniiltserin\AdwertismentBoardBundle\Entity\AdwertismentSingle'
        ));
    }
}
