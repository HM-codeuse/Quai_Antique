<?php

namespace App\Controller\Admin;

use App\Entity\Dish;
use Vich\UploaderBundle\Form\Type\VichImageType;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\MoneyField;

use EasyCorp\Bundle\EasyAdminBundle\Field\NumberField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextareaField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class DishCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Dish::class;
    }

    public function configureFields(string $pageName): iterable
    {
        // yield from parent::configureFields($pageName);
        yield TextField::new('name');
        yield MoneyField::new('price')
            ->setCurrency('EUR');
        yield TextareaField::new('description');
       // yield TextField::new('file');

        yield AssociationField::new('category');
        yield TextareaField::new('imageFile')->setFormType(VichImageType::class)->hideOnIndex();
        yield ImageField::new('imageName')->setBasePath('/images/dishes')->hideOnForm();
    }
}
