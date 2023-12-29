<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModulePermission extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'module_id', 'is_active'];
    public function Users(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
    public function Modules(){
        return $this->belongsTo(Module::class, 'module_id', 'id');
    }
}
