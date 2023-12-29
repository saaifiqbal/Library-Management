<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PermissionGroup extends Model
{
    use HasFactory;
    protected $fillable = ['menu_id','group_id','is_create', 'is_update', 'is_view', 'is_report', 'is_active'];
    public function UserGroups(){
        return $this->belongsTo(UserGroup::class, 'group_id', 'id');
    }
    public function Menus(){
        return $this->belongsTo(Menu::class, 'menu_id', 'id');
    }
}
