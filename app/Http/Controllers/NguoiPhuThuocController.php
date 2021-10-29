<?php

namespace App\Http\Controllers;

use App\Models\NguoiPhuThuoc;
use Illuminate\Http\Request;

class NguoiPhuThuocController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$key = request()->key;
        //$data = NguoiPhuThuoc::orderBy("id", 'desc')->search()->paginate(2);
        //return view('admin.phu-thuoc.index',compact(['data', 'key']));
        return view('admin.phu-thuoc.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //$categories = NguoiPhuThuoc::orderBy('id', 'desc')->select('id', 'name')->get();
       // return (view('admin.phu-thuoc.create', compact('categories')));
        return (view('admin.phu-thuoc.create'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
