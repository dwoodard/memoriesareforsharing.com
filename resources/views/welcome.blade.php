<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta property="og:type" content="website">
<meta property="og:title" content="It's Mellody's 75th Birthday">
<meta property="og:url" content="https://memoriesareforsharing.com/">
<meta property="og:image" content="/OG-PartyImg.png">
<meta property="og:description" content="Come Celebrate Mellody's Birthday - May 2nd, 5:30-9pm, DON'T SPOIL THE SURPRISE">

<title>Celebrating Mellody's 75th Birthday</title>

<link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;1,300;1,400;1,600&family=Lato:wght@300;400;700;900&display=swap" rel="stylesheet">
<style>
*, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
:root {
  --cream: #FDF7EE;
  --cream-dark: #F5EDD8;
  --gold: #B8922A;
  --gold-light: #D4AE5C;
  --gold-pale: #F0E0B0;
  --fuchsia: #B5195A;
  --fuchsia-light: #D63478;
  --fuchsia-pale: #F9E8EF;
  --burgundy: #7B1A3A;
  --burgundy-deep: #5C0E28;
  --dark: #2A1A10;
  --text: #3A2518;
  --text-light: #7A5C4A;
}
html { scroll-behavior: smooth; }
body { font-family: 'Lato', sans-serif; background-color: var(--cream); color: var(--text); line-height: 1.7; overflow-x: hidden; }

/* ── HERO ── */
.hero {
  position: relative;
  background-color: var(--cream);
  padding: 3rem 1.5rem 5rem;
  text-align: center;
  overflow: visible;
}
.hero::before {
  content: '';
  position: absolute; inset: 0;
  background-image:
    radial-gradient(ellipse 60% 40% at 50% 0%, rgba(180,146,42,0.13) 0%, transparent 70%),
    radial-gradient(ellipse 30% 20% at 10% 90%, rgba(181,25,90,0.06) 0%, transparent 60%),
    radial-gradient(ellipse 30% 20% at 90% 90%, rgba(181,25,90,0.06) 0%, transparent 60%);
  pointer-events: none;
}
.hero-top-border { display: flex; align-items: center; justify-content: center; gap: 0.5rem; margin-bottom: 2rem; }
.hero-top-border .line { height: 1px; width: 60px; background: var(--gold-light); }
.hero-top-border .diamond { width: 8px; height: 8px; background: var(--gold); transform: rotate(45deg); }
.hero-top-border .diamond-sm { width: 5px; height: 5px; background: var(--gold-light); transform: rotate(45deg); }

.hero-eyebrow { font-family: 'Lato', sans-serif; font-weight: 300; font-size: 0.75rem; letter-spacing: 0.35rem; text-transform: uppercase; color: var(--gold); margin-bottom: 0.75rem; }
.hero-title { font-family: 'Cormorant Garamond', serif; font-weight: 300; font-style: italic; font-size: clamp(3.5rem, 9vw, 7rem); color: var(--burgundy); line-height: 1; margin-bottom: 0.2rem; }
.hero-subtitle { font-family: 'Cormorant Garamond', serif; font-weight: 500; font-size: clamp(1rem, 2.5vw, 1.5rem); color: var(--text-light); letter-spacing: 0.15rem; text-transform: uppercase; margin-bottom: 2.5rem; }

/* ── HERO CTA BUTTONS ── */
.hero-cta-row {
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 1rem;
  flex-wrap: wrap;
  margin-bottom: 3rem;
  position: relative;
  z-index: 2;
}
.hero-cta-primary {
  display: inline-flex; align-items: center; gap: 0.6rem;
  background: var(--burgundy);
  color: white;
  padding: 1rem 2.2rem;
  border-radius: 2px;
  text-decoration: none;
  font-size: 0.8rem;
  font-weight: 900;
  letter-spacing: 0.2rem;
  text-transform: uppercase;
  transition: background 0.2s, transform 0.2s, box-shadow 0.2s;
  box-shadow: 0 4px 20px rgba(123,26,58,0.35);
}
.hero-cta-primary:hover { background: var(--fuchsia); transform: translateY(-2px); box-shadow: 0 8px 28px rgba(181,25,90,0.4); }
.hero-cta-secondary {
  display: inline-flex; align-items: center; gap: 0.6rem;
  background: transparent;
  color: var(--fuchsia);
  padding: 1rem 2.2rem;
  border-radius: 2px;
  text-decoration: none;
  font-size: 0.8rem;
  font-weight: 900;
  letter-spacing: 0.2rem;
  text-transform: uppercase;
  border: 2px solid var(--fuchsia);
  transition: all 0.2s;
}
.hero-cta-secondary:hover { background: var(--fuchsia); color: white; transform: translateY(-2px); box-shadow: 0 8px 28px rgba(181,25,90,0.3); }
.hero-cta-label {
  font-size: 0.7rem;
  color: var(--text-light);
  letter-spacing: 0.05rem;
  margin-top: -0.5rem;
  margin-bottom: 0.5rem;
  font-style: italic;
  font-family: 'Cormorant Garamond', serif;
}

/* ── PHOTOS ── */
.photos-stage {
  position: relative; display: flex; align-items: flex-end;
  justify-content: center; height: 320px; margin: 0 auto;
  max-width: 560px;
}
@media (min-width: 768px) { .photos-stage { height: 460px; max-width: 740px; } }
.photo-frame { position: absolute; display: flex; flex-direction: column; align-items: center; transition: transform 0.4s ease; }
.photo-frame img { display: block; object-fit: cover; border-radius: 3px; }
.photo-frame.past { left: 50%; bottom: 0; transform: translateX(-108%) rotate(-5deg); z-index: 1; }
.photo-frame.past img { width: 180px; height: 230px; border: 6px solid white; box-shadow: -4px 6px 30px rgba(42,26,16,0.22), 0 0 0 1px rgba(180,146,42,0.2); filter: sepia(0.15); }
.photo-frame.past:hover { transform: translateX(-108%) rotate(-3deg) scale(1.03); z-index: 3; }
.photo-frame.present { left: 50%; bottom: 0; transform: translateX(-12%) rotate(3.5deg); z-index: 2; }
.photo-frame.present img { width: 210px; height: 270px; border: 6px solid white; box-shadow: 6px 8px 36px rgba(42,26,16,0.28), 0 0 0 1px rgba(180,146,42,0.25); }
.photo-frame.present:hover { transform: translateX(-12%) rotate(1.5deg) scale(1.03); z-index: 3; }
@media (min-width: 768px) {
  .photo-frame.past { transform: translateX(-118%) rotate(-6deg); }
  .photo-frame.past img { width: 270px; height: 340px; border-width: 8px; }
  .photo-frame.past:hover { transform: translateX(-118%) rotate(-4deg) scale(1.03); }
  .photo-frame.present { transform: translateX(-5%) rotate(4deg); }
  .photo-frame.present img { width: 310px; height: 390px; border-width: 8px; }
  .photo-frame.present:hover { transform: translateX(-5%) rotate(2deg) scale(1.03); }
}
.photo-caption { margin-top: 0.6rem; font-family: 'Cormorant Garamond', serif; font-style: italic; font-size: 0.82rem; color: var(--text-light); white-space: nowrap; }
.photo-connector { position: absolute; bottom: 18px; left: 50%; transform: translateX(-50%); width: 60px; height: 2px; background: linear-gradient(90deg, var(--gold-pale), var(--gold-light), var(--gold-pale)); z-index: 0; border-radius: 1px; }

