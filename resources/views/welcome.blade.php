<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Memories Are For Sharing — Heirloom Life-Story Recordings</title>
    <meta name="description" content="Heirloom audio and video recordings of the people you love — their stories, their voice, their words — kept for the generations who come after. Legacy preservation by Shalyce.">

    <meta property="og:type" content="website">
    <meta property="og:title" content="Memories are for Sharing">
    <meta property="og:url" content="https://memoriesareforsharing.com/">
    <meta property="og:image" content="https://memoriesareforsharing.com/images/Memories-OG-image.png">
    <meta property="og:description" content="Preserve the voices, stories, and memories of the people you love — captured with care and kept as an heirloom for the generations who come after.">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500&family=EB+Garamond:ital,wght@0,400;0,500;1,400&family=Jost:wght@300;400;500&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css'])
</head>
<body>

    <!-- ============ NAV ============ -->
    <nav id="nav">
        <div class="wrap nav-inner">
            <a href="#top" class="brand">
                Memories <span>&amp;</span> Sharing
                <small>Legacy Preservation</small>
            </a>

            <div class="nav-links" id="navLinks">
               
                <a href="#short-session">30 Min Session</a>
                <a href="#process">Process</a>
                <a href="#packages">Packages</a>
                <a href="#about">About</a>
                <a href="#contact" class="btn btn-gold">Begin a Story</a>
            </div>

            <button class="nav-toggle" id="navToggle" aria-label="Menu">
                <span></span><span></span><span></span>
            </button>
        </div>
    </nav>

    <!-- ============ HERO ============ -->
    <header class="hero" id="top" style="background-image: url('{{ asset('/images/memories-header-01.png') }}');">
        

        <div class="hero-content">
            <div class="hero-copy">
                <div class="eyebrow" data-load style="animation-delay:.1s">Legacy Preservation</div>

                <h1 data-load style="animation-delay:.25s">
                    Every family has <br><em>stories worth saving.</em>
                </h1>

                <p class="hero-sub" data-load style="animation-delay:.5s">
                    Heirloom recordings of the people you love — in their own voice, in their own words —
                    kept for the generations who come after.
                </p>

                <div class="hero-cta" data-load style="animation-delay:.7s">
                    <a href="#contact" class="btn btn-gold">Begin a Story</a>
                    <a href="#short-session" class="btn btn-ghost">Start Small</a>
                </div>
            </div>
        </div>

        <div class="scroll-hint">
            <span>Scroll</span>
            <span class="dot"></span>
        </div>

        <div class="hero-curve" aria-hidden="true">
            <svg viewBox="0 0 1440 120" preserveAspectRatio="none">
                <path fill="currentColor" d="M0,62 C160,108 332,126 520,95 C705,65 815,12 1010,24 C1175,34 1300,76 1440,44 L1440,120 L0,120 Z"></path>
            </svg>
        </div>
    </header>

    <!-- ============ STATEMENT ============ -->
    <section class="statement section-pad" id="story">
        <div class="wrap reveal">
            <span class="gold-rule"><span class="eyebrow">Why It Matters</span></span>
            <p class="big">
                The stories we mean to ask about are often the ones we never do — until the chance is gone.
                I sit with the people who matter to you and capture <em>the laugh, the voice, the memory</em>,
                so it lives on long after the moment passes.
            </p>
        </div>
    </section>

   {{-- ============ SHORT SESSION / COUPON CTA ============ --}}
