<?php

namespace App\Http\Controllers\Web\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Web\Admin\CategoryRequest;
use App\Http\Requests\Web\Admin\UpdateCategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    public function index(Request $request)
    {
        $q = Category::query();

        if (!is_null($request->name)) {
            $q->where('name', 'LIKE' , '%' . $request->name . '%');
        }

        if (!is_null($request->category_id)) {
            $q->where('category_id', $request->category_id);
        }

        $categories = $q->latest('id')->paginate(10);
        $categories_field = Category::all();

        $request->flash();

        return view('admin.category.index', compact('categories','categories_field'));
    }

    public function create()
    {
        return view('admin.category.create');
    }

    public function store(CategoryRequest $request)
    {
        $inputs = $request->all();
        $inputs['uuid'] = Str::uuid()->toString();

        Category::create($inputs);

        return redirect()->route('admin.category.index')->with('success','category created successfully');
    }

    public function showPodcasts($id)
    {
        $category = Category::find($id);
        $getWay = $category->name . ' Category';
        $podcasts = $category->podcasts;
        return view('admin.podcast.index' , compact('podcasts' , 'getWay'));
    }

    public function edit($id)
    {
        $categories = Category::all();
        $category = Category::with('category','categories')->withCount('Podcasts')->find($id);
        return view('admin.category.edit',compact('category','categories'));
    }

    public function update(UpdateCategoryRequest $request, $id)
    {
        Category::find($id)->update($request->validated());
        return redirect()->back();
    }
}