/* ── DETAILS BAND ── */
.details-band {
  position: relative;
  background: linear-gradient(160deg, #6A1030 0%, #7B1A3A 40%, #5C0E28 100%);
  color: white;
  padding: 5rem 1.5rem 4rem;
  text-align: center;
  margin-top: 80px;
  overflow: hidden;
}
.details-band::before {
  content: '';
  position: absolute; inset: 0;
  background-image:
    radial-gradient(ellipse 80% 50% at 50% 100%, rgba(212,174,92,0.14) 0%, transparent 70%),
    radial-gradient(ellipse 30% 30% at 0% 0%, rgba(255,255,255,0.04) 0%, transparent 50%);
  pointer-events: none;
}
.details-band::after { content: ''; position: absolute; top: 0; left: 0; right: 0; height: 3px; background: linear-gradient(90deg, transparent, var(--gold-light), var(--gold), var(--gold-light), transparent); }
.band-title { font-family: 'Cormorant Garamond', serif; font-weight: 300; font-style: italic; font-size: 1rem; color: var(--gold-pale); letter-spacing: 0.35rem; text-transform: uppercase; margin-bottom: 2.5rem; opacity: 0.9; }

.details-grid {
  display: flex; justify-content: center; gap: 0;
  flex-wrap: wrap; max-width: 860px; margin: 0 auto 3rem;
  background: rgba(0,0,0,0.2);
  border: 1px solid rgba(212,174,92,0.25);
  border-radius: 2px; overflow: hidden;
}
.detail-item {
  flex: 1; min-width: 220px;
  display: flex; flex-direction: column; align-items: center; gap: 0.5rem;
  padding: 2.5rem 1.5rem; position: relative;
  background: rgba(0,0,0,0.1);
}
.detail-item + .detail-item::before { content: ''; position: absolute; left: 0; top: 15%; bottom: 15%; width: 1px; background: rgba(212,174,92,0.2); }
.detail-icon { font-size: 1rem; color: var(--gold-light); margin-bottom: 0.2rem; opacity: 0.8; }
.detail-label {
  font-size: 0.85rem;
  font-weight: 900;
  letter-spacing: 0.25rem;
  text-transform: uppercase;
  color: var(--gold-light);
  margin-bottom: 0.2rem;
}
.detail-value { font-family: 'Cormorant Garamond', serif; font-size: clamp(1.6rem, 3vw, 2.2rem); font-weight: 500; color: white; line-height: 1.15; }
.detail-sub { font-size: 0.85rem; color: var(--gold-pale); opacity: 0.85; letter-spacing: 0.05rem; }

.arrive-diamonds { display: flex; align-items: center; justify-content: center; gap: 1rem; margin-bottom: 1rem; }
.arrive-diamonds .d { width: 6px; height: 6px; background: var(--gold-light); transform: rotate(45deg); opacity: 0.7; }
.arrive-diamonds .d.lg { width: 9px; height: 9px; opacity: 1; }
.arrive-diamonds .line-g { height: 1px; width: 50px; background: linear-gradient(90deg, transparent, var(--gold-light)); }
.arrive-diamonds .line-g.r { background: linear-gradient(90deg, var(--gold-light), transparent); }

.arrive-notice {
  position: relative; display: inline-block; padding: 1.6rem 3.5rem;
  background: linear-gradient(135deg, rgba(181,25,90,0.55), rgba(181,25,90,0.3));
  border: 1px solid var(--fuchsia-light); border-radius: 2px; overflow: hidden;
}
.arrive-notice::before { content: ''; position: absolute; inset: 2px; border: 1px solid rgba(255,255,255,0.1); border-radius: 1px; pointer-events: none; }
.arrive-notice-eyebrow { font-size: 0.6rem; letter-spacing: 0.35rem; text-transform: uppercase; color: rgba(255,255,255,0.65); margin-bottom: 0.4rem; font-weight: 700; }
.arrive-notice-main { font-family: 'Cormorant Garamond', serif; font-size: clamp(1.8rem, 4vw, 2.6rem); font-weight: 500; color: white; line-height: 1.1; }
.arrive-notice-main em { font-style: normal; color: var(--gold-pale); }
.arrive-notice-sub { margin-top: 0.4rem; font-size: 0.78rem; color: rgba(255,255,255,0.65); letter-spacing: 0.15rem; text-transform: uppercase; }

/* ── INSPIRATION / PROMPTS ── */
.prompts-section { max-width: 920px; margin: 0 auto; padding: 4rem 1.5rem 2rem; }
.section-heading { font-family: 'Cormorant Garamond', serif; font-weight: 300; font-style: italic; font-size: clamp(2rem, 4vw, 3rem); color: var(--burgundy); text-align: center; line-height: 1.15; margin-bottom: 0.5rem; }
.section-sub { text-align: center; color: var(--text-light); font-size: 0.95rem; font-weight: 300; max-width: 580px; margin: 0 auto 2rem; line-height: 1.8; }
.gold-line { height: 2px; background: linear-gradient(90deg, transparent, var(--gold-light), var(--gold), var(--gold-light), transparent); }

.prompts-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(240px, 1fr)); gap: 1rem; margin: 1.5rem 0; }
.prompt-card {
  background: white; border: 1px solid var(--gold-pale); border-left: 3px solid var(--gold-light);
  border-radius: 2px; padding: 1.1rem 1.2rem 1.1rem 1.5rem;
  font-family: 'Cormorant Garamond', serif; font-style: italic; font-size: 1rem;
  color: var(--text); line-height: 1.6; position: relative; cursor: default;
  transition: border-color 0.2s, box-shadow 0.2s;
}
.prompt-card:hover { border-left-color: var(--fuchsia); box-shadow: 0 2px 12px rgba(181,25,90,0.08); }
.prompt-card::before { content: '"'; position: absolute; top: -0.3rem; left: 0.8rem; font-size: 2.5rem; color: var(--gold-pale); font-family: 'Cormorant Garamond', serif; line-height: 1; }

