<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    public function index() {
        $categories = Category::latest()->paginate(15);
        return view('admin.categories.index', compact('categories'));
    }

    public function create() {
        return view('admin.categories.create');
    }

    public function store(Request $request) {
        $data = $request->validate([
            'name' => 'required|string|max:191',
            'description' => 'nullable|string',
        ]);

        $data['slug'] = Str::slug($request->name).'-'.uniqid();
        Category::create($data);

        return redirect()->route('admin.categories.index')->with('success','Category created');
    }

    public function edit(Category $category) {
        return view('admin.categories.edit', compact('category'));
    }

    public function update(Request $request, Category $category) {
        $data = $request->validate([
            'name' => 'required|string|max:191',
            'description' => 'nullable|string',
        ]);
        $data['slug'] = Str::slug($request->name).'-'.uniqid();
        $category->update($data);
        return redirect()->route('admin.categories.index')->with('success','Category updated');
    }

    public function destroy(Category $category) {
        $category->delete();
        return back()->with('success','Category deleted');
    }
}
