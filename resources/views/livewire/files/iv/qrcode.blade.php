<div class="container-fluid">
    <div class="row">
        <div class="col-lg-4 col-md-12 col-sm-12"></div>
        
        <div class="col-lg-4 col-md-12 col-sm-12">
            <div class="card-body">
                {!! QrCode::size(400)->backgroundColor(255,255,255)->generate(
                   'Document Details' .'
                   DTS No: EX2021-00'.$internals->id.'
                   Status: '.$internals->status.'
                   Addressed to: '.$internals->personnel.' / '.$internals->div_unit.' / '.$internals->office.' / '.$internals->department.' 
                   Subject: '.$internals->subject.' 
                   Classification: '.$internals->doc_class.' 
                   Type: '.$internals->doc_type.'

                   Senders Details 
                   Name: '.$internals->s_name.'
                   Contact Details: '.$internals->s_email.'
                   Mode of Transmittal: '.$internals->mode_of_trans.'
                   
                   Date & Time created: '.$internals->created_at.'
                   Remarks: '.$internals->comment.'

                   Modified by: '.$internals->modified_by.' / '.$internals->modified_by_div_unit.'/ '.$internals->modified_at) !!}
            </div>
        </div>

        <div class="col-lg-4 col-md-12 col-sm-12"></div>
    </div>
</div>