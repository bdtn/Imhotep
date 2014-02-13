<?php

namespace Bd\ImhotepBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ProjectType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
                ->add('projectName')
                ->add('projectType','choice', array(
                     'choices' => array('0' => 'Interne', '1' => 'Externe' ) ,
                     'expanded' => true
                     ))
                ->add('company', 'entity', array(
                    'class' => 'BdImhotepBundle:Company',
                    'property' => 'name',
                    
                 ))
              
                ->add('departement', 'entity', array(
                'class' => 'BdImhotepBundle:Departement',
                'property' => 'name',
                
                 ))
                  ->add('groupe', 'entity', array(
                    'class' => 'BdImhotepBundle:Groupe',
                    'property' => 'name',
                    
                 ))
                  ->add('user', 'entity', array(
                    'class' => 'BdUserBundle:User',
                    'property' => 'username',
                    
                 ))
                    ->add('client', 'entity', array(
                    'class' => 'BdImhotepBundle:Client',
                    'property' => 'name',
                    
                 ))
                 ->add('userClient', 'entity', array(
                    'class' => 'BdUserBundle:User',
                    'property' => 'username',
                    
                 ))
                  ->add('responsableprojet', 'entity', array(
                    'class' => 'BdUserBundle:User',
                    'property' => 'username',
                    
                 ))
                 
                ->add('projectDescription')            
                //->add('createdAt')
               // ->add('updatedAt')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Bd\ImhotepBundle\Entity\Project'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'bd_imhotepbundle_project';
    }
}
