<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SocialImpact;

class SocialImpactController extends Controller
{
    public function index(){
        return view('admin.socialImpact.index');
    }

    public function store(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'content' => 'required|string',
                'image' => 'image|mimes:jpeg,png,jpg,gif|max:5048',
            ]);

            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $imageName = time() . '.' . $image->extension();
                $image->move(public_path('assets/images/socialImpact'), $imageName);
            }
    
            SocialImpact::create([
                'content' => $validatedData['content'],
                'image' => 'assets/images/socialImpact/'.$imageName
            ]);
    
            return redirect()->back()->with('success', 'Social Impact added successfully.');
        } catch (ValidationException $e) {
            return redirect()->back()->withErrors($e->validator->errors())->withInput();
        } catch (QueryException $e) {
            return redirect()->back()->with('error', 'Failed to add Social Impact. Please try again.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'An unexpected error occurred. Please try again later.');
        }
    }
 
    public function update(Request $request, $id)
    {
        try {
            $validatedData = $request->validate([
                'content' => 'required|string',
                'image' => 'image|mimes:jpeg,png,jpg,gif|max:5048',
            ]);
    
            $socialImpact = SocialImpact::findOrFail($id);
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $imageName = time() . '.' . $image->extension();
                $image->move(public_path('assets/images/socialImpact'), $imageName);
                
                $socialImpact->update(['image' =>  'assets/images/socialImpact/' . $imageName]);
            } 
    
            $socialImpact->update([
                'content' => $validatedData['content'],
            ]);
    
            return redirect()->back()->with('success', 'Social Impact updated successfully.');
        } catch (ValidationException $e) {
            return redirect()->back()->withErrors($e->validator->errors())->withInput();
        } catch (ModelNotFoundException $e) {
            return redirect()->back()->with('error', 'Record not found. Please try again.')->withInput();
        } catch (QueryException $e) {
            $errorCode = $e->errorInfo[1]; 
    
            if ($errorCode === 1062) {
                return redirect()->back()->with('error', 'Duplicate entry. Please provide unique values.')->withInput();
            } else {
                return redirect()->back()->with('error', 'Database error: ' . $e->getMessage())->withInput();
            }
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'An unexpected error occurred. Please try again later.')->withInput();
        }
    }
}
