
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
                                            <label>Department</label>
                                            <select name="department" id="department" class="form-control">
                                                <option value="Office of the Director General (ODG)">1. Office of the Director General (ODG)</option>
                                                <option value="Office of the Deputy Director General for Administration & Finance (ODDGAF)">2. Office of the Deputy Director General for Administration & Finance (ODDGAF)</option>
                                                <option value="Office of the Deputy Director General for Legal (ODDGL)">3. Office of the Deputy Director General for Legal (ODDGL)</option>
                                                <option value="Office of the Deputy Director General for Operations (ODDGO)">4. Office of the Deputy Director General for Operations (ODDGO)</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <div class="form-group">
                                            <label>Office</label>
                                            <select name="office" id="office" class="form-control">
                                                <option value="Special Project Management Office (SPMO)">1. Special Project Management Office (SPMO)</option>
                                                <option value="Finance and Administrative Office (FAO)">2. Finance and Administrative Office (FAO)</option>
                                                <option value="Investigation, Enforcement and Litigation Office (IELO)">3. Investigation, Enforcement and Litigation Office (IELO)</option>
                                                <option value="Legal and Public Assistance Office (LPAO)">4. Legal and Public Assistance Office (LPAO)</option>
                                                <option value="Better Regulations Office (BRO)">5. Better Regulations Office (BRO)</option>
                                                <option value="Compliance Monitoring and Evaluation Office (CMEO)">6. Compliance Monitoring and Evaluation Office (CMEO)</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <div class="form-group">
                                            <label>Division/Unit</label>
                                            <select name="div_unit" id="div_unit" class="form-control">
                                                <option value="Better Regulation Division A (BRO A)">Better Regulation Division A (BRO A)</option>
                                                <option value="Better Regulation Division B (BRO B)">Better Regulation Division B (BRO B)</option>
                                                <option value="Better Regulation Division C (BRO C)">Better Regulation Division C (BRO C)</option>
                                                <option value="Better Regulation Division D (BRO D)">Better Regulation Division D (BRO D)</option>
                                                <option value="Compliance Monitoring and Evaluation Division A (CMED A)">Compliance Monitoring and Evaluation Division A (CMED A)</option> 
                                                <option value="Compliance Monitoring and Evaluation Division B (CMED B)">Compliance Monitoring and Evaluation Division B (CMED B)</option> 
                                                <option value="Compliance Monitoring and Evaluation Division C (CMED C)">Compliance Monitoring and Evaluation Division C (CMED C)</option> 
                                                <option value="Compliance Monitoring and Evaluation Division D (CMED D)">Compliance Monitoring and Evaluation Division D (CMED D)</option> 
                                                <option value="Finance Division">Finance Division</option>
                                                <option value="General Services Division (GSD)">General Services Division (GSD)</option> 
                                                <option value="Human Resource Development Division (HRDD)">Human Resource Development Division (HRDD)</option> 
                                                <option value="Information and Communications Technology Unit (ICTU)">Information and Communications Technology Unit (ICTU)</option> 
                                                <option value="Investigation and Enforcement Division (IED)">Investigation and Enforcement Division (IED)</option>
                                                <option value="Legal Division">Legal Division</option>
                                                <option value="Litigation Division">Litigation Division</option>
                                                <option value="Public Assistance Division (PAD)">Public Assistance Division (PAD)</option>
                                                <option value="Public Relations Unit (PRU)">Public Relations Unit (PRU)</option>
                                                <option value="Security and Intelligence">Security and Intelligence</option>
                                                <option value="Special Project Management Teams (SPMT)">Special Project Management Teams (SPMT)</option>
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

@endsection   
