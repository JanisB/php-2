<?php

namespace App\Controller;

use App\Entity\Product;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class ProductCatalogController extends AbstractController
{

    public function index() : Response
    {

        // get first 10 products

        $aProducts = $this->getDoctrine()->getRepository(Product::class)->findBy([ 'status' => 1 ], [], 9);

        return $this->render('product_catalog/index.html.twig', [
            'products' => $aProducts,
        ]);
    }
}
