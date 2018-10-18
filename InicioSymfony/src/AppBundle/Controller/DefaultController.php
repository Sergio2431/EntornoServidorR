<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use AppBundle\Enity\Producto;


class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }
    /**
     * @Route("/contactar/", name="contactar")
     */
    public function contactarAction(Request $request)
    {
         $number = random_int(0, 100);
    
        return new Response(
                '<html><body>Lucky number: '.$number.'</body></html>'
            );
   
     }
     /**
     * @Route("/yo/", name="yo")
     */
    public function yoAction(Request $request)
    {
        return $this->render('sergio/sergio.html.twig');
    }
    /**
     * @Route("/producto/", name="producto")
     */
    public function productoAction(Request $request)
    {
        $repository = $this->getDoctrine()->getRepository(Producto::class);
        $products = $repository->findAll();
        return $this->render('sergio/productos.html.twig',array(productos));
    }
}
