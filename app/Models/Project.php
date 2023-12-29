<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'description', 'is_active'];
    public function Modules(){
        return $this->hasMany(Module::class, 'project_id', 'id');
    }
    public function Menus(){
        return $this->hasMany(Menus::class, 'project_id', 'id');
    }

}
