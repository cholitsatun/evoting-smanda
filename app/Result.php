<?php

namespace App;

use App\Voter;
use App\Paslon;
use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    protected $fillable = ['paslon_id', 'voter_id'];
    public function voter(){
        return $this->belongsTo('App\Voter', 'voter_id', 'id');
    }
    public function paslon(){
        return $this->belongsTo('App\Paslon', 'paslon_id', 'id');
    }
}
