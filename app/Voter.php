<?php

namespace App;

use App\Result;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

use Illuminate\Database\Eloquent\Model;


class Voter extends Authenticatable
{

    use Notifiable;

    protected $rememberTokenName = false;

    protected $fillable = ['nisn', 'name', 'class', 'password','realpass', 'status'];

    public function result(){
        return $this->HasOne('App\Result', 'voter_id', 'id');
    }
}
