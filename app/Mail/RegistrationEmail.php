<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class RegistrationEmail extends Mailable
{
    use Queueable, SerializesModels;

    public string $user_name;
    public string $user_email;
    public string $phone;
    public string $kategori_lari;
    public string $level_pengalaman;

    /**
     * Create a new message instance.
     */
    public function __construct(
        string $user_name,
        string $user_email,
        string $phone,
        string $kategori_lari,
        string $level_pengalaman
    ) {
        $this->user_name        = $user_name;
        $this->user_email       = $user_email;
        $this->phone            = $phone;
        $this->kategori_lari    = $kategori_lari;
        $this->level_pengalaman = $level_pengalaman;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Pendaftaran Komunitas Pelari Kalcer Berhasil!',
            from: new Address(
                config('mail.from.address', 'mario@lius.my.id'),
                config('mail.from.name', 'Admin Kalcer'),
            ),
            cc: [
                'mariesusandi@student.ciputra.ac.id',
            ],
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'mail-template.registration-sucessful',
            with: [
                'user_name'        => $this->user_name,
                'user_email'       => $this->user_email,
                'phone'            => $this->phone,
                'kategori_lari'    => $this->kategori_lari,
                'level_pengalaman' => $this->level_pengalaman,
            ],
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
