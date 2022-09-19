<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $table = 'employees';
    protected $fillable = [
        'vorname',
        'nachname',
        'email',
        'comp_id'
    ];

    public function company(){
        return $this->belongsTo(Company::class,'comp_id');
    }
}
