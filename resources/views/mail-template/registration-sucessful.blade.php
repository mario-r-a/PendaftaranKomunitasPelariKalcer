<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Pendaftaran Berhasil — Komunitas Pelari Kalcer</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body {
            font-family: 'Segoe UI', Arial, sans-serif;
            background-color: #fef3c7;
            color: #3b1f00;
            -webkit-font-smoothing: antialiased;
        }
        .outer {
            background: linear-gradient(160deg, #fef3c7 0%, #fed7aa 60%, #fde68a 100%);
            padding: 40px 16px;
            min-height: 100vh;
        }
        .wrapper {
            max-width: 600px;
            width: 100%;
            margin: 0 auto;
            background: #ffffff;
            border-radius: 24px;
            overflow: hidden;
            box-shadow: 0 8px 40px rgba(234,88,12,0.15);
        }

        /* ===== HEADER ===== */
        .header {
            background: linear-gradient(135deg, #f97316 0%, #fbbf24 70%, #f59e0b 100%);
            padding: 44px 32px 36px;
            text-align: center;
            position: relative;
            overflow: hidden;
        }
        .header::before {
            content: '';
            position: absolute;
            top: -50px; right: -50px;
            width: 160px; height: 160px;
            border-radius: 50%;
            background: rgba(255,255,255,0.12);
        }
        .header::after {
            content: '';
            position: absolute;
            bottom: -40px; left: -40px;
            width: 130px; height: 130px;
            border-radius: 50%;
            background: rgba(255,255,255,0.08);
        }

        /* SVG logo in header */
        .logo-wrap {
            display: inline-block;
            margin-bottom: 14px;
        }

        .logo-name {
            font-size: 20px;
            font-weight: 800;
            color: #ffffff;
            letter-spacing: -0.3px;
            margin-bottom: 3px;
        }
        .logo-name span { color: #fef9c3; }

        .tagline {
            font-size: 12px;
            color: rgba(255,255,255,0.82);
            font-weight: 500;
            margin-bottom: 20px;
        }

        .hero-text {
            font-size: 26px;
            font-weight: 900;
            color: #ffffff;
            line-height: 1.25;
            letter-spacing: -0.4px;
            margin-bottom: 6px;
        }
        .hero-sub {
            font-size: 13px;
            color: rgba(255,255,255,0.88);
        }

        /* ===== BODY ===== */
        .body { padding: 36px 36px 40px; }

        .greeting {
            font-size: 21px;
            font-weight: 800;
            color: #7c2d12;
            margin-bottom: 10px;
        }
        .intro {
            font-size: 15px;
            line-height: 1.75;
            color: #92400e;
            margin-bottom: 28px;
        }
        .intro strong { color: #ea580c; }

        /* ===== INFO CARD — pure table for email compatibility ===== */
        .card {
            border-radius: 14px;
            overflow: hidden;
            margin-bottom: 28px;
            border: 1.5px solid #fed7aa;
            width: 100%;
        }
        .card-header-cell {
            background: linear-gradient(90deg, #f97316, #fbbf24);
            padding: 10px 18px;
        }
        .card-header-cell p {
            font-size: 11px;
            font-weight: 800;
            color: #ffffff;
            text-transform: uppercase;
            letter-spacing: 0.1em;
            margin: 0;
        }
        .info-table {
            width: 100%;
            border-collapse: collapse;
            background: #fff7ed;
            table-layout: fixed;
        }
        .info-table col.icon-column { width: 38px; }
        .info-table col.label-column { width: 34%; }
        .info-table col.value-column { width: auto; }
        .info-table tr {
            border-bottom: 1px solid #fde68a;
        }
        .info-table tr:last-child {
            border-bottom: none;
        }
        .td-icon {
            width: 38px;
            padding: 12px 4px 12px 12px;
            font-size: 17px;
            vertical-align: middle;
            text-align: center;
            line-height: 1;
        }
        .td-label {
            padding: 10px 6px;
            font-size: 12px;
            font-weight: 600;
            color: #b45309;
            vertical-align: middle;
            word-break: break-word;
            overflow-wrap: anywhere;
        }
        .td-value {
            padding: 10px 12px 10px 4px;
            font-size: 13px;
            font-weight: 700;
            color: #7c2d12;
            vertical-align: middle;
            word-break: break-all;
            overflow-wrap: anywhere;
            white-space: normal;
        }

        /* ===== DIVIDER ===== */
        .divider {
            border: none;
            border-top: 1.5px solid #fde68a;
            margin: 24px 0;
        }

        /* ===== STEPS — table-based for reliable rendering ===== */
        .steps-title {
            font-size: 12px;
            font-weight: 800;
            text-transform: uppercase;
            letter-spacing: 0.08em;
            color: #b45309;
            margin-bottom: 16px;
        }
        .step-table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 6px;
        }
        .step-table tr {
            vertical-align: top;
        }
        .td-stepnum {
            width: 30px;
            padding: 0 10px 16px 0;
            vertical-align: top;
            text-align: center;
        }
        .step-circle {
            display: inline-block;
            width: 28px;
            height: 28px;
            line-height: 28px;
            border-radius: 50%;
            background: linear-gradient(135deg, #f97316, #fbbf24);
            color: #ffffff;
            font-size: 12px;
            font-weight: 800;
            text-align: center;
            box-shadow: 0 2px 6px rgba(249,115,22,0.35);
        }
        .td-steptext {
            padding: 3px 0 16px 0;
            font-size: 13px;
            color: #92400e;
            line-height: 1.65;
            vertical-align: top;
        }
        .td-steptext strong { color: #7c2d12; }

        /* ===== CTA ===== */
        .cta-wrap { text-align: center; margin: 28px 0 4px; }
        .cta-btn {
            display: inline-block;
            background: linear-gradient(135deg, #f97316, #fbbf24);
            color: #ffffff !important;
            text-decoration: none;
            font-size: 15px;
            font-weight: 800;
            padding: 15px 40px;
            border-radius: 14px;
            box-shadow: 0 4px 16px rgba(249,115,22,0.38);
            letter-spacing: 0.2px;
        }

        /* ===== SIGNATURE ===== */
        .signature { font-size: 14px; color: #92400e; line-height: 1.75; }
        .signature strong { color: #ea580c; }

        /* ===== FOOTER ===== */
        .footer {
            background: linear-gradient(135deg, #fff7ed, #fef3c7);
            border-top: 1.5px solid #fde68a;
            padding: 20px 36px;
            text-align: center;
            font-size: 11px;
            color: #b45309;
            line-height: 1.7;
        }
        .footer a { color: #ea580c; text-decoration: none; font-weight: 600; }
        .footer .footer-logo {
            font-size: 15px;
            font-weight: 800;
            color: #7c2d12;
            margin-bottom: 6px;
        }
        .footer .footer-logo span { color: #ea580c; }

        /* ===== MOBILE RESPONSIVE ===== */
        @media only screen and (max-width: 480px) {
            .outer {
                padding: 12px 6px !important;
            }
            .wrapper {
                border-radius: 14px !important;
                width: 100% !important;
            }
            .header {
                padding: 28px 18px 24px !important;
            }
            .hero-text {
                font-size: 20px !important;
            }
            .body {
                padding: 22px 18px 24px !important;
            }
            .greeting {
                font-size: 18px !important;
            }
            .intro {
                font-size: 14px !important;
            }
            .td-icon {
                width: 30px !important;
                padding: 10px 2px 10px 8px !important;
                font-size: 14px !important;
            }
            .td-label {
                padding: 10px 4px !important;
                font-size: 11px !important;
                word-break: break-all !important;
                white-space: normal !important;
            }
            .td-value {
                padding: 10px 8px 10px 4px !important;
                font-size: 12px !important;
                word-break: break-all !important;
                overflow-wrap: anywhere !important;
                white-space: normal !important;
            }
            .td-stepnum {
                padding: 0 8px 14px 0 !important;
            }
            .step-circle {
                width: 26px !important;
                height: 26px !important;
                line-height: 26px !important;
                font-size: 11px !important;
            }
            .td-steptext {
                font-size: 13px !important;
                padding-bottom: 14px !important;
            }
            .cta-btn {
                padding: 13px 20px !important;
                font-size: 14px !important;
                display: block !important;
            }
            .footer {
                padding: 16px 18px !important;
            }
        }
    </style>
</head>
<body>
<div class="outer">
<div class="wrapper">

    <!-- HEADER -->
    <div class="header">
        <!-- Inline SVG logo — running figure -->
        <div class="logo-wrap">
            <svg width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                <!-- Circle background -->
                <circle cx="32" cy="32" r="30" fill="rgba(255,255,255,0.22)" stroke="rgba(255,255,255,0.4)" stroke-width="1.5"/>
                <!-- Runner silhouette -->
                <!-- Head -->
                <circle cx="36" cy="14" r="5.5" fill="white"/>
                <!-- Body -->
                <line x1="34" y1="19" x2="30" y2="33" stroke="white" stroke-width="3.5" stroke-linecap="round"/>
                <!-- Left arm (forward) -->
                <line x1="32" y1="24" x2="42" y2="20" stroke="white" stroke-width="2.8" stroke-linecap="round"/>
                <!-- Right arm (back) -->
                <line x1="32" y1="24" x2="22" y2="28" stroke="white" stroke-width="2.8" stroke-linecap="round"/>
                <!-- Left leg (stride forward) -->
                <line x1="30" y1="33" x2="20" y2="44" stroke="white" stroke-width="3" stroke-linecap="round"/>
                <line x1="20" y1="44" x2="22" y2="52" stroke="white" stroke-width="3" stroke-linecap="round"/>
                <!-- Right leg (push off) -->
                <line x1="30" y1="33" x2="38" y2="42" stroke="white" stroke-width="3" stroke-linecap="round"/>
                <line x1="38" y1="42" x2="45" y2="48" stroke="white" stroke-width="3" stroke-linecap="round"/>
                <!-- Shoe left -->
                <ellipse cx="21" cy="53" rx="6" ry="2.5" fill="white" opacity="0.9"/>
                <!-- Shoe right -->
                <ellipse cx="46" cy="49" rx="6" ry="2.5" fill="white" opacity="0.9"/>
                <!-- Speed lines -->
                <line x1="12" y1="28" x2="18" y2="28" stroke="white" stroke-width="1.5" stroke-linecap="round" opacity="0.5"/>
                <line x1="10" y1="33" x2="17" y2="33" stroke="white" stroke-width="1.2" stroke-linecap="round" opacity="0.4"/>
                <line x1="13" y1="38" x2="19" y2="38" stroke="white" stroke-width="1" stroke-linecap="round" opacity="0.3"/>
            </svg>
        </div>

        <div class="logo-name">Pelari<span>Kalcer</span></div>
        <div class="tagline">Komunitas Pelari Kalcer — Setiap Langkah Berarti</div>
        <div class="hero-text">Selamat Datang di Keluarga Kami!</div>
        <div class="hero-sub">Kamu resmi menjadi pelari Kalcer — ayo berlari bersama!</div>
    </div>

    <!-- BODY -->
    <div class="body">

        <p class="greeting">Hei, {{ $user_name }}!</p>
        <p class="intro">
            Selamat! Pendaftaranmu ke <strong>Komunitas Pelari Kalcer</strong> telah berhasil.
            Kami sangat senang menyambut pelari bersemangat seperti kamu.
            Bersiaplah untuk petualangan lari yang menyenangkan dan penuh energi bersama kami!
        </p>

        <!-- Info Card -->
        <div class="card">
            <div class="card-header-cell">
                <p>Detail Pendaftaranmu</p>
            </div>
            <table class="info-table" cellpadding="0" cellspacing="0">
                <colgroup>
                    <col class="icon-column">
                    <col class="label-column">
                    <col class="value-column">
                </colgroup>
                <tr>
                    <td class="td-icon" style="width: 38px;">👤</td>
                    <td class="td-label">Nama Lengkap</td>
                    <td class="td-value" style="word-break: break-all; overflow-wrap: anywhere; white-space: normal;">{{ $user_name }}</td>
                </tr>
                <tr>
                    <td class="td-icon" style="width: 38px;">✉️</td>
                    <td class="td-label">Email</td>
                    <td class="td-value" style="word-break: break-all; overflow-wrap: anywhere; white-space: normal;">{{ $user_email }}</td>
                </tr>
                <tr>
                    <td class="td-icon" style="width: 38px;">📱</td>
                    <td class="td-label">No. Telepon</td>
                    <td class="td-value" style="word-break: break-all; overflow-wrap: anywhere; white-space: normal;">{{ $phone }}</td>
                </tr>
                <tr>
                    <td class="td-icon" style="width: 38px;">🏁</td>
                    <td class="td-label">Kategori Lari</td>
                    <td class="td-value" style="word-break: break-all; overflow-wrap: anywhere; white-space: normal;">{{ $kategori_lari }}</td>
                </tr>
                <tr>
                    <td class="td-icon" style="width: 38px;">⭐</td>
                    <td class="td-label">Level Pengalaman</td>
                    <td class="td-value" style="word-break: break-all; overflow-wrap: anywhere; white-space: normal;">{{ $level_pengalaman }}</td>
                </tr>
            </table>
        </div>

        <!-- Next Steps -->
        <p class="steps-title">Langkah Selanjutnya</p>
        <table class="step-table" cellpadding="0" cellspacing="0">
            <tr>
                <td class="td-stepnum">
                    <div class="step-circle">1</div>
                </td>
                <td class="td-steptext">
                    <strong>Cek WhatsApp kamu.</strong>
                    Tim kami akan menambahkanmu ke grup komunitas dalam 1×24 jam ke depan.
                </td>
            </tr>
            <tr>
                <td class="td-stepnum">
                    <div class="step-circle">2</div>
                </td>
                <td class="td-steptext">
                    <strong>Simpan kontak admin.</strong>
                    Hubungi kami di <strong>{{ config('mail.from.address') }}</strong> jika ada pertanyaan tentang event atau jadwal.
                </td>
            </tr>
            <tr>
                <td class="td-stepnum">
                    <div class="step-circle">3</div>
                </td>
                <td class="td-steptext">
                    <strong>Siapkan sepatumu!</strong>
                    Jadwal lari perdana akan diumumkan melalui grup WhatsApp — jangan sampai ketinggalan!
                </td>
            </tr>
        </table>

        <hr class="divider">

        <!-- CTA -->
        <div class="cta-wrap">
            <a href="{{ config('app.url') }}" class="cta-btn">Lihat Beranda Komunitas &rarr;</a>
        </div>

        <hr class="divider">

        <p class="signature">
            Salam semangat dari kami,<br>
            <strong>Admin Komunitas Pelari Kalcer</strong>
        </p>

    </div>

    <!-- FOOTER -->
    <div class="footer">
        <div class="footer-logo">Pelari<span>Kalcer</span></div>
        &copy; {{ date('Y') }} Komunitas Pelari Kalcer — Hak Cipta Dilindungi.<br>
        Email ini dikirim otomatis, harap tidak membalas langsung.<br>
        Pertanyaan? Hubungi <a href="mailto:{{ config('mail.from.address') }}">{{ config('mail.from.address') }}</a>
    </div>

</div>
</div>
</body>
</html>
