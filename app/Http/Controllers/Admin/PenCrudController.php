<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\PenRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class PenCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class PenCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    public function setup()
    {
        $this->crud->setModel('App\Models\Pen');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/pen');
        $this->crud->setEntityNameStrings('pen', 'pens');
    }

    protected function setupListOperation()
    {
        // TODO: remove setFromDb() and manually define Columns, maybe Filters
        $this->crud->setFromDb();
    }

    protected function setupCreateOperation()
    {
        $this->crud->setValidation(PenRequest::class);

        // TODO: remove setFromDb() and manually define Fields
        $this->crud->setFromDb();
    }

    protected function setupUpdateOperation()
    {
        // $this->crud->addField([
        //     'type' => 'select2_multiple',
        //     'name' => 'articles', // the relationship name in your Model
        //     'entity' => 'articles', // the relationship name in your Model
        //     'attribute' => 'title', // attribute on Article that is shown to admin
        //     'pivot' => true, // on create&update, do you need to add/delete pivot table entries?
        // ]);
        $this->setupCreateOperation();
    }
}
