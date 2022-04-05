<?php

namespace App\Http\Controllers;

use App\Models\demo;
use App\Http\Requests\StoredemoRequest;
use App\Http\Requests\UpdatedemoRequest;
use Illuminate\Http\Request;

class DemoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
    //  * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = demo::query()->get();
        return view('demo.index',[
            'data' => $data,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('demo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoredemoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newData = new demo();

        $newData->name = $request->get('name');
        $newData->save();
        return redirect()->route('course.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\demo  $demo
     * @return \Illuminate\Http\Response
     */
    public function show(demo $demo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\demo  $demo
     * @return \Illuminate\Http\Response
     */
    public function edit(demo $demo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatedemoRequest  $request
     * @param  \App\Models\demo  $demo
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatedemoRequest $request, demo $demo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\demo  $demo
     * @return \Illuminate\Http\Response
     */
    public function destroy(demo $demo)
    {
        //
    }
}
