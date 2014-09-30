<?php

namespace Prueba\pruebaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class VendedorType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nombre')            
            ->add('amaterno', 'text', array(

                    'mapped' => false,
                    'label' => 'Apellido Materno: '

                )
            )
            ->add('apaterno', 'text', array(
                    
                    'mapped' => false,
                    'label' => 'Apellido Paterno: '

                )
            )
            ->add('save', 'submit', array(

                    'label' => 'Guardar'        

                )
            );
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Prueba\pruebaBundle\Entity\Vendedor'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return '';
    }
}
