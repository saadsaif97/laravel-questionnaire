<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Questionnaire extends Model
{
    use HasFactory;
    protected $guarded = [];

    /**
     * Create the relationship with user
     */
     public function user(){
         return $this->belongsTo(User::class);
     }

     /**
      * Relationship with the questionnaire
      */
      public function questions()
      {
          return $this->hasMany(Question::class);
      }
}
