<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $guarded =false;
    protected $table ='Events';

    public function orgName(){
        return $this->belongsTo(Organizer::class ,'organizator_id','id');
    }
}
