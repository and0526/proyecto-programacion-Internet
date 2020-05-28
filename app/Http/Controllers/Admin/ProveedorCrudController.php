<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ProveedorRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class ProveedorCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class ProveedorCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    public function setup()
    {
        $this->crud->setModel('App\Models\Proveedor');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/proveedor');
        $this->crud->setEntityNameStrings('proveedor', 'Proveedores');
    }

    protected function setupListOperation()
    {
        // TODO: remove setFromDb() and manually define Columns, maybe Filters
        //$this->crud->setFromDb();
        $this->crud->addColumn(
            [   // Text
                'name' => 'nombre_proveedor',
                'label' => "Nombre",
                'type' => 'text',
            ]
        );

        $this->crud->addColumn(
            [   // Text
                'name' => 'telefono_proveedor',
                'label' => "Telefono",
                'type' => 'text',
            ]
        );

        $this->crud->addColumn(
            [   // Text
                'name' => 'direccion_proveedor',
                'label' => "Direccion",
                'type' => 'text',
            ]
        );
    }

    protected function setupCreateOperation()
    {
        $this->crud->setValidation(ProveedorRequest::class);

        // TODO: remove setFromDb() and manually define Fields
        //$this->crud->setFromDb();
        $this->crud->addField(
            [   // Text
                'name' => 'nombre_proveedor',
                'label' => "Nombre",
                'type' => 'text',
            ]
        );

        $this->crud->addField(
            [   // Text
                'name' => 'telefono_proveedor',
                'label' => "Telefono",
                'type' => 'text',
            ]
        );

        $this->crud->addField(
            [   // Address
                'name' => 'direccion_proveedor',
                'label' => 'Direccion',
                'type' => 'address_algolia',
                // optional
                'store_as_json' => false
            ]
        );
    }

    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
}
