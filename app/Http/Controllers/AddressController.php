<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddressRequest;
use App\Models\Address;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AddressController extends Controller
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
    public function show($id)
    {
        if (Auth::check()) {
            $data = Address::findOrFail($id);

            return view();
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        if (Auth::check()) {
            $data = Address::where('id', $id)->get();

            return view();
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AddressRequest $request, $id)
    {
        $data = Address::where('id', $id)->first();
        $validated = $request->validated();

        $data->update([
            'city' => $validated['city'],
            'province' => $validated['province'],
            'district' => $validated['district'],
            'sub-district' => $validated['sub-district'],
            'address_type' => $validated['address_type'],
            'detail' => $validated['detail'],
        ]);

        return redirect();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Address $address)
    {
        //
    }
}
