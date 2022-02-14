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
                                <td>DTS No. IN2021-00{{ $internals->id }}</td>
                            </tr>
                            <tr>
                                <th>Document Status</th>
                                <td>{{ $internals->status }}</td>
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
                                    @if($internals->personnel > 0)
                                        {{ $internals->personnel }} <br />
                                    @endif
                                                                
                                    @if($internals->div_unit > 0)
                                        {{ $internals->div_unit }} <br />
                                    @endif
                                </td>
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
                                <td>{{ $internals->s_name }}</td>
                            </tr>
                            <tr>
                                <th>Contact Details</th>
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
                            <th width="25%">Modified by</th>
                            <td>{{ $internals->modified_by }} <br /> {{ $internals->modified_by_div_unit }}</td>
                        </tr>
                        <tr>
                            <th>Date & Time modified</th>
                            <td>{{ $internals->updated_at }}</td>
                        </tr>
                    </table>

                    <img src="<?php echo $footer_logo ?>" style="position:fixed;bottom:-40px;left:0;right:0;height:30px;width:100%;">

