<?php

namespace App\Controller\Admin;

use App\Entity\User;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class UserCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return User::class;
    }
public function configureCrud(Crud $crud): Crud
{
    return $crud
    ->setEntityLabelInPlural('Utilisateurs')
    ->setEntityLabelInSingular('Utilisateur')
     
    ->setPageTitle("index","Blog - administration des utilisateurs")

    ->setPaginatorPageSize(10);

}
   
   public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id'),

            TextField::new('FirstName'),

            TextField::new('LastName'),

            TextField::new('email'),

            ArrayField::new('roles'),
        ];
   } 

}
