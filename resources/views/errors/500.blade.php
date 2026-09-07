<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>500 – Server Error | PT Raya Konstruksi Internasional</title>
    <link rel="icon" type="image/png" href="/icon.png">
    <style>
        @font-face {
            font-family: 'Bricolage Grotesque';
            src: url('/assets/font/BricolageGrotesque/BricolageGrotesque-VariableFont_opsz,wdth,wght.woff2') format('woff2');
            font-weight: 200 800; font-style: normal; font-display: swap;
        }
        @font-face {
            font-family: 'Pliant';
            src: url('/assets/font/Pliant/Pliant-VariableFont_wdth,wght.woff2') format('woff2');
            font-weight: 100 900; font-style: normal; font-display: swap;
        }

        *, *::before, *::after { margin: 0; padding: 0; box-sizing: border-box; }

        body {
            font-family: 'Pliant', sans-serif;
            color: #f8fafc;
            min-height: 100vh;
            display: flex; align-items: center; justify-content: center;
            overflow-x: hidden; position: relative;
            background: url('/assets/img/cover-const.webp') center/cover no-repeat fixed;
        }
        body::before {
            content: '';
            position: fixed; inset: 0;
            background: linear-gradient(135deg, rgba(5,8,22,0.93) 0%, rgba(11,20,55,0.88) 60%, rgba(5,8,22,0.80) 100%);
            pointer-events: none;
        }

        .wrap {
            position: relative; z-index: 1;
            width: 100%; max-width: 560px;
            padding: 2rem 1.5rem; margin: auto; text-align: center;
        }

        .brand {
            display: inline-block; margin-bottom: 2.5rem; text-decoration: none;
            animation: fadeUp 0.5s ease both;
        }
        .brand img { height: 40px; width: auto; filter: brightness(0) invert(1); }

        .error-code {
            font-family: 'Bricolage Grotesque', sans-serif;
            font-size: clamp(80px, 18vw, 130px);
            font-weight: 900; line-height: 1; letter-spacing: -4px;
            background: linear-gradient(135deg, #1b2f6e 0%, #f1a52b 100%);
            -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text;
            animation: fadeUp 0.5s 0.05s ease both;
        }
        .error-title {
            font-family: 'Bricolage Grotesque', sans-serif;
            font-size: clamp(20px, 3.5vw, 28px); font-weight: 800;
            color: #fff; margin: 12px 0 0; letter-spacing: -0.5px;
            animation: fadeUp 0.5s 0.1s ease both;
        }
        .divider {
            width: 48px; height: 3px; background: #f1a52b;
            border-radius: 2px; margin: 20px auto;
            animation: fadeUp 0.5s 0.15s ease both;
        }
        .error-desc {
            font-size: 15px; color: rgba(255,255,255,0.55);
            line-height: 1.7; max-width: 400px; margin: 0 auto 2.25rem;
            animation: fadeUp 0.5s 0.2s ease both;
        }

        .actions {
            display: flex; gap: 12px; justify-content: center; flex-wrap: wrap;
            animation: fadeUp 0.5s 0.28s ease both;
        }
        .btn {
            display: inline-flex; align-items: center; gap: 8px;
            padding: 13px 28px; border-radius: 50px;
            font-family: 'Pliant', sans-serif;
            font-size: 13px; font-weight: 700; letter-spacing: 0.3px;
            text-decoration: none; border: none; cursor: pointer;
            transition: background 0.22s, transform 0.2s, box-shadow 0.22s;
            white-space: nowrap;
        }
        .btn-primary {
            background: #1B2F6E; color: #fff;
            border: 2px solid #1B2F6E;
            box-shadow: 0 4px 18px rgba(27,47,110,0.3);
        }
        .btn-primary:hover { background: #142257; border-color: #142257; transform: translateY(-2px); box-shadow: 0 8px 28px rgba(27,47,110,0.45); }
        .btn-ghost {
            background: transparent; color: rgba(255,255,255,0.85);
            border: 1.5px solid rgba(255,255,255,0.25);
            backdrop-filter: blur(8px);
        }
        .btn-ghost:hover { border-color: rgba(255,255,255,0.6); background: rgba(255,255,255,0.07); transform: translateY(-2px); color: #fff; }

        .footer-note {
            margin-top: 2.5rem; font-size: 11px;
            color: rgba(255,255,255,0.25); letter-spacing: 0.3px;
        }

        @keyframes fadeUp {
            from { opacity: 0; transform: translateY(18px); }
            to   { opacity: 1; transform: translateY(0); }
        }
        @media (max-width: 480px) {
            .actions { flex-direction: column; align-items: center; }
            .btn { width: 100%; justify-content: center; }
        }
    </style>
</head>
<body>
    <div class="wrap">
        <a href="/" class="brand">
            <img src="/assets/img/logo-raya-polos.webp" alt="Raya Konstruksi" width="160" height="48" />
        </a>

        <div class="error-code">500</div>
        <h1 class="error-title">Terjadi Kesalahan Server</h1>
        <div class="divider"></div>
        <p class="error-desc">
            Server kami mengalami masalah saat memproses permintaanmu.
            Coba refresh halaman atau kembali beberapa saat lagi.
        </p>

        <div class="actions">
            <a href="/" class="btn btn-primary">
                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" viewBox="0 0 16 16">
                    <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V8.207l.646.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.707 1.5Z"/>
                    <path d="M13 7.207V13.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-3a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v3a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5V7.207l4-4 4 4Z"/>
                </svg>
                Kembali ke Beranda
            </a>
            <button onclick="location.reload()" class="btn btn-ghost">
                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M8 3a5 5 0 1 0 4.546 2.914.5.5 0 0 1 .908-.417A6 6 0 1 1 8 2v1z"/>
                    <path d="M8 4.466V.534a.25.25 0 0 1 .41-.192l2.36 1.966c.12.1.12.284 0 .384L8.41 4.658A.25.25 0 0 1 8 4.466z"/>
                </svg>
                Coba Lagi
            </button>
        </div>

        <p class="footer-note">&copy; PT RAYA KONSTRUKSI INTERNASIONAL &nbsp;·&nbsp; All Rights Reserved</p>
    </div>
</body>
</html>
