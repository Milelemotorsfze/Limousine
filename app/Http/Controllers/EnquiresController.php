<?php

namespace App\Http\Controllers;

use App\Models\Enquiry;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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
        dd($request->all());
        $request->validate([
            'customer_name' => 'required|string',
            'contact_number' => 'required|numeric',
            'start_date' => 'required',
            'end_date' => 'required',
            'vehicle' => 'required',
        ]);

        $enquiry = new Enquiry();
        $enquiry->customer_name = 'ANU';
        $enquiry->contact_number = $request->input('contact_number');
        $enquiry->start_date = $request->input('start_date');
        $enquiry->end_date = $request->input('end_date');
        $enquiry->vehicle = $request->input('vehicle');
        $enquiry->save();

        $data['email'] = 'anumathew.sunny@milele.com';
        $data = $request->all();

        $template['from'] = 'no-reply@milele.com';
        $template['from_name'] = 'Milele Car Rental';
        $subject = 'Milele Car Rental Enquiry';
        Mail::send(
            "admin.pages.enquires.enquiry-email",
            ["data"=>$data] ,
            function($msg) use ($data,$template,$subject) {
                $msg->to($data['email'], $data)
                    ->from($template['from'],$template['from_name'])
                    ->subject($subject);
            }
        );

        return redirect()->back()->with('success', 'Thank you for your Enquiry.Our Team will contact you soon!');
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
