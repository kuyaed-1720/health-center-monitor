<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Task;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function showCalendar()
    {
        // $events = Events::all(['id', 'title', 'start', 'end']);
        return view('events.calendar');
    }

    public function getEvents()
    {
        $events = Event::all(['id', 'title', 'start', 'end']);
        return response()->json($events);
    }

    public function getTasks()
    {
        $events = Task::all(['id', 'title', 'start', 'end']);
        return response()->json($tasks);
    }

    public function create() {
        return view('events.create');
    }

    public function store(Request $request) {
        $request->validate([
            'title' => 'required|string|max:255',
            'start' => 'required|date',
            'end' => 'required|date|after_or_equal:start',
        ]);

        Event::create($request->all());

        return redirect()->route('calendar')->with('success', 'Event created successfully.');
    }
}
