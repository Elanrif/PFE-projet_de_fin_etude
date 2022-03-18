<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User ; 

class Association extends Model
{
    use HasFactory;

    protected $fillable = ['nom' , 'date' , 'description' , 'mini_description'] ; 

    public function users(){ 

        return $this->belongsToMany(User::class , 'membres' ) ;
    }
}
