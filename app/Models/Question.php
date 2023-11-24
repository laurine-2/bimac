<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    protected $table = 'questions';
    public $timestamps = true;
    protected $guarded = ['id'];
    protected $dates = ['created_at', 'updated_at'];


    protected $fillable = [
        'id',
        'description', 
        'sub_category',
         'reponse_1', 
         'reponse_2', 
         'reponse_3', 
         'reponse_4', 
         'explication',
        'value',
    ];

    public function awnser()
{
    return $this->hasMany(Awnser::class); // awnser va nous permettre de recuperer les reponse dans la base de donné
}

    //protected $fillable = ['question', 'options', 'correct_option', 'reponses'];
}

