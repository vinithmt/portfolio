<?php namespace Company\Project\Models;

use Model;
use Illuminate\Http\Request;
/**
 * Project Model
 */
class Project extends Model
{
    /**
     * @var string The database table used by the model.
     */
    public $table = 'company_project_projects';
    public $timestamps = false; 
    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = [];

    /**
     * @var array Relations
     */ 
    public $belongsTo = [
         'works' => ['Individuart\Work\Models\Work']
    ]; 
    public static function storeWork($work){
        $project   = new static;
        $project->work_id = $work; 
        $project->save();
        $work->project = $project;
        return $project;
    }
    public static function getFromWork($work){

        if($work->project)
            return $work->project;
        $project   = new static;
        $project->work_id = $work; 
        if(isset($_POST['company_id'])){
            
            $project->save();
           
        }

         $work->project = $project;
         return $project;  
        
    }
}
