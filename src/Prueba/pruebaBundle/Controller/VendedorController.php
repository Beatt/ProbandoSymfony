<?php

namespace Prueba\pruebaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

use Prueba\pruebaBundle\Entity\Vendedor;
use Prueba\pruebaBundle\Form\VendedorType;

/**
 * @Route("/vendedor")
 */
class VendedorController extends Controller
{
    /**
     * @Route("/")
     * @Template()
     */
    /*public function indexAction(Request $request)
    {	

    	$vendedor = new Vendedor();
    	$form = $this->createForm(new VendedorType(), $vendedor);    	
    	$form->handleRequest($request);

    	if($form->isValid()) {

    		$vendedor->setApellidos(
    			$form->get('apaterno')->getData() . ' ' . $form->get('amaterno')->getData()
    		);

    		$em = $this->getDoctrine()->getManager();
    		$em->persist($vendedor);
    		$em->flush();

    		return $this->redirect($this->generateUrl('success'));    

    	}

        return array('form' => $form->createView());    
    }*/


    /**
     * @Route("/success/", name="success")
     * @Template("PruebapruebaBundle:Vendedor:success.html.twig")
     */
    public function success()
    {
    	
        //$em = $this->getDoctrine()->getManager();
        /*$repository = $this->getDoctrine()->getRepository('PruebapruebaBundle:Vendedor');        
        $vendedores = $repository->findAll();*/

        /*$repository = $this->getDoctrine()->getRepository('PruebapruebaBundle:Poliza');
        $polizas = $repository->innerJoin('symfony2.cliente', 'c');*/

        $repository = $this->getDoctrine()
            ->getRepository('PruebapruebaBundle:Poliza');
 
        $query = $repository->createQueryBuilder('p')
            ->select(array('p', 'c'))
            ->innerJoin('p.idc', 'c')                                                
            ->getQuery();

        /*echo $query->getDql() . ' <br/>';
        echo $query->getSQL();*/

        //$polizas = $query->getArrayResult();
        $polizas = $query->getResult();     

        //$clientes = $polizas->getImporte();        
        //$algo = $polizas[0]->getClientes()->getNombres();

        /*$clientes = [];
        $clientes = $polizas->getClientes();*/

        //echo $algo;


        //return array('vendedores' => $vendedores);
        //return array('polizas' => $polizas);
        return array('resultado' => $polizas);
    	
    }

}
