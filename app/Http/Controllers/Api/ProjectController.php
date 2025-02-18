<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;
use Illuminate\Database\Eloquent\Collection;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): Collection
    {
        return Project::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $project = Project::create([
            ...$request->validate([
                'name' =>  'required|string|max:255',
                'description' =>  'nullable|string',
                'due_date' =>  'nullable|date|after:now'
            ])
        ]);

        return $project;
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project): Project
    {
        return $project;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
