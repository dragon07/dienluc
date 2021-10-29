@extends('layouts.admin')
@section('title', 'Thêm mới nhân viên')
@section('content')
    <form action="{{route('nhan-vien.store')}}" method="POST">
        @csrf
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="ho-ten">Họ tên</label>
                    <input type="text" class="form-control" id="ho-ten" name="ho_ten" placeholder="Nhập họ tên" required>
                    @error('name')
                    <small class="help-block text-danger"></small>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="slug">Mã số thuế</label>
                    <input type="text" class="form-control" id="mst" name="mst" placeholder="Nhập mã số thuế" required>
                </div>
                <div class="form-group">
                    <label for="hrms">Số hiệu HRMS</label>
                    <input type="text" class="form-control" id="hrms" name="so_hieu_hrms" placeholder="Nhập số hiệu HRMS"  required>
                    @error('priority')
                    <small class="help-block text-danger"></small>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="erp">Mã ERP</label>
                    <input type="text" class="form-control" id="erp" name="ma_erp" placeholder="Nhập mã ERP" required>
                </div>
            </div>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-success">
                <i class="fal fa-plus-circle"></i>
                Thêm mới
            </button>
        </div>
    </form>
@stop
