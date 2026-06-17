<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>New Inquiry - PT Raya Konstruksi Internasional</title>
    <style>
        * { box-sizing: border-box; margin: 0; padding: 0; }
        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif;
            background-color: #f4f6f9;
            color: #333;
            padding: 32px 16px;
        }
        .wrapper {
            max-width: 600px;
            margin: 0 auto;
            background: #ffffff;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 20px rgba(0,0,0,0.08);
        }
        .header {
            background: #1b2f6e;
            padding: 32px 40px;
            text-align: center;
        }
        .header h1 {
            color: #ffffff;
            font-size: 22px;
            font-weight: 700;
            letter-spacing: -0.3px;
        }
        .header p {
            color: rgba(255,255,255,0.65);
            font-size: 13px;
            margin-top: 6px;
        }
        .badge {
            display: inline-block;
            background: #F59E0B;
            color: #1b2f6e;
            font-size: 11px;
            font-weight: 800;
            letter-spacing: 1px;
            text-transform: uppercase;
            padding: 4px 12px;
            border-radius: 50px;
            margin-top: 12px;
        }
        .body {
            padding: 36px 40px;
        }
        .intro {
            font-size: 15px;
            color: #555;
            margin-bottom: 28px;
            line-height: 1.6;
        }
        .field {
            margin-bottom: 20px;
        }
        .field-label {
            font-size: 11px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.8px;
            color: #999;
            margin-bottom: 6px;
        }
        .field-value {
            font-size: 15px;
            color: #1a1a2e;
            background: #f8fafc;
            border: 1px solid #e2e8f0;
            border-radius: 8px;
            padding: 12px 16px;
            line-height: 1.6;
            word-break: break-word;
        }
        .divider {
            border: none;
            border-top: 1px solid #e2e8f0;
            margin: 28px 0;
        }
        .footer {
            background: #f8fafc;
            padding: 20px 40px;
            text-align: center;
            border-top: 1px solid #e2e8f0;
        }
        .footer p {
            font-size: 12px;
            color: #aaa;
            line-height: 1.6;
        }
        .footer strong { color: #1b2f6e; }
        .reply-btn {
            display: inline-block;
            margin-top: 24px;
            background: #1b2f6e;
            color: #ffffff !important;
            text-decoration: none;
            padding: 12px 28px;
            border-radius: 8px;
            font-size: 14px;
            font-weight: 700;
        }
        @media (max-width: 480px) {
            .header, .body, .footer { padding-left: 20px; padding-right: 20px; }
        }
    </style>
</head>
<body>
    <div class="wrapper">

        <!-- Header -->
        <div class="header">
            <h1>PT Raya Konstruksi Internasional</h1>
            <p>New Inquiry Submission</p>
            <span class="badge">📩 New Message</span>
        </div>

        <!-- Body -->
        <div class="body">
            <p class="intro">
                You have received a new inquiry through the website contact form.
                Please respond to the sender at your earliest convenience.
            </p>

            @if(!empty($data['name']))
            <div class="field">
                <div class="field-label">Full Name</div>
                <div class="field-value">{{ $data['name'] }}</div>
            </div>
            @endif

            @if(!empty($data['email']))
            <div class="field">
                <div class="field-label">Email Address</div>
                <div class="field-value">{{ $data['email'] }}</div>
            </div>
            @endif

            @if(!empty($data['phone']))
            <div class="field">
                <div class="field-label">Phone Number</div>
                <div class="field-value">{{ $data['phone'] }}</div>
            </div>
            @endif

            @if(!empty($data['company']))
            <div class="field">
                <div class="field-label">Company / Organisation</div>
                <div class="field-value">{{ $data['company'] }}</div>
            </div>
            @endif

            @if(!empty($data['subject']))
            <div class="field">
                <div class="field-label">Subject</div>
                <div class="field-value">{{ $data['subject'] }}</div>
            </div>
            @endif

            @if(!empty($data['message']))
            <div class="field">
                <div class="field-label">Message</div>
                <div class="field-value" style="white-space: pre-line;">{{ $data['message'] }}</div>
            </div>
            @endif

            <hr class="divider">

            @if(!empty($data['email']))
            <div style="text-align: center;">
                <a href="mailto:{{ $data['email'] }}" class="reply-btn">
                    Reply to {{ $data['name'] ?? 'Sender' }}
                </a>
            </div>
            @endif
        </div>

        <!-- Footer -->
        <div class="footer">
            <p>
                This email was automatically generated from the inquiry form at<br>
                <strong>rayakonstruksi.com</strong> &mdash; {{ now()->format('d M Y, H:i') }} WIB
            </p>
        </div>

    </div>
</body>
</html>
