<?php

namespace App\Http\Controllers;

use App\Http\Requests\Course\StoreRequest;
use App\Http\Requests\Course\updateRequest;
use App\Models\demo;
use Illuminate\Http\Request;

class DemoController extends Controller
{

    public function index(Request $request)
    {
        $search = $request->get('q');
        $data = demo::query()
            ->where('name', 'like', "%".$search."%")
            ->paginate(3);

        $data->appends(['q'=>$search]);
        return view('demo.index',[
            'data' => $data,
            'search' => $search,
        ]);
    }

    public function create()
    {
        return view('demo.create');
    }

    public function store(StoreRequest $request)
    {
        demo::create($request->validated());
        return redirect()->route('course.index');
    }

    public function show(demo $demo)
    {
        //
    }

    public function edit(demo $demo)
    {
        return view('demo.edit', [
            'demo' => $demo,
        ]);
    }

    public function update(updateRequest $request, demo $demo)
    {
        $demo->name = $request->get('name');
        $demo->save();
        return redirect()->route('course.index');
        // return $demo;
    }

    public function destroy(demo $demo)
    {
        $demo->delete();
        return redirect()->route('course.index');
    }
}
