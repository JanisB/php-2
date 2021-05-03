<?php

namespace App\Controller;

use App\Entity\Category;
use App\Entity\Product;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class CategoryController extends AbstractController
{
    public function index() : Response
    {

        $aCategories = $this->getDoctrine()->getRepository(Category::class)->findAll();

        return $this->render('category/index.html.twig', [
            'categories' => $aCategories,
        ]);
    }

    public function getCategory($id) : Response
    {

        if (is_numeric($id) && $id > 0) {
            $aProducts = $this->getDoctrine()->getRepository(Product::class)->findBy([
                'status'      => 1,
                'category_id' => $id,
            ], [ 'title' => 'asc' ], 9);

            return $this->render('product_catalog/index.html.twig', [
                'products' => $aProducts,
            ]);
        }

        return new Response("Not found", 404);
    }
}
