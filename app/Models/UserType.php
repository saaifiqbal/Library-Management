<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserType extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'description', 'is_active'];
    public function Users(){
        return $this->hasMany(User::class, 'user_type_id', 'id');
    }
}
