<?php

namespace App\Entity;

use App\Repository\OrdersRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=OrdersRepository::class)
 */
class Orders
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\Column(type="integer")
     */
    private $amount;

    /**
     * @ORM\Column(type="datetime")
     */
    private $datetime_create;

    /**
     * @ORM\Column(type="integer")
     */
    private $id_order_status;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getAmount(): ?int
    {
        return $this->amount;
    }

    public function setAmount(int $amount): self
    {
        $this->amount = $amount;

        return $this;
    }

    public function getDatetimeCreate(): ?\DateTimeInterface
    {
        return $this->datetime_create;
    }

    public function setDatetimeCreate(\DateTimeInterface $datetime_create): self
    {
        $this->datetime_create = $datetime_create;

        return $this;
    }

    public function getIdOrderStatus(): ?int
    {
        return $this->id_order_status;
    }

    public function setIdOrderStatus(int $id_order_status): self
    {
        $this->id_order_status = $id_order_status;

        return $this;
    }
}
