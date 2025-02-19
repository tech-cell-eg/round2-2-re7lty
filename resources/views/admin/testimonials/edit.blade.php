@extends('admin.master')
@section('title', 'Edit Testimonial')
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
                        <h2>Edit Testimonial</h2>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <br />
                        <form action="{{ route('admin.testimonials.update', $testimonial->id) }}" method="POST" enctype="multipart/form-data" class="form-horizontal form-label-left">
                            @csrf
                            @method('PUT')

                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="name">Name <span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6">
                                    <input type="text" id="name" name="name" value="{{ $testimonial->name }}" required class="form-control">
                                </div>
                            </div>

                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="content">Content <span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6">
                                    <textarea id="content" name="content" required class="form-control">{{ $testimonial->content }}</textarea>
                                </div>
                            </div>

                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="image">Image</label>
                                <div class="col-md-6 col-sm-6">
                                    <input type="file" id="image" name="image" class="form-control">
                                    @if($testimonial->image)
                                        <img src="{{ asset('uploads/testimonials/' . $testimonial->image) }}" width="100" class="mt-2">
                                    @endif
                                </div>
                            </div>

                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="rating">Rating <span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6">
                                    <input type="number" id="rating" name="rating" min="1" max="5" value="{{ $testimonial->rating }}" required class="form-control">
                                </div>
                            </div>

                            <div class="ln_solid"></div>
                            <div class="item form-group">
                                <div class="col-md-6 col-sm-6 offset-md-3">
                                    <a href="{{ route('admin.testimonials.index') }}" class="btn btn-primary">Cancel</a>
                                    <button type="submit" class="btn btn-success">Update</button>
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
