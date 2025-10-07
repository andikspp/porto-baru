<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;

class KontakController extends Controller
{
    public function prosesFormulir(Request $request)
    {
        // Validasi reCAPTCHA
        $recaptcha = $request->input('g-recaptcha-response');
        if (!$recaptcha) {
            return back()->with(['status' => 'error', 'message' => 'Please complete the reCAPTCHA verification.']);
        }

        // Verifikasi reCAPTCHA dengan Google
        $response = Http::post('https://www.google.com/recaptcha/api/siteverify', [
            'secret' => env('RECAPTCHA_SECRET_KEY'),
            'response' => $recaptcha,
            'remoteip' => $request->ip()
        ]);

        $result = $response->json();

        if (!$result['success']) {
            return back()->with(['status' => 'error', 'message' => 'reCAPTCHA verification failed. Please try again.']);
        }

        // Validasi formulir
        $validated = $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|email|max:100',
            'subject' => 'required|string|max:150',
            'message' => 'required|string|max:1000',
        ]);

        // Data dari formulir
        $name = $validated['name'];
        $email = $validated['email'];
        $subject = $validated['subject'];
        $messageContent = $validated['message'];

        // Konten email
        $emailContent = "Email pengirim: $email\n\n" . $messageContent;

        $tujuan_email = "andhika2003.ap31@gmail.com";

        try {
            // Kirim email menggunakan Mail::raw
            Mail::raw($emailContent, function ($message) use ($tujuan_email, $subject, $email, $name) {
                $message->to($tujuan_email)
                    ->subject($subject)
                    ->replyTo($email, $name)
                    ->from(config('mail.from.address'), config('mail.from.name'));
            });

            return redirect()->route('home')->with('status', 'success');
        } catch (\Exception $e) {
            // Log error agar mudah debug
            Log::error('Gagal kirim email kontak: ' . $e->getMessage());

            return redirect()->route('home')->with('status', 'error')->with('message', 'Gagal mengirim pesan. Silakan coba lagi nanti.');
        }
    }
}
