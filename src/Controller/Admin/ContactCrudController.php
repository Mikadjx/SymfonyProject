<?php

namespace App\Controller\Admin;


use App\Entity\Contact;
use FOS\CKEditorBundle\Form\Type\CKEditorType;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;



use EasyCorp\Bundle\EasyAdminBundle\Field\ArrayField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class ContactCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Contact::class;
    }

    public function configureCrud(Crud $crud): Crud
{
    return $crud
    ->setEntityLabelInPlural('Demandes de contact')
    ->setEntityLabelInSingular('Demande de contact')
     
    ->setPageTitle("index","Blog - administration des demandes de contact")

    ->setPaginatorPageSize(20)

    ->addFormTheme('@FOSCKEditor/Form/ckeditor_widget.html.twig');

}


    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id')
    
            ->hideOnForm(),

            TextField::new('FirstName'),

            TextField::new('LastName'),

            TextField::new('email')
            ->setFormTypeOption('disabled', 'disabled'),

            TextField::new('message')
            ->setFormType(CKEditorType::class)
            ->hideOnIndex(),
        ];
    }
    
}
