@extends('layouts.admin')
@section('title', 'Edit category')
@section('content')
    <form action="{{route('category.update', $category->id)}}" method="POST">
        @csrf @method('PUT')
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="title">Name</label>
                    <input type="text" class="form-control" id="title" name="name" value="{{$category->name}}"
                           placeholder="Category name" required>
                    @error('name')
                    <small class="help-block text-danger">{{$message}}</small>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="slug">Slug</label>
                    <input type="text" class="form-control" id="slug" name="slug" value="{{$category->slug}}"
                           placeholder="Category slug">
                </div>
                <div class="form-group">
                    <label for="priority">Priority</label>
                    <input type="number" class="form-control" id="priority" name="priority"
                           value="{{$category->priority}}"
                           placeholder="Priority number" min="0" required>
                    @error('priority')
                    <small class="help-block text-danger">{{$message}}</small>
                    @enderror
                </div>
                <div class="form-group">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="status" id="public"
                               value="1" {{($category->status == 1) ? 'checked' : ''}} >
                        <label class="form-check-label" for="public">
                            Public
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="status" id="private"
                               value="0" {{($category->status == 0) ? 'checked' : ''}}>
                        <label class="form-check-label" for="private">
                            Private
                        </label>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="desc">Description</label>
                    <textarea class="form-control" name="description" id="desc" rows="7"
                              placeholder="Enter description">{{$category->description}}</textarea>
                </div>
            </div>
        </div>
        <input type="hidden" name="id" value="{{$category->id}}"/>
        <div class="form-group">
            <button type="submit" class="btn btn-info">
                <i class="fal fa-save mr-1"></i>
                Save
            </button>
        </div>
    </form>
@stop
