<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ProductoRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class ProductoCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class ProductoCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    public function setup()
    {
        $this->crud->setModel('App\Models\Producto');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/producto');
        $this->crud->setEntityNameStrings('producto', 'productos');
    }

    protected function setupListOperation()
    {
        // TODO: remove setFromDb() and manually define Columns, maybe Filters
        //$this->crud->setFromDb();
        $this->crud->addColumn(
            [
                'name' => 'Proveedor.nombre_proveedor', // The db column name
                'label' => "Proveedor", // Table column heading
            ]
        );
        $this->crud->addColumn(
            [   // Text
                'name' => 'nombre_producto',
                'label' => "Nombre",
                'type' => 'text',
            ]
        );

        $this->crud->addColumn(
            [   // Text
                'name' => 'precio_producto',
                'label' => "Precio",
                'type' => 'text',
            ]
        );

        $this->crud->addColumn(
            [   // Number
                'name' => 'stock',
                'label' => 'Stock',
                'type' => 'number',
                // optionals
            ]
        );

        $this->crud->addColumn(
            [   // Text
                'name' => 'tipo_producto',
                'label' => "Tipo",
                'type' => 'text',
            ]
        );

        $this->crud->addColumn(
            [
                'name' => 'imagen_producto', // The db column name
                'label' => "Foto", // Table column heading
                'type' => 'image',
                 // 'prefix' => 'folder/subfolder/',
                 // image from a different disk (like s3 bucket)
                 // 'disk' => 'disk-name', 
                 // optional width/height if 25px is not ok with you
                 'height' => '100px',
                 'width' => '100px',
             ]
        );
    }

    protected function setupCreateOperation()
    {
        $this->crud->setValidation(ProductoRequest::class);

        // TODO: remove setFromDb() and manually define Fields
        //$this->crud->setFromDb();
        $this->crud->addField(
            [
                'name' => 'proveedor_id',
                'labe' => 'Proveedor',
                'type' => 'select2',
                'entity' => 'Proveedor', 
                'attribute' => 'nombre_proveedor',
            ]
        );
        $this->crud->addField(
            [   // Text
                'name' => 'nombre_producto',
                'label' => "Nombre",
                'type' => 'text',
            ]
        );

        $this->crud->addField(
            [   // Number
                'name' => 'precio_producto',
                'label' => 'Precio',
                'type' => 'number',
                // optionals
                'attributes' => ["step" => "0.01",  'min' => '1'], // allow decimals
                'prefix' => "#",
                //'suffix' => ".00",
            ]
        );

        $this->crud->addField(
            [   // Number
                'name' => 'stock',
                'label' => 'Stock',
                'type' => 'number',
                // optionals
                'attributes' => ["step" => "1",  'min' => '1',
                'max' => '99',], // allow decimals
                'prefix' => "#",
                //'suffix' => ".00",
            ]
        );

        $this->crud->addField(
            [   // Text
                'name' => 'tipo_producto',
                'label' => "Tipo",
                'type' => 'text',
            ]
        );

        $this->crud->addField(
            [
                'label' => "Foto",
                'name' => "image",
                'type' => 'image',
                'upload' => true,
                'crop' => false, // set to true to allow cropping, false to disable
                'aspect_ratio' => 1, // ommit or set to 0 to allow any aspect ratio
                'disk' => 'publicSystem', // in case you need to show images from a different disk
                'prefix' => 'public/uploads/images/products/' // in case your db value is only the file name (no path), you can use this to prepend your path to the image src (in HTML), before it's shown to the user;
            ]
        );

    }

    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
}
