@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html>
<head>
    <title>Laravel 8 Datatables Tutorial - ItSolutionStuff.com</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
    <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <link  href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>

</head>
<body>

        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-3">
                <div class="col-sm-6">
                    <h4 class="m-1">External Documents</h4>
                </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
              <div class="row">
                <div class="col-12">
                  <!-- Default box -->
                  <div class="card card-outline card-info">
                    <div class="card-body">

                      @if(Session::has('message'))
                        <div class="alert alert-success" style="margin-bottom:30px">
                          {{Session::get('message')}}
                        </div>
                      @endif

                      @if ($message = Session::get('success'))
                        <div class="alert alert-success" style="margin-bottom:30px">
                        <p>{{ $message }}</p>
                        </div>
                      @endif

                      <table class="table table-bordered table-hover dataTable dtr-inline data-table" id="datatable-crud">
                          <thead>
                              <tr>
                                  <th width="80px">DTS No.</th>
                                  <th>Title</th>
                                  <th>Subject</th>
                                  <th width="50px">Created</th>
                                  <th width="95px">Action</th>
                              </tr>
                          </thead>
                          <tbody>
                          </tbody>
                      </table>
                    </div>
                  </div>
                  <!-- /.card-outline -->
                </div>
              </div>
            </div>
        </section>
        <!-- /.Main content -->

</body>
   
<script type="text/javascript">
  $(document).ready( function () {
    $.ajaxSetup({
      headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });
    
    $('#datatable-crud').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ route('external.index') }}",
        columns: [
            {data: 'id', name: 'id'},
            {data: 'doc_title', name: 'doc_title'},
            {data: 'subject', name: 'subject'},
            {data: 'date_received', name: 'date_received'},
            {data: 'action', name: 'action', orderable: false, searchable: false},
        ],

        order: [[0, "DESC"]], //column indexes is zero based
    });

    $('body').on('click', '.delete', function () {
      if (confirm("Delete Record?") == true) {
        var id = $(this).data('id');
      
      // ajax
      
      $.ajax({
        type:"POST",
        url: "{{ url('delete-document') }}",
        data: { id: id},
        dataType: 'json',
        success: function(res){
          var oTable = $('#datatable-crud').dataTable();
        oTable.fnDraw(false); }
      
      });
    }
    });
  });
</script>
</html>
        
@endsection