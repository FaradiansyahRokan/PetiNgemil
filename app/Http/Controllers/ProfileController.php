<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        if (Auth::check()) {
            $data = User::findOrFail($id);

            return view();
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        if (Auth::check()) {
            $data = User::where('id', $id)->get();

            return view();
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProfileRequest $request, $id)
    {
        $data = User::where('id', $id)->first();
        $validated = $request->validated();
    
        if (!empty($validated['password'])) {
            $data->update([
                'first_name' => $validated['first_name'],
                'last_name' => $validated['last_name'],
                'phone_number' => $validated['phone_number'],
                'gender' => $validated['gender'],
                'password' => bcrypt($validated['password']),
                'birth_date' => $validated['birth_date'],
            ]);
        } else {
            $data->update([
                'first_name' => $validated['first_name'],
                'last_name' => $validated['last_name'],
                'phone_number' => $validated['phone_number'],
                'gender' => $validated['gender'],
                'birth_date' => $validated['birth_date'],
            ]);
        }
    
        if(!empty($request->file('image_profile'))) {
            Storage::delete($data->image_profile);
            $data->update([
                'image_profile' => $request->file('image_profile')->store('image_profile'),
            ]);
        }
        
        return redirect();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
