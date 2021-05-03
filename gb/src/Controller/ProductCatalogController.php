<?php

namespace App\Controller;

use App\Entity\Product;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class ProductCatalogController extends AbstractController
{

    public function index() : Response
    {

        // get first 6 products

        $aProducts = $this->getDoctrine()->getRepository(Product::class)->findBy([ 'status' => 1 ], [], 6);

        return $this->render('product_catalog/index.html.twig', [
            'products' => $aProducts,
        ]);
    }

    public function getCatalog($id) : Response
    {

        if (is_numeric($id) && $id > 0) {
            $aProducts = $this->getDoctrine()->getRepository(Product::class)->findBy([
                'status'      => 1,
                'id' => $id,
            ], [ 'title' => 'asc' ]);

            return $this->render('product_catalog/index.html.twig', [
                'products' => $aProducts,
            ]);
        }

        return new Response("Not found", 404);
    }
}
