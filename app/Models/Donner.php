<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donner extends Model
{
    use HasFactory;
    protected $fillable =['memberShipNo', 'create_date', 'name', 'date_of_birth', 'father_name','mother_name','present_address', 'permanent_address', 'mobile_no','whatapp_no', 'occupation', 'blood_group','qualification', 'institute', 'gender', 'image_id'];
    public function BloodGroups()
    {
        return $this->belongsTo(BloodGroup::class,'blood_group', 'id');
    }
    public function Occupations(){
        return $this->belongsTo(Occupation::class, 'occupation', 'id');
    }
    public function Sexes(){
        return $this->belongsTo(Sexes::class, 'gender', 'id');
    }

    public function PassportImagees(){
        return $this->belongsTo(NidImage::class, 'image_id', 'id');
    }

    public function NidImagees(){
        return $this->belongsTo(NidImage::class, 'nid_id', 'id');
    }

}
