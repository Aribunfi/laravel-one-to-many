<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Project extends Model
{
    use HasFactory;
    protected $fillable = ["title", "year", "kind", "time", "description", "image"];
}


class User extends Model {

protected $fillable = ["title", "year", "kind", "time", "description", "image"];


public function user() {
    return $this->belongsTo(User::class);
}


}