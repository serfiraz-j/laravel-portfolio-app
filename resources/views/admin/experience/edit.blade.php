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
            <h3 class="box-title">Edit Experience Section</h3>
          </div><!-- /.box-header -->
          <!-- form start -->
          <form role="form" method="POST" action="{{route('admin.update.experience', $experienceData->id)}}">
            @method('PUT')
            @csrf
            <div class="box-body">
              <div class="form-group">
                <label for="exampleInputEmail1">Timeline</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="timeline" value="{{ $experienceData->timeline }}" placeholder="Enter timeline">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Title</label>
                <input type="text" class="form-control" id="exampleInputPassword1" name="title" value="{{ $experienceData->title }}" placeholder="Enter title">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Sub Title</label>
                <input type="text" class="form-control" id="exampleInputPassword1" name="sub_title" value="{{ $experienceData->sub_title }}" placeholder="Enter sub title">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Second Title</label>
                <input type="text" class="form-control" id="exampleInputPassword1" name="second_title" value="{{ $experienceData->second_title }}" placeholder="Enter second title">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Description</label>
                <input type="text" class="form-control" id="exampleInputPassword1" name="description" value="{{ $experienceData->description }}" placeholder="Enter description">
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