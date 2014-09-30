<?php

namespace Prueba\pruebaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

use Prueba\pruebaBundle\Entity\Calculadora;
use Symfony\Component\HttpFoundation\Request;
use Prueba\pruebaBundle\Form\CalculadoraType;


class CalculadoraController extends Controller
{

	/**
	 * @Route("/suma/{num1}/{num2}")
	 */
	public function indexAction($num1, $num2 = 2) // Si no se le pasa valor al segundo parametro... 
	{

		$resultado = $num1 + $num2;
		$tipoOperacion = "suma";
		return $this->render("PruebapruebaBundle:Calculadora:index.html.twig",
			array(
				"resultado" => $resultado,
				"tipoOperacion" => $tipoOperacion
			)
		);

	}//Fin indexAction


    /**
     * @Route("/form/")
     */
    public function enviandoFormulario(Request $request) 
    {

    	// Creamos una instancia de nuestra entidad
    	/*$calculadora = new Calculadora();
    	$calculadora->setApaterno("Ramirez");
    	$calculadora->setNombre("Juan");*/

    	/* Vincula el objeto con el formulario...
    	$form = $this->createFormBuilder($calculadora)
    		->add("nombre", 'text')
    		->add('save', 'submit', array(
    				'label' => 'Creando una tabla'
    			)
    		)
    		->getForm();*/	

    	// Crea formulario sin 
    	$form = $this->createFormBuilder()    		
    		->add("nombre", 'text', array('label' => 'Nombre'))
    		->add('apaterno', 'text', array('label' => 'Apellido Paterno'))
    		->add('save', 'submit', array(
    				'label' => 'Creando una tabla'
    			)
    		)    	
    		->getForm();


    	$form->handleRequest($request);

    	if($form->isValid()) {


    		$cal = new Calculadora();
    		$cal->setApaterno($form->get('apaterno')->getData());
    		$cal->setNombre($form->get('nombre')->getData());

    		$em = $this->getDoctrine()->getManager();
    		$em->persist($cal);
    		$em->flush();

    		/*$form2 = $this->createFormBuilder($cal)
    			->add('nombre', 'text')
    			->add('save', 'submit', array(
    				'label' => 'Modificar'
    			))
    			->getForm();

    		return $this->render("PruebapruebaBundle:Calculadora:success.html.twig",
    			array('form' => $form2->createView()));*/

    		return $this->redirect($this->generateUrl('save',
    			array(
    				"id" => $cal->getId()
    			)
    		));   		

    	}


    	return $this->render("PruebapruebaBundle:Calculadora:form.html.twig",
    		array(
    			'form' => $form->createView()
    		)
    	);

    }


    /**
     * @Route("/save/", name="save")     
     */
    public function salvar(Request $request) 
    {

    	$id = $request->get('id');

    	$cal = $this->getDoctrine()
    		->getRepository('PruebapruebaBundle:Calculadora')
    		->find($id);
    	
    	if(!$cal) {
    		throw $this->createNotFoundException(
    			"No se encuentra el producto con el id " . $id
    		);
    	}

    	return $this->render("PruebapruebaBundle:Calculadora:success.html.twig",
    		array('calculadoras' => $cal)
    	);

    }


    /**
     * @Route("/mostrar/{id}")
     */
    public function mostrarDatos($id) 
    {


    	$cal = $this->getDoctrine()
    		->getRepository('PruebapruebaBundle:Calculadora')
    		->findAll();
    	
    	if(!$cal) {
    		throw $this->createNotFoundException(
    			"No se encuentra el producto con el id " . $id
    		);
    	}

    	return $this->render("PruebapruebaBundle:Calculadora:success.html.twig",
    		array('calculadoras' => $cal)
    	);

    }

    /**
     * @Route("/form2/")
     * @Template("PruebapruebaBundle:Calculadora:form.html.twig")
     */
    public function formularioNuevo(Request $request) {


        $cal = new Calculadora();

        $form = $this->createForm(new CalculadoraType(), $cal);
        $form->handleRequest($request);

        if($form->isValid()) {

            $em = $this->getDoctrine()->getManager();
            $em->persist($cal);
            $em->flush();

            return $this->redirect($this->generateUrl('_probando'));    

        }   
            
        return array('form' => $form->createView());

    }


    /**
     * @Route("/probando/", name="_probando")
     * @Template("PruebapruebaBundle:Calculadora:probandoAjax.html.twig")
     */
    public function probandoAjax() {
        
        return array();
    }


}//Fin CalculadoraController
