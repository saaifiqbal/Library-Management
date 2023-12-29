<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserGroup extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'description', 'is_active'];
    public function Users(){
        return $this->hasMany(User::class, 'user_group_id', 'id');
    }
    public function PermissionGroups(){
        return $this->hasMany(PermissionGroup::class, 'group_id', 'id');
    }
}
