<?php

namespace App\Controller\Admin;

use App\Entity\Guest;
use EasyCorp\Bundle\EasyAdminBundle\Field\NumberField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class GuestCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Guest::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        yield NumberField::new('ID');
        yield NumberField::new('numberOfSettings');
        // yield from parent::configureFields($pageName);

    }
    
}
