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
public function projects() {
    return $this->hasMany(Post::class);
}


}