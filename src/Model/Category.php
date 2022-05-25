<?php

declare(strict_types=1);

namespace App\Model;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Category
{
    /**
     * @ORM\Id @ORM\GeneratedValue
     */
    private int $id;

    #[ORM\Column(length: 100)]
    /**
     * @ORM\Column
     */
    private string $name;

    #[ORM\Column]
    /**
     * @ORM\Column
     */
    private string $description;
    
    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    } 

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getId(): int
    {
        return $this->id;
    } 

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getDescription(): string
    {
        return $this->description;
    } 

    public function setDescription(string $description): void
    {
        $this->description = $description;
    }
}