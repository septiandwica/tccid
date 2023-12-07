<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        // Validasi input formulir
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required'
        ]);

        // Kirim email jika koneksi internet tersedia
        if ($this->isOnline()) {
            $mail_data = [
                'recipient' => 'info@pttococo.kencang.id', // Ganti dengan alamat email tujuan
                'fromEmail' => $request->email,
                'fromName' => $request->name, 
                'subject' => $request->subject,
                'body' => $request->message
            ];

            // Mengirim email menggunakan Mail::send
            Mail::send('email-template', ['mail_data' => $mail_data], function ($message) use ($mail_data) {
                $message->to($mail_data['recipient'])
                    ->from($mail_data['fromEmail'], $mail_data['fromName'])
                    ->subject($mail_data['subject']);
            });

            // Redirect dengan pesan sukses
            return redirect()->back()->with('success', 'Email Sent!');
        } else {
            // Koneksi internet tidak tersedia
            return redirect()->back()->withInput()->with('error', 'Error, Please Check Your Internet Connection');
        }
    }

    public function isOnline($site = "https://youtube.com/")
    {
        if (@fopen($site, "r")) {
            return true;
        } else {
            return false;
        }
    }
}
