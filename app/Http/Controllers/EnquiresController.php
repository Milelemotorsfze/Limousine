<?php

namespace App\Http\Controllers;

use App\Models\Enquiry;
use Illuminate\Http\Request;

class EnquiresController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $enquires = Enquiry::all();
        return view('admin.pages.enquires.index', compact('enquires'));
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'remarks' => 'required'
        ]);

        $enquiry = Enquiry::find($id);
        $enquiry->remarks = $request->remarks;
        $enquiry->save();

        return redirect()->route('enquires.index')->with('success','Enquiry Remark Updated Successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
