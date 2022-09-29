                    <style>
                        table {
                        font-family: arial, sans-serif;
                        border-collapse: collapse;
                        width: 100%;
                        }

                        td, th {
                        border: 1px solid #dddddd;
                        text-align: left;
                        padding: 5px;
                        }

                        tr:nth-child(even) {
                        background-color: #ffffff;
                        }
                    </style>

                        <div class="col-12 mb-3">
                            <img src="<?php echo $header_logo ?>" style="position:fixed;top:-30px;width:250px height:60px;float:right;margin-botton:30px">
                        </div>

                        <br/><br/><br/><br/>

                        <table>
                            <tr>
                                <th>DTS No.</th>
                                <th width="25%">Document Status</th>
                                <th>ARTA-EDTS URL</th>
                            </tr>
                            <tr>
                                <td>{{ $internals->dts }}{{ $internals->id }}</td>
                                <td>{{ $internals->status }}</td>
                                <td>http://127.0.0.1:8000/files/iv/{{ $internals->id }}</td>
                            </tr>
                        </table>


                        <table>
                            <tr>
                                <td colspan="2" style="background:#f2f2f2;color:#6c757d;padding:5px;">
                                Document Details
                                </td>
                            </tr>
                            <tr>
                                <th width="25%">Addressed to</th>
                                <td>
                                    @if($internals->personnel > 0)
                                        {{ $internals->personnel }} <br />
                                    @endif
                                    <span class="ml-0" style="font-size:14px;">
                                    @if($internals->department > 0)
                                        @if ($internals->department == '1')
                                                Office of the Director General (ODG)
                                            @elseif ($internals->department == '2')
                                                Office of the Deputy Director General for Administration & Finance (ODDGAF)
                                            @elseif ($internals->department == '3')
                                                Office of the Deputy Director General for Legal (ODDGL)
                                            @else ($internals->department == '4')
                                                Office of the Deputy Director General for Operations (ODDGO)
                                        @endif <br />
                                    @endif
                                                                    
                                    @if($internals->office > 0)
                                        @if ($internals->office == '1')
                                            ODG - Personnel
                                            @elseif ($internals->office == '2')
                                                Public Relations Unit (PRU)
                                            @elseif ($internals->office == '3')
                                                ODDGAF - Personnel
                                            @elseif ($internals->office == '4')
                                                Finance and Administrative Office (FAO)
                                            @elseif ($internals->office == '5')
                                                Information and Communications Technology Unit (ICTU)
                                            @elseif ($internals->office == '6')
                                                Planning Unit (PU)
                                            @elseif ($internals->office == '7')
                                                ODDGL - Personnel
                                            @elseif ($internals->office == '8')
                                                Investigation, Enforcement and Litigation Office (IELO)
                                            @elseif ($internals->office == '9')
                                                Legal and Public Assistance Office (LPAO)
                                            @elseif ($internals->office == '10')
                                                ODDGO - Personnel
                                            @elseif ($internals->office == '11')
                                                Better Regulations Office (BRO)
                                            @else ($internals->office == '12')
                                                Compliance Monitoring and Evaluation Office (CMEO)
                                        @endif <br />
                                    @endif

                                    @if($internals->div_unit > 0)
                                        {{ $internals->div_unit }}
                                    @endif
                                </span>
                                </td>
                            </tr>
                            <tr>
                                <th>Title</th>
                                <td>{{ $internals->title }}</td>
                            </tr>
                            <tr>
                                <th>Subject</th>
                                <td>{{ $internals->subject }}</td>
                            </tr>
                            <tr>
                                <th>Classification</th>
                                <td>{{ $internals->doc_class }}</td>
                            </tr>
                            <tr>
                                <th>Type</th>
                                <td>{{ $internals->doc_type }}</td>
                            </tr>
                        </table>

                        <table>
                            <tr>
                                <td colspan="2" style="background:#E9ECEF;color:#6c757d;padding:5px;">
                                 Sender's Details
                                </td>
                            </tr>
                            <tr>
                                <th width="25%">Name</th>
                                <td>{{ $internals->s_name }} <br /> 
                                <span class="ml-0" style="font-size:14px;">{{ $internals->created_by_div_unit }}</td>
                            </tr>
                            <tr>
                                <th>Email Address</th>
                                <td>{{ $internals->s_email }}</td>
                            </tr>
                            <tr>
                                <th>Date & Time Sent</th>
                                <td>{{ $internals->created_at }}</td>
                            </tr>
                            <tr>
                                <th>Mode of Transmittal</th>
                                <td>{{ $internals->mode_of_trans }}</td>
                            </tr>
                            <tr>
                                <th>Remarks</th>
                                <td>{{ $internals->comment }}</td>
                            </tr>
                        </table>
                                                        
                    </div>

                    <br />

                    <table>
                        <tr>
                            <td colspan="2" style="background:#f2f2f2;color:#6c757d;padding:5px;">
                                ARTA-EDTS Details
                            </td>
                        </tr>
                        <tr>
                            <th width="25%">Closed by</th>
                            <td>{{ $internals->modified_by }} <br /> 
                                <span class="ml-0" style="font-size:14px;">{{ $internals->modified_by_div_unit }}</td>
                        </tr>
                        <tr>
                            <th>Date & Time modified</th>
                            <td>{{ $internals->updated_at }}</td>
                        </tr>
                    </table>

                    <img src="<?php echo $footer_logo ?>" style="position:fixed;bottom:-40px;left:0;right:0;height:30px;width:100%;">

