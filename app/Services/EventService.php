<?php

namespace App\Services;

use App\Models\Event;
use App\Models\Mechanics;
use Illuminate\Support\Facades\Storage;

class EventService
{
    public function createEvent($data)
    {
        if (isset($data['mechanics'])) {
            $mechanicsIds = $data['mechanics'];
            unset($data['mechanics']);
            if (isset($data['previewPhoto'])) {
                $photoLink = Storage::disk('local')->put('public/images/events', $data['previewPhoto']);
                $photoLink = preg_replace("/public\//", "", $photoLink);
                $data['previewPhoto'] = $photoLink;
            }
            $event = Event::firstOrCreate($data);
            $event->mechanics()->attach($mechanicsIds);
        } else {
            if (isset($data['previewPhoto'])) {
                $photoLink = Storage::disk('local')->put('public/images/events', $data['previewPhoto']);
                $photoLink = preg_replace("/public\//", "", $photoLink);
                $data['previewPhoto'] = $photoLink;
            }
            Event::firstOrCreate($data);
        }
    }

    public function updateEvent($id, $data)
    {
        $mechanicsIds = $data['mechanics'];
        unset($data['mechanics']);
        if (isset($data['previewPhoto'])) {
            $photoLink = Storage::disk('local')->put('public/images/events', $data['previewPhoto']);
            $photoLink = preg_replace("/public\//", "", $photoLink);
            $data['previewPhoto'] = $photoLink;
        }
        $event = Event::find($id);
        $event->update($data);
        $event->mechanics()->sync($mechanicsIds);
    }

}