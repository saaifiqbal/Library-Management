<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    use HasFactory;
    protected $fillable = ['menu_id','user_id','is_create','is_update','is_view','is_report','is_active'];
    public function Menus(){
        return $this->belongsTo(Menu::class, 'menu_id', 'id');
    }
    public function Users(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
