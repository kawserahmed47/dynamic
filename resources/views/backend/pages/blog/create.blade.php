@extends('backend.master')

@section('content')
 <!-- Content Header (Page header) -->
 <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Blog</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
            <li class="breadcrumb-item active">Add Blog</li>
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
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Add Blog</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
          <form role="form" id="sliderInsertForm" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="card-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Title</label>
                  <input type="text" required name="title" class="form-control" id="exampleInputEmail1" placeholder="Enter title">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Subtitle</label>
                  <input type="text" required name="subtitle" class="form-control" id="exampleInputPassword1" placeholder="Enter subtitle">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Description</label>
                  <textarea class="form-control" name="" id="" cols="30" rows="5" placeholder="Enter description"></textarea>
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">Image input</label>
                  <div class="input-group">
                    <div class="custom-file">
                      <input type="file" id="inputImg" accept=".jpg, .jpeg, .png" required name="image" >
                    </div>
                  </div>
                  <img style="height: 100px; width:100px" src="" id="previewImg" alt="Preview">
                </div>
              </div>
              <!-- /.card-body -->

              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
          <!-- /.card -->
        </div>
      </div>
    </div>
  </section>

    
@endsection