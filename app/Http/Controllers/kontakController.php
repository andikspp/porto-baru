<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Exception;

class KontakController extends Controller
{
    public function prosesFormulir(Request $request)
    {
        // Validasi formulir
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
        ]);

        // Ambil data dari formulir
        $name = $request->input('name');
        $email = $request->input('email');
        $subject = $request->input('subject');
        $messageContent = $request->input('message');

        // Buat pesan email dengan informasi tambahan
        $emailContent = "Email pengirim: $email\n\n" . $messageContent;

        // Kirim email
        $tujuan_email = "andhika2003.ap31@gmail.com"; // Ganti dengan alamat email yang valid

        try {
            // Kirim email langsung dari controller
            Mail::raw($emailContent, function ($message) use ($tujuan_email, $subject, $email, $name) {
                $message->to($tujuan_email)
                    ->subject($subject)
                    ->from($email, $name);
            });

            // Redirect kembali ke halaman beranda setelah pengiriman berhasil
            return redirect()->route('home')->with('status', 'success');
        } catch (Exception $e) {
            // Tangani kesalahan jika gagal mengirim email
            // Misalnya, log error atau tampilkan pesan error ke pengguna
            return redirect()->route('home')->with('status', 'error')->with('message', 'Fitur sedang dalam perbaikan');
        }
    }
}
