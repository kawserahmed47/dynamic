@extends('backend.master')

@section('content')
 <!-- Content Header (Page header) -->
 <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">About</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
            <li class="breadcrumb-item active">Add About</li>
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
              <h3 class="card-title">Add About</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
          <form role="form" id="sliderInsertForm" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="card-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">About Company</label>
                  <textarea class="form-control" placeholder="About Company"></textarea>
                </div>

                <div class="row form-group">
                  <div class="col-md-6">
                    <label for="exampleInputFile">Related Image</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" id="inputImg" accept=".jpg, .jpeg, .png" required name="image" >
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <img style="height: 100px; width:100px" src="" id="previewImg" alt="Preview">
                  </div>
                
                </div>

                <hr><br>
                <div class="form-group">
                  <label for="exampleInputEmail1">Company's Mission</label>
                  <textarea class="form-control" placeholder="Company's Mission"></textarea>
                </div>

                <div class="row form-group">
                  <div class="col-md-6">
                    <label for="exampleInputFile">Related Image</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" id="inputImg" accept=".jpg, .jpeg, .png" required name="image" >
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <img style="height: 100px; width:100px" src="" id="previewImg" alt="Preview">
                  </div>
                
                </div>

                <hr><br>
                <div class="form-group">
                  <label for="exampleInputEmail1">Company's Vision</label>
                  <textarea class="form-control" placeholder="Company's Vision"></textarea>
                </div>

                <div class="row form-group">
                  <div class="col-md-6">
                    <label for="exampleInputFile">Related Image</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" id="inputImg" accept=".jpg, .jpeg, .png" required name="image" >
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <img style="height: 100px; width:100px" src="" id="previewImg" alt="Preview">
                  </div>
                
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