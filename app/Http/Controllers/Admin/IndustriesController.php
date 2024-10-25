<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use App\Models\Industries;


use Illuminate\Http\Request;

class IndustriesController extends Controller
{
    public function index(){
       
        return view('admin.industries.index');
    }

    public function create(){
        return view('admin.industries.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required',
            'content' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:5048',
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = uniqid()  . '.' . $image->extension();
            $image->move(public_path('assets/images/industries'), $imageName);
        }
        
        Industries::create(array_merge($validated, ['image' => 'assets/images/industries/'.$imageName]));
    
        return redirect()->route('admin.industries.create')->with('success', 'Industries created successfully.');
    }

    public function edit($id)
    {
        $industries = Industries::findOrFail(decrypt($id));
        return view('admin.industries.edit', compact('industries'));
    } 
 
    public function update(Request $request, $id)
    {
        try{
        $validated = $request->validate([
            'title' => 'required',
            'content' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:32768',
        ]);

        $industry = Industries::findOrFail($id);
        
        if ($request->hasFile('image')) {
            if ($industry->image && file_exists(public_path($industry->image))) {
                unlink(public_path($industry->image));
            }

            $image = $request->file('image');
            $imageName = uniqid() . '.' . $image->extension();
            $image->move(public_path('assets/images/industries'), $imageName);
            $industry->image = 'assets/images/industries/' . $imageName;
        }

        $industry->update([
            'title' => $request->title,
            'content' => $request->content,
            'image' => $industry->image, 
        ]);
        } catch (ValidationException $e) {
            return redirect()->back()->withErrors($e->validator->errors())->withInput();
        } catch (QueryException $e) {
            return redirect()->back()->with('error', 'Failed to add core value statement. Please try again.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'An unexpected error occurred. Please try again later.'.$e->getMessage());
        }

        return redirect()->route('admin.industries.index')->with('success', 'Industry updated successfully.');
    }

    

    public function destroy($id)
    {
        $industries= Industries::findOrFail(decrypt($id));
        $industries->delete();
        return redirect()->route('admin.industries.index')->with('success', 'Industries deleted successfully.');
    }

    public function show($slug)
    {
        $industriesItem = Industries::where('slug', $slug)->first();

        if (!$industriesItem) {
            return view('home.errors.404'); 
        }

        $relatedIndustries = Industries::where('id', '!=', $industriesItem->id)
                                     ->inRandomOrder()
                                     ->take(6) 
                                     ->get();

        return view('home.pages.industries.industries-details', compact('industriesItem', 'relatedIndustries'));
    }

}
