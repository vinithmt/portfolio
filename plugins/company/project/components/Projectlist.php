<?php namespace Company\Project\Components;

use Cms\Classes\ComponentBase;
use Individuart\Work\Models\Work;  
use Company\Project\Models\Project;
use Individuart\Work\Models\Category; 
use Octo\Timeline\Models\Entries;
use Db; 
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
        $companyProjects = array();
        $company =  Entries::all() ;
        
        foreach ($company as $key => $value) {
             $work =   DB::table('individuart_work_works')
            ->join('company_project_projects', 'company_project_projects.work_id', '=', 'individuart_work_works.id') 
            ->select('individuart_work_works.*')
            ->where('company_project_projects.company_id',$value->id)
            ->get(); 
            $company[$key] = array_merge((array)$company[$key], array('works' => $work)) ;
            
        }

        $companyProjects['company'] =  $company ;
    //  print_r($companyProjects);
      
     	return  $companyProjects ;
 
    }

    public $projectlist;

}