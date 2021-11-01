@extends('layouts.admin')
@section('title', 'Người phụ thuộc')
@section('content')
<table id="example" class="table table-striped table-bordered" style="width:100%">
    <thead>
        <tr>
            <th>STT</th>
            <th>Họ tên</th>
            <th>Vai trò</th>
            <th>Hành động</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($admins as $admin )
        <tr>
            <td>{{++$loop->index}}</td>
            <td>{{$admin->name}}</td>
            <td>
                @foreach ($admin->roles as $role )
                <span class="badge badge-primary">{{$role->name}}</span>
                @endforeach
            </td>
            <td class="text-right">
                <a type="button" href="{{url('admin/thay-doi-thong-tin/'.$admin->id)}}" class="btn btn-sm btn-primary">
                    <i class="fal fa-edit"></i>
                </a>
                <a type="button" href="#" class="btn btn-sm btn-danger btn-delete">
                    <i class="fal fa-trash-alt"></i>
                </a>
            </td>
        </tr>
        @endforeach


    </tbody>
</table>

@endsection

@section('js')
<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap4.min.js"></script>

    <script>

        // $('.btn-delete').click(function (e) {
        //     e.preventDefault();
        //     let href = $(this).attr('href');
        //     let form = $('form#form-delete');
        //     form.attr('action', href);
        //     if (confirm('Are you sure you want to delete')) {
        //         form.submit();
        //     }
        // })
        $(document).ready(function() {
            $('#example').DataTable();
        } );
    </script>
@stop
@section('css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap4.min.css">
@endsection
