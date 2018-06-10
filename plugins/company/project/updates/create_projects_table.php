<?php namespace Company\Project\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateProjectsTable extends Migration
{
    public function up()
    {
        Schema::create('company_project_projects', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('company_id')->unisigned()->index();
            $table->integer('work_id')->unisigned()->index();  
        });
    }

    public function down()
    {
        Schema::dropIfExists('company_project_projects');
    }
}
