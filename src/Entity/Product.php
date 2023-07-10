<?php

namespace App\Entity;

use App\Repository\ProductRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ProductRepository::class)]
class Product
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $title = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: '0')]
    private ?string $price = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: '0')]
    private ?string $dateTime = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: '0')]
    private ?string $km = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $description = null;

    #[ORM\ManyToOne(inversedBy: 'products')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Employee $user = null;

    #[ORM\OneToMany(mappedBy: 'product', targetEntity: Filters::class)]
    private Collection $filters;

    public function __construct()
    {
        $this->filters = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): static
    {
        $this->title = $title;

        return $this;
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

    public function getDateTime(): ?string
    {
        return $this->dateTime;
    }

    public function setDateTime(string $dateTime): static
    {
        $this->dateTime = $dateTime;

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

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): static
    {
        $this->description = $description;

        return $this;
    }

    public function getUser(): ?Employee
    {
        return $this->user;
    }

    public function setUser(?Employee $user): static
    {
        $this->user = $user;

        return $this;
    }

    /**
     * @return Collection<int, Filters>
     */
    public function getFilters(): Collection
    {
        return $this->filters;
    }

    public function addFilter(Filters $filter): static
    {
        if (!$this->filters->contains($filter)) {
            $this->filters->add($filter);
            $filter->setProduct($this);
        }

        return $this;
    }

    public function removeFilter(Filters $filter): static
    {
        if ($this->filters->removeElement($filter)) {
            // set the owning side to null (unless already changed)
            if ($filter->getProduct() === $this) {
                $filter->setProduct(null);
            }
        }

        return $this;
    }
}
