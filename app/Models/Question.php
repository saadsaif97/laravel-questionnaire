<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Prophecy\Doubler\Generator\Node\ReturnTypeNode;

class Question extends Model
{
    use HasFactory;

    protected $guarded = [];

    /**
     * Relation with the questionnaire
     */
    public function questionnaires()
    {
        return $this->belongsTo(Questionnaire::class);
    }

    /**
     * Relation with Answers
     */
    public function answers()
    {
        return $this->hasMany(Answer::class);
    }
}
