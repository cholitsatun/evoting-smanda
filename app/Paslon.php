<?php

namespace App;

use App\Result;
use App\Visimisi;
use Illuminate\Database\Eloquent\Model;

class Paslon extends Model
{
    protected $fillable = ['nama_ketos', 'nama_waketos', 'foto', 'paslon_id'];

    public function visimisi(){
        return $this->HasOne('App\Visimisi', 'paslon_id', 'id');
    }
    public function result(){
        return $this->HasMany('App\Result', 'paslon_id', 'id');
    }
}
