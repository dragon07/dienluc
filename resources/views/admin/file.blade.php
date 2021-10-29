@extends('layouts.admin')
@section('title', 'File Manager')
@section('content')
    <iframe src="{{url('file/dialog.php')}}" style="width: 100%; height:500px; border: none; overflow-y: auto">
    </iframe>
@stop
