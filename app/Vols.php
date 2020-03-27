<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Vols extends Model
{
    protected $fillable = [
        'id','prix_vol','date_vol,','ligne_depart','ligne_arrive'
    ];
    public function users (){
        return $this->belongsToMany('App\User','user_role');
    }
}
