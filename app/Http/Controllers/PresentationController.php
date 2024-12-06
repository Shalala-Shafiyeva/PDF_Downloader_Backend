<?php

namespace App\Http\Controllers;

use App\Models\Presentation;
use App\Models\User;
use Illuminate\Http\Request;

class PresentationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $presentations = Presentation::all();
        return response()->json([
            'data' => $presentations,
            'success' => true
        ]);
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
        $presentaion = new Presentation();
        $presentaion->title = $request->title;
        $presentaion->description = $request->description;
        $presentaion->sender = $request->sender;
        $presentaion->reciever = $request->reciever;
        if ($presentaion->save()) {
            return response()->json([
                'data' => $presentaion,
                'success' => true
            ]);
        };
        return response()->json([
            'message'=>"Creating error",
            'success'=>false
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Presentation $presentation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Presentation $presentation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Presentation $presentation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Presentation $presentation)
    {
        //
    }
}
