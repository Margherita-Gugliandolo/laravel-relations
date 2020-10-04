<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = [

      'firstname',
      'lastname',
      'username',
      'birthday',
      'bio',
      'salary',
      'rating',
      'fired',
      'location_id'
    ];

    public function location(){
      return $this -> belongsTo(Location::class);
    }

    public function tasks(){
      return $this -> belongsToMany(Task::class);
    }
}
