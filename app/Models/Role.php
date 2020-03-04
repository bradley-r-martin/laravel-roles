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
        return $this->belongsToMany(\BRM\Permissions\app\Models\Permissions::class, 'rolePermissions', 'permissionId', 'roleId');
      }
      return null;
    }

}
