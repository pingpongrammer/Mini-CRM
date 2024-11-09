<?php

namespace App\Models;

use App\Models\Employee;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable = [
        'name',
        'email',
        'logo',
        'website',
    ];

    // Define the relationship with the Employee model
    public function employees()
    {
        return $this->hasMany(Employee::class);
    }
}
