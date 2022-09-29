@extends('layouts.app')

@section('content')

        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-3">
                  <div class="col-sm-6">
                    <h5 class="m-0">External <span class="ml-2" style="font-size:18px;color:#737373;">Assigned Documents</span></h5>
                  </div><!-- /.col -->
                  <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                      <li class="breadcrumb-item"><a href="{{ route('dashboard')}}">Dashboard</a></li>
                      <li class="breadcrumb-item active">Office</li>
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

                          @foreach ($exroute as $exroute)

                            <tr>
                              <td hidden>{{ ++$i }}</td>
                              <td>{{ $exroute->dts }}{{ $exroute->dts_no }}</td>
                              <td>{{ $exroute->assigned_date }}</td>
                              <td>{{ $exroute->routed_by }} <br />{{ $exroute->routed_by_div_unit }}</td>
                              <td>{{ $exroute->personnel }} <br />

                                @if($exroute->div_unit > 0)
                                    @if ($exroute->div_unit == '1')
                                    Head Executive Assistant (HEA)
                                        @elseif ($exroute->div_unit == '2')
                                            Executive Assistant (EA)
                                        @elseif ($exroute->div_unit == '3')
                                            Administrative Officer
                                        @elseif ($exroute->div_unit == '4')
                                            PRU - Personnel
                                        @elseif ($exroute->div_unit == '5')
                                            Executive Assistant (EA)
                                        @elseif ($exroute->div_unit == '6')
                                            Administrative Officer
                                        @elseif ($exroute->div_unit == '7')
                                            Director
                                        @elseif ($exroute->div_unit == '8')
                                            Administrative Officer
                                        @elseif ($exroute->div_unit == '9')
                                            Finance Division
                                        @elseif ($exroute->div_unit == '10')
                                            General Services Division (GSD)
                                        @elseif ($exroute->div_unit == '11')
                                            Human Resource Development Division (HRDD)
                                        @elseif ($exroute->div_unit == '12')
                                            ICTU - Personnel
                                        @elseif ($exroute->div_unit == '13')
                                            PU - Personnel
                                        @elseif ($exroute->div_unit == '14')
                                            Executive Assistant (EA)
                                        @elseif ($exroute->div_unit == '15')
                                            Administrative Officer
                                        @elseif ($exroute->div_unit == '16')
                                            Director
                                        @elseif ($exroute->div_unit == '17')
                                            Administrative Officer
                                        @elseif ($exroute->div_unit == '18')
                                            Investigation and Enforcement Division (IED)
                                        @elseif ($exroute->div_unit == '19')
                                            Litigation Division
                                        @elseif ($exroute->div_unit == '20')
                                            Director
                                        @elseif ($exroute->div_unit == '21')
                                            Administrative Officer
                                        @elseif ($exroute->div_unit == '22')
                                            Legal Division
                                        @elseif ($exroute->div_unit == '23')
                                            Public Assistance Division (PAD)
                                        @elseif ($exroute->div_unit == '24')
                                            Executive Assistant (EA)
                                        @elseif ($exroute->div_unit == '25')
                                            Administrative Officer
                                        @elseif ($exroute->div_unit == '26')
                                            Director
                                        @elseif ($exroute->div_unit == '27')
                                            Administrative Officer
                                        @elseif ($exroute->div_unit == '28')
                                            Better Regulation Division A (BRD A)
                                        @elseif ($exroute->div_unit == '29')
                                            Better Regulation Division B (BRD B)
                                        @elseif ($exroute->div_unit == '30')
                                            Better Regulation Division C (BRD C)
                                        @elseif ($exroute->div_unit == '31')
                                            Better Regulation Division D (BRD D)
                                        @elseif ($exroute->div_unit == '32')
                                            Doing Business Division (DBD)
                                        @elseif ($exroute->div_unit == '33')
                                            Regulatory Management and Training Division (RMTD)
                                        @elseif ($exroute->div_unit == '34')
                                            Director
                                        @elseif ($exroute->div_unit == '35')
                                            Administrative Officer
                                        @elseif ($exroute->div_unit == '36')
                                            Compliance Monitoring and Evaluation Division A (CMED A)
                                        @elseif ($exroute->div_unit == '37')
                                            Compliance Monitoring and Evaluation Division B (CMED B)
                                        @elseif ($exroute->div_unit == '38')
                                            Compliance Monitoring and Evaluation Division C (CMED C)
                                        @else ($exroute->div_unit == '39')
                                            Compliance Monitoring and Evaluation Division D (CMED D)
                                    @endif
                                @endif

                              </td>
                              <td>{{ $exroute->subject }}</td>
                              <td>{{ $exroute->action_req }}</td>
                              <td>
                                @if ($exroute->status == 'New')
                                  <label class="badge badge-primary"> {{ $exroute->status }} </label>
                                  @elseif ($exroute->status == 'In-progress')
                                  <label class="badge badge-danger"> {{ $exroute->status}} </label>
                                  @elseif ($exroute->status == 'Hold')
                                  <label class="badge badge-warning"> {{ $exroute->status}} </label>
                                  @else ($exroute->status == 'Done')
                                  <label class="badge badge-secondary"> {{ $exroute->status}} </label>
                                @endif
                              </td>
                              <td><a class="btn btn-primary btn-sm mr-0" href="{{ route('ev.index',$exroute->dts_no) }}">View</a></td>
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