<section class="short-session" id="short-session">
    <div class="wrap">
        <div class="short-coupon reveal">
            <div class="short-coupon-copy">
                <span class="gold-rule"><span class="eyebrow" style="margin-bottom:10px">FamilySearch</span></span>
                

                <h2>A short &amp; sweet session for family memories.</h2>

                <p>
                    A simple 30-minute guided audio session to capture a handful of favorite memories,
                    family stories, words of love, testimony, recipe stories, or little details your family
                    will want to hear again.
                </p>

                <p class="coupon-note">
                    Easy, heartfelt, and low-pressure — a meaningful audio keepsake you can save,
                    share, and add to FamilySearch Memories when file requirements allow.
                </p>
                <div style="margin: auto; align-items: center; width: 280px; margin-top: 11px;">
                    <span class="gold-rule"><span class="eyebrow"><img src="https://edge.fscdn.org/assets/img/certification/FamilySearchLogo/FSMosaicTreeLogo-ea9718ee4daec6abe5ce7ac8cf6ff331.png" style="height: 40px; margin: auto; width: 154px;"></span></span>
    </div>
            </div>

             <div class="short-coupon-offer">
                <div class="coupon-label">30 Minute Session</div>

                <div class="coupon-price-wrap">
                    <div class="coupon-old-price">$150</div>

                    <div class="coupon-price">
                        <small>$</small>100
                    </div>
                </div>

                <div class="coupon-code">
                    Coupon Code:
                    <strong>FAMILIESAREFOREVER</strong>
                </div>

                <a
                    href="https://buy.stripe.com/test_00waEXfyHeIR0vc7bCcfK00?prefilled_promo_code=FAMILIESAREFOREVER"
                    class="btn btn-gold"
                >
                    Book This Session
                </a>
                {{-- =======<a
                    href="https://buy.stripe.com/7sY00jfGB3u20HjeQC8so00?prefilled_promo_code=FAMILIESAREFOREVER"
                    class="btn btn-gold"
                >
                    Book This Session
                </a> ======= --}}
            </div>
        </div>
    </div>
