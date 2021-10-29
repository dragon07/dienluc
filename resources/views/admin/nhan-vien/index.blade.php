@extends('layouts.admin')
@section('title', 'Nhân Viên')
@section('content')
    <div class="d-md-flex justify-content-between mb-3">
        <form class="form-inline mb-2 mb-md-0">
            <input type="text" class="form-control mr-sm-2" name="key" value="{{$key}}" placeholder="Nhập tên">
            <button type="submit" class="btn btn-primary">Tìm kiếm</button>
        </form>
        <a class="btn btn-success" href="{{route('nhan-vien.create')}}">
            <i class="fal fa-plus-circle"></i>
            Thêm mới
        </a>
    </div>
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">STT</th>
                <th scope="col">Họ tên</th>
                <th scope="col">MST</th>
                <th scope="col">Số hiệu HRMS</th>
                <th scope="col">Ngày tạo</th>
                <th scope="col" class="text-right">Action</th>
            </tr>
            </thead>
            <tbody>
                @foreach($data as $nhanVien)
                <tr>
                    <td>{{$nhanVien->id}}</td>
                    <td>{{$nhanVien->ho_ten}}</td>
                    <td>{{$nhanVien->mst}}</td>
                    <td>{{$nhanVien->so_hieu_hrms}}</td>
                    <td>{{$nhanVien->created_at->format('d-m-Y H:i:s')}}</td>
                    <td class="text-right">
                        <a type="button" href="{{route('nhan-vien.edit', $nhanVien->id)}}" class="btn btn-sm btn-primary">
                            <i class="fal fa-edit"></i>
                        </a>
                        <a type="button" href="{{route('nhan-vien.destroy', $nhanVien->id)}}"
                           class="btn btn-sm btn-danger btn-delete">
                            <i class="fal fa-trash-alt"></i>
                        </a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <form id="form-delete" method="post" action="">
            @csrf @method('DELETE')
        </form>
    </div>
    <hr>
    <div class="d-flex justify-content-center">
        {{ $data->appends(request()->all())->links() }}
    </div>
@stop

@section('js')
    <script>
        $('.btn-delete').click(function (e) {
            e.preventDefault();
            let href = $(this).attr('href');
            let form = $('form#form-delete');
            form.attr('action', href);
            if (confirm('Are you sure you want to delete')) {
                form.submit();
            }
        })
    </script>
@stop
