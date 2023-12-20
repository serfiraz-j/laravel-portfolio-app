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
            <h3 class="box-title">Add Contact Section</h3>
          </div><!-- /.box-header -->
          <!-- form start -->
          <form role="form" method="POST" action="{{ route('admin.store.contact') }}">
            @csrf
            <div class="box-body">
              <div class="form-group">
                <label for="exampleInputEmail1">Phone</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="phone" placeholder="Enter phone">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Mobile</label>
                <input type="text" class="form-control" id="exampleInputPassword1" name="mobile" placeholder="Enter mobile">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Email</label>
                <input type="text" class="form-control" id="exampleInputPassword1" name="email" placeholder="Enter email">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Facebook URL</label>
                <input type="text" class="form-control" id="exampleInputPassword1" name="facebook_url" placeholder="Enter facebook url">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Twitter URL</label>
                <input type="text" class="form-control" id="exampleInputPassword1" name="twitter_url" placeholder="Enter twitter url">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Instagram URL</label>
                <input type="text" class="form-control" id="exampleInputPassword1" name="instagram_url" placeholder="Enter instagram url">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Dribbble URL</label>
                <input type="text" class="form-control" id="exampleInputPassword1" name="dribbble_url" placeholder="Enter dribbble url">
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