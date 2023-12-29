<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NidImage extends Model
{
    use HasFactory;
    protected $fillable = ['url_link'];
    public function Donners(){
        return $this->hasMany(Donner::class, 'nid_id', 'id');
    }
}
