<?php

namespace App\Controller\Admin;

use App\Entity\Table;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class TableCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Table::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        yield TextField::new('numberOfSettings');

    }
    
}
