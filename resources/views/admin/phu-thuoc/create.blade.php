@extends('layouts.admin')
@section('title', 'Thêm mới người phụ thuộc')
@section('content')
    <form action="{{route('phu-thuoc.store')}}" method="POST">
        @csrf
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="ho-ten">Họ tên</label>
                    <input type="text" class="form-control" id="ho-ten" name="ho_ten" placeholder="Category name" required>
                    @error('name')
                    <small class="help-block text-danger"></small>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="slug">Ngày sinh</label>
                    <input type="text" class="form-control" id="slug" name="ngay_sinh" placeholder="Category slug">
                </div>
                <div class="form-group">
                    <label for="priority">Priority</label>
                    <input type="number" class="form-control" id="priority" name="priority"
                           placeholder="Priority number" min="0" required>
                    @error('priority')
                    <small class="help-block text-danger"></small>
                    @enderror
                </div>
                <div class="form-group">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="status" id="public" value="1" checked>
                        <label class="form-check-label" for="public">
                            Public
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="status" id="private" value="0">
                        <label class="form-check-label" for="private">
                            Private
                        </label>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="desc">Description</label>
                    <textarea class="form-control" name="description" id="desc" rows="8"
                              placeholder="Enter description"></textarea>
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
