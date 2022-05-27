<?php
namespace App\Mail;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
 
class EmailIn extends Mailable
{
    use Queueable, SerializesModels;
    public $data;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->data = $data;
        $this->dts_no = $data['dts_no'];
        $this->status = $data['status'];
        $this->subject = $data['subject'];
        $this->routed_by = $data['routed_by'];
        $this->routed_by_div_unit = $data['routed_by_div_unit'];
    }
 
    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('An Internal document has been assigned to you.')->view('emails.emailnotificationinternals')->with('data',$this->data);
    }
}