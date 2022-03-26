<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User ; 
use App\Models\Bureau ;

class Association extends Model
{
    use HasFactory;

    protected $fillable = ['nom' , 'date' , 'description' ,'photo'] ; 

    public function users(){ 

        return $this->belongsToMany(User::class , 'membres' ) ;
    }

    public function bureaus() {

        return $this->hasMany(Bureau::class) ; 
    }
}
