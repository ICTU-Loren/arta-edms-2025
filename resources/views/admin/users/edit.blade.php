@extends('layouts.app')

@section('content')

        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <h4 class="m-1">Edit User <span class="ml-2" style="font-size:18px;color:#737373;">{{ $user->name }}</span></h4>
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

                            <nav aria-label="breadcrumb" class="my-1">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item active" aria-current="page">User ID: {{ $user->id }}</li>
                                </ol>
                            </nav>

                            {!! Form::model($user, ['method' => 'PATCH','route' => ['users.update', $user->id]]) !!}
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <div class="form-group">
                                        <label>Name</label>
                                        {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <div class="form-group">
                                        <label>Email Address</label>
                                        {!! Form::text('email', null, array('placeholder' => 'Email','class' => 'form-control')) !!}
                                    </div>
                                </div>
                            </div>
                            
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <div class="form-group">
                                        <label>Password:</label>
                                        {!! Form::password('password', array('placeholder' => 'Password','class' => 'form-control')) !!}
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <div class="form-group">
                                        <label>Confirm Password:</label>
                                        {!! Form::password('confirm-password', array('placeholder' => 'Confirm Password','class' => 'form-control')) !!}
                                    </div>
                                </div>
                            </div>
                            
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <div class="form-group">
                                        <label>Department</label>
                                        <select name="department" id="department" class="form-control">
                                            <option value="{{ $user->department }}" selected>{{ $user->department }}</option>
                                            <option value="Office of the Director General (ODG)">Office of the Director General (ODG)</option>
                                            <option value="Office of the Deputy Director General for Administration & Finance (ODDGAF)">Office of the Deputy Director General for Administration & Finance (ODDGAF)</option>
                                            <option value="Office of the Deputy Director General for Legal (ODDGL)">Office of the Deputy Director General for Legal (ODDGL)</option>
                                            <option value="Office of the Deputy Director General for Operations (ODDGO)">Office of the Deputy Director General for Operations (ODDGO)</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group col-md-4">
                                    <div class="form-group">
                                        <label>Office</label>
                                        <select name="office" id="office" class="form-control">
                                            <option value="{{ $user->office }}" selected>{{ $user->office }}</option>
                                            <option value="Special Project Management Office (SPMO)">Special Project Management Office (SPMO)</option>
                                            <option value="Finance and Administrative Office (FAO)">Finance and Administrative Office (FAO)</option>
                                            <option value="Investigation, Enforcement and Litigation Office (IELO)">Investigation, Enforcement and Litigation Office (IELO)</option>
                                            <option value="Legal and Public Assistance Office (LPAO)">Legal and Public Assistance Office (LPAO)</option>
                                            <option value="Better Regulations Office (BRO)">Better Regulations Office (BRO)</option>
                                            <option value="Compliance Monitoring and Evaluation Office (CMEO)">Compliance Monitoring and Evaluation Office (CMEO)</option>
                                            <option value="Office of the Director General (ODG)">Office of the Director General (ODG)</option>
                                            <option value="Office of the Deputy Director General for Administration & Finance (ODDGAF)">Office of the Deputy Director General for Administration & Finance (ODDGAF)</option>
                                            <option value="Office of the Deputy Director General for Legal (ODDGL)">Office of the Deputy Director General for Legal (ODDGL)</option>
                                            <option value="Office of the Deputy Director General for Operations (ODDGO)">Office of the Deputy Director General for Operations (ODDGO)</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group col-md-4">
                                    <div class="form-group">
                                        <label>Director/Division/Unit/HEA/EA</label>
                                        <select name="div_unit" id="div_unit" class="form-control">
                                            <option value="{{ $user->div_unit }}" selected>{{ $user->div_unit }}</option>
                                            <option value="Security and Intelligence">Security and Intelligence</option>
                                            <option value="Special Project Management Teams (SPMT)">Special Project Management Teams (SPMT)</option>
                                            <option value="Finance Division">Finance Division</option>
                                            <option value="General Services Division (GSD)">General Services Division (GSD)</option> 
                                            <option value="Human Resource Development Division (HRDD)">Human Resource Development Division (HRDD)</option>
                                            <option value="Information and Communications Technology Unit (ICTU)">Information and Communications Technology Unit (ICTU)</option>  
                                            <option value="Public Relations Unit (PRU)">Public Relations Unit (PRU)</option>
                                            <option value="Investigation and Enforcement Division (IED">Investigation and Enforcement Division (IED)</option>
                                            <option value="Litigation Division">Litigation Division</option>
                                            <option value="Legal Division">Legal Division</option>
                                            <option value="Public Assistance Division (PAD)">Public Assistance Division (PAD)</option>
                                            <option value="Better Regulation Division B (BRO A)">Better Regulation Division B (BRO B)</option>
                                            <option value="Better Regulation Division B (BRO B)">Better Regulation Division C (BRO C)</option>
                                            <option value="Better Regulation Division B (BRO C)">Better Regulation Division D (BRO D)</option>
                                            <option value="Better Regulation Division B (BRO D)">Better Regulation Division A (BRO A)</option>
                                            <option value="Compliance Monitoring and Evaluation Division B (CMED A)">Compliance Monitoring and Evaluation Division B (CMED B)</option> 
                                            <option value="Compliance Monitoring and Evaluation Division B (CMED B)">Compliance Monitoring and Evaluation Division C (CMED C)</option> 
                                            <option value="Compliance Monitoring and Evaluation Division B (CMED C)">Compliance Monitoring and Evaluation Division A (CMED A)</option> 
                                            <option value="Compliance Monitoring and Evaluation Division B (CMED D)">Compliance Monitoring and Evaluation Division D (CMED D)</option> 
                                            <option value="Head Executive Assistant (HEA)">Head Executive Assistant (HEA)</option> 
                                            <option value="Executive Assistant (EA)">ODG Executive Assistant (EA)</option> 
                                            <option value="Executive Assistant (EA)">ODDGAF Executive Assistant (EA)</option> 
                                            <option value="Executive Assistant (EA)">ODDGL Executive Assistant (EA)</option>
                                            <option value="Executive Assistant (EA)">ODDGO Executive Assistant (EA)</option>  
                                            <option value="Doing Business Division (DBD)">Doing Business Division (DBD)</option> 
                                            <option value="Regulatory Management and Training Division (RMTD)">Regulatory Management and Training Division (RMTD)</option>
                                            <option value="Community and Multi-Sector Affairs Unit (CMSAU)">Community and Multi-Sector Affairs Unit (CMSAU)</option>
                                            <option value="Planning Unit">Planning Unit</option>
                                            <option value="Administrative Officer">Administrative Officer</option>
                                            <option value="Director">Director</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <div class="form-group">
                                        <label>Confirm Department ID</label>
                                        <select name="department_id" id="department_id" class="form-control">
                                            <option value="{{ $user->department_id }}" selected>{{ $user->department_id }}</option>
                                            <option value="1">1. Office of the Director General (ODG)</option>
                                            <option value="2">2. Office of the Deputy Director General for Administration & Finance (ODDGAF)</option>
                                            <option value="3">3. Office of the Deputy Director General for Legal (ODDGL)</option>
                                            <option value="4">4. Office of the Deputy Director General for Operations (ODDGO)</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group col-md-4">
                                    <div class="form-group">
                                        <label>Confirm Office ID</label>
                                        <select name="office_id" id="office_id" class="form-control">
                                            <option value="{{ $user->office_id }}" selected>{{ $user->office_id }}</option>
                                            <option value="1">1. Special Project Management Office (SPMO)</option>
                                            <option value="2">2. Finance and Administrative Office (FAO)</option>
                                            <option value="3">3. Investigation, Enforcement and Litigation Office (IELO)</option>
                                            <option value="4">4. Legal and Public Assistance Office (LPAO)</option>
                                            <option value="5">5. Better Regulations Office (BRO)</option>
                                            <option value="6">6. Compliance Monitoring and Evaluation Office (CMEO)</option>
                                            <option value="7">7. Office of the Director General (ODG)</option>
                                            <option value="8">8. Office of the Deputy Director General for Administration & Finance (ODDGAF)</option>
                                            <option value="9">9. Office of the Deputy Director General for Legal (ODDGL)</option>
                                            <option value="10">10. Office of the Deputy Director General for Operations (ODDGO)</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group col-md-4">
                                    <div class="form-group">
                                        <label>Confirm Director/Division/Unit/HEA/EA/AO ID</label>
                                        <select name="div_unit_id" id="div_unit_id" class="form-control">
                                            <option value="{{ $user->div_unit_id }}" selected>{{ $user->div_unit_id }}</option>
                                            <option value="1">1. Security and Intelligence</option>
                                            <option value="2">2. Special Project Management Teams (SPMT)</option>
                                            <option value="3">3. Finance Division</option>
                                            <option value="4">4. General Services Division (GSD)</option> 
                                            <option value="5">5. Human Resource Development Division (HRDD)</option>
                                            <option value="6">6. Information and Communications Technology Unit (ICTU)</option>  
                                            <option value="7">7. Public Relations Unit (PRU)</option>
                                            <option value="8">8. Investigation and Enforcement Division (IED)</option>
                                            <option value="9">9. Litigation Division</option>
                                            <option value="10">10. Legal Division</option>
                                            <option value="11">11. Public Assistance Division (PAD)</option>
                                            <option value="12">12. Better Regulation Division A (BRD A)</option>
                                            <option value="13">13. Better Regulation Division B (BRD B)</option>
                                            <option value="14">14. Better Regulation Division C (BRD C)</option>
                                            <option value="15">15. Better Regulation Division D (BRD D)</option>
                                            <option value="16">16. Compliance Monitoring and Evaluation Division A (CMED A)</option> 
                                            <option value="17">17. Compliance Monitoring and Evaluation Division B (CMED B)</option> 
                                            <option value="18">18. Compliance Monitoring and Evaluation Division C (CMED C)</option> 
                                            <option value="19">19. Compliance Monitoring and Evaluation Division D (CMED D)</option> 
                                            <option value="20">20. Head Executive Assistant (HEA)</option> 
                                            <option value="21">21. ODG Executive Assistant (EA)</option> 
                                            <option value="22">22. ODDGAF Executive Assistant (EA)</option> 
                                            <option value="23">23. ODDGL Executive Assistant (EA)</option>
                                            <option value="24">24. ODDGO Executive Assistant (EA)</option>
                                            <option value="25">25. Doing Business Division (DBD)</option> 
                                            <option value="26">26. Regulatory Management and Training Division (RMTD)</option>
                                            <option value="27">27. Community and Multi-Sector Affairs Unit (CMSAU)</option>
                                            <option value="28">28. Planning Unit</option>
                                            <option value="29">29. Administrative Officer</option>
                                            <option value="30">30. SPMO Director</option>
                                            <option value="31">31. FAO Director</option>
                                            <option value="32">32. IELO Director</option>
                                            <option value="33">33. LPAO Director</option>
                                            <option value="34">34. BRO Director</option>
                                            <option value="35">35. CMEO Director</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <div class="form-group">
                                        <label>Role</label>
                                        {!! Form::select('roles[]', $roles,$userRole, array('class' => 'form-control','multiple')) !!}
                                    </div>
                                </div>
                                <div class="form-group col-md-3">
                                    <div class="form-group">
                                        <label>Status</label> <br/>
                                        <select name="approved" id="approved" class="form-control">
                                            <option value="{{ $user->approved }}" selected>{{ $user->approved }}</option>
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