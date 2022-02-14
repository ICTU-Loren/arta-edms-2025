<?php

namespace App\Http\Controllers;

use App\Externals;
use App\Internals;
use Illuminate\Http\Request;

class QrCodeController extends Controller
{
    public function externalqr($id)
    {
      $externals = Externals::find($id);
      return view('livewire.files.ev.qrcode', ['externals' => $externals], compact('externals'));
    }

    public function internalqr($id)
    {
      $internals = Internals::find($id);
      return view('livewire.files.ev.qrcode', ['internals' => $internals], compact('internals'));
    }
}
