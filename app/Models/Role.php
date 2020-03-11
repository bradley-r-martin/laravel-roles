<?php

namespace BRM\Roles\app\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Role extends Model
{
 
    const CREATED_AT = 'createdAt';
    const UPDATED_AT = 'updatedAt';
    const DELETED_AT = 'deletedAt';
  
    protected $hidden = [
      'deletedAt',
    ];

    protected $dates = [
      'createdAt',
      'updatedAt',
      'deletedAt'
    ];


    public function permissions()
    {
      if (class_exists('\BRM\Permissions\FrameworkServiceProvider')) {
        return $this->belongsToMany(\BRM\Permissions\app\Models\Permission::class, 'rolePermissions', 'roleId', 'permissionId');
      }
      return null;
    }

    public function users(){
        return $this->morphedByMany('\Pursuit\Users\app\Models\User', 'roleSubjects');
    }

    public function clients(){
      return $this->morphedByMany('\Sihq\Clients\app\Models\Client', 'roleSubjects');
  }

}