</section>

    <!-- ============ PROCESS ============ -->
    <section class="process section-pad" id="process">
        <div class="wrap">
            <div class="section-head reveal">
                <span class="gold-rule"><span class="eyebrow">The Experience</span></span>
                <h2>How a story unfolds</h2>
                <p class="lede">
                    Gentle, unhurried, and built around the comfort of the person whose story we're keeping.
                </p>
            </div>

            <div class="steps">
                <div class="step reveal">
                    <div class="step-num">01</div>
                    <h3>We talk first</h3>
                    <p>A relaxed conversation to understand whose story we're keeping and what matters most to your family.</p>
                </div>

                <div class="step reveal" style="transition-delay:.1s">
                    <div class="step-num">02</div>
                    <h3>Thoughtful prompts</h3>
                    <p>Questions tailored to a life — so the moments that should never be forgotten are gently drawn out.</p>
                </div>

                <div class="step reveal" style="transition-delay:.2s">
                    <div class="step-num">03</div>
                    <h3>The recording</h3>
                    <p>In the comfort of home, we capture the voice, the stories, and the laughter — patiently, on their terms.</p>
                </div>

                <div class="step reveal" style="transition-delay:.3s">
                    <div class="step-num">04</div>
                    <h3>Your keepsake</h3>
                    <p>Beautifully edited and delivered as an heirloom your family can return to for generations.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ============ PACKAGES ============ -->
    <section class="packages section-pad" id="packages">
        <div class="wrap">
            <div class="section-head reveal">
                <span class="gold-rule"><span class="eyebrow">Keepsakes</span></span>
                <h2>Choose how a life is kept</h2>
                <p class="lede">
                    Each session is unhurried and guided. Every keepsake is professionally recorded, edited, and delivered to you.
                </p>
            </div>

            <div class="pkg-grid">

                <div class="pkg reveal">
                    <div class="pkg-name">The Keepsake</div>
                    <div class="pkg-kind">Audio Story</div>
                    <div class="pkg-price"><small>$</small>400<span class="unit">One 3-hour session</span></div>

                    <ul>
                        <li>A single 3-hour recording session</li>
                        <li>Professional audio interview</li>
                        <li>Guided, personalized story prompts</li>
                        <li>Their story on a keepsake flash drive</li>
                    </ul>

                    <a href="https://buy.stripe.com/bJe3cv0LH1lU61DcIu8so01" class="btn btn-ghost" data-pkg="The Keepsake — Audio ($400)">
                        Choose Keepsake
                    </a>
                </div>

                <div class="pkg reveal" style="transition-delay:.1s">
                    <div class="pkg-name">The Portrait</div>
                    <div class="pkg-kind">Audio &amp; Video</div>
                    <div class="pkg-price"><small>$</small>800<span class="unit">One 4-hour session</span></div>

                    <ul>
                        <li>A single 4-hour recording session</li>
                        <li>Professional audio <em>and</em> video</li>
                        <li>Guided interview with gentle direction</li>
                        <li>Edited keepsake film on a flash drive</li>
                    </ul>

                    <a href="https://buy.stripe.com/28E28r0LH5Ca9dP23Q8so02" class="btn btn-ghost" data-pkg="The Portrait — Audio & Video ($800)">
                        Choose Portrait
                    </a>
                </div>

                <div class="pkg featured reveal" style="transition-delay:.2s">
                    <div class="pkg-tag">Most Loved</div>
                    <div class="pkg-name">The Chronicle</div>
                    <div class="pkg-kind">Two Days &amp; Photo Restoration</div>
                    <div class="pkg-price"><small>$</small>1,200<span class="unit">Two days · up to 6 hours</span></div>

                    <ul>
                        <li>Two recording days, up to 6 hours total</li>
                        <li>Professional audio &amp; video</li>
                        <li>Photo restoration — cherished photos scanned &amp; restored</li>
                        <li>Edited film &amp; restored photos on a keepsake flash drive</li>
                    </ul>

                    <a href="https://buy.stripe.com/3cIdR9gKFfcK1Ln9wi8so03" class="btn btn-gold" data-pkg="The Chronicle — Two Days & Photo Restoration ($1,200)">
                        Choose Chronicle
                    </a>
                </div>

                <div class="pkg reveal" style="transition-delay:.3s">
                    <div class="pkg-name">The Heirloom</div>
                    <div class="pkg-kind">Family &amp; Photo Restoration</div>
                    <div class="pkg-price"><small>$</small>1,800<span class="unit">The complete keepsake</span></div>

                    <ul>
                        <li>Everything within The Chronicle</li>
                        <li>Multiple family members included</li>
                        <li>Extended, woven-together interviews</li>
                        <li>Photo restoration of treasured family photos</li>
                        <li>Plus 4 additional keepsake flash drives to share</li>
                    </ul>

                    <a href="https://buy.stripe.com/dRm8wPamhaWufCd23Q8so04" class="btn btn-ghost" data-pkg="The Heirloom — Family & Photo Restoration ($1,800)">
                        Choose Heirloom
                    </a>
                </div>

            </div>
        </div>
    </section>

    <!-- ============ WHAT YOU RECEIVE ============ -->
    <section class="receive section-pad">
        <div class="wrap reveal">
            <div class="section-head" style="margin-bottom:0;">
                <span class="gold-rule"><span class="eyebrow" style="color:var(--gold-bright)">The Promise</span></span>
                <h2>More than a recording</h2>
            </div>

            <div class="row">
                <div class="cell">
                    <h3>Their true voice</h3>
                    <p>Not a transcript or a summary — the actual voice, told the way only they could tell it.</p>
                </div>

                <div class="cell">
                    <h3>Kept beautifully</h3>
                    <p>Professionally edited with care and delivered on a keepsake flash drive your family will treasure.</p>
                </div>

                <div class="cell">
                    <h3>Yours for generations</h3>
                    <p>A keepsake that children and grandchildren can return to long into the future.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ============ ABOUT ============ -->
    <section class="about section-pad" id="about">
        <div class="wrap about-grid">
            <div class="about-portrait reveal">
                <img src="{{ asset('images/Shalyce-Memories-Profile.jpg') }}" alt="Shalyce, founder of Memories Are For Sharing">
            </div>

            <div class="reveal">
                <span class="gold-rule"><span class="eyebrow">Your Storyteller</span></span>
                <h2>Hello, I'm Shalyce</h2>

                <p>
                    I believe the most precious things we own aren't things at all — they're people; and the stories
                    that get passed down at the dinner table, and far too often, lost.
                </p>

                <p>
                    I created Memories Are For Sharing to make sure those stories are kept. With patience and
                    real care, I sit with your loved ones and help them share the moments that made them who they
                    are — so your family can hold onto their voice for a lifetime.
                </p>

                <p>
                    Whether it's a grandparent's childhood, a parent's love story, or a whole family's history,
                    I'd be honored to help you keep it.
                </p>

                <p class="sig">— Shalyce</p>
            </div>
        </div>
    </section>

    <!-- ============ FAQ ============ -->
    <section class="faq section-pad">
        <div class="wrap">
            <div class="section-head reveal">
                <span class="gold-rule"><span class="eyebrow">Good To Know</span></span>
                <h2>Questions, answered</h2>
            </div>

            <div class="faq-list reveal">
                <div class="faq-item">
                    <button class="faq-q">Where do the recordings take place? <span class="pm">+</span></button>
                    <div class="faq-a">
                        <p>Most often in the comfort of your own home, where people feel most at ease and the stories come naturally. I'm happy to discuss the right setting for your family.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <button class="faq-q">Do I need to prepare questions? <span class="pm">+</span></button>
                    <div class="faq-a">
                        <p>Not at all. I prepare thoughtful, personalized prompts ahead of time and guide the conversation gently — though you're always welcome to suggest the topics that matter most to you.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <button class="faq-q">What if my loved one is elderly or unwell? <span class="pm">+</span></button>
                    <div class="faq-a">
                        <p>Sessions are paced entirely around their comfort, with as many breaks as needed. Capturing a story while there's still time is one of the most meaningful things I do, and I treat it with great care.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <button class="faq-q">How soon will we receive the finished keepsake? <span class="pm">+</span></button>
                    <div class="faq-a">
                        <p>Timelines vary by package, but I'll always share a clear estimate before we begin so you know exactly what to expect.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <button class="faq-q">What happens to our original photos? <span class="pm">+</span></button>
                    <div class="faq-a">
                        <p>Your originals are treated as the irreplaceable treasures they are. I scan them carefully, restore the digital copies, and return every original photo to you safe and unaltered — they never leave your family for good.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <button class="faq-q">Can we customize a package? <span class="pm">+</span></button>
                    <div class="faq-a">
                        <p>Absolutely. Every family is different — reach out and we'll shape something that fits your story and your budget.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ============ CONTACT ============ -->
    <section class="contact section-pad" id="contact">
        <div class="wrap contact-grid">
            <div class="contact-intro reveal">
                <span class="gold-rule"><span class="eyebrow" style="color:var(--gold-bright)">Begin</span></span>
                <h2>Let's keep their story</h2>

                <p>
                    Tell me a little about the story you'd like to preserve, and I'll be in touch to talk through the details —
                    gently and with no pressure.
                </p>

                <div class="contact-detail">
                    <span class="lbl">Email</span>
                    <span class="val"><a href="mailto:shalyce@memoriesareforsharing.com">shalyce@memoriesareforsharing.com</a></span>
                </div>

                <div class="contact-detail">
                    <span class="lbl">Phone</span>
                    <span class="val"><a href="tel:+18016451948">(801) 645-1948</a></span>
                </div>
            </div>

            <div class="reveal">
                <form action="{{ route('contact.send') }}" method="POST">
                    @csrf

                    @if (session('success'))
                        <div class="flash">{{ session('success') }}</div>
                    @endif

                    <div class="hp" aria-hidden="true">
                        <label>HP Token</label>
                        <input type="text" name="hp_token" tabindex="-1" autocomplete="off">
                    </div>

                    <div class="field">
                        <label for="name">Your Name</label>
                        <input type="text" id="name" name="name" value="{{ old('name') }}" required>
                        @error('name') <span class="err">{{ $message }}</span> @enderror
                    </div>

                    <div class="field">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" value="{{ old('email') }}" required>
                        @error('email') <span class="err">{{ $message }}</span> @enderror
                    </div>

                    <div class="field">
                        <label for="phone">Phone</label>
                        <input type="tel" id="phone" name="phone" value="{{ old('phone') }}">
                        @error('phone') <span class="err">{{ $message }}</span> @enderror
                    </div>

                    <div class="field">
                        <label for="package">Package of Interest</label>
                        <select id="package" name="package">
                            <option value="Not sure yet">Not sure yet — help me decide</option>

                            <option value="Short & Simple — 30 Minute Session ($150)" @selected(old('package')==='Short & Simple — 30 Minute Session ($150)')>
                                Short &amp; Simple — 30 Minute Session · $150
                            </option>

                            <option value="The Keepsake — Audio ($400)" @selected(old('package')==='The Keepsake — Audio ($400)')>
                                The Keepsake — Audio · $400
                            </option>

                            <option value="The Portrait — Audio & Video ($800)" @selected(old('package')==='The Portrait — Audio & Video ($800)')>
                                The Portrait — Audio &amp; Video · $800
                            </option>

                            <option value="The Chronicle — Two Days & Photo Restoration ($1,200)" @selected(old('package')==='The Chronicle — Two Days & Photo Restoration ($1,200)')>
                                The Chronicle — Two Days &amp; Photo Restoration · $1,200
                            </option>

                            <option value="The Heirloom — Family & Photo Restoration ($1,800)" @selected(old('package')==='The Heirloom — Family & Photo Restoration ($1,800)')>
                                The Heirloom — Family &amp; Photo Restoration · $1,800
                            </option>
                        </select>
                    </div>

                    <div class="field full">
                        <label for="message">Tell me about the story you'd like to keep</label>
                        <textarea id="message" name="message" required>{{ old('message') }}</textarea>
                        @error('message') <span class="err">{{ $message }}</span> @enderror
                    </div>

                    <div class="field full">
                        <button type="submit" class="btn btn-gold">Send My Inquiry</button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <!-- ============ FOOTER ============ -->
    <footer>
        <div class="wrap">
            <a href="#top" class="brand">
                Memories <span>&amp;</span> Sharing
                <small>Legacy Preservation</small>
            </a>

            <div class="f-links">
                <a href="#short-session">30 Min Session</a>
                <a href="#process">Process</a>
                <a href="#packages">Packages</a>
                <a href="#about">About</a>
                <a href="#contact">Contact</a>
            </div>

            <p class="copy">&copy; {{ date('Y') }} Memories Are For Sharing · Recording life stories with care.</p>
        </div>
    </footer>

    @verbatim
    <script>
        const nav = document.getElementById('nav');
        const onScroll = () => nav.classList.toggle('scrolled', window.scrollY > 40);

        onScroll();
        window.addEventListener('scroll', onScroll, { passive: true });

        const toggle = document.getElementById('navToggle');
        const links = document.getElementById('navLinks');

        toggle.addEventListener('click', () => links.classList.toggle('show'));

        links.querySelectorAll('a').forEach(a => {
            a.addEventListener('click', () => links.classList.remove('show'));
        });

        const io = new IntersectionObserver((entries) => {
            entries.forEach(e => {
                if (e.isIntersecting) {
                    e.target.classList.add('in');
                    io.unobserve(e.target);
                }
            });
        }, { threshold: 0.14 });

        document.querySelectorAll('.reveal').forEach(el => io.observe(el));

        document.querySelectorAll('.faq-q').forEach(q => {
            q.addEventListener('click', () => {
                const item = q.parentElement;
                const open = item.classList.contains('open');

                document.querySelectorAll('.faq-item').forEach(i => {
                    i.classList.remove('open');
                    i.querySelector('.faq-a').style.maxHeight = null;
                });

                if (!open) {
                    item.classList.add('open');

                    const a = item.querySelector('.faq-a');
                    a.style.maxHeight = a.scrollHeight + 'px';
                }
            });
        });

        document.querySelectorAll('[data-pkg]').forEach(btn => {
            btn.addEventListener('click', () => {
                const want = btn.getAttribute('data-pkg').replace(/&amp;/g, '&');
                const sel = document.getElementById('package');

                if (!sel) return;

                [...sel.options].forEach(o => {
                    if (o.value === want) {
                        sel.value = want;
                    }
                });
            });
        });

        if (window.location.hash === '#contact') {
            setTimeout(() => {
                document.getElementById('contact').scrollIntoView({ behavior: 'smooth' });
            }, 300);
        }
    </script>
    @endverbatim
</body>
</html>