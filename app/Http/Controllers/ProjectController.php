<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Category;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index(Request $request)
    {
        $categories = Category::where('type', 'project')->where('is_visible', true)->orderBy('sort_order')->get();

        $query = Project::where('is_visible', true);

        if ($request->filled('category')) {
            $catSlug = $request->input('category');
            $cat = Category::where('slug', $catSlug)->where('type', 'project')->first();
            if ($cat) {
                $query->where('category_id', $cat->id);
            }
        }

        $projects = $query->orderByDesc('is_featured')->orderByDesc('created_at')->paginate(12);

        return view('frontend.projects.index', compact('categories', 'projects'));
    }

    public function show($slug)
    {
        $project = Project::where('slug', $slug)->where('is_visible', true)->with('category')->first();

        if (!$project) {
            return view('frontend.projects.show');
        }

        $project->increment('view_count');

        $relatedProjects = Project::where('category_id', $project->category_id)
            ->where('id', '!=', $project->id)
            ->where('is_visible', true)
            ->orderByDesc('created_at')
            ->limit(4)
            ->get();

        $popularProjects = Project::where('is_visible', true)
            ->orderByDesc('view_count')
            ->limit(6)
            ->get();

        return view('frontend.projects.show', compact('project', 'relatedProjects', 'popularProjects'));
    }
}