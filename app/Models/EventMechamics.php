<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class EventMechamics extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guarded =false;
    protected $table ='event_mechanics';
}
