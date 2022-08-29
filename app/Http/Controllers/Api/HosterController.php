<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Hoster;
use Illuminate\Http\Request;

class HosterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
         // Get All Posts
         $hosters = Hoster::all();

         return response()->json([
             'status' => true,
             'hosters' => $hosters
         ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

         // Store New Post To Database
         $hoster = Hoster::create($request->all());

         return response()->json([
             'status' => true,
             'message' => "New Host Created successfully!",
             'hoster' => $hoster
         ], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Hoster  $hoster
     * @return \Illuminate\Http\Response
     */
    public function show(Hoster $hoster)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Hoster  $hoster
     * @return \Illuminate\Http\Response
     */
    public function edit(Hoster $hoster)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Hoster  $hoster
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Hoster $hoster)
    {
        //
        // Update Hoster
        $hoster->update($request->all());

        return response()->json([
            'status' => true,
            'message' => "Hoster Updated successfully!",
            'hoster' => $hoster
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Hoster  $hoster
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hoster $hoster)
    {
         // Delete Post
         $hoster->delete();

         return response()->json([
             'status' => true,
             'message' => "Hoster Deleted successfully!",
         ], 200);
    }
}
