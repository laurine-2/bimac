<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Awnser extends Model
{
    use HasFactory;

    protected $table = 'awnser';
    public $timestamps = true;
    protected $guarded = ['id'];
    protected $dates = ['created_at', 'updated_at'];


    protected $fillable = [
        'id',
        'user_id',
        'question_id',
        'value',
    ];
}
