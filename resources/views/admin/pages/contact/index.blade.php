@extends('admin.layouts.master', ['title' => 'Messages | Burak Cetinkaya'])
@section('css')
<!-- DataTables -->
<link rel="stylesheet" href="/adminassets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="/adminassets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
<link rel="stylesheet" href="/adminassets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Admin Panel</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            @if(count($errors) > 0)
                <div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h5><i class="icon fas fa-ban"></i> WARNING!</h5>
                   Error was encountered
                </div>
            @endif
            @if(session()->has('message'))
                <div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h5><i class="icon fas fa-check"></i> WARNING!</h5>
                    {{Session::get('message')}}
                </div>
            @endif
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Name and Surname</th>
                                        <th>Email</th>
                                        <th>Subject</th>
                                        <th>Date</th>
                                        <th>Contact Settings</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if($messages)
                                        @foreach($messages as $message)
                                            <tr>
                                                <td>{{$message->name}}</td>
                                                <td>{{$message->email}}</td>
                                                <td>{{$message->subject}}</td>
                                                <td>{{$message->created_at}}</td>
                                                <td>
                                                    <div class="text-center">
                                                        <a class="btn btn-primary" href="{{url('/admin/mesajlar/goruntule')."/".$message->id}}"><i class="fa fa-eye"></i><span class="ml-2 font-weight-bold">View Message</span></a>
                                                        <a class="btn btn-danger" href="{{url('/admin/mesajlar/sil')."/".$message->id}}"><i class="fa fa-trash"></i><span class="ml-2 font-weight-bold">Delete</span></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            @endforeach
                                            @endif
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
@section('js')
<!-- DataTables  & Plugins -->
<script src="/adminassets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="/adminassets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="/adminassets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="/adminassets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="/adminassets/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="/adminassets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="/adminassets/plugins/jszip/jszip.min.js"></script>
<script src="/adminassets/plugins/pdfmake/pdfmake.min.js"></script>
<script src="/adminassets/plugins/pdfmake/vfs_fonts.js"></script>
<script src="/adminassets/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="/adminassets/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="/adminassets/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="/adminassets/dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
@endsection
