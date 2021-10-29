@extends('layouts.admin')
@section('title', 'Edit')
@section('content')
    <form action="{{route('product.update', $product->id)}}" method="POST">
        @csrf @method('PUT')
        <div class="row">
            <div class="col-md-9">
                <div class="form-group">
                    <label for="title">Name</label>
                    <input type="text" class="form-control" id="title" name="name" value="{{$product->name}}"
                           placeholder="Product name" required>
                    @error('name')
                    <small class="help-block text-danger">{{$message}}</small>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="slug">Slug</label>
                    <input type="text" class="form-control" id="slug" name="slug" value="{{$product->slug}}"
                           placeholder="Product slug">
                </div>
                <div class="form-group">
                    <label for="desc">Description</label>
                    <textarea class="form-control" name="description" id="desc" rows="8"
                              placeholder="Enter description">{{$product->description}}</textarea>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label for="cat">Category</label>
                    <select class="custom-select" id="cat" name="category_id" required>
                        <option selected value="">Choose...</option>
                        @foreach($categories as $cate)
                            <option
                                value="{{$cate->id}}" {{($product->category_id == $cate->id) ? 'selected' : ''}}>{{$cate->name}}</option>
                        @endforeach
                    </select>
                    @error('category_id')
                    <small class="help-block text-danger">{{$message}}</small>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="price">Price</label>
                    <input type="text" class="form-control" id="title" name="price" value="{{$product->price}}"
                           placeholder="Product price"
                           required>
                    @error('price')
                    <small class="help-block text-danger">{{$message}}</small>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="sale_price">Sale price</label>
                    <input type="text" class="form-control" id="sale_price" name="sale_price"
                           value="{{$product->sale_price}}"
                           placeholder="Product sale price">
                    @error('sale_price')
                    <small class="help-block text-danger">{{$message}}</small>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="image">Image</label>
                    <div id="img-thumb">
                        @if(!empty($product->image))
                            <img class="img-fluid mt-2 mb-2" src="{{url('uploads')}}/{{$product->image}}" alt="">
                        @endif
                    </div>
                    <input type="hidden" id="image" name="image" value="{{$product->image}}">
                    <button type="button" class="btn btn-info btn-block" data-toggle="modal" data-target=".image-modal">
                        <i class="fal fa-plus mr-1"></i>
                        Select Image
                    </button>
                </div>
                <div class="form-group">
                    <label for="image">Gallery</label>
                    <div id="img-gallery" class="row">
                        @if(!empty($product->list_image))
                            @foreach(json_decode($product->list_image, true) as $image)
                                <div class="col-md-4 pr-0 mb-2">
                                    <img src="{{url('uploads')}}/{{$image}}" alt="" class="img-fluid">
                                </div>
                            @endforeach
                        @endif
                    </div>
                    <input type="hidden" id="image-list" name="list_image" value="{{$product->list_image}}">
                    <button type="button" class="btn btn-info btn-block" data-toggle="modal"
                            data-target=".image-list-modal">
                        <i class="fal fa-plus mr-1"></i>
                        Select image gallery
                    </button>
                </div>
                <div class="form-group">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="status" id="public"
                               value="1" {{($product->status == 1) ? 'checked' : ''}}>
                        <label class="form-check-label" for="public">
                            Public
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="status" id="private"
                               value="0" {{($product->status == 0) ? 'checked' : ''}}>
                        <label class="form-check-label" for="private">
                            Private
                        </label>
                    </div>
                </div>
            </div>
        </div>
        <input type="hidden" name="id" value="{{$product->id}}"/>
        <div class="form-group">
            <button type="submit" class="btn btn-info">
                <i class="fal fa-save mr-1"></i>
                Save
            </button>
        </div>
    </form>
    <!-- Modal -->
    @include('./admin.modals.image')
    @include('./admin.modals.image-list')
@stop
@section('css')
    <link rel="stylesheet" href="{{url('backend')}}/plugins/summernote/summernote-bs4.min.css">
@stop
@section('js')
    <script src="{{url('backend')}}/plugins/summernote/summernote-bs4.min.js"></script>
    <script>
        $(function () {
            // Summernote
            $('#desc').summernote({
                height: 250,
                placeholder: 'Enter description..'
            })
        })
    </script>
@stop
