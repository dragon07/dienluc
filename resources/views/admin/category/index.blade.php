@extends('layouts.admin')
@section('title', 'All Category')
@section('content')
    <div class="d-md-flex justify-content-between mb-3">
        <form class="form-inline mb-2 mb-md-0">
            <input type="text" class="form-control mr-sm-2" name="key" value="{{$key}}" placeholder="Enter name">
            <button type="submit" class="btn btn-primary">Search</button>
        </form>
        <a class="btn btn-success" href="{{route('category.create')}}">
            <i class="fal fa-plus-circle"></i>
            Add new
        </a>
    </div>
    <div class="table-responsive">
        <table class="table">
            <thead class="thead-light">
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Name</th>
                <th scope="col">Total product</th>
                <th scope="col">Status</th>
                <th scope="col">Created date</th>
                <th scope="col" class="text-right">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($data as $cat)
                <tr>
                    <td>{{$cat->id}}</td>
                    <td>{{$cat->name}}</td>
                    <td>{{count($cat->products)}}</td>
                    <td>
                        @if($cat->status == 0)
                            <span class="badge badge-secondary">Private</span>
                        @else
                            <span class="badge badge-success">Publish</span>
                        @endif
                    </td>
                    <td>{{$cat->created_at->format('d/m/Y')}}</td>
                    <td class="text-right">
                        <a type="button" href="{{route('category.edit', $cat->id)}}" class="btn btn-sm btn-primary">
                            <i class="fal fa-edit"></i>
                        </a>
                        <a type="button" href="{{route('category.destroy', $cat->id)}}"
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
