<?php

namespace App\Http\Controllers;

use App\Models\Enquiry;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EnquiresController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $enquires = Enquiry::orderBy('id','DESC')->get();
        return view('admin.pages.enquires.index', compact('enquires'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.enquiry');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'customer_name' => 'required|string',
            'contact_number' => 'required|numeric',
            'start_date' => 'required',
            'end_date' => 'required',
            'vehicle' => 'required',
            'location' => 'required',
        ]);

        $data['email'] = 'info@milelerentacar.com';
        $data['customer_name'] = $request->input('customer_name');;
        $data['contact_number'] = $request->input('contact_number');
        $data['start_date'] =  $request->input('start_date');
        $data['end_date'] = $request->input('end_date');
        $data['vehicle'] = $request->input('vehicle');
        $data['location'] = $request->input('location');
        Enquiry::create($data);

        $template['from'] = 'no-reply@milele.com';
        $template['from_name'] = 'Milele Car Rental';
        $subject = 'Milele Car Rental Enquiry';
        try {
            Mail::send(
                "admin.pages.enquires.enquiry-email",
                ["data" => $data],
                function ($msg) use ($data, $template, $subject) {
                    $msg->to($data['email'])
                        ->from($template['from'], $template['from_name'])
                        ->subject($subject);
                }
            );
        }catch(Exception $e){
            return response($e->getMessage(), 422);
        }
        return response()->json(true);
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
