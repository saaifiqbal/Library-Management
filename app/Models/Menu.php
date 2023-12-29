<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'description', 'icon_name', 'path', 'parent_id', 'is_active','sort_order','project_id','module_id'];
    public function Projects(){
        return $this->belongsTo(Project::class, 'project_id', 'id');
    }
    public function Modules(){
        return $this->belongsTo(Module::class, 'module_id', 'id');
    }
    public function PermissionGroups(){
        return $this->hasMany(PermissionGroup::class, 'menu_id', 'id');
    }
    public function Permissions(){
        return $this->hasMany(Permission::class, 'menu_id', 'id');
    }
}
