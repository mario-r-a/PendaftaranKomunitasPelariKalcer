<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRegistrationRequest;
use App\Mail\RegistrationEmail;
use App\Models\Registration;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Mail;

class RegistrationController extends Controller
{
    /**
     * Simpan data pendaftaran, kirim email konfirmasi,
     * lalu arahkan ke halaman sukses.
     */
    public function store(StoreRegistrationRequest $request): RedirectResponse
    {
        // 1. Simpan ke database
        $registration = Registration::create($request->validated());

        // 2. Kirim email konfirmasi ke pendaftar
        Mail::to($registration->email)->send(
            new RegistrationEmail(
                user_name: $registration->name,
                user_email: $registration->email,
                phone: $registration->phone,
                kategori_lari: $registration->kategori_lari,
                level_pengalaman: $registration->level_pengalaman,
            )
        );

        // 3. Flash data ringkasan ke session lalu redirect ke halaman sukses
        return redirect()
            ->route('registration.success')
            ->with('registration', [
                'name' => $registration->name,
                'email' => $registration->email,
                'phone' => $registration->phone,
                'kategori_lari' => $registration->kategori_lari,
                'level_pengalaman' => $registration->level_pengalaman,
            ]);
    }

    /**
     * Tampilkan halaman konfirmasi pendaftaran berhasil.
     */
    public function success()
    {
        // Jika tidak ada data di session (akses langsung URL), redirect ke home
        if (! session()->has('registration')) {
            return redirect()->route('home');
        }

        return view('registration-success', [
            'registration' => session('registration'),
        ]);
    }
}
