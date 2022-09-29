@extends('layouts.app')

@section('content')

        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-3">
                  <div class="col-sm-6">
                    <h5 class="m-0">Internal <span class="ml-2" style="font-size:18px;color:#737373;">Assigned Documents</span></h5>
                  </div><!-- /.col -->
                  <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                      <li class="breadcrumb-item"><a href="{{ route('dashboard')}}">Dashboard</a></li>
                      <li class="breadcrumb-item active">Division - Unit</li>
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

                    <table id="doneexternal" class="table table-bordered table-striped table-hover">
                          <thead>
                            <tr>
                              <th hidden>ID</th>
                              <th width="10%">DTS No.</th>
                              <th width="10%">Assigned date</th>
                              <th width="20%">Assigned by</th>
                              <th width="20%">Assigned to</th>
                              <th width="20%">Title</th>
                              <th width="15%">Action Required</th>
                              <th width="5%">Status</th>
                              <th width="5%">Action</th>
                            </tr>
                          </thead>

                          @foreach ($inroute as $inroute)

                            <tr>
                              <td hidden>{{ ++$i }}</td>
                              <td>{{ $inroute->dts }}{{ $inroute->dts_no }}</td>
                              <td>{{ $inroute->assigned_date }}</td>
                              <td>{{ $inroute->routed_by }} <br />{{ $inroute->routed_by_div_unit }}</td>
                              <td>{{ $inroute->personnel }} <br />

                                @if($inroute->div_unit > 0)
                                    @if ($inroute->div_unit == '1')
                                    Head Executive Assistant (HEA)
                                        @elseif ($inroute->div_unit == '2')
                                            Executive Assistant (EA)
                                        @elseif ($inroute->div_unit == '3')
                                            Administrative Officer
                                        @elseif ($inroute->div_unit == '4')
                                            PRU - Personnel
                                        @elseif ($inroute->div_unit == '5')
                                            Executive Assistant (EA)
                                        @elseif ($inroute->div_unit == '6')
                                            Administrative Officer
                                        @elseif ($inroute->div_unit == '7')
                                            Director
                                        @elseif ($inroute->div_unit == '8')
                                            Administrative Officer
                                        @elseif ($inroute->div_unit == '9')
                                            Finance Division
                                        @elseif ($inroute->div_unit == '10')
                                            General Services Division (GSD)
                                        @elseif ($inroute->div_unit == '11')
                                            Human Resource Development Division (HRDD)
                                        @elseif ($inroute->div_unit == '12')
                                            ICTU - Personnel
                                        @elseif ($inroute->div_unit == '13')
                                            PU - Personnel
                                        @elseif ($inroute->div_unit == '14')
                                            Executive Assistant (EA)
                                        @elseif ($inroute->div_unit == '15')
                                            Administrative Officer
                                        @elseif ($inroute->div_unit == '16')
                                            Director
                                        @elseif ($inroute->div_unit == '17')
                                            Administrative Officer
                                        @elseif ($inroute->div_unit == '18')
                                            Investigation and Enforcement Division (IED)
                                        @elseif ($inroute->div_unit == '19')
                                            Litigation Division
                                        @elseif ($inroute->div_unit == '20')
                                            Director
                                        @elseif ($inroute->div_unit == '21')
                                            Administrative Officer
                                        @elseif ($inroute->div_unit == '22')
                                            Legal Division
                                        @elseif ($inroute->div_unit == '23')
                                            Public Assistance Division (PAD)
                                        @elseif ($inroute->div_unit == '24')
                                            Executive Assistant (EA)
                                        @elseif ($inroute->div_unit == '25')
                                            Administrative Officer
                                        @elseif ($inroute->div_unit == '26')
                                            Director
                                        @elseif ($inroute->div_unit == '27')
                                            Administrative Officer
                                        @elseif ($inroute->div_unit == '28')
                                            Better Regulation Division A (BRD A)
                                        @elseif ($inroute->div_unit == '29')
                                            Better Regulation Division B (BRD B)
                                        @elseif ($inroute->div_unit == '30')
                                            Better Regulation Division C (BRD C)
                                        @elseif ($inroute->div_unit == '31')
                                            Better Regulation Division D (BRD D)
                                        @elseif ($inroute->div_unit == '32')
                                            Doing Business Division (DBD)
                                        @elseif ($inroute->div_unit == '33')
                                            Regulatory Management and Training Division (RMTD)
                                        @elseif ($inroute->div_unit == '34')
                                            Director
                                        @elseif ($inroute->div_unit == '35')
                                            Administrative Officer
                                        @elseif ($inroute->div_unit == '36')
                                            Compliance Monitoring and Evaluation Division A (CMED A)
                                        @elseif ($inroute->div_unit == '37')
                                            Compliance Monitoring and Evaluation Division B (CMED B)
                                        @elseif ($inroute->div_unit == '38')
                                            Compliance Monitoring and Evaluation Division C (CMED C)
                                        @else ($inroute->div_unit == '39')
                                            Compliance Monitoring and Evaluation Division D (CMED D)
                                    @endif
                                @endif

                              </td>
                              <td>{{ $inroute->subject }}</td>
                              <td>{{ $inroute->action_req }}</td>
                              <td>
                                @if ($inroute->status == 'New')
                                  <label class="badge badge-primary"> {{ $inroute->status }} </label>
                                  @elseif ($inroute->status == 'In-progress')
                                  <label class="badge badge-danger"> {{ $inroute->status}} </label>
                                  @elseif ($inroute->status == 'Hold')
                                  <label class="badge badge-warning"> {{ $inroute->status}} </label>
                                  @else ($inroute->status == 'Done')
                                  <label class="badge badge-secondary"> {{ $inroute->status}} </label>
                                @endif
                              </td>
                              <td><a class="btn btn-primary btn-sm mr-0" href="{{ route('iv.index',$inroute->dts_no) }}">View</a></td>
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