<!DOCTYPE html>
<html lang="en">
<head><meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1"></head>
<body style="margin:0;padding:0;background:#f3ead7;font-family:Georgia,'Times New Roman',serif;color:#2c221c;">
    <table role="presentation" width="100%" cellpadding="0" cellspacing="0" style="background:#f3ead7;padding:32px 0;">
        <tr><td align="center">
            <table role="presentation" width="600" cellpadding="0" cellspacing="0" style="max-width:600px;width:100%;background:#ffffff;border:1px solid #e0d4b8;">

                <tr><td style="background:#3a0e18;padding:28px 36px;text-align:center;">
                    <div style="font-size:13px;letter-spacing:3px;text-transform:uppercase;color:#c2a14e;">Memories Are For Sharing</div>
                    <div style="font-size:24px;color:#f6eedd;margin-top:6px;">New Inquiry</div>
                </td></tr>

                <tr><td style="height:3px;background:#c2a14e;"></td></tr>

                <tr><td style="padding:32px 36px;">
                    <table role="presentation" width="100%" cellpadding="0" cellspacing="0" style="font-size:16px;line-height:1.6;">
                        <tr><td style="padding:6px 0;color:#93752f;width:90px;">Name</td><td style="padding:6px 0;">{{ $data['name'] }}</td></tr>
                        <tr><td style="padding:6px 0;color:#93752f;">Email</td><td style="padding:6px 0;"><a href="mailto:{{ $data['email'] }}" style="color:#5a1726;">{{ $data['email'] }}</a></td></tr>
                        <tr><td style="padding:6px 0;color:#93752f;">Phone</td><td style="padding:6px 0;">{{ $data['phone'] ?: '—' }}</td></tr>
                        <tr><td style="padding:6px 0;color:#93752f;">Package</td><td style="padding:6px 0;">{{ $data['package'] ?: 'Not specified' }}</td></tr>
                    </table>

                    <div style="margin:24px 0 8px;color:#93752f;font-size:14px;letter-spacing:1px;text-transform:uppercase;">Their message</div>
                    <div style="font-size:16px;line-height:1.7;color:#2c221c;">{!! nl2br(e($data['message'])) !!}</div>

                    <div style="margin-top:32px;">
                        <a href="mailto:{{ $data['email'] }}" style="display:inline-block;background:#c2a14e;color:#3a0e18;text-decoration:none;padding:13px 28px;font-size:14px;letter-spacing:1px;text-transform:uppercase;">Reply to {{ $data['name'] }}</a>
                    </div>
                </td></tr>

                <tr><td style="background:#0d0a09;padding:18px 36px;text-align:center;color:#8a7a68;font-size:12px;">
                    Sent from memoriesareforsharing.com
                </td></tr>

            </table>
        </td></tr>
    </table>
</body>
</html>