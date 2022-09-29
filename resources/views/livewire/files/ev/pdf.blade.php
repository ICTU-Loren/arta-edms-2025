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
                                <td>{{ $externals->dts }}{{ $externals->id }}</td>
                                <td>{{ $externals->status }}</td>
                                <td>http://127.0.0.1:8000/files/ev/{{ $externals->id }}</td>
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
                                    @if($externals->personnel > 0)
                                        {{ $externals->personnel }} <br />
                                    @endif
                                    <span class="ml-0" style="font-size:14px;">
                                    @if($externals->department > 0)
                                        @if ($externals->department == '1')
                                                Office of the Director General (ODG)
                                            @elseif ($externals->department == '2')
                                                Office of the Deputy Director General for Administration & Finance (ODDGAF)
                                            @elseif ($externals->department == '3')
                                                Office of the Deputy Director General for Legal (ODDGL)
                                            @else ($externals->department == '4')
                                                Office of the Deputy Director General for Operations (ODDGO)
                                        @endif <br />
                                    @endif
                                                                    
                                    @if($externals->office > 0)
                                        @if ($externals->office == '1')
                                            ODG - Personnel
                                            @elseif ($externals->office == '2')
                                                Public Relations Unit (PRU)
                                            @elseif ($externals->office == '3')
                                                ODDGAF - Personnel
                                            @elseif ($externals->office == '4')
                                                Finance and Administrative Office (FAO)
                                            @elseif ($externals->office == '5')
                                                Information and Communications Technology Unit (ICTU)
                                            @elseif ($externals->office == '6')
                                                Planning Unit (PU)
                                            @elseif ($externals->office == '7')
                                                ODDGL - Personnel
                                            @elseif ($externals->office == '8')
                                                Investigation, Enforcement and Litigation Office (IELO)
                                            @elseif ($externals->office == '9')
                                                Legal and Public Assistance Office (LPAO)
                                            @elseif ($externals->office == '10')
                                                ODDGO - Personnel
                                            @elseif ($externals->office == '11')
                                                Better Regulations Office (BRO)
                                            @else ($externals->office == '12')
                                                Compliance Monitoring and Evaluation Office (CMEO)
                                        @endif <br />
                                    @endif

                                    @if($externals->div_unit > 0)
                                        {{ $externals->div_unit }}
                                    @endif
                                </span>
                                </td>
                            </tr>
                            <tr>
                                <th>Title</th>
                                <td>{{ $externals->title }}</td>
                            </tr>
                            <tr>
                                <th>Subject</th>
                                <td>{{ $externals->subject }}</td>
                            </tr>
                            <tr>
                                <th>Classification</th>
                                <td>{{ $externals->doc_class }}</td>
                            </tr>
                            <tr>
                                <th>Type</th>
                                <td>{{ $externals->doc_type }}</td>
                            </tr>
                        </table>

                        <table>
                            <tr>
                                <td colspan="2" style="background:#f2f2f2;color:#6c757d;padding:5px;">
                                Sender's Details
                                </td>
                            </tr>
                            <tr>
                                <th width="25%">Name</th>
                                <td>{{ $externals->s_name }}</td>
                            </tr>
                            <tr>
                                <th>Profile</th>
                                <td>{{ $externals->s_profile }}</td>
                            </tr>
                            <tr>
                                <th>Address</th>
                                <td>{{ $externals->s_address }}</td>
                            </tr>
                            <tr>
                                <th>Contact Details</th>
                                <td>{{ $externals->s_email }} <br /> {{ $externals->s_contact }}</td>
                            </tr>
                            <tr>
                                <th>Mode of Transmittal</th>
                                <td>{{ $externals->mode_of_trans }}</td>
                            </tr>
                        </table>

                        <table>
                            <tr>
                                <td colspan="2" style="background:#f2f2f2;color:#6c757d;padding:5px;">
                                    Receiver's Details
                                </td>
                            </tr>
                            <tr>
                                <th width="25%">Received by</th>
                                <td>{{ $externals->received_by }} <br /> {{ $externals->received_by_div_unit }}</td>
                            </tr>
                            <tr>
                                <th>Date & Time received</th>
                                <td>{{ $externals->date_received }} {{ $externals->time_received }}</td>
                            </tr>
                            <tr>
                                <th>Remarks</th>
                                <td>{{ $externals->comment }}</td>
                            </tr>
                        </table>

                        <br/>

                        <table>
                            <tr>
                                <td colspan="2" style="background:#f2f2f2;color:#6c757d;padding:5px;">
                                    ARTA-EDTS Details
                                </td>
                            </tr>
                            <tr>
                                <th width="25%">Created by</th>
                                <td>{{ $externals->created_by }} <br /> 
                                    <span class="ml-0" style="font-size:14px;">{{ $externals->created_by_div_unit }}</span></td>
                            </tr>
                            <tr>
                                <th>Date & Time created</th>
                                <td>{{ $externals->created_at }}</td>
                            </tr>
                            <tr>
                                <th width="25%">Closed by</th>
                                <td>{{ $externals->modified_by }} <br /> 
                                    <span class="ml-0" style="font-size:14px;">{{ $externals->modified_by_div_unit }}</span></td>
                            </tr>
                            <tr>
                                <th>Date & Time modified</th>
                                <td>{{ $externals->updated_at }}</td>
                            </tr>
                        </table>

                    <img src="<?php echo $footer_logo ?>" style="position:fixed;bottom:-40px;left:0;right:0;height:30px;width:100%;">

