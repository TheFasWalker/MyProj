<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Mechanics extends Model
{
    use HasFactory;
    use SoftDeletes;


    protected $guarded =false;
    protected $table ='Mechanics';
}
