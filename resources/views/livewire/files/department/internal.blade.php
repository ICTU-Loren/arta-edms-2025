@extends('layouts.app')

@section('content')

        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-3">
                  <div class="col-sm-6">
                      <h5 class="m-1">Internal Documents<span class="ml-2" style="font-size:18px;color:#737373;">Department</span></h5>
                  </div><!-- /.col -->
                  <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                      <li class="breadcrumb-item"><a href="{{ route('dashboard')}}">Dashboard</a></li>
                      <li class="breadcrumb-item active">Department</li>
                    </ol>
                  </div>
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
              <div class="row">
                <div class="col-12">

                      @if(Session::has('message'))
                        <div class="alert alert-success alert-dismissible mb-3">
                          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            {{Session::get('message')}}
                        </div>
                      @endif

                      @if ($message = Session::get('success'))
                        <div class="alert alert-success alert-dismissible mb-3">
                          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                          {{ $message }}
                        </div>
                      @endif

                  <!-- Default box -->
                  <div class="card card-outline card-info">
                    <div class="card-body">

                    <table id="divunitinternal" class="table table-bordered table-striped table-hover">
                          <thead>
                            <tr>
                              <th hidden>ID</th>
                              <th width="8%">EDMS No.</th>
                              <th width="15%">Addressed to</th>
                              <th width="10%">Classification</th>
                              <th width="30%">Title</th>
                              <th width="5%">Status</th>
                              <th width="5%">Action</th>
                            </tr>
                          </thead>

                          @foreach ($internals as $internals)

                            <tr>
                              <td hidden>{{ ++$i }}</td>
                              <td>{{ $internals->dts }}{{ $internals->id }}</td>
                              <td>{{ $internals->personnel }} <br />{{ $internals->div_unit }}</td>
                              <td>{{ $internals->doc_class }}</td>
                              <td>{{ $internals->subject }}</td>
                              <td>
                                @if ($internals->status == 'Open')
                                  <label class="badge badge-warning"> {{ $internals->status }} </label>
                                  @else
                                    <label class="badge badge-secondary"> {{ $internals->status}} </label>
                                @endif
                              </td>
                              <td><a class="btn btn-primary btn-sm mr-0" href="{{ route('iv.index',$internals->id) }}">View</a></td>
                            </tr>

                          @endforeach
                      </table>

                    </div>
                    <div class="card-footer">
                      <button type="button" class="btn btn-secondary btn-sm" onclick="goBack()">Back</button>
                    </div>
                  </div>
                  <!-- /.card-outline -->
                </div>
              </div>
            </div>
        </section>
        <!-- /.Main content -->

</body>
</html>

<script>
    function goBack() {
        window.history.back();
    }
</script>
        
@endsection
