@extends('layouts.admin')
@section('title', 'Chỉnh sửa nhân viên')
@section('content')
    <form action="{{route('nhan-vien.update', $nhanVien->id)}}" method="POST">
        @csrf @method('PUT')
       
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="ho-ten">Họ tên</label>
                    <input type="text" class="form-control" id="ho-ten" name="ho_ten" value="{{$nhanVien->ho_ten}}" placeholder="Nhập họ tên" required>
                    @error('ho_ten')
                    <small class="help-block text-danger">{{$message}}</small>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="slug">Mã số thuế</label>
                    <input type="text" class="form-control" id="mst" name="mst" value="{{$nhanVien->mst}}" placeholder="Nhập mã số thuế" required>
                    @error('mst')
                    <small class="help-block text-danger">{{$message}}</small>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="hrms">Số hiệu HRMS</label>
                    <input type="text" class="form-control" id="hrms" name="so_hieu_hrms" value="{{$nhanVien->so_hieu_hrms}}" placeholder="Nhập số hiệu HRMS"  required>
                    @error('so_hieu_hrms')
                    <small class="help-block text-danger">{{$message}}</small>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="erp">Mã ERP</label>
                    <input type="text" class="form-control" id="erp" name="ma_erp" value="{{$nhanVien->ma_erp}}" placeholder="Nhập mã ERP" required>
                    @error('ma_erp')
                    <small class="help-block text-danger">{{$message}}</small>
                    @enderror
                </div>
            </div>
        </div>
        <input type="hidden" name="id" value="{{$nhanVien->id}}"/>
        <div class="form-group">
            <button type="submit" class="btn btn-info">
                <i class="fal fa-save mr-1"></i>
                Cập nhật thông tin
            </button>
        </div>
    </form>
@stop
