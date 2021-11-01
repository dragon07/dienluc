@extends('layouts.admin')
@section('title', 'Thay đổi thông tin')
@section('content')
<form action="{{url('admin/thay-doi-thong-tin/'.$user->id)}}" method="POST">
<div class="row">
    <div class="col-8">

            @csrf
            <div class="form-group">
              <label for="exampleInputEmail1">Email</label>
              <input type="email" class="form-control" id="exampleInputEmail1" name="email" placeholder="Enter email" value="{{$user->email}}">
              @error('email')
                  <small class="text-danger">{{$message}}</small>
              @enderror
            </div>
            <div class="form-group">
                <label for="inputName">Name</label>
                <input type="text" class="form-control" id="inputName" name="name" placeholder="Enter name" value="{{$user->name}}">
                @error('name')
                  <small class="text-danger">{{$message}}</small>
              @enderror
              </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Password</label>
              <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
              @error('password')
                  <small class="text-danger">{{$message}}</small>
              @enderror
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>

    </div>
    <div class="col-4">
        @foreach ($roles as $role )
        <div class="input-container">
        <input id="role-{{$loop->index}}" type="radio" name="role" value="{{$role->name}}"
        @if ($user->roles->count()>0 && $user->roles->first()->id == $role->id)
            checked
        @endif
        >
        <label for="role-{{$loop->index}}"><span>{{$role->name}}</span></label>
        </div>
        @endforeach
    </div>
</div>
</form>
@endsection
