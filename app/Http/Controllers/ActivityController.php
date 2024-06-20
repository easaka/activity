<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use Illuminate\Http\Request;

class ActivityController extends Controller
{
    // Display a listing of the activities.
    public function index()
    {
        $activities = Activity::all();
        return view('activities.index', compact('activities'));
    }

    // Show the form for creating a new activity.
    public function create()
    {
        return view('activities.create');
    }

    // Store a newly created activity in storage.
    public function store(Request $request)
    {
        $request->validate([
            'description' => 'required|string|max:255',
            'status' => 'required|in:done,pending',
            'remark' => 'nullable|string',
        ]);

        Activity::create($request->all());

        return redirect()->route('activities.index');
    }

    // Show the form for editing the specified activity.
    public function edit(Activity $activity)
    {
        return view('activities.edit', compact('activity'));
    }

    // Update the specified activity in storage.
    public function update(Request $request, Activity $activity)
    {
        $request->validate([
            'description' => 'required|string|max:255',
            'status' => 'required|in:done,pending',
            'remark' => 'nullable|string',
        ]);

        $activity->update($request->all());

        return redirect()->route('activities.index');
    }

    // Remove the specified activity from storage.
    public function destroy(Activity $activity)
    {
        $activity->delete();
        return redirect()->route('activities.index');
    }
}
