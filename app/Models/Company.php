<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $table = "companies";

    protected $fillable = ['name', 'email', 'logo', 'website'];
    use HasFactory;
    public function employees()
    {
        return $this->hasMany(employe::class);
    }
}
