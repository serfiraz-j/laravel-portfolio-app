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
            <h3 class="box-title">Add Project Section</h3>
          </div><!-- /.box-header -->
          <!-- form start -->
          <form role="form" method="POST" action="{{route('admin.store.project')}}" enctype="multipart/form-data">
            @csrf
            <div class="box-body">
              <div class="form-group">
                <label for="exampleInputEmail1">Class</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="class" placeholder="Enter class">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Image</label>
                <input type="file" class="form-control" id="exampleInputPassword1" name="image">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Title</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="title" placeholder="Enter title">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Sub Title</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="sub_title" placeholder="Enter sub title">
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