<?php

namespace App\Http\Controllers;

use App\Models\Responses;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;

class ResponsesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('website.responses.index');
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
    public function store(Request $request):RedirectResponse
    {
        $responses = new Responses;

        $responses->title = $request->title;
        $responses->desc = $request->desc;
        $responses->sender = $request->sender;
        $responses->status = $request->status;

        $responses->save();

        return redirect('/responses');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $responses = Responses::find($id);

        return view('responses.edit', compact('responses'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Responses $responses)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $responses = Responses::find($id);

        $responses->title = $request->title;
        $responses->desc = $request->desc;
        $responses->sender = $request->sender;
        $responses->status = $request->status;

        $responses->save();

        return redirect()->route('complaints.index')->with('success', 'Complaint Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Responses $responses)
    {
        $responses->delete();

        return redirect()->route('complaints.index')->with('success', 'Complaint Deleted Successfully');
    }
}
