<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AppSetting extends Model
{
    use HasFactory;

    public $timestamps=false;

    public function getValue($key){
       $x= $this->where('settings_key', $key)->first();
        //dd($x);
        return $this->where('settings_key', $key)->first();
    }
}
