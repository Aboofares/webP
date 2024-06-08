<?php

namespace App\Models\Settings;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class accountType extends Model
{
    use HasFactory;
    use HasTranslations;
    public $translatable = ['account_type_name'];
    protected $fillable =['account_type_name'];
}
