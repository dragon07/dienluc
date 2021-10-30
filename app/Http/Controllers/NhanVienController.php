<?php

namespace App\Http\Controllers;

use App\Http\Requests\NhanVienRequest;
use App\Models\NhanVien;

class NhanVienController extends Controller
{

    public function index()
    {
        $key = request()->key;
        $data = NhanVien::orderBy("id", 'desc')->search()->paginate(5);
        return view('admin.nhan-vien.index',compact(['data', 'key']));
    }

    public function create()
    {
       return (view('admin.nhan-vien.create'));
    }

    public function store(NhanVienRequest $request)
    {
        
        if (NhanVien::create($request->all())) {
            return redirect()->route('nhan-vien.index')
                ->with('success', 'Thêm mới nhân viên ' . $request->ho_ten . ' thành công!');
        } else {
            return redirect()->route('nhan-vien.index')
                ->with('error', 'Thêm mới nhân viên ' . $request->ho_ten . ' không thành công!');
        }
    }

    public function show($id)
    {
        //
    }

    public function edit(NhanVien $nhanVien)
    {
        return (view('admin.nhan-vien.edit', compact('nhanVien')));
    }

    public function update(NhanVienRequest $request, NhanVien $nhanVien)
    {
        if ($nhanVien->update($request->only('ho_ten', 'mst', 'so_hieu_hrms', 'ma_erp', 'status'))) {
            return redirect()->route('nhan-vien.index')
                ->with('success', ''.$request->ho_ten.' vừa được cập nhật thông tin!');
        }
        return false;
    }

    public function destroy(NhanVien $nhanVien)
    {
        $hoTen = $nhanVien->getAttributes()['ho_ten'];
        if ($nhanVien->phuThuoc()->count() > 0) {
            return redirect()->route('nhan-vien.index')
                ->with('error', 'Không thể xóa nhân viên ' . $hoTen);
        } else {
            $nhanVien->delete();
            return redirect()->route('nhan-vien.index')
                ->with('success', 'Đã xóa nhân viên ' . $hoTen);
        }
    }
}
