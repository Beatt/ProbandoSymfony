<?php

namespace Prueba\pruebaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Length;

class CalculadoraType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nombre')
            ->add('pers_apaterno', 'text', array(

                    'constraints' => array(

                        new NotBlank(array('message' => 'Debe contener algo'))

                    ),
                    'required' => false,
                    'label' => 'Apellido Paterno: '

                )
            )
            ->add('pers_amaterno', 'text', array(

                    'constraints' => array(

                            new Length(array(

                                'min' => 4

                            )
                        )
                    )
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
            'data_class' => 'Prueba\pruebaBundle\Entity\Calculadora'
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
