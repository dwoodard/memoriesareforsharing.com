<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>New Memory for Mellody</title>
<style>
  body { margin: 0; padding: 0; background: #F5EDD8; font-family: Georgia, 'Times New Roman', serif; }
  .wrapper { max-width: 620px; margin: 0 auto; background: #FDF7EE; }
  .header { background: linear-gradient(135deg, #7B1A3A, #5C0E28); padding: 40px 40px 32px; text-align: center; }
  .header .eyebrow { font-family: Arial, sans-serif; font-size: 11px; letter-spacing: 3px; text-transform: uppercase; color: #D4AE5C; margin-bottom: 8px; }
  .header h1 { font-size: 36px; font-weight: normal; font-style: italic; color: white; margin: 0 0 4px; line-height: 1.1; }
  .header .sub { font-family: Arial, sans-serif; font-size: 11px; letter-spacing: 2px; text-transform: uppercase; color: #D4AE5C; opacity: 0.8; }
  .gold-bar { height: 3px; background: linear-gradient(90deg, transparent, #D4AE5C, #B8922A, #D4AE5C, transparent); }
  .body { padding: 36px 40px; }
  .meta-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 16px; margin-bottom: 28px; }
  .meta-item { background: white; border: 1px solid #F0E0B0; border-left: 3px solid #D4AE5C; padding: 12px 16px; }
  .meta-label { font-family: Arial, sans-serif; font-size: 9px; font-weight: bold; letter-spacing: 2px; text-transform: uppercase; color: #B8922A; margin-bottom: 4px; }
  .meta-value { font-size: 15px; color: #3A2518; font-weight: bold; }
  .story-section { background: white; border: 1px solid #F0E0B0; border-top: 3px solid #7B1A3A; padding: 28px 32px; margin-bottom: 24px; }
  .story-label { font-family: Arial, sans-serif; font-size: 9px; font-weight: bold; letter-spacing: 3px; text-transform: uppercase; color: #7B1A3A; margin-bottom: 16px; }
  .story-text { font-size: 17px; line-height: 1.8; color: #3A2518; font-style: italic; white-space: pre-wrap; }
  .photo-note { background: #FDF0F5; border: 1px solid rgba(181,25,90,0.15); padding: 14px 20px; font-family: Arial, sans-serif; font-size: 13px; color: #7A5C4A; border-radius: 2px; }
  .footer { background: #2A1A10; padding: 24px 40px; text-align: center; }
  .footer p { font-family: Arial, sans-serif; font-size: 11px; color: rgba(255,255,255,0.5); margin: 0; line-height: 1.6; }
  .footer .site { color: #D4AE5C; }
  .submitted-at { font-family: Arial, sans-serif; font-size: 11px; color: #7A5C4A; text-align: right; margin-bottom: 20px; }
</style>
</head>
<body>
<div class="wrapper">

  <div class="header">
    <p class="eyebrow">Memory Book Submission</p>
    <h1>A New Memory for Mellody</h1>
    <p class="sub">75th Surprise Birthday &nbsp;&#10022;&nbsp; May 2nd, 2026</p>
  </div>
  <div class="gold-bar"></div>

  <div class="body">

    <p class="submitted-at">Submitted {{ now()->format('F j, Y \a\t g:i A') }}</p>

    <div class="meta-grid">
      <div class="meta-item">
        <div class="meta-label">From</div>
        <div class="meta-value">{{ $data['name'] }}</div>
      </div>
      <div class="meta-item">
        <div class="meta-label">Contact</div>
        <div class="meta-value" style="font-size:13px;">{{ $data['contact'] }}</div>
      </div>
      <div class="meta-item">
        <div class="meta-label">Year of Memory</div>
        <div class="meta-value">{{ $data['year'] }}</div>
      </div>
      <div class="meta-item">
        <div class="meta-label">Relationship</div>
        <div class="meta-value" style="font-size:13px;">{{ $data['relation'] }}</div>
      </div>
    </div>

    <div class="story-section">
      <div class="story-label">Their Memory</div>
      <div class="story-text">{{ $data['story'] }}</div>
    </div>

    @if($photo_url)
    <div class="photo-note">
      📷 &nbsp; <a href="{{ $photo_url }}" style="color: #7B1A3A; text-decoration: none;">View photo</a> &nbsp; (stored in Digital Ocean Spaces)
    </div>
    @else
    <div class="photo-note" style="opacity:0.6;">
      No photo was included with this submission.
    </div>
    @endif

  </div>

  <div class="gold-bar"></div>
  <div class="footer">
    <p>This memory was submitted via <span class="site">memoriesareforsharing.com</span><br>
    It will be printed in Mellody's keepsake book. &#9825;</p>
  </div>

</div>
</body>
</html>
