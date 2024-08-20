<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event; // Ensure the Event model is created and linked

class IndexController extends Controller
{
    public function index()
    {
        // Fetch all events to display on the index page
        $event = Event::all();
        return view('index', compact('event'));
    }

    public function event()
    {
        return view('event');
    }

    public function create()
    {
        // Return the view for creating a new event
        return view('event.create');
    }

    public function store(Request $request)
    {
        // Validate the request
        $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
            'date' => 'required|date',
        ]);

        // Create a new event
        Event::create($request->all());

        // Redirect to the index page with a success message
        return redirect()->route('event.index')->with('success', 'Event created successfully.');
    }

    public function update(Request $request, $id)
    {
        // Validate the request
        $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
            'date' => 'required|date',
        ]);

        // Find the event by ID and update it
        $event = Event::findOrFail($id);
        $event->update($request->all());

        // Redirect to the index page with a success message
        return redirect()->route('event.index')->with('success', 'Event updated successfully.');
    }

    public function destroy($id)
    {
        // Find the event by ID and delete it
        $event = Event::findOrFail($id);
        $event->delete();

        // Redirect to the index page with a success message
        return redirect()->route('event.index')->with('success', 'Event deleted successfully.');
    }

    public function donate()
    {
        return view('donate');
    }
}
 
