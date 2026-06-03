<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<style>
    body { font-family: Georgia, serif; color: #1e1a14; background: #faf8f4; margin: 0; padding: 0; }
    .wrapper { max-width: 560px; margin: 32px auto; background: #fff; border-radius: 4px; overflow: hidden; box-shadow: 0 2px 16px rgba(0,0,0,0.08); }
    .header { background: #1a2744; padding: 28px 32px; }
    .header h1 { font-size: 1.2rem; color: #f7f3ec; margin: 0; font-weight: 500; letter-spacing: 0.04em; }
    .header p  { color: #b8955a; font-size: 0.8rem; margin: 4px 0 0; letter-spacing: 0.12em; text-transform: uppercase; }
    .body { padding: 32px; }
    .row { margin-bottom: 20px; }
    .label { font-size: 0.72rem; text-transform: uppercase; letter-spacing: 0.14em; color: #7a9e76; font-weight: 700; margin-bottom: 4px; font-family: Arial, sans-serif; }
    .value { font-size: 1rem; color: #1e1a14; line-height: 1.6; }
    .message-box { background: #f7f3ec; border-left: 3px solid #3d5c3a; padding: 16px 20px; border-radius: 2px; font-style: italic; }
    .footer { background: #f7f3ec; padding: 20px 32px; font-family: Arial, sans-serif; font-size: 0.78rem; color: #6b6254; text-align: center; }
</style>
</head>
<body>
<div class="wrapper">
    <div class="header">
        <h1>New Inquiry — Memories Are For Sharing</h1>
        <p>Contact Form Submission</p>
    </div>
    <div class="body">
        <div class="row">
            <div class="label">Name</div>
            <div class="value">{{ trim(($data['first_name'] ?? '') . ' ' . ($data['last_name'] ?? '')) }}</div>
        </div>
        <div class="row">
            <div class="label">Email</div>
            <div class="value"><a href="mailto:{{ $data['email'] ?? '' }}" style="color:#3d5c3a;">{{ $data['email'] ?? '—' }}</a></div>
        </div>
        @if(!empty($data['phone']))
        <div class="row">
            <div class="label">Phone</div>
            <div class="value">{{ $data['phone'] }}</div>
        </div>
        @endif
        @if(!empty($data['package']))
        <div class="row">
            <div class="label">Package of Interest</div>
            <div class="value">{{ $data['package'] }}</div>
        </div>
        @endif
        @if(!empty($data['message']))
        <div class="row">
            <div class="label">Their Message</div>
            <div class="message-box">{{ $data['message'] }}</div>
        </div>
        @endif
    </div>
    <div class="footer">
        Sent from memoriesareforsharing.com &nbsp;·&nbsp; Reply directly to this email to respond
    </div>
</div>
</body>
</html>
