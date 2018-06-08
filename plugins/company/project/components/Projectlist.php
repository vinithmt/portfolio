<?php namespace Company\Project\Components;

use Cms\Classes\ComponentBase;
use Individuart\Work\Models\Work;  
use Company\Project\Models\Project;

use Individuart\Work\Models\Category;
use Str;

class Projectlist extends ComponentBase
{
	public function componentDetails()
    {
        return [
            'name'        => 'Company Project List Component',
            'description' => 'Company Project list according to the company'
        ];
    }



    public function onRun()
    {
         $this->projectlist = $this->loadCompanyProjects();

    }

 
    protected  function loadcompanyProjects(){
     	   $companyProjects = Project::select('company_id')->distinct()->get();
     	 //  dump($companyProjects);
     	 return  $companyProjects ;
 
    }

    public $projectlist;

}