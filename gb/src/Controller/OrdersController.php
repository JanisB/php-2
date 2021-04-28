<?php

namespace App\Controller;

use App\Entity\Orders;
use App\Entity\OrdersStatus;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class OrdersController extends AbstractController
{
    /**
     * @Route("/orders", name="orders")
     */
    public function index(): Response
    {

        $aOrders = $this->getDoctrine()->getRepository(Orders::class)->findBy([], [ 'name' => 'desc' ]);

        $aOrdersStatus = $this->getDoctrine()->getRepository(OrdersStatus::class)->findAll();

        return $this->render('orders/index.html.twig', [
            'orders' => $aOrders,
            'status' => $aOrdersStatus,
        ]);
    }

    
}
