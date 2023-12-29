<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sex extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'description', 'is_active'];
    public function Donners(){
        return $this->hasMany(Donner::class, 'gender', 'id');
    }
}
