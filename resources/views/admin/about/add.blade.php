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
            <h3 class="box-title">Add About Section</h3>
          </div><!-- /.box-header -->
          <!-- form start -->
          <form role="form" method="POST" action="{{route('admin.store.about')}}" enctype="multipart/form-data">
            @csrf
            <div class="box-body">
              <div class="form-group">
                <label for="exampleInputEmail1">About Detail</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="about_details" placeholder="Enter details">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">About Image</label>
                <input type="file" class="form-control" id="exampleInputPassword1" name="about_image">
              </div>
              {{-- <div class="form-group">
                <label for="exampleInputFile">File input</label>
                <input type="file" id="exampleInputFile">
                <p class="help-block">Example block-level help text here.</p>
              </div>
              <div class="checkbox">
                <label>
                  <input type="checkbox"> Check me out
                </label>
              </div> --}}
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