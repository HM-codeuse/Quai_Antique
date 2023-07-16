<?php

namespace App\Controller\Admin;

use App\Entity\Dish;
use App\Entity\Menu;
use App\Entity\Slot;
use App\Entity\User;
use App\Entity\Table;
use App\Entity\Allergy;
use App\Entity\Category;
use App\Entity\Reservation;
use App\Entity\OpeningHours;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;

class DashboardController extends AbstractDashboardController
{
    #[Route('/admin', name: 'admin')]
    public function index(): Response
    {               
        return $this->render('admin/dashboard.html.twig');
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Quai Antique');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linkToDashboard('Tableau de Bord', 'fa fa-home');
        yield MenuItem::linkToCrud('Categories', 'fa-solid fa-seedling', Category::class);
        yield MenuItem::linkToCrud('Menus', 'fa-solid fa-plate-wheat', Menu::class);
        yield MenuItem::linkToCrud('Horaires', 'fa-regular fa-clock', OpeningHours::class);
        yield MenuItem::linkToCrud('Allergies', 'fa-solid fa-triangle-exclamation', Allergy::class);
        yield MenuItem::linkToCrud('Tables', 'fa-solid fa-utensils', Table::class);
        yield MenuItem::linkToCrud('Créneaux', 'fa-solid fa-clock', Slot::class);
        yield MenuItem::linkToCrud('Reservations', 'fa-solid fa-pager', Reservation::class);
        yield MenuItem::linkToCrud('Clients', 'fa-solid fa-user', User::class);
        yield MenuItem::linkToCrud('Plats', 'fa-solid fa-plate-wheat', Dish::class);
    }
}
