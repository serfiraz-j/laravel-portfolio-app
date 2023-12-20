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
            <h3 class="box-title">Edit Project Section</h3>
          </div><!-- /.box-header -->
          <!-- form start -->
          <form role="form" method="POST" action="{{ route('admin.update.project', $projectData->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
        
            <div class="box-body">
              <div class="form-group">
                <label for="exampleInputEmail1">Class</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="class" value="{{ $projectData->class }}" placeholder="Enter class">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Image</label>
                <input type="file" class="form-control" id="exampleInputPassword1" name="image">
                <img src="{{ $projectData->image }}" width="150" height="150" alt="">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Title</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="title" value="{{ $projectData->title }}" placeholder="Enter title">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Sub Title</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="sub_title" value="{{ $projectData->sub_title }}" placeholder="Enter sub title">
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