/* ══════════════════════════════════════
   SHARE A MEMORY — HERO SECTION
══════════════════════════════════════ */
.memory-hero-section {
  position: relative;
  background: linear-gradient(150deg, #FDF7EE 0%, #F5EDD8 50%, #FDF7EE 100%);
  border-top: 3px solid var(--gold);
  border-bottom: 3px solid var(--gold);
  padding: 5rem 1.5rem 4rem;
  overflow: hidden;
}
.memory-hero-section::before {
  content: '';
  position: absolute; inset: 0;
  background-image:
    radial-gradient(ellipse 50% 60% at 0% 50%, rgba(123,26,58,0.05) 0%, transparent 60%),
    radial-gradient(ellipse 50% 60% at 100% 50%, rgba(181,25,90,0.04) 0%, transparent 60%);
  pointer-events: none;
}
.memory-hero-badge {
  display: inline-flex; align-items: center; gap: 0.5rem;
  background: var(--burgundy); color: var(--gold-pale);
  padding: 0.4rem 1.2rem; border-radius: 1px;
  font-size: 0.65rem; font-weight: 900; letter-spacing: 0.3rem; text-transform: uppercase;
  margin-bottom: 1.5rem;
}
.memory-hero-title {
  font-family: 'Cormorant Garamond', serif;
  font-weight: 300; font-style: italic;
  font-size: clamp(2.5rem, 6vw, 4.5rem);
  color: var(--burgundy);
  line-height: 1.05; margin-bottom: 0.75rem;
}
.memory-hero-sub {
  font-size: 1rem; color: var(--text-light); max-width: 560px;
  margin: 0 auto 2.5rem; line-height: 1.8; font-weight: 300;
}
/* Animated pulse ring on the section */
.memory-hero-accent {
  display: flex; align-items: center; justify-content: center; gap: 1.5rem;
  margin-bottom: 2rem;
}
.memory-hero-accent .pulse-dot {
  width: 12px; height: 12px; border-radius: 50%;
  background: var(--fuchsia);
  box-shadow: 0 0 0 4px rgba(181,25,90,0.2);
  animation: pulse 2s ease-in-out infinite;
}
@keyframes pulse {
  0%, 100% { box-shadow: 0 0 0 4px rgba(181,25,90,0.2); }
  50% { box-shadow: 0 0 0 10px rgba(181,25,90,0.05); }
}
.memory-hero-accent .acc-line { height: 1px; width: 80px; background: linear-gradient(90deg, transparent, var(--gold-light)); }
.memory-hero-accent .acc-line.r { background: linear-gradient(90deg, var(--gold-light), transparent); }

/* THE FORM ITSELF */
.memory-form-container { max-width: 820px; margin: 0 auto; position: relative; z-index: 1; }
.form-card {
  background: white;
  border: 1px solid var(--gold-pale);
  border-top: 4px solid var(--burgundy);
  border-radius: 2px;
  padding: 3rem 2.5rem;
  box-shadow: 0 8px 60px rgba(42,26,16,0.12), 0 2px 0 var(--gold-pale);
}
@media (max-width: 600px) { .form-card { padding: 2rem 1.25rem; } }

.form-section-label {
  display: flex; align-items: center; gap: 0.75rem;
  font-size: 0.65rem; font-weight: 900; letter-spacing: 0.3rem; text-transform: uppercase;
  color: var(--burgundy); margin-bottom: 1.5rem;
}
.form-section-label::after { content: ''; flex: 1; height: 1px; background: var(--gold-pale); }

.form-group { margin-bottom: 1.5rem; }
.form-label { display: block; font-size: 0.7rem; font-weight: 700; letter-spacing: 0.2rem; text-transform: uppercase; color: var(--gold); margin-bottom: 0.4rem; }
.form-label span { color: var(--fuchsia); }
.form-input, .form-select, .form-textarea {
  width: 100%; padding: 0.75rem 1rem;
  border: 1px solid #E8D8C0; border-radius: 2px;
  background: #FDFAF5; color: var(--text);
  font-family: 'Lato', sans-serif; font-size: 0.95rem;
  transition: border-color 0.2s, box-shadow 0.2s; outline: none; appearance: none;
}
.form-input:focus, .form-select:focus, .form-textarea:focus { border-color: var(--gold-light); box-shadow: 0 0 0 3px rgba(180,146,42,0.1); }
.form-textarea { min-height: 180px; resize: vertical; line-height: 1.7; font-size: 1rem; }
.form-row { display: grid; grid-template-columns: 1fr 1fr; gap: 1rem; }
@media (max-width: 560px) { .form-row { grid-template-columns: 1fr; } }

/* Prompt chips above textarea */
.prompt-chips { display: flex; flex-wrap: wrap; gap: 0.5rem; margin-bottom: 0.75rem; }
.prompt-chip {
  background: var(--fuchsia-pale); border: 1px solid rgba(181,25,90,0.2);
  border-radius: 1px; padding: 0.3rem 0.75rem;
  font-size: 0.72rem; color: var(--burgundy); cursor: pointer;
  transition: all 0.15s; font-style: italic;
  font-family: 'Cormorant Garamond', serif; font-size: 0.9rem;
}
.prompt-chip:hover { background: var(--burgundy); color: var(--gold-pale); border-color: var(--burgundy); }

.photo-upload-area {
  border: 2px dashed var(--gold-pale); border-radius: 2px; padding: 1.75rem;
  text-align: center; cursor: pointer; transition: border-color 0.2s, background 0.2s;
  background: #FDFAF5; position: relative;
}
.photo-upload-area:hover { border-color: var(--gold-light); background: white; }
.photo-upload-area input[type="file"] { position: absolute; inset: 0; opacity: 0; cursor: pointer; width: 100%; height: 100%; }
.upload-icon { font-size: 1.8rem; margin-bottom: 0.4rem; opacity: 0.45; }
.upload-text { font-size: 0.82rem; color: var(--text-light); }
.upload-preview { display: none; max-width: 100px; max-height: 100px; border-radius: 50%; object-fit: cover; border: 3px solid var(--gold-light); margin: 0.5rem auto 0; }

.btn-submit {
  width: 100%; margin-top: 0.5rem; padding: 1.15rem 2rem;
  background: linear-gradient(135deg, var(--burgundy), #9B2248);
  color: white; border: none; border-radius: 2px;
  font-family: 'Lato', sans-serif; font-size: 0.85rem; font-weight: 900;
  letter-spacing: 0.25rem; text-transform: uppercase; cursor: pointer;
  transition: all 0.2s; position: relative;
  box-shadow: 0 4px 20px rgba(123,26,58,0.35);
}
.btn-submit:hover { background: linear-gradient(135deg, var(--fuchsia), #D63478); transform: translateY(-2px); box-shadow: 0 8px 30px rgba(181,25,90,0.4); }
.btn-submit:disabled { background: #ccc; cursor: not-allowed; transform: none; box-shadow: none; }

/* Another memory prompt */
.add-another-teaser {
  text-align: center; margin-top: 1.25rem;
  font-family: 'Cormorant Garamond', serif; font-style: italic;
  font-size: 0.95rem; color: var(--text-light);
}
.add-another-teaser a { color: var(--fuchsia); text-decoration: underline; text-underline-offset: 3px; cursor: pointer; }

.success-message { display: none; text-align: center; padding: 3rem 2rem; }
.success-message .success-icon { font-size: 3.5rem; margin-bottom: 1rem; }
.success-message h3 { font-family: 'Cormorant Garamond', serif; font-size: 2.2rem; color: var(--burgundy); font-style: italic; margin-bottom: 0.5rem; }
.success-message p { color: var(--text-light); font-size: 0.95rem; }
.btn-another {
  display: inline-block; margin-top: 1.5rem; padding: 0.75rem 2rem;
  background: var(--burgundy); color: white; border: none;
  font-size: 0.75rem; letter-spacing: 0.2rem; text-transform: uppercase; cursor: pointer;
  border-radius: 1px; font-family: 'Lato', sans-serif; font-weight: 900; transition: all 0.2s;
}
.btn-another:hover { background: var(--fuchsia); }

/* ══════════════════════════════════════
   VIDEO SECTION
══════════════════════════════════════ */
.video-section {
  position: relative;
  background: linear-gradient(150deg, #1A0A14 0%, #2C0E1E 50%, #1A0A14 100%);
  padding: 5rem 1.5rem;
  text-align: center;
  overflow: hidden;
}
.video-section::before {
  content: '';
  position: absolute; inset: 0;
  background-image:
    radial-gradient(ellipse 60% 50% at 50% 0%, rgba(212,174,92,0.1) 0%, transparent 60%),
    radial-gradient(ellipse 40% 40% at 100% 100%, rgba(181,25,90,0.1) 0%, transparent 50%);
  pointer-events: none;
}
.video-section::after { content: ''; position: absolute; top: 0; left: 0; right: 0; height: 3px; background: linear-gradient(90deg, transparent, var(--gold-light), var(--gold), var(--gold-light), transparent); }

.video-badge {
  display: inline-flex; align-items: center; gap: 0.5rem;
  background: rgba(181,25,90,0.3); color: var(--fuchsia-light);
  border: 1px solid rgba(181,25,90,0.4);
  padding: 0.4rem 1.2rem; border-radius: 1px;
  font-size: 0.65rem; font-weight: 900; letter-spacing: 0.3rem; text-transform: uppercase;
  margin-bottom: 1.5rem;
}
.video-main-title {
  font-family: 'Cormorant Garamond', serif;
  font-weight: 300; font-style: italic;
  font-size: clamp(2.5rem, 6vw, 4.5rem);
  color: white; line-height: 1.05; margin-bottom: 0.75rem;
}
.video-main-title em { font-style: normal; color: var(--gold-pale); }
.video-sub { font-size: 1rem; color: rgba(255,255,255,0.6); max-width: 560px; margin: 0 auto 3rem; line-height: 1.8; }

.video-card {
  max-width: 720px; margin: 0 auto;
  background: rgba(255,255,255,0.05);
  border: 1px solid rgba(212,174,92,0.2);
  border-radius: 2px; padding: 3rem 2.5rem;
  box-shadow: 0 8px 60px rgba(0,0,0,0.3);
  position: relative; z-index: 1;
}
@media (max-width: 600px) { .video-card { padding: 2rem 1.25rem; } }

.video-icon-ring {
  width: 90px; height: 90px; border-radius: 50%;
  background: rgba(181,25,90,0.2);
  border: 2px solid rgba(181,25,90,0.4);
  display: flex; align-items: center; justify-content: center;
  font-size: 2.5rem; margin: 0 auto 1.5rem;
  animation: pulse-ring 2.5s ease-in-out infinite;
}
@keyframes pulse-ring {
  0%, 100% { box-shadow: 0 0 0 0 rgba(181,25,90,0.3); }
  50% { box-shadow: 0 0 0 16px rgba(181,25,90,0.0); }
}
.video-steps {
  display: grid; grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
  gap: 1.5rem; margin: 2rem 0;
}
.video-step { text-align: center; }
.video-step-num {
  width: 36px; height: 36px; border-radius: 50%;
  background: rgba(212,174,92,0.15); border: 1px solid rgba(212,174,92,0.3);
  display: flex; align-items: center; justify-content: center;
  font-family: 'Cormorant Garamond', serif; font-size: 1.2rem;
  color: var(--gold-light); margin: 0 auto 0.6rem;
}
.video-step-text { font-size: 0.85rem; color: rgba(255,255,255,0.65); line-height: 1.5; }
.video-step-text strong { color: rgba(255,255,255,0.9); display: block; margin-bottom: 0.2rem; font-size: 0.9rem; }

.video-divider { height: 1px; background: rgba(212,174,92,0.15); margin: 2rem 0; }

.btn-email-video {
  display: inline-flex; align-items: center; gap: 0.75rem;
  background: linear-gradient(135deg, var(--fuchsia), #D63478);
  color: white; padding: 1.15rem 3rem; border-radius: 2px;
  text-decoration: none; font-size: 0.85rem; font-weight: 900;
  letter-spacing: 0.2rem; text-transform: uppercase;
  transition: all 0.2s;
  box-shadow: 0 4px 20px rgba(181,25,90,0.5);
}
.btn-email-video:hover { transform: translateY(-2px); box-shadow: 0 8px 30px rgba(181,25,90,0.6); }
.video-email-note { margin-top: 1rem; font-size: 0.8rem; color: rgba(255,255,255,0.4); }
.video-email-note strong { color: var(--gold-light); }

/* ── MEMORIES WALL ── */
.memories-section { background: var(--cream-dark); padding: 5rem 1.5rem; border-top: 2px solid var(--gold-pale); }
.memories-inner { max-width: 920px; margin: 0 auto; }
.memories-grid { display: grid; grid-template-columns: repeat(auto-fill, minmax(260px, 1fr)); gap: 1.25rem; margin-top: 2.5rem; }
.memory-card { background: white; border: 1px solid var(--gold-pale); border-radius: 2px; padding: 1.25rem; position: relative; transition: box-shadow 0.2s; }
.memory-card:hover { box-shadow: 0 4px 20px rgba(42,26,16,0.1); }
.memory-card-header { display: flex; align-items: center; gap: 0.75rem; margin-bottom: 0.75rem; }
.memory-avatar { width: 44px; height: 44px; border-radius: 50%; object-fit: cover; border: 2px solid var(--gold-pale); flex-shrink: 0; }
.memory-avatar-placeholder { width: 44px; height: 44px; border-radius: 50%; background: var(--gold-pale); display: flex; align-items: center; justify-content: center; font-family: 'Cormorant Garamond', serif; font-size: 1.1rem; color: var(--gold); font-weight: 500; flex-shrink: 0; }
.memory-name { font-weight: 700; font-size: 0.9rem; color: var(--text); }
.memory-year { font-size: 0.75rem; color: var(--gold); letter-spacing: 0.05rem; }
.memory-text { font-family: 'Cormorant Garamond', serif; font-size: 1rem; line-height: 1.7; color: var(--text); font-style: italic; }
.memory-corner { position: absolute; top: 0; right: 0; width: 0; height: 0; border-style: solid; border-width: 0 20px 20px 0; border-color: transparent var(--gold-pale) transparent transparent; }
.no-memories { text-align: center; padding: 3rem; color: var(--text-light); font-style: italic; font-family: 'Cormorant Garamond', serif; font-size: 1.1rem; }

/* ── FOOTER ── */
footer { background: var(--dark); color: rgba(255,255,255,0.55); text-align: center; padding: 2rem; font-size: 0.8rem; }
footer .footer-title { font-family: 'Cormorant Garamond', serif; font-style: italic; font-size: 1.2rem; color: var(--gold-light); margin-bottom: 0.3rem; }

/* ── ANIMATIONS ── */
@keyframes fadeInUp { from { opacity: 0; transform: translateY(24px); } to { opacity: 1; transform: translateY(0); } }
.hero-eyebrow { animation: fadeInUp 0.6s ease both 0.1s; }
.hero-title { animation: fadeInUp 0.7s ease both 0.25s; }
.hero-subtitle { animation: fadeInUp 0.7s ease both 0.38s; }
.hero-cta-row { animation: fadeInUp 0.7s ease both 0.5s; }
.photos-stage { animation: fadeInUp 0.9s ease both 0.6s; }

.reveal { opacity: 0; transform: translateY(20px); transition: opacity 0.7s ease, transform 0.7s ease; }
.reveal.visible { opacity: 1; transform: none; }
</style>
</head>
<body>

<!-- ═══ HERO ═══ -->
<section class="hero">
  <div class="hero-top-border">
    <div class="line"></div><div class="diamond-sm"></div>
    <div class="diamond"></div><div class="diamond-sm"></div><div class="line"></div>
  </div>
  <p class="hero-eyebrow">You are invited to celebrate</p>
  <h1 class="hero-title">Mellody</h1>
  <div class="hero-75-wrap">
    <img src="/75.png" alt="75" class="hero-75-img" style="height: 100px;">
  </div>
  <p class="hero-subtitle" style="margin-bottom:5px;">Beautiful Years</p>

  <p class="hero-cta-label">Help us make her birthday unforgettable</p>
  

  <div class="photos-stage">
    <div class="photo-connector"></div>
    <div class="photo-frame past">
      <img src="/Young-Mom.jpg" alt="Mellody as a little girl">
      <p class="photo-caption">Little Mellody</p>
    </div>
    <div class="photo-frame present">
      <img src="/Now-Mom.jpg" alt="Mellody today">
      <p class="photo-caption">Our Mellody</p>
    </div>
  </div>
  <div class="hero-cta-row" style="margin-top:10px;">
    <a href="#share-memory" class="hero-cta-primary">
      &#10022; &nbsp; Share a Memory
    </a>
    <a href="#record-video" class="hero-cta-secondary">
      &#9654; &nbsp; Record a Video
    </a>
  </div>
</section>

<!-- ═══ DETAILS BAND ═══ -->
<div class="details-band">
  <p class="band-title">Join Us</p>
  <div class="details-grid">
    <div class="detail-item">
      <div class="detail-icon">&#10022;</div>
      <div class="detail-label">Date</div>
      <div class="detail-value">Friday, May 2nd</div>
      <div class="detail-sub">2026</div>
    </div>
    <div class="detail-item">
      <div class="detail-icon">&#10022;</div>
      <div class="detail-label">Time</div>
      <div class="detail-value">6:00 &ndash; 9:00 PM</div>
      <div class="detail-sub">Party begins at 6 PM</div>
    </div>
    <div class="detail-item">
      <div class="detail-icon">&#10022;</div>
      <div class="detail-label">Location</div>
      <div class="detail-value"><a href="https://www.google.com/maps/dir/?api=1&destination=5500+S+1175+W+Ogden+UT+84405" target="_blank" rel="noopener" style="color:white;text-decoration:underline;text-underline-offset:3px;">5500 S 1175 W</a></div>
      <div class="detail-sub"><a href="https://www.google.com/maps/dir/?api=1&destination=5500+S+1175+W+Ogden+UT+84405" target="_blank" rel="noopener" style="color:var(--gold-pale);opacity:0.85;text-decoration:underline;text-underline-offset:3px;">Ogden, UT 84405 &#8599;</a></div>
    </div>
  </div>
  <div class="arrive-diamonds">
    <div class="line-g"></div><div class="d"></div><div class="d lg"></div><div class="d"></div><div class="line-g r"></div>
  </div>
  <div class="arrive-notice">
    <p class="arrive-notice-eyebrow">Important &mdash; it&rsquo;s a surprise!</p>
    <p class="arrive-notice-main">Please arrive by <em>5:30 PM</em></p>
    <p class="arrive-notice-sub">Mellody arrives at 6:00 &mdash; let&rsquo;s all be there first</p>

  <!-- RSVP -->
  <div style="margin-top:2.5rem;">
    <div class="arrive-diamonds" style="margin-bottom:1.25rem;">
      <div class="line-g"></div><div class="d"></div><div class="d lg"></div><div class="d"></div><div class="line-g r"></div>
    </div>
    <div class="rsvp-box">
      <p class="rsvp-label">Please RSVP</p>
      <p class="rsvp-main">Shalyce &nbsp;&mdash;&nbsp;
        <a href="tel:8016451948" class="rsvp-phone">801&#8209;645&#8209;1948</a>
      </p>
      <p class="rsvp-note">
        We&rsquo;ll provide dinner &mdash; we just want to make sure we have enough for everyone! <br>
        If you think you&rsquo;ll be there, please let us know.
        We&rsquo;d rather have extra than not enough!&nbsp; &#128150;
      </p>
    </div>
  </div>
  </div>
</div>

<!-- ═══ INSPIRATION / PROMPTS ═══ -->
<div class="prompts-section">
  <div class="reveal">
    <h2 class="section-heading">Need a Little Inspiration?</h2>
    <p class="section-sub">Pick any one of these prompts and let it guide you. There are no wrong answers &mdash; every memory matters.</p>
  </div>
  <div class="reveal">
    <div class="prompts-grid">
      <div class="prompt-card">When you think of Mellody, what&rsquo;s the very first thing that comes to mind?</div>
      <div class="prompt-card">How has Mellody changed or blessed your life?</div>
      <div class="prompt-card">Tell a story about a time she helped you when you needed it most.</div>
      <div class="prompt-card">What&rsquo;s a small, quiet moment with Mellody you&rsquo;ve never forgotten?</div>
      <div class="prompt-card">Share a funny story, or something embarrassing, school-related, or church calling related!</div>
      <div class="prompt-card">What&rsquo;s something you&rsquo;ve learned from Mellody &mdash; whether she realized it or not?</div>
    </div>
  </div>
  <div class="reveal" style="text-align:center;margin-top:2.5rem;">
    <a href="#share-memory" class="hero-cta-primary" style="text-decoration:none;">
      &#10022; &nbsp; I&rsquo;m Ready &mdash; Share My Memory
    </a>
  </div>
</div>

<!-- ═══════════════════════════════
   SHARE A MEMORY — BIG SECTION
═══════════════════════════════ -->
<section id="share-memory" class="memory-hero-section" style="margin-top:2rem;">
  <div style="text-align:center;position:relative;z-index:1;">
    <div class="reveal">
      <span class="memory-hero-badge">&#10022; &nbsp; The Memory Book &nbsp; &#10022;</span>
      <h2 class="memory-hero-title">Share a Memory<br>with Mellody</h2>
      <p class="memory-hero-sub">
        Every story you share will be beautifully printed and bound into a keepsake book
        presented to Mellody on her birthday. Don&rsquo;t hold back &mdash;
        share as many memories as you&rsquo;d like!
      </p>
      <div class="memory-hero-accent">
        <div class="acc-line"></div>
        <div class="pulse-dot"></div>
        <div class="acc-line r"></div>
      </div>
    </div>

    <div class="memory-form-container reveal">
      <div class="form-card">
        <div id="form-content">
          <form id="memory-form" novalidate>

            <div class="form-section-label">About You</div>
            <div class="form-row">
              <div class="form-group">
                <label class="form-label" for="f-name">Your Name <span>*</span></label>
                <input type="text" id="f-name" class="form-input" placeholder="First & last name" required>
              </div>
              <div class="form-group">
                <label class="form-label" for="f-contact">Phone or Email <span>*</span></label>
                <input type="text" id="f-contact" class="form-input" placeholder="So we can reach you if needed" required>
              </div>
            </div>
            <div class="form-row">
              <div class="form-group">
                <label class="form-label" for="f-year">Approximate Year of Memory</label>
                <select id="f-year" class="form-select">
                  <option value="">Select a year or era...</option>
                  <option>1950s</option><option>1960s</option><option>1970s</option>
                  <option>1975</option><option>1976</option><option>1977</option><option>1978</option><option>1979</option>
                  <option>1980</option><option>1981</option><option>1982</option><option>1983</option><option>1984</option>
                  <option>1985</option><option>1986</option><option>1987</option><option>1988</option><option>1989</option>
                  <option>1990</option><option>1991</option><option>1992</option><option>1993</option><option>1994</option>
                  <option>1995</option><option>1996</option><option>1997</option><option>1998</option><option>1999</option>
                  <option>2000</option><option>2001</option><option>2002</option><option>2003</option><option>2004</option>
                  <option>2005</option><option>2006</option><option>2007</option><option>2008</option><option>2009</option>
                  <option>2010</option><option>2011</option><option>2012</option><option>2013</option><option>2014</option>
                  <option>2015</option><option>2016</option><option>2017</option><option>2018</option><option>2019</option>
                  <option>2020</option><option>2021</option><option>2022</option><option>2023</option><option>2024</option>
                  <option>2025</option><option>2026</option>
                </select>
              </div>
              <div class="form-group">
                <label class="form-label" for="f-relation">Your Relationship to Mellody</label>
                <select id="f-relation" class="form-select">
                  <option value="">Select...</option>
                  <option>Family</option><option>Close Friend</option><option>Neighbor</option>
                  <option>Church Friend</option><option>Childhood Friend</option>
                  <option>Coworker / Colleague</option><option>Other</option>
                </select>
              </div>
            </div>

            <div class="form-section-label" style="margin-top:0.5rem;">Your Story</div>
            <div class="form-group">
              <label class="form-label">Tap a prompt to use it, or write your own</label>
              <div class="prompt-chips" id="prompt-chips">
                <div class="prompt-chip" onclick="usePrompt(this)">When you think of Mellody...</div>
                <div class="prompt-chip" onclick="usePrompt(this)">A time she helped me...</div>
                <div class="prompt-chip" onclick="usePrompt(this)">A moment I&rsquo;ll never forget...</div>
                <div class="prompt-chip" onclick="usePrompt(this)">Something funny she did...</div>
                <div class="prompt-chip" onclick="usePrompt(this)">What I learned from her...</div>
                <div class="prompt-chip" onclick="usePrompt(this)">How she blessed my life...</div>
              </div>
            </div>
            <div class="form-group">
              <label class="form-label" for="f-story">Your Memory <span>*</span></label>
              <textarea id="f-story" class="form-textarea" required
                placeholder="Take your time... This is your gift to Mellody. Every word will be treasured.&#10;&#10;Feel free to share more than one story &mdash; just separate them with a line break!"></textarea>
            </div>

            <div class="form-section-label">Your Photo</div>
            <div class="form-group">
              <div class="photo-upload-area" id="upload-area">
                <input type="file" id="f-photo" accept="image/*">
                <div class="upload-icon">&#128247;</div>
                <p class="upload-text">Tap to upload a selfie or photo of yourself<br><small style="opacity:0.7;">Appears next to your memory in the printed book</small></p>
                <img class="upload-preview" id="photo-preview" src="" alt="Preview">
              </div>
            </div>

            <button type="submit" class="btn-submit" id="submit-btn">
              &#10022; &nbsp; Submit My Memory &nbsp; &#10022;
            </button>
            <p class="add-another-teaser">
              Have more than one story? <a onclick="void(0)">You can submit as many as you like!</a> After submitting, you&rsquo;ll be able to add another.
            </p>
          </form>
        </div>

        <div class="success-message" id="success-msg">
          <div class="success-icon">&#10024;</div>
          <h3>Your memory has been received!</h3>
          <p>Thank you so much. Your story will be treasured and printed in Mellody&rsquo;s keepsake book.</p>
          <p style="margin-top:0.5rem;color:var(--gold);font-family:'Cormorant Garamond',serif;font-style:italic;font-size:1.1rem;">We can&rsquo;t wait to see you on May 2nd!</p>
          <button class="btn-another" onclick="resetForm()">&#43; &nbsp; Add Another Memory</button>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ═══════════════════════════════
   VIDEO SECTION
═══════════════════════════════ -->
<section id="record-video" class="video-section">
  <div style="position:relative;z-index:1;">
    <div class="reveal">
      <span class="video-badge">&#9654; &nbsp; Video Message &nbsp; &#9654;</span>
      <h2 class="video-main-title">Record a Video<br><em>for Mellody</em></h2>
      <p class="video-sub">
        We&rsquo;ll be playing personal video messages at the party.
        Imagine Mellody watching your face, hearing your voice, seeing your smile &mdash;
        that&rsquo;s a gift that no printed word can replace.
      </p>
    </div>

    <div class="video-card reveal">
      <div class="video-icon-ring">&#127909;</div>

      <div class="example-video-wrap">
        <p class="example-video-label">&#9654; &nbsp; Watch an Example &nbsp; &#9654;</p>
        <div class="phone-frame">
          <video
            src="Shelcee-Funny.MOV"
            controls
            playsinline
            preload="metadata"
            poster=""
            onerror="this.style.display='none';this.nextElementSibling.style.display='flex';"
          ></video>
          <div class="video-placeholder-inner" style="display:none;">
            <div class="vp-icon">&#127909;</div>
            <p class="vp-text">Example video coming soon!</p>
          </div>
        </div>
        <p class="example-video-caption">Yours doesn&rsquo;t have to be perfect &mdash; just from the heart</p>
      </div>

      <div class="video-divider" style="margin-top:0;"></div>

      <div class="video-steps">
        <div class="video-step">
          <div class="video-step-num">1</div>
          <div class="video-step-text"><strong>Open your camera</strong>Take a selfie video on your phone or computer</div>
        </div>
        <div class="video-step">
          <div class="video-step-num">2</div>
          <div class="video-step-text"><strong>Tell your story</strong>Read your memory, or just speak from the heart</div>
        </div>
        <div class="video-step">
          <div class="video-step-num">3</div>
          <div class="video-step-text"><strong>Send it to us</strong>Email the video file to the address below</div>
        </div>
      </div>

      <div class="video-divider"></div>

      <p style="font-family:'Cormorant Garamond',serif;font-style:italic;font-size:1.15rem;color:rgba(255,255,255,0.7);margin-bottom:1.5rem;">
        Any length, any format &mdash; we want to see <em style="color:var(--gold-pale);">you</em>.
      </p>

      <a class="btn-email-video"
         href="mailto:shalyce@gmail.com?subject=Video%20Memory%20for%20Mellody%27s%2075th%20Birthday&body=Hi!%20I%27m%20sending%20a%20video%20memory%20for%20Mellody%27s%20birthday%20celebration.%0A%0AMy%20name%20is%3A%20%5BYOUR%20NAME%5D%0A%0AAttached%20is%20my%20video%20message.">
        &#9993; &nbsp; Email My Video Now
      </a>
      <p class="video-email-note">Send to: <strong>shalyce@gmail.com</strong> &nbsp;&mdash;&nbsp; MP4, MOV, or any format welcome</p>
    </div>
  </div>
</section>

<!-- ═══ MEMORIES WALL ═══ -->
<div class="memories-section">
  <div class="memories-inner">
    <div class="reveal" style="text-align:center;">
      <h2 class="section-heading">Memories Already Shared</h2>
      <p class="section-sub">These beautiful stories are waiting to be read by Mellody on her special day.</p>
    </div>
    <div class="memories-grid" id="memories-grid">
      <p class="no-memories">Be the first to share a memory! &#10022;</p>
    </div>
    <div style="text-align:center;margin-top:3rem;" class="reveal">
      <a href="#share-memory" class="hero-cta-primary" style="text-decoration:none;">
        &#10022; &nbsp; Share Your Memory
      </a>
    </div>
  </div>
</div>

<footer>
  <p class="footer-title">Celebrating 75 Years of Mellody</p>
  <p>May 2nd, 2026 &nbsp;&#10022;&nbsp; Ogden, Utah</p>
  <p style="margin-top:0.5rem;opacity:0.4;font-size:0.72rem;">Made with love &#9825;</p>
</footer>

<script>
  const revealEls = document.querySelectorAll('.reveal');
  const obs = new IntersectionObserver(es => es.forEach(e => { if(e.isIntersecting){e.target.classList.add('visible');obs.unobserve(e.target);} }), {threshold:0.08});
  revealEls.forEach(el => obs.observe(el));

  document.getElementById('f-photo').addEventListener('change', function() {
    if (!this.files[0]) return;
    const reader = new FileReader();
    reader.onload = e => {
      document.getElementById('photo-preview').src = e.target.result;
      document.getElementById('photo-preview').style.display = 'block';
      document.querySelector('.upload-icon').style.display = 'none';
      document.querySelector('.upload-text').style.display = 'none';
    };
    reader.readAsDataURL(this.files[0]);
  });

  function usePrompt(el) {
    const ta = document.getElementById('f-story');
    const text = el.textContent.replace(/\u2019/g, "'").replace(/\u2018/g, "'");
    ta.value = text + ' ';
    ta.focus();
    ta.setSelectionRange(ta.value.length, ta.value.length);
  }

 

  document.getElementById('memory-form').addEventListener('submit', async function(e) {
    e.preventDefault();
    const name     = document.getElementById('f-name').value.trim();
    const contact  = document.getElementById('f-contact').value.trim();
    const story    = document.getElementById('f-story').value.trim();
    const year     = document.getElementById('f-year').value    || 'Unknown';
    const relation = document.getElementById('f-relation').value || '';

    if (!name || !contact || !story) {
      alert('Please fill in your name, contact info, and memory before submitting.');
      return;
    }

    const btn = document.getElementById('submit-btn');
    btn.disabled = true;
    btn.innerHTML = '&#10004; &nbsp; Sending...';

    const photoFile = document.getElementById('f-photo').files[0];

    const doSend = (photoData) => {
      // Save to local wall display
      const m = { id: Date.now(), name, contact, story, year, relation,
        photo: photoData || null, submittedAt: new Date().toISOString() };
      const all = JSON.parse(localStorage.getItem('mellody_memories') || '[]');
      all.push(m);
      localStorage.setItem('mellody_memories', JSON.stringify(all));

      // Send via LARAVEL DEFAULT MAILER USING THE .ENV
      const params = {
        from_name:   name,
        contact:     contact,
        memory_year: year,
        relation:    relation,
        message:     story,
        reply_to:    contact.includes('@') ? contact : 'no-reply@memoriesareforsharing.com',
        to_email:    'shalyce@gmail.com',
      };

      emailjs.send(EMAILJS_SERVICE_ID, EMAILJS_TEMPLATE_ID, params)
        .then(() => {
          loadMemories();
          document.getElementById('form-content').style.display = 'none';
          document.getElementById('success-msg').style.display  = 'block';
        })
        .catch((err) => {
          console.error('EmailJS error:', err);
          if (EMAILJS_PUBLIC_KEY === 'YOUR_PUBLIC_KEY') {
            // Dev mode — still show success, just not emailing yet
            loadMemories();
            document.getElementById('form-content').style.display = 'none';
            document.getElementById('success-msg').style.display  = 'block';
          } else {
            alert('Something went wrong sending the email. Please try again or text Shalyce at 801-645-1948.');
            btn.disabled = false;
            btn.innerHTML = '&#10022; &nbsp; Try Again &nbsp; &#10022;';
          }
        });
    };

    if (photoFile) {
      const reader = new FileReader();
      reader.onload = ev => doSend(ev.target.result);
      reader.readAsDataURL(photoFile);
    } else {
      doSend(null);
    }
  })

  function resetForm() {
    document.getElementById('memory-form').reset();
    document.getElementById('photo-preview').style.display = 'none';
    document.querySelector('.upload-icon').style.display = 'block';
    document.querySelector('.upload-text').style.display = 'block';
    const btn = document.getElementById('submit-btn');
    btn.disabled = false;
    btn.innerHTML = '&#10022; &nbsp; Submit My Memory &nbsp; &#10022;';
    document.getElementById('form-content').style.display = 'block';
    document.getElementById('success-msg').style.display = 'none';
  }

  function loadMemories() {
    const grid = document.getElementById('memories-grid');
    const mems = JSON.parse(localStorage.getItem('mellody_memories') || '[]');
    if (!mems.length) { grid.innerHTML = '<p class="no-memories">Be the first to share a memory! &#10022;</p>'; return; }
    const sorted = [...mems].sort((a,b) => (parseInt(a.year)||9999) - (parseInt(b.year)||9999));
    grid.innerHTML = sorted.map(m => {
      const init = m.name.split(' ').map(w=>w[0]).join('').toUpperCase().slice(0,2);
      const av = m.photo ? `<img src="${m.photo}" class="memory-avatar" alt="${m.name}">` : `<div class="memory-avatar-placeholder">${init}</div>`;
      const prev = m.story.length > 200 ? m.story.slice(0,197)+'...' : m.story;
      return `<div class="memory-card"><div class="memory-corner"></div><div class="memory-card-header">${av}<div><div class="memory-name">${esc(m.name)}</div><div class="memory-year">${esc(m.year)}${m.relation?' &middot; '+esc(m.relation):''}</div></div></div><div class="memory-text">${esc(prev)}</div></div>`;
    }).join('');
  }
  function esc(s){return String(s).replace(/&/g,'&amp;').replace(/</g,'&lt;').replace(/>/g,'&gt;').replace(/"/g,'&quot;');}
  loadMemories();
</script>
</body>
</html>