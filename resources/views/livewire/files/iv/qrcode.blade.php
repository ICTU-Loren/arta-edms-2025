<!-- DON'T CHANGE SPACING -->
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-4 col-md-12 col-sm-12"></div>
        
        <div class="col-lg-4 col-md-12 col-sm-12">
            <div class="card-body">
                {!! QrCode::size(400)->backgroundColor(255,255,255)->generate(
                   'DOCUMENT DETAILS' .'
DTS No: '.$internals->dts.''.$internals->id.'
Status: '.$internals->status.'
Addressed to: '.$internals->personnel.'
Title: '.$internals->title.' 
Subject: '.$internals->subject.' 
Classification: '.$internals->doc_class.' 
Type: '.$internals->doc_type.'

SENDING DETAILS
Name: '.$internals->s_name.'
Email Address: '.$internals->s_email.'
Mode of Transmittal: '.$internals->mode_of_trans.'

Closed by: '.$internals->modified_by.' ('.$internals->modified_by_div_unit.')
Date & Time modified: '.$internals->updated_at.'') !!}
            </div>
        </div>

        <div class="col-lg-4 col-md-12 col-sm-12"></div>
    </div>
</div>