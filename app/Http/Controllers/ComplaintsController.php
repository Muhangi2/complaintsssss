<?php

namespace App\Http\Controllers;

use App\Models\Complaints;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class ComplaintsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $complaints = Complaints::all();

        return view('website.complaints.index', compact('complaints'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('website.complaints.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        dd($request);
        $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'description' => ['required', 'longText'],
        ]);

        $complaint = Complaints::create([
            'title' => $request->title,
            'description' => $request->description,
        ]);

        $complaint->save();

        return redirect('sent');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $complaints = Complaints::find($id);

        return view('complaints.edit', compact('complaints'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $complaints = Complaints::find($id);

        return view('website.complaints.edit', compact('complaints'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $complaints = Complaints::find($id);

        $complaints->title = $request->title;
        $complaints->desc = $request->desc;
        $complaints->sender = $request->sender;
        $complaints->status = $request->status;

        $complaints->save();

        return redirect()->route('complaints.index')->with('success', 'Complaint Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Complaints $complaints)
    {
        $complaints->delete();

        return redirect()->route('complaints.index')->with('success', 'Complaint Deleted Successfully');
    }
}
