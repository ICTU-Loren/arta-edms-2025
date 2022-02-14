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

                        <img src="<?php echo $header_logo ?>" style="position:fixed;top:-50px;width:300px height:80px;float:right;margin-botton:30px">

                        <br /><br /><br />

                        <table>
                            <tr>
                                <th width="25%">DTS No.</th>
                                <td>DTS No. EX2021-00{{ $externals->id }}</td>
                            </tr>
                            <tr>
                                <th>Document Status</th>
                                <td>{{ $externals->status }}</td>
                            </tr>
                        </table>

                        <table>
                            <tr>
                                <td colspan="2" style="background:#E9ECEF;color:#6c757d;padding:5px;">
                                 Document Details
                                </td>
                            </tr>
                            <tr>
                                <th width="25%">Addressed to</th>
                                <td>
                                    @if($externals->personnel > 0)
                                        {{ $externals->personnel }} <br />
                                    @endif
                                                                
                                    @if($externals->div_unit > 0)
                                        {{ $externals->div_unit }} <br />
                                    @endif
                                                                        
                                    @if($externals->office > 0)
                                        {{ $externals->office }} <br />
                                    @endif

                                    @if($externals->department > 0)
                                        {{ $externals->department }}
                                    @endif
                                </td>
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
                                <td colspan="2" style="background:#E9ECEF;color:#6c757d;padding:5px;">
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
                                <td colspan="2" style="background:#E9ECEF;color:#6c757d;padding:5px;">
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
                                                        
                    </div>

                    <br />

                    <table>
                        <tr>
                            <th width="25%">Created by</th>
                            <td>{{ $externals->created_by }} <br /> {{ $externals->created_by_div_unit }}</td>
                        </tr>
                        <tr>
                            <th>Date & Time created</th>
                            <td>{{ $externals->created_at }}</td>
                        </tr>
                    </table>

                    <table>
                        <tr>
                            <th width="25%">Modified by</th>
                            <td>{{ $externals->modified_by }} <br /> {{ $externals->modified_by_div_unit }}</td>
                        </tr>
                        <tr>
                            <th>Date & Time modified</th>
                            <td>{{ $externals->updated_at }}</td>
                        </tr>
                    </table>

                    <img src="<?php echo $footer_logo ?>" style="position:fixed;bottom:-40px;left:0;right:0;height:30px;width:100%;">

