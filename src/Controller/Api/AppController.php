<?php

namespace App\Controller\Api;

class AppController extends Controller
{
    use \Crud\Controller\ControllerTrait;
    public function initialize(): void
    {
        $this->loadComponent('Crud.Crud', [
            'actions' => [
                'Crud.Index',
                'Crud.View'
            ]
        ]);

        $this->Crud->addListener('Crud.Api');
        $this->Crud->addListener('Crud.ApiPagination');
    }
}