<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employe extends Model
{
    use HasFactory;
    protected $table = "employees";

    protected $fillable = ['first_name', 'last_name', 'company_id', 'email', 'phone'];
    use HasFactory;
    public function company()
    {
        return $this->belongsTo(Company::class, 'company_id');
    }
}
