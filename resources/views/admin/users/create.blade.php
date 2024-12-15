
@extends('layouts.app')

@section('content')

        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-lg-8 col-md-12 col-sm-12">
                        <h5 class="mr-0">Create New User</h5>
                    </div><!-- /.col -->
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
                                            {!! Form::text('name', null, array('placeholder' => '','class' => 'form-control')) !!}
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <div class="form-group">
                                            <strong>Email Address</strong>
                                            {!! Form::text('email', null, array('placeholder' => '','class' => 'form-control')) !!}
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <div class="form-group">
                                            <strong>Password</strong>
                                            {!! Form::password('password', array('placeholder' => '','class' => 'form-control')) !!}
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <div class="form-group">
                                            <strong>Confirm Password</strong>
                                            {!! Form::password('confirm-password', array('placeholder' => '','class' => 'form-control')) !!}
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
                                                <option value="Information and Public Relations Division (IPRD)">Information and Public Relations Division (IPRD)</option>
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
                                            <label>Director/Division/Designation</label>
                                            <select name="div_unit" id="div_unit" class="form-control">
                                                <option value="-" selected>-</option>
                                                <option value="none" disabled>----ODG----</option>
                                                <option value="Head Executive Assistant (HEA)">Head Executive Assistant (HEA)</option>
                                                <option value="Executive Assistant (EA)">Executive Assistant (EA)</option>
                                                <option value="Administrative Assistant (AA)">Administrative Assistant (AA)</option>
                                                <option value="Program Officer (PO)">Program Officer (PO)</option>
                                                <option value="Information Officer (IO)">IPRD - Information Officer (IO)</option>
                                                <option value="Program Officer (PO)">IPRD - Program Officer (PO)</option>

                                                <option value="none" disabled>----ODDGAF----</option>
                                                <option value="Executive Assistant (EA)">Executive Assistant (EA)</option> 
                                                <option value="Administrative Assistant (AA)">Administrative Assistant (AA)</option>
                                                <option value="Program Officer (PO)">Program Officer (PO)</option>
                                                <option value="Office of the Director (FAO-OD)">FAO-OD - Office of the Director</option>
                                                <option value="Administrative Officer (AA)">FAO-OD - Administrative Assistant (AA)</option>
                                                <option value="Program Officer (PO)">FAO-OD - Program Officer (PO)</option>
                                                <option value="Finance Division (FD)">FAO - Finance Division (FD)</option>
                                                <option value="General Services Division (GSD)">FAO - General Services Division (GSD)</option>
                                                <option value="Human Resource Development Division (HRDD)"> FAO - Human Resource Development Division (HRDD)</option>
                                                <option value="Information and Technology Officer (ITO)">ICTU - Information and Technology Officer (ITO)</option>
                                                <option value="Program Officer (PO)">ICTU - Program Officer (PO)</option>
                                                <option value="Planning Officer (PlanOff)">PU - Planning Officer (PlanOff)</option>

                                                <option value="none" disabled>----ODDGL----</option>
                                                <option value="Executive Assistant (EA)">Executive Assistant (EA)</option> 
                                                <option value="Administrative Assistant (AA)">Administrative Assistant (AA)</option>
                                                <option value="Program Officer (PO)">Program Officer (PO)</option>
                                                <option value="Office of the Director (IELO-OD)">IELO-OD - Office of the Director</option>
                                                <option value="Administrative Officer (AA)">IELO-OD - Administrative Assistant (AA)</option>
                                                <option value="Program Officer (PO)">IELO-OD - Program Officer (PO)</option>
                                                <option value="Investigation and Enforcement Division (IED)">IELO - Investigation and Enforcement Division (IED)</option> 
                                                <option value="Litigation Division (LitDv)">IELO - Litigation Division (LitDiv)</option>
                                                <option value="Office of the Director (LPAO-OD)">LPAO-OD - Office of the Director</option>
                                                <option value="Administrative Officer (AA)">LPAO-OD - Administrative Assistant (AA)</option>
                                                <option value="Program Officer (PO)">LPAO-OD - Program Officer (PO)</option>
                                                <option value="Legal Division (LegDiv)">Legal Division (LegDiv)</option> 
                                                <option value="Public Assistance Division (PAD)">Public Assistance Division (PAD)</option>

                                                <option value="none" disabled>----ODDGO----</option>
                                                <option value="Executive Assistant (EA)">Executive Assistant (EA)</option>
                                                <option value="Administrative Assistant (AA)">Administrative Assistant (AA)</option>
                                                <option value="Program Officer (PO)">Program Officer (PO)</option>
                                                <option value="Office of the Director (BRO-OD)">BRO-OD - Office of the Director</option>
                                                <option value="Administrative Officer (AA)">BRO-OD - Administrative Assistant (AA)</option>
                                                <option value="Program Officer (PO)">BRO-OD - Program Officer (PO)</option>
                                                <option value="Sectoral Division A (BRO A)">BRO - Sectoral Division A (BRO A)</option>
                                                <option value="Sectoral Division B (BRO B)">BRO - Sectoral Division B (BRO B)</option>
                                                <option value="Sectoral Division C (BRO C)">BRO - Sectoral Division C (BRO C)</option>
                                                <option value="Sectoral Division D (BRO D)">BRO - Sectoral Division D (BRO D)</option>
                                                <option value="Doing Business Division (DBD)">BRO - Doing Business Division (DBD)</option>
                                                <option value="Regulatory Management and Training Division (RMTD)">BRO - Regulatory Management and Training Division (RMTD)</option>
                                                <option value="Office of the Director (CMEO-OD)">CMEO-OD - Office of the Director</option>
                                                <option value="Administrative Officer (AA)">CMEO-OD - Administrative Assistant (AA)</option>
                                                <option value="Program Officer (PO)">CMEO-OD - Program Officer (PO)</option>
                                                <option value="Division A (CMED A)">CMEO - Division A (CMEO A)</option>
                                                <option value="Division B (CMED B)">CMEO - Division B (CMEO B)</option>
                                                <option value="Division C (CMED C)">CMEO - Division C (CMEO C)</option>
                                                <option value="Division D (CMED D)">CMEO - Division D (CMEO D)</option>
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
                                                <option value="2">Information and Public Relations Division (IPRD)</option>
                                                <option value="none" disabled>----</option>
                                                <option value="3">ODDGAF - Personnel</option>
                                                <option value="4">Finance and Administrative Office (FAO)</option>
                                                <option value="5">Information and Communications Technology Unit (ICTU)</option>
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
                                                <option value="none" disabled>--ODG--</option>
                                                <option value="1">Head Executive Assistant (HEA)</option>
                                                <option value="2">Executive Assistant (EA)</option>
                                                <option value="3">Administrative Assistant (AA)</option>
                                                <option value="4">Program Officer (PO)</option>
                                                <option value="5">IPRD - Information Officer (IO)</option>
                                                <option value="6">IPRD - Program Officer (PO)</option>

                                                <option value="none" disabled>----ODDGAF----</option>
                                                <option value="7">Executive Assistant (EA)</option> 
                                                <option value="8">Administrative Assistant (AA)</option>
                                                <option value="9">Program Officer (PO)</option>
                                                <option value="10">FAO-OD - Office of the Director</option>
                                                <option value="11">FAO-OD - Administrative Assistant (AA)</option>
                                                <option value="12">FAO-OD - Program Officer (PO)</option>
                                                <option value="13">FAO - Finance Division (FD)</option>
                                                <option value="14">FAO - General Services Division (GSD)</option>
                                                <option value="15"> FAO - Human Resource Development Division (HRDD)</option>
                                                <option value="16">ICTU - Information and Technology Officer (ITO)</option>
                                                <option value="17">ICTU - Program Officer (PO)</option>
                                                <option value="18">PU - Planning Officer (PlanOff)</option>

                                                <option value="none" disabled>----ODDGL----</option>
                                                <option value="19">Executive Assistant (EA)</option> 
                                                <option value="20">Administrative Assistant (AA)</option>
                                                <option value="21">Program Officer (PO)</option>
                                                <option value="22">IELO-OD - Office of the Director</option>
                                                <option value="23">IELO-OD - Administrative Assistant (AA)</option>
                                                <option value="24">IELO-OD - Program Officer (PO)</option>
                                                <option value="25">IELO - Investigation and Enforcement Division (IED)</option> 
                                                <option value="26">IELO - Litigation Division (LitDiv)</option>
                                                <option value="27">LPAO-OD - Office of the Director</option>
                                                <option value="28">LPAO-OD - Administrative Assistant (AA)</option>
                                                <option value="29">LPAO-OD - Program Officer (PO)</option>
                                                <option value="30">Legal Division (LegDiv)</option> 
                                                <option value="31">Public Assistance Division (PAD)</option>

                                                <option value="none" disabled>----ODDGO----</option>
                                                <option value="32">Executive Assistant (EA)</option>
                                                <option value="33">Administrative Assistant (AA)</option>
                                                <option value="34">Program Officer (PO)</option>
                                                <option value="35">BRO-OD - Office of the Director</option>
                                                <option value="36">BRO-OD - Administrative Assistant (AA)</option>
                                                <option value="37">BRO-OD - Program Officer (PO)</option>
                                                <option value="38">BRO - Sectoral Division A (BRO A)</option>
                                                <option value="39">BRO - Sectoral Division B (BRO B)</option>
                                                <option value="40">BRO - Sectoral Division C (BRO C)</option>
                                                <option value="41">BRO - Sectoral Division D (BRO D)</option>
                                                <option value="42">BRO - Doing Business Division (DBD)</option>
                                                <option value="43">BRO - Regulatory Management and Training Division (RMTD)</option>
                                                <option value="44">CMEO-OD - Office of the Director</option>
                                                <option value="45">CMEO-OD - Administrative Assistant (AA)</option>
                                                <option value="46">CMEO-OD - Program Officer (PO)</option>
                                                <option value="47">CMEO - Division A (CMEO A)</option>
                                                <option value="48">CMEO - Division B (CMEO B)</option>
                                                <option value="49">CMEO - Division C (CMEO C)</option>
                                                <option value="50">CMEO - Division D (CMEO D)</option>
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
