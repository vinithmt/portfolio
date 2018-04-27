<?php namespace Company\Project;

use Backend;
use Individuart\Work\Controllers\Works as WorksController;
use Individuart\Work\Models\Work as WorksModel;
use Octo\Timeline\Models\Entries as CompanyModel;
use Company\Project\Models\Project as ProjectModel;
use System\Classes\PluginBase;
use Illuminate\Http\Request;

use Event;
/**
 * Project Plugin Information File
 */
class Plugin extends PluginBase
{
    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'Project',
            'description' => 'No description provided yet...',
            'author'      => 'Company',
            'icon'        => 'icon-leaf',
        ];
    }

    /**
     * Register method, called when the plugin is first registered.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Boot method, called right before the request route.
     *
     * @return array
     */
      public function boot( )
    { 
        WorksModel::extend(function ($model) {
            $model->hasOne['project'] = ['Company\Project\Models\Project' ];

        }); 
        WorksController::extendFormFields(function ($form, $model, $context) {             
             
            if (!$model instanceof WorksModel) {
                return;
            }
            
            if (!$model->exists ) {
                return;
            }    
            // if ($form->getContext() != 'update' && $form->getContext() != 'preview') {
            //     return;
            // } 
            ProjectModel::getFromWork($model);     

             $form->addFields([
                'project[company_id]' => [
                    'label'   => 'Company',
                    'type'    => 'dropdown',
                    'options' => $this->getCompanyAsOptions(),
                ],
            ]);     
        });

    }


    public function getCompanyAsOptions()
    { 
        $companies    = CompanyModel::all();
        $companyArray = [];
        foreach ($companies as $company) {

            $companyArray =   $companyArray+array($company->id => $company->title); 
        }

        return $companyArray;
    }

    /**
     * Registers any front-end components implemented in this plugin.
     *
     * @return array
     */
    public function registerComponents()
    {
        return []; // Remove this line to activate

        return [
            'Company\Project\Components\MyComponent' => 'myComponent',
        ];
    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {
        return []; // Remove this line to activate

        return [
            'company.project.some_permission' => [
                'tab'   => 'Project',
                'label' => 'Some permission',
            ],
        ];
    }

    /**
     * Registers back-end navigation items for this plugin.
     *
     * @return array
     */
    public function registerNavigation()
    {
        return []; // Remove this line to activate

        return [
            'project' => [
                'label'       => 'Project',
                'url'         => Backend::url('company/project/mycontroller'),
                'icon'        => 'icon-leaf',
                'permissions' => ['company.project.*'],
                'order'       => 500,
            ],
        ];
    }
}
