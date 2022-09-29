
@extends('layouts.app')

@section('content')

        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <h4 class="m-1">Create New User</h4>
                    </div>
                    <!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">

                        @if (count($errors) > 0)
                            <div class="alert alert-danger alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                    <strong>Whoops!</strong> There were some problems with your input.
                                <ul>
                                @foreach ($errors->all() as $error)
                                    <li>- {{ $error }}</li>
                                @endforeach
                                </ul>
                            </div>
                        @endif

                        <!-- Default box -->
                        <div class="card card-outline card-info">
                            <div class="card-body">

                                {!! Form::open(array('route' => 'users.store','method'=>'POST')) !!}
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <div class="form-group">
                                            <strong>Name</strong>
                                            {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <div class="form-group">
                                            <strong>Email Address</strong>
                                            {!! Form::text('email', null, array('placeholder' => 'Email Address','class' => 'form-control')) !!}
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <div class="form-group">
                                            <strong>Password</strong>
                                            {!! Form::password('password', array('placeholder' => 'Password','class' => 'form-control')) !!}
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <div class="form-group">
                                            <strong>Confirm Password</strong>
                                            {!! Form::password('confirm-password', array('placeholder' => 'Confirm Password','class' => 'form-control')) !!}
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <div class="form-group">
                                            <label>Head Office</label>
                                            <select name="department" id="department" class="form-control">
                                                <option value="-" selected>-</option>
                                                <option value="Office of the Director General (ODG)">Office of the Director General (ODG)</option>
                                                <option value="Office of the Deputy Director General for Administration & Finance (ODDGAF)">Office of the Deputy Director General for Administration & Finance (ODDGAF)</option>
                                                <option value="Office of the Deputy Director General for Legal (ODDGL)">Office of the Deputy Director General for Legal (ODDGL)</option>
                                                <option value="Office of the Deputy Director General for Operations (ODDGO)">Office of the Deputy Director General for Operations (ODDGO)</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <div class="form-group">
                                            <label>Office/Unit</label>
                                            <select name="office" id="office" class="form-control">
                                                <option value="-" selected>-</option>
                                                <option value="ODG - Personnel">ODG - Personnel</option>
                                                <option value="Public Relations Unit (PRU)">Public Relations Unit (PRU)</option>
                                                <option value="none" disabled>----</option>
                                                <option value="ODDGAF - Personnel">ODDGAF - Personnel</option>
                                                <option value="Finance and Administrative Office (FAO)">Finance and Administrative Office (FAO)</option>
                                                <option value="Information and Communications Technology Unit (ICTU))">Information and Communications Technology Unit (ICTU))</option>
                                                <option value="Planning Unit (PU)">Planning Unit (PU)</option>
                                                <option value="none" disabled>----</option>
                                                <option value="ODDGL - Personnel">ODDGL - Personnel</option>
                                                <option value="Investigation, Enforcement and Litigation Office (IELO)">Investigation, Enforcement and Litigation Office (IELO)</option>
                                                <option value="Legal and Public Assistance Office (LPAO)">Legal and Public Assistance Office (LPAO)</option>
                                                <option value="none" disabled>----</option>
                                                <option value="ODDGO - Personnel">ODDGO - Personnel</option>
                                                <option value="Better Regulations Office (BRO)">Better Regulations Office (BRO)</option>
                                                <option value="Compliance Monitoring and Evaluation Office (CMEO)">Compliance Monitoring and Evaluation Office (CMEO)</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <div class="form-group">
                                            <label>Director/Division/Personnel</label>
                                            <select name="div_unit" id="div_unit" class="form-control">
                                                <option value="-" selected>-</option>
                                                <option value="Head Executive Assistant (HEA)">ODG - Head Executive Assistant (HEA)</option>
                                                <option value="Executive Assistant (EA)">ODG - Executive Assistant (EA)</option>
                                                <option value="Administrative Officer">ODG - Administrative Officer</option>
                                                <option value="PRU - Personnel">PRU - Personnel</option>
                                                <option value="none" disabled>----</option>
                                                <option value="Executive Assistant (EA)">ODDGAF - Executive Assistant (EA)</option> 
                                                <option value="Administrative Officer">ODDGAF - Administrative Officer</option>
                                                <option value="Director">FAO - Director</option>
                                                <option value="Administrative Officer">FAO - Administrative Officer</option>
                                                <option value="Finance Division">Finance Division</option>
                                                <option value="General Services Division (GSD)">General Services Division (GSD)</option>
                                                <option value="Human Resource Development Division (HRDD)">Human Resource Development Division (HRDD)</option>
                                                <option value="ICTU - Personnel">ICTU - Personnel</option>
                                                <option value="PU - Personnel">PU - Personnel</option>
                                                <option value="none" disabled>----</option>
                                                <option value="Executive Assistant (EA)">ODDGL - Executive Assistant (EA)</option>
                                                <option value="Administrative Officer">ODDGL - Administrative Officer</option>
                                                <option value="Director">IELO - Director</option> 
                                                <option value="Administrative Officer">IELO - Administrative Officer</option> 
                                                <option value="Investigation and Enforcement Division (IED)">Investigation and Enforcement Division (IED)</option> 
                                                <option value="Litigation Division">Litigation Division</option>
                                                <option value="Director">LPAO - Director</option> 
                                                <option value="Administrative Officer">LPAO - Administrative Officer</option> 
                                                <option value="Legal Division">Legal Division</option> 
                                                <option value="Public Assistance Division (PAD)">Public Assistance Division (PAD)</option>
                                                <option value="none" disabled>----</option>
                                                <option value="Executive Assistant (EA)">ODDGO - Executive Assistant (EA)</option>
                                                <option value="Administrative Officer">ODDGO - Administrative Officer</option>
                                                <option value="Director">BRO - Director</option>
                                                <option value="Administrative Officer">BRO - Administrative Officer</option>
                                                <option value="Better Regulation Division A (BRD A)">Better Regulation Division A (BRD A)</option>
                                                <option value="Better Regulation Division B (BRD B)">Better Regulation Division B (BRD B)</option>
                                                <option value="Better Regulation Division C (BRD C)">Better Regulation Division C (BRD C)</option>
                                                <option value="Better Regulation Division D (BRD D)">Better Regulation Division D (BRD D)</option>
                                                <option value="Doing Business Division (DBD)">Doing Business Division (DBD)</option>
                                                <option value="Regulatory Management and Training Division (RMTD)">Regulatory Management and Training Division (RMTD)</option>
                                                <option value="Director">CMEO - Director</option>
                                                <option value="Administrative Officer">CMEO - Administrative Officer</option>
                                                <option value="Compliance Monitoring and Evaluation Division A (CMED A)">Compliance Monitoring and Evaluation Division A (CMED A)</option>
                                                <option value="Compliance Monitoring and Evaluation Division B (CMED B)">Compliance Monitoring and Evaluation Division B (CMED B)</option>
                                                <option value="Compliance Monitoring and Evaluation Division C (CMED C)">Compliance Monitoring and Evaluation Division C (CMED C)</option>
                                                <option value="Compliance Monitoring and Evaluation Division D (CMED D)">Compliance Monitoring and Evaluation Division D (CMED D)</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <div class="form-group">
                                            <label>Confirm Head Office</label>

                                            <select name="department_id" id="department_id" class="form-control">
                                                <option value="-" selected>-</option>
                                                <option value="1">Office of the Director General (ODG)</li>
                                                <option value="2">Office of the Deputy Director General for Administration & Finance (ODDGAF)</option>
                                                <option value="3">Office of the Deputy Director General for Legal (ODDGL)</option>
                                                <option value="4">Office of the Deputy Director General for Operations (ODDGO)</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <div class="form-group">
                                            <label>Confirm Office/Unit</label>
                                            <select name="office_id" id="office_id" class="form-control">
                                                <option value="-" selected>-</option>
                                                <option value="1">ODG - Personnel</option>
                                                <option value="2">Public Relations Unit (PRU)</option>
                                                <option value="none" disabled>----</option>
                                                <option value="3">ODDGAF - Personnel</option>
                                                <option value="4">Finance and Administrative Office (FAO)</option>
                                                <option value="5">Information and Communications Technology Unit (ICTU))</option>
                                                <option value="6">Planning Unit (PU)</option>
                                                <option value="none" disabled>----</option>
                                                <option value="7">ODDGL - Personnel</option>
                                                <option value="8">Investigation, Enforcement and Litigation Office (IELO)</option>
                                                <option value="9">Legal and Public Assistance Office (LPAO)</option>
                                                <option value="none" disabled>----</option>
                                                <option value="10">ODDGO - Personnel</option>
                                                <option value="11">Better Regulations Office (BRO)</option>
                                                <option value="12">Compliance Monitoring and Evaluation Office (CMEO)</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <div class="form-group">
                                            <label>Confirm Director/Division/Personnel</label>
                                            <select name="div_unit_id" id="div_unit_id" class="form-control">
                                                <option value="-" selected>-</option>
                                                <option value="1">ODG - Head Executive Assistant (HEA)</option>
                                                <option value="2">ODG - Executive Assistant (EA)</option>
                                                <option value="3">ODG - Administrative Officer</option>
                                                <option value="4">PRU - Personnel</option>
                                                <option value="none" disabled>----</option>
                                                <option value="5">ODDGAF - Executive Assistant (EA)</option> 
                                                <option value="6">ODDGAF - Administrative Officer</option>
                                                <option value="7">FAO - Director</option>
                                                <option value="8">FAO - Administrative Officer</option>
                                                <option value="9">Finance Division</option>
                                                <option value="10">General Services Division (GSD)</option>
                                                <option value="11">Human Resource Development Division (HRDD)</option>
                                                <option value="12">ICTU - Personnel</option>
                                                <option value="13">PU - Personnel</option>
                                                <option value="none" disabled>----</option>
                                                <option value="14">ODDGL - Executive Assistant (EA)</option>
                                                <option value="15">ODDGL - Administrative Officer</option>
                                                <option value="16">IELO - Director</option> 
                                                <option value="17">IELO - Administrative Officer</option> 
                                                <option value="18">Investigation and Enforcement Division (IED)</option> 
                                                <option value="19">Litigation Division</option>
                                                <option value="20">LPAO - Director</option> 
                                                <option value="21">LPAO - Administrative Officer</option> 
                                                <option value="22">Legal Division</option> 
                                                <option value="23">Public Assistance Division (PAD)</option>
                                                <option value="none" disabled>----</option>
                                                <option value="24">ODDGO - Executive Assistant (EA)</option>
                                                <option value="25">ODDGO - Administrative Officer</option>
                                                <option value="26">BRO - Director</option>
                                                <option value="27">BRO - Administrative Officer</option>
                                                <option value="28">Better Regulation Division A (BRD A)</option>
                                                <option value="29">Better Regulation Division B (BRD B)</option>
                                                <option value="30">Better Regulation Division C (BRD C)</option>
                                                <option value="31">Better Regulation Division D (BRD D)</option>
                                                <option value="32">Doing Business Division (DBD)</option>
                                                <option value="33">Regulatory Management and Training Division (RMTD)</option>
                                                <option value="34">CMEO - Director</option>
                                                <option value="35">CMEO - Administrative Officer</option>
                                                <option value="36">Compliance Monitoring and Evaluation Division A (CMED A)</option>
                                                <option value="37">Compliance Monitoring and Evaluation Division B (CMED B)</option>
                                                <option value="38">Compliance Monitoring and Evaluation Division C (CMED C)</option>
                                                <option value="39">Compliance Monitoring and Evaluation Division D (CMED D)</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <div class="form-group">
                                            <strong>Role</strong>
                                            {!! Form::select('roles[]', $roles,[], array('class' => 'form-control','multiple')) !!}
                                        </div>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <div class="form-group">
                                            <label>Status</label> <br/>
                                            <select name="approved" id="approved" class="form-control">
                                                <option value="pending">pending</option>
                                                <option value="active">active</option>
                                                <option value="not active">not active</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="card-footer">
                                <button type="button" class="btn btn-secondary btn-sm" onclick="goBack()">Back</button>
                                <button type="reset" class="btn btn-secondary btn-sm">Clear all</button>
                                <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-save"></i> Save</button>
                            </div>
                                                        
                                {!! Form::close() !!}
                        </div>
                        <!-- /.card-outline -->
                    </div>
                </div>
            </div>
        </section>
        <!-- /.content -->


        <script>
            function goBack() {
                window.history.back();
            }
        </script>
        <script>
            $(document).ready(function(){
            $('.tip').tooltip({
                delay:{ "show": 600, "hide": 100 },
                title:"<strong>This title is from JavaScript.</strong> It is defined as a tooltip option.",
                html:true,
            }); 
            });
        </script>

@endsection   
