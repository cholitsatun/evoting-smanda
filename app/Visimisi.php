<?php

namespace App;

use App\Paslon;
use Illuminate\Database\Eloquent\Model;

class Visimisi extends Model
{
    protected $fillable = ['visi', 'misi', 'paslon_id'];

    public function paslon(){
        return $this->belongsTo('App\Paslon', 'paslon_id', 'id');
    }
}
