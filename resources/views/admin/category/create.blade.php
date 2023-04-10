@extends('layouts.admin')
@section('content')
    <div class="row">
        <div class="col-md-12 grid-margin">
            <div class="card">
                <div class="card-header">
                    <h3>
                        Add Category
                        <a href="javascript:history.go(-1)" class="btn btn-primary btn-sm text-white float-end">Back</a>
                    </h3>
                </div>
                <div class="card-body">
                    <form class="form-group" action="{{ route('admin.category') }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="name">
                                    Name
                                </label>
                                <input type="text" name="name" class="form-control" id="name" />
                                @error('name')
                                    <div class="text-danger text-uppercase">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="slug">
                                    Slug
                                </label>
                                <input type="text" name="slug" class="form-control" id="slug" />
                                @error('slug')
                                    <div class="text-danger text-uppercase">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="description">
                                    Description
                                </label>
                                <textarea name="description" class="form-control" id="description" rows="3"></textarea>
                                @error('description')
                                    <div class="text-danger text-uppercase">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="image">
                                    Image
                                </label>
                                <input type="file" name="image" class="form-control" id="image" />
                                @error('image')
                                    <div class="text-danger text-uppercase">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="status"><br />
                                    Status
                                </label>
                                <input type="checkbox" name="status" id="status" />
                            </div>
                            <div class="col-md-12">
                                <h4>SEO Tags</h4>
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="meta_title">
                                    Meta title
                                </label>
                                <input type="text" name="meta_title" class="form-control" id="meta_title" />
                                @error('meta_title')
                                    <div class="text-danger text-uppercase">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="meta_keyword">
                                    Meta Keywords
                                </label>
                                <textarea name="meta_keyword" class="form-control" id="meta_keyword" rows="3"></textarea>
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="meta_description">
                                    Meta Description
                                </label>
                                <textarea name="meta_description" class="form-control" id="meta_description" rows="3"></textarea>
                                @error('meta_description')
                                    <div class="text-danger text-uppercase">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="col-md-12 mb-3">
                                <button type="submit" class="btn btn-primary float-end">
                                    Save
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
