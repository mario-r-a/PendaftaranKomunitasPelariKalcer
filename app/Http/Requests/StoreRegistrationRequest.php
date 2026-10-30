<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRegistrationRequest extends FormRequest
{
    /** Form publik — semua orang boleh mendaftar */
    public function authorize(): bool
    {
        return true;
    }

    /** @return array<string, mixed> */
    public function rules(): array
    {
        return [
            'name'             => ['required', 'string', 'max:255'],
            'email'            => ['required', 'email', 'max:255', 'unique:registrations,email'],
            'phone'            => ['required', 'string', 'max:20'],
            'kategori_lari'    => ['required', 'string', 'in:5K,10K,Half Marathon (21K),Full Marathon (42K)'],
            'level_pengalaman' => ['required', 'string', 'in:Pemula,Menengah,Berpengalaman'],
        ];
    }

    /** @return array<string, string> */
    public function messages(): array
    {
        return [
            'name.required'             => 'Nama lengkap wajib diisi.',
            'email.required'            => 'Alamat email wajib diisi.',
            'email.email'               => 'Format email tidak valid.',
            'email.unique'              => 'Email ini sudah terdaftar sebelumnya. Pendaftaran gagal dikirim.',
            'phone.required'            => 'Nomor telepon wajib diisi.',
            'kategori_lari.required'    => 'Pilih kategori lari.',
            'kategori_lari.in'          => 'Kategori lari tidak valid.',
            'level_pengalaman.required' => 'Pilih level pengalamanmu.',
            'level_pengalaman.in'       => 'Level pengalaman tidak valid.',
        ];
    }
}
