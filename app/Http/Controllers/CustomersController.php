<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Customers;
use Illuminate\Http\Request;

class CustomersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $customers = Customers::all();
        return view('customers.index', compact('customers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('customers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'address' => 'required',
            'province' => 'required',
            'city' => 'required',
            'phone' => 'required',
            'email' => 'required',
        ] , [
            'name.required' => 'Name is required!',
            'address.required' => 'Address must be filled',
            'province.required' => 'Province must be filled in',
            'city.required' => 'City must be filled',
            'phone.required' => 'Phone must be filled',
            'email.required' => 'Email must be filled',
        ]);

        $customers = customers::create($request->all());
        return redirect()->route('customers.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $customers = Customers::find($id);
        return view('customers.show', compact('customers'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $customers = Customers::find($id);
        return view('customers.edit', compact('customers'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required',
            'address' => 'required',
            'province' => 'required',
            'city' => 'required',
            'phone' => 'required',
            'email' => 'required',
        ] , [
            'name.required' => 'Name is required!',
            'address.required' => 'Address must be filled',
            'province.required' => 'Province must be filled in',
            'city.required' => 'City must be filled',
            'phone.required' => 'Phone must be filled',
            'email.required' => 'Email must be filled',
        ]);

        $customers = Customers::find($id);
        $customers->update($request->all());
        return redirect()->route('customers.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $customers = Customers::find($id)->delete();
        return redirect()->back();
    }
}
