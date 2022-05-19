<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Student extends Model
{
    //here shows our student columns
    use HasFactory;
    protected $table = 'students';
    protected $primaryKey = 'id';
    protected $fillable = ['FirstName', 'LastName', 'BirthDate', 'Address', 'HouseNumber', 'Postcode', 'City', 'Mobile', 'Email'];

}
