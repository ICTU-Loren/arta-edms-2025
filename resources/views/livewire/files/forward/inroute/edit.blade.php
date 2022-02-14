@extends('layouts.app')

@section('content')

        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-3">
                <div class="col-sm-6">
                    <h4 class="m-0">Update Document</h4>
                    <span></span>
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

                    @if ($message = Session::get('success'))
                        <div class="alert alert-success" style="margin-bottom:30px">
                          {{ $message }}
                        </div>
                    @endif

                  <!-- Default box -->
                  <div class="card card-outline card-info">
                    <div class="card-body">

                    <form action="{{ route('forward.update',$exroute->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        
                        <div class="form-row">
                            <div class="col-8 table-responsive">
                                <table class="table table-bordered">
                                
                                    <tr>
                                        <th style="width:25%">Addressed to</th>
                                            <td><textarea type="text" name="personnel" class="form-control" rows="1" disabled>{{ $exroute->personnel }}</textarea>
                                                <textarea type="text" name="personnel" class="form-control" rows="1" disabled>{{ $exroute->div_unit }}</textarea>
                                            </td>
                                    </tr>
                                    <tr>
                                        <th>Action Required</th>
                                        <td><textarea type="text" name="action" class="form-control" rows="1" disabled>{{ $exroute->action }}</textarea></td>
                                    </tr>
                                    <tr>
                                        <th>Assigned Date</th>
                                        <td><textarea type="text" name="action" class="form-control" rows="1" disabled>{{ $exroute->assigned_date }}</textarea></td>
                                    </tr>
                                    <tr>
                                        <th>Due Date</th>
                                        <td><textarea type="text" name="action" class="form-control" rows="1" disabled>{{ $exroute->due_date }}</textarea></td>
                                    </tr>
                                    <tr>
                                        <th>Mode of Transmittal</th>
                                        <td><textarea type="text" name="action" class="form-control" rows="1" disabled>{{ $exroute->modeoftrans }}</textarea></td>
                                    </tr>
                                    <tr>
                                        <th>File Upload</th>
                                        <td><a href="{{ asset('/storage/'.$exroute->file_upload) }}" target="_blank" ><input type="" name="filename" class="form-control" value="{{ $exroute->file_upload }}" disabled> View</td>
                                    </tr>
                                    <tr>
                                        <th>Note / Comment</th>
                                        <td><textarea type="text" name="action" class="form-control" rows="1" disabled>{{ $exroute->note_comment }}</textarea></td>
                                    </tr>
                                    
                                </table>
                            </div>

                            <div class="col-4 table-responsive">
                                <table class="table table-bordered table-hover">

                                    <tr>
                                        <td colspan="2">
                                            <p class="my-0 mb-0"><i class="fas fa-edit"></i> To be filled out by the Assigned Person</li></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th style="width:35%">Status</th>
                                        <td><select name="status" id="status" class="form-control">
                                                <option value="{{ $exroute->status }}" selected>{{ $exroute->status }}</option>
                                                <option value="In-progress">In-progress</option>
                                                <option value="Hold">Hold</option>
                                                <option value="Done">Done</option>
                                            </select>
                                            @error('status')
                                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                            @enderror
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Outgoing</th>
                                        <td><select name="doc_class" id="doc_class" class="form-control">
                                                <option value="{{ $exroute->doc_class }}" selected>{{ $exroute->doc_class }}</option>
                                                <option value="External">External</option>
                                                <option value="Internal">Internal</option>
                                            </select>
                                            @error('doc_class')
                                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                            @enderror
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Date & Time Received</th>
                                        <td>
                                            <input type="text" name="sent_date" id="sent_date" class="form-control" placeholder="mm/dd/yy" value="{{ $exroute->sent_date }}">
                                                @error('sent_date')
                                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                                @enderror
                                            <input type="text" name="sent_time" id="sent_time" class="form-control" placeholder="--:-- --" value="{{ $exroute->sent_time }}">
                                                @error('sent_time')
                                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                                @enderror
                                        </td>
                                    </tr>

                                </table>
                            </div>
                             
                        </div>
                        
                    </div>

                    <div class="card-footer">
                            <button type="button" class="btn btn-secondary" onclick="goBack()">Cancel</button>
                            <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Update</button>
                        </div>
                    </form>
                    
                  <!-- /.card-outline -->
                </div>
              </div>
            </div>
        </section>
        <!-- /.1stcontent -->

<script>
    function goBack() {
        window.history.back();
    }
</script>
 

@endsection