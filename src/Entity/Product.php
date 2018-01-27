<?php

namespace App\Entity;


use DateTime;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ProductRepository")
 * @ORM\Table(name="product")
 */
class Product
{
    /**
     * @var int
     *
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=75)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(type="text", name="description"))
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(type="string"))
     */
    private $brands;

    /**
     * @var string
     *
     * @ORM\Column(type="datetime", name="posted_at"))
     */
    private $date;


    /**
     * @return int
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param string $name
     *
     * @return Product
     */
    public function setName(string $name): Product
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return (string)$this->description;
    }

    /**
     * @param string $description
     *
     * @return Product
     */
    public function setDescription(string $description): Product
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @var DateTime $date
     *
     * @return Product
     */
    public function setDate(DateTime $date): Product
    {
        $this->$date = $date->format('Y-m-d');

        return $this;
    }

    /**
     * @return string
     */
    public function getBrands(): string
    {
        return (string)$this->brands;
    }

    /**
     * @param string $brands
     *
     * @return Product
     */
    public function setBrands(string $brands): Product
    {
        $this->brands = $brands;
        return $this;
    }
}
