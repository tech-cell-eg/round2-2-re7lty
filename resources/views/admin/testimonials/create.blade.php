@extends('admin.master')
@section('title', 'Add Testimonial')
@section('content')

<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Manage Testimonials</h3>
            </div>
        </div>
        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Add Testimonial</h2>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <br />
                        <form action="{{ route('admin.testimonials.store') }}" method="POST" enctype="multipart/form-data" class="form-horizontal form-label-left">
                            @csrf

                            <!-- Name Field -->
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="name">Name <span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6">
                                    <input type="text" id="name" name="name" value="{{ old('name') }}" required class="form-control">
                                    @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <!-- Content Field -->
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="content">Content <span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6">
                                    <textarea id="content" name="content" required class="form-control">{{ old('content') }}</textarea>
                                    @error('content')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <!-- Image Field -->
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="image">Image</label>
                                <div class="col-md-6 col-sm-6">
                                    <input type="file" id="image" name="image" class="form-control">
                                    @error('image')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <!-- Rating Field -->
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align">Rating <span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6">
                                    <select name="rating" class="form-control" required>
                                        <option value="1" {{ old('rating') == 1 ? 'selected' : '' }}>★☆☆☆☆</option>
                                        <option value="2" {{ old('rating') == 2 ? 'selected' : '' }}>★★☆☆☆</option>
                                        <option value="3" {{ old('rating') == 3 ? 'selected' : '' }}>★★★☆☆</option>
                                        <option value="4" {{ old('rating') == 4 ? 'selected' : '' }}>★★★★☆</option>
                                        <option value="5" {{ old('rating', 5) == 5 ? 'selected' : '' }}>★★★★★</option>
                                    </select>
                                    @error('rating')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="ln_solid"></div>
                            <div class="item form-group">
                                <div class="col-md-6 col-sm-6 offset-md-3">
                                    <button class="btn btn-primary" type="reset">Cancel</button>
                                    <button type="submit" class="btn btn-success">Add</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
