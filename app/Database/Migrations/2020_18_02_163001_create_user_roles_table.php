<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      if (class_exists('\BRM\Permissions\FrameworkServiceProvider')) {
          Schema::create('rolePermissions', function (Blueprint $table) {
              $table->integer('permissionId')->unsigned();
              $table->integer('roleId')->unsigned();
              //FOREIGN KEY CONSTRAINTS
              $table->foreign('permissionId')->references('id')->on('permissions')->onDelete('cascade');
              $table->foreign('roleId')->references('id')->on('roles')->onDelete('cascade');
              //SETTING THE PRIMARY KEYS
              $table->primary(['permissionId','roleId']);
              $table->timestamp('createdAt')->useCurrent();
              $table->timestamp('updatedAt')->nullable();
          });
      }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rolePermissions');
    }
}
