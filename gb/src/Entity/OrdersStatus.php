<?php

namespace App\Entity;

use App\Repository\OrdersStatusRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=OrdersStatusRepository::class)
 */
class OrdersStatus
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $orders_status_name;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getOrdersStatusName(): ?string
    {
        return $this->orders_status_name;
    }

    public function setOrdersStatusName(string $orders_status_name): self
    {
        $this->orders_status_name = $orders_status_name;

        return $this;
    }
}
