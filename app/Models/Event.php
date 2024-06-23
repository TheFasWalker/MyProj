<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Event extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guarded =false;
    protected $table ='Events';

    public function orgName(){
        return $this->belongsTo(Organizer::class ,'organizator_id','id');
    }

    public function mechanics(){
        return $this->belongsToMany(Mechanics::class,'event_mechanics','event_id','mechanics_id');
    }
    public function location(){
        return $this->belongsTo(Location::class , 'location_id','id');
    }
}
