
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
   @include('admin.sidebar')
  </aside>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Kategori</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      
          <div class="row">
            
        <div class="col-md-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Kategori</h3>

              <div class="box-tools">
                <form action="/kategori" method="GET">
                    <input type="text" name="cari" placeholder="Cari kategori ..">
                    <input type="submit">
                </form>
              </div>
            </div>
            <div class="box-header with-border">
            </div>
            <!-- /.box-header -->
            <div class="box-body">

              <a href="{{ route('kategori.create')}}" class="btn btn-success btn-sm">Tambah Kategori</a>
              
              <table class="table table-bordered" id="users-table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Kategori</th>
                                <th>Jenis</th>
                                <th>Aksi</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no=1; ?>
                            @foreach ($data as $row)
                            <tr>
                                <td>{{ $no }}</td>
                                <td>{{ $row->nama_kategori }}</td>
                                <td>{{ $row->jenis }}</td>
                                <td>
                                  <a href="{{ route('kategori.edit',$row->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                </td>
                                <td>
                                  {!! Form::open(['route'=>['kategori.destroy',$row->id],'method'=>'DELETE']) !!}
                                  <button type="submit" name="submit" class="btn btn-danger btn-sm">Delete</button>
                                  {!! Form::close() !!}
                                </td>
                            </tr>
                            <?php $no++; ?>
                            @endforeach
                            
                        </tbody>
                    </table>


                    <!-- <script>
                    function myFunction() {
                      var input, filter, table, tr, td, i, txtValue;
                      input = document.getElementById("myInput");
                      filter = input.value.toUpperCase();
                      table = document.getElementById("users-table");
                      tr = table.getElementsByTagName("tr");
                      for (i = 1; i < tr.length; i++) {
                        td = tr[i].getElementsByTagName("td")[1];
                        if (td) {
                          txtValue = td.textContent || td.innerText;
                          if (txtValue.toUpperCase().indexOf(filter) > -1) {
                            tr[i].style.display = "";
                          } else {
                            tr[i].style.display = "none";
                          }
                        }       
                      }
                    }
                </script> -->

            </div>


            <!-- /.box-body -->
            <div class="box-footer clearfix">
              <ul class="pagination pagination-sm no-margin pull-right">
                <li><a href="#">&laquo;</a></li>
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">&raquo;</a></li>
              </ul>
            </div>
          </div>
          <!-- /.box -->
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
