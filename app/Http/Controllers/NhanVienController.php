<?php

namespace App\Http\Controllers;

use App\Models\NhanVien;
use Illuminate\Http\Request;

class NhanVienController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $key = request()->key;
        $data = NhanVien::orderBy("id", 'desc')->search()->paginate(5);
        return view('admin.nhan-vien.index',compact(['data', 'key']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //$nhanVien = NhanVien::orderBy('id', 'desc')->select('id', 'name')->get();
       // return (view('admin.nhan-vien.create', compact('nhanVien')));
       return (view('admin.nhan-vien.create'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (NhanVien::create($request->all())) {
            return redirect()->route('nhan-vien.index')
                ->with('success', 'Thêm mới nhân viên ' . $request->ho_ten . ' thành công!');
        } else {
            return redirect()->route('nhan-vien.index')
                ->with('error', 'Thêm mới nhân viên ' . $request->ho_ten . ' không thành công!');
        }
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
