<?php

namespace App\Entity;

use App\Repository\FiltersRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: FiltersRepository::class)]
class Filters
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: '0')]
    private ?string $price = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: '0')]
    private ?string $km = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: '0')]
    private ?string $dateTime = null;

    #[ORM\ManyToOne(inversedBy: 'filters')]
    private ?Product $product = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPrice(): ?string
    {
        return $this->price;
    }

    public function setPrice(string $price): static
    {
        $this->price = $price;

        return $this;
    }

    public function getKm(): ?string
    {
        return $this->km;
    }

    public function setKm(string $km): static
    {
        $this->km = $km;

        return $this;
    }

    public function getDateTime(): ?string
    {
        return $this->dateTime;
    }

    public function setDateTime(string $dateTime): static
    {
        $this->dateTime = $dateTime;

        return $this;
    }

    public function getProduct(): ?Product
    {
        return $this->product;
    }

    public function setProduct(?Product $product): static
    {
        $this->product = $product;

        return $this;
    }
}
