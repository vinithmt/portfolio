<?php namespace Individuart\Work\Components;

use Cms\Classes\ComponentBase;
use Individuart\Work\Models\Work;
use Individuart\Work\Models\Category;
use Str;

class Categorylist extends ComponentBase
{

    public function componentDetails()
    {
        return [
            'name'        => 'Categorylist Component',
            'description' => 'individuart.work::lang.backend.categorylist_description'
        ];
    }

    public function defineProperties()
    {
        return [

        ];
    }

    public function onRun()
    {
        $this->addJs('assets/js/work.min.js');
        $this->addCss('assets/css/work.min.css');

        $this->addCss('https://fonts.googleapis.com/css?family=Open+Sans:400,700&subset=latin,latin-ext');
        $this->addCss('https://fonts.googleapis.com/css?family=Josefin+Sans:400,300,300italic,400italic,700,700italic');
    }


  /*  public function works(){
        $categories= Category::published()->orderBy('sort_order','asc')->get(); 
        return $category;
    }
*/
    public function categories(){
        $categories = Category::published()->orderBy('sort_order','asc')->get();
        return $categories;
    }

 

}