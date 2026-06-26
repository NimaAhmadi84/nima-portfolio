<?php

namespace App\Http\Controllers;

use App\Models\Project;

class ProjectController extends Controller
{
    /**
     * نمایش لیست پروژه‌ها
     */
    public function index()
    {
        $projects = Project::where('is_published', true)
            ->orderBy('sort_order')
            ->get()
            ->map(function ($project) {
                // تبدیل technologies به آرایه
                $technologies = $project->technologies;
                if (is_string($technologies)) {
                    $technologies = json_decode($technologies, true) ?? [];
                }

                return [
                    'id' => $project->id,
                    'title' => $project->title,
                    'description' => $project->description,
                    'technologies' => $technologies ?: [],
                    'image' => $project->image ? asset('storage/' . $project->image) : null,
                    'github_url' => $project->github_url ?: '#',
                    'demo_url' => $project->demo_url ?: '#',
                    'category' => $project->category,
                ];
            });

        return view('projects.index', compact('projects'));
    }

    /**
     * نمایش جزئیات یک پروژه
     */
    public function show($id)
    {
        $project = Project::findOrFail($id);
        return view('projects.show', compact('project'));
    }
}