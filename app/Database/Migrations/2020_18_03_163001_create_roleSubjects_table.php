<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoleSubjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('roleSubjects', function (Blueprint $table) {

          $table->integer('role_id')->unsigned();
          $table->integer('roleSubjects_id')->unsigned();
            $table->text('roleSubjects_type');
            
           
            //FOREIGN KEY CONSTRAINTS
    
            //SETTING THE PRIMARY KEYS
            $table->primary(['roleSubjects_id','role_id','roleSubjects_type']);
            $table->timestamp('createdAt')->useCurrent();
            $table->timestamp('updatedAt')->nullable();
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('roleSubjects');
    }
}
