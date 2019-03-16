
<!DOCTYPE html>
<html>
<head>
  @include('admin.head')
</head>

<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    @include('admin.header')
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
   
  </aside>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      
          <div class="row">
            
        <!-- left column -->
       <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                      <div class="card-body">

                          {!! Form::model($data,['route'=>['kategori.update',$data->id],'method'=>'PUT']) !!}

                            <div class="form-group row">
                                    <label class="col-md-2 col-form-label text-md-right">Nama kategori</label>
                                    <div class="col-md-6">
                                      {!! Form::text('nama_kategori',null,['class'=>'form-control']) !!}
                                    </div>
                            </div>

                            <div class="form-group row">
                                    <label class="col-md-2 col-form-label text-md-right">Jenis</label>
                                    <div class="col-md-6">
                                      {!! Form::text('jenis',null,['class'=>'form-control']) !!}
                                    </div>
                            </div>

                            <div class="form-group row mb-0">
                                    <div class="col-md-6 offset-md-2">
                                        <button type="submit" class="btn btn-danger">Update Data</button>
                                    </div>
                          </div>
                      </div>
                  </div>
            </div>
        </div>
    </div>
        
        <!--/.col (right) -->
      
        </div>
          <!-- /.row -->

    </section>
    <!-- /.content -->
  
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    @include('admin.footer')
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    @include('admin.controlside')
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->
  @include('admin.script')

</body>
</html>
