<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class SolutionsController extends Controller
{
    public function index(){
       
        return view('admin.solution.index');
    }

    public function create(){
        return view('admin.solution.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required',
            // 'icon_class' => 'required',
            'content' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:5048',
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->extension();
            $image->move(public_path('assets/images/solution/'), $imageName);
        }
        
        Service::create(array_merge($validated, ['image' => 'assets/images/solution/'.$imageName]));
    
        return redirect()->route('admin.solution.create')->with('success', 'Solution created successfully.');
    }

    public function edit($id)
    {
        $solution = Service::findOrFail(decrypt($id));
        return view('admin.solution.edit', compact('solution'));
    } 

    public function update(Request $request, $id)
    { 
        // Validate the incoming request data
        $validated = $request->validate([
            'title' => 'required',
            'content' => 'required', 
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:32768', 
        ]);
    
        // Find the solution record by ID
        $solution = Service::findOrFail($id);   
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->extension();
            $image->move(public_path('assets/images/solution/'), $imageName);
            
            $solution->update(['image' =>  'assets/images/solution/' . $imageName]);
        } 
       
        $solution->update([
            'title' => $request->title,
            'content' => $request->content,
        ]);
    
        return redirect()->route('admin.solution.index')->with('success', 'Solution updated successfully.');
    }
    

    public function destroy($id)
    {
        $solution= Service::findOrFail(decrypt($id));
        $solution->delete();
        return redirect()->route('admin.solution.index')->with('success', 'Solution deleted successfully.');
    }

    public function show($slug)
    {
        $solutionItem = Service::where('slug', $slug)->first();

        if (!$solutionItem) {
            return view('home.errors.404'); 
        }

        $relatedSolutions = Service::where('id', '!=', $solutionItem->id)
                                     ->inRandomOrder()
                                     ->take(6) 
                                     ->get();

        return view('home.pages.solutions.solution-details', compact('solutionItem', 'relatedSolutions'));
    }
}
