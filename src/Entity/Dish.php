<?php

namespace App\Entity;

use Vich\UploadableField;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\DishRepository;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

#[ORM\Entity(repositoryClass: DishRepository::class)]
#[Vich\Uploadable]
class Dish
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id;

    #[ORM\Column(length: 255)]
    private ?string $name;

    #[ORM\Column]
    private ?float $price;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $description;

    #[ORM\Column(length: 255)]
    private ?string $file;

    #[ORM\ManyToOne(inversedBy: 'dishes')]
    private ?Category $category_id;


     // NOTE: This is not a mapped field of entity metadata, just a simple property.
     #[Vich\UploadableField(mapping: 'dishes', fileNameProperty: 'imageName', size: 'imageSize')]
     private ?File $imageFile = null;
 
     #[ORM\Column(nullable: true)]
     private ?string $imageName = null;
 
     #[ORM\Column(nullable: true)]
     private ?int $imageSize = null;
 
     #[ORM\Column(nullable: true)]
     private ?\DateTimeImmutable $updatedAt = null;

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

     public function getPrice(): ?float
     {
         return $this->price;
     }

     public function setPrice(float $price): self
     {
         $this->price = $price;

         return $this;
     }

     public function getDescription(): ?string
     {
         return $this->description;
     }

     public function setDescription(string $description): self
     {
         $this->description = $description;

         return $this;
     }



     public function getCategoryId(): ?Category
     {
         return $this->category_id;
     }

     public function setCategoryId(?Category $category_id): self
     {
         $this->category_id = $category_id;

         return $this;
     }

    public function setImageFile(?File $imageFile = null): void
    {
        $this->imageFile = $imageFile;

        if (null !== $imageFile) {
            // It is required that at least one field changes if you are using doctrine
            // otherwise the event listeners won't be called and the file is lost
            $this->updatedAt = new \DateTimeImmutable();
        }
    }

    public function getImageFile(): ?File
    {
        return $this->imageFile;
    }

    public function setImageName(?string $imageName): self
    {
        $this->imageName = $imageName;

        return $this;
    }

    public function getImageName(): ?string
    {
        return $this->imageName;
    }

    public function setImageSize(?int $imageSize): self
    {
        $this->imageSize = $imageSize;

        return $this;
    }

    public function getImageSize(): ?int
    {
        return $this->imageSize;
    }

    public function getUpdatedAt(): ?\DateTimeImmutable
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(?\DateTimeImmutable $updatedAt): self
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }  
}
