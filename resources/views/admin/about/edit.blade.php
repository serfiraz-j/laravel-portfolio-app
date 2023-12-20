@extends('admin.layouts.pages-layout')
@section('pageTitle', $pageTitle)
@section('content')
<section class="content">
    <div class="row">
      <!-- left column -->
      <div class="col-md-6">
        <!-- general form elements -->
        <div class="box box-primary">
          <div class="box-header">
            <h3 class="box-title">Edit About Section</h3>
          </div><!-- /.box-header -->
          <!-- form start -->
          <form role="form" method="POST" action="{{ route('admin.update.about', $aboutData->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
        
            <div class="box-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">About Details</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="about_details" value="{{ $aboutData->about_details }}" placeholder="Enter about details">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">About Image</label>
                    <input type="file" class="form-control" id="exampleInputEmail1" name="about_image">
                    <img src="{{ $aboutData->about_image }}" width="150" height="150" alt="">
                </div>
            </div><!-- /.box-body -->
        
            <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
        </div><!-- /.box -->

      
        
        </div><!-- /.box -->
      </div><!--/.col (right) -->
    </section>
    
@endsection