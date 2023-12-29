<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'description','project_id','icon_name','is_active'];
    public function Projects(){
        return $this->belongsTo(Project::class, 'project_id', 'id');
    }

    public function Menus(){
        return $this->hasMany(Menu::class, 'module_id', 'id');
    }
    public function ModulePermissions(){
        return $this->hasMany(ModulePermission::class, 'module_id', 'id');
    }
}
