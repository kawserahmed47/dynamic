@extends('backend.master')

@section('content')
 <!-- Content Header (Page header) -->
 <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Testimonial</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
            <li class="breadcrumb-item active">View Testimonial</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->



     <!-- Main content -->
     <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Testimonial View</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>                  
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Name</th>
                      <th>Comments</th>
                      <th>Image</th>
                      <th>Status</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    {{-- @if ($sliders)
                      @foreach ($sliders as $key=>$slider)
                        <tr>
                        <td>{{++$key}}</td>
                        <td>{{$slider->title}}</td>
                        <td>{{$slider->subtitle}}</td>
                        <td><img src="{{asset('/')}}{{$slider->image}}" height="100" width="200" alt="Preview"></td>
                          <td>
                            @if ($slider->status == 0)
                              <span class="badge bg-danger">Inactive</span>
                            @elseif($slider->status == 1)
                              <span class="badge bg-success">Active</span>
                            @endif
                           
                          </td>
                        <td>
                        <a class="btn btn-info" href="{{route('slider.edit', $slider->id)}}">Edit</a>
                          <a onclick="return confirm('Are you sure?')" class="btn btn-danger" href="{{route('sliderDelete', $slider->id)}}">Delete</a>
                        </td>
                        </tr>
                      @endforeach
                    @endif --}}
                   
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div>
  </section>
  
    
@endsection