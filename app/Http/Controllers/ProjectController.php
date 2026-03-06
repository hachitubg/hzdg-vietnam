<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Category;

class ProjectController extends Controller
{
    public function index()
    {
        $categories = Category::where('type', 'project')->where('is_visible', true)->orderBy('sort_order')->get();
        $projects = Project::where('is_visible', true)->orderByDesc('created_at')->paginate(12);

        return view('frontend.projects.index', compact('categories', 'projects'));
    }

    public function show($slug)
    {
        $project = Project::where('slug', $slug)->where('is_visible', true)->firstOrFail();
        $project->increment('view_count');
        $relatedProjects = Project::where('category_id', $project->category_id)->where('id', '!=', $project->id)->where('is_visible', true)->limit(4)->get();

        return view('frontend.projects.show', compact('project', 'relatedProjects'));
    }
}