<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Toy extends Model
{
    
    protected $fillable = [
        "user_id",
        "alias",
        "name",
        "gender",
        "height",
        "weight",
        "subject",
        "status",
        "creation_date",
        "species",
        "description",
        "visual"
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

}
