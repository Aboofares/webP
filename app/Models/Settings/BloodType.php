<?php

namespace App\Models\Settings;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class BloodType extends Model
{
    use HasFactory;
//    use HasTranslations;
//    public $translatable = ['blood_type_name'];
    protected $fillable =['blood_type_name'];

}
