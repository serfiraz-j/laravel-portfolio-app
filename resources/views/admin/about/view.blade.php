@extends('admin.layouts.pages-layout')
@section('pageTitle', $pageTitle)
@section('content')
<section class="content">
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">About Section Data Table</h3>
          </div><!-- /.box-header -->
          <div class="box-body">
            <div id="example2_wrapper" class="dataTables_wrapper form-inline" role="grid"><div class="row"><div class="col-xs-6"></div>
            <div class="col-xs-6"></div>
        </div>
        <table id="example2" class="table table-bordered table-hover dataTable" aria-describedby="example2_info">
              <thead>
                <tr role="row">
                    <th>Serial Number</th>
                    <th>About Detail</th>
                    <th>About Image</th>
                    <th>Action</th>
              </thead>
              
              <tfoot>
                <tr>
                    <th>Serial Number</th>
                    <th>About Detail</th>
                    <th>About Image</th>
                    <th>Action</th>
                </tr>
              </tfoot>
            <tbody role="alert" aria-live="polite" aria-relevant="all">
                @foreach ($about as $key=>$ab)
                
                <tr class="odd">                                  
                  <td>{{++$key}}</td>
                  <td>{{$ab->about_details}}</td>
                  <td>
                    <img src="{{$ab->about_image}}" width="150" height="150" alt=""></td>
                  <td>
                    
                    <form method="POST" action="{{route('admin.delete.about', $ab->id)}}">
                      @method('DELETE')
                      @csrf
                      <a href="{{route('admin.edit.about', $ab->id)}}" class="btn btn-primary">Edit</a>
                      <button type="submit" class="btn btn-danger">Delete</button>
                    </form>                  
                    
                  </td>
                </tr>

                @endforeach
                
            </tbody>
        </table>
            <div class="row">
                <div class="col-xs-6">
                    <div class="dataTables_info" id="example2_info">Showing 1 to 10 of 57 entries</div>
                </div>
                <div class="col-xs-6">
                    <div class="dataTables_paginate paging_bootstrap">
                        <ul class="pagination">
                            <li class="prev disabled"><a href="#">← Previous</a></li>
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li class="next"><a href="#">Next → </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
          </div><!-- /.box-body -->
        </div><!-- /.box -->

      </div><!-- /.col -->
    </div><!-- /.row -->
  </section>
@endsection