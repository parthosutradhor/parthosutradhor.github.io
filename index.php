<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Jayoti & Partho Wedding</title>
  <meta name="description" content="Wedding invitation website for Jayoti Mandal and Partho Sutra Dhor." />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;500;700&family=Great+Vibes&family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <style>
    :root {
      --bg: #fff8f3;
      --cream: #fffaf6;
      --rose: #b76e79;
      --rose-dark: #8d3f52;
      --gold: #c69b45;
      --gold-soft: #f7dfac;
      --green: #526b55;
      --text: #352420;
      --muted: #7c6860;
      --shadow: 0 24px 70px rgba(92, 45, 45, 0.16);
      --radius: 28px;
    }

    * { box-sizing: border-box; }
    html { scroll-behavior: smooth; }

    body {
      margin: 0;
      font-family: "Inter", system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", sans-serif;
      background:
        radial-gradient(circle at top left, rgba(247, 223, 172, 0.45), transparent 32rem),
        radial-gradient(circle at top right, rgba(183, 110, 121, 0.25), transparent 30rem),
        linear-gradient(180deg, #fff8f3 0%, #fffdfb 48%, #fff6f4 100%);
      color: var(--text);
      overflow-x: hidden;
    }

    a { color: inherit; text-decoration: none; }

    .floral {
      position: fixed;
      inset: 0;
      pointer-events: none;
      opacity: 0.45;
      z-index: -1;
      background-image:
        radial-gradient(circle at 8% 18%, rgba(183,110,121,.18) 0 2px, transparent 3px),
        radial-gradient(circle at 94% 14%, rgba(198,155,69,.2) 0 2px, transparent 3px),
        radial-gradient(circle at 90% 80%, rgba(82,107,85,.13) 0 2px, transparent 3px),
        radial-gradient(circle at 12% 86%, rgba(183,110,121,.15) 0 2px, transparent 3px);
      background-size: 80px 80px, 110px 110px, 95px 95px, 120px 120px;
    }

    .nav {
      position: fixed;
      top: 18px;
      left: 50%;
      transform: translateX(-50%);
      width: min(1080px, calc(100% - 28px));
      padding: 12px 16px;
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: 16px;
      border: 1px solid rgba(198, 155, 69, 0.24);
      border-radius: 999px;
      background: rgba(255, 250, 246, 0.76);
      backdrop-filter: blur(18px);
      box-shadow: 0 12px 40px rgba(70, 37, 32, 0.08);
      z-index: 10;
    }

    .brand {
      display: flex;
      align-items: center;
      gap: 10px;
      font-family: "Cinzel", serif;
      font-weight: 700;
      letter-spacing: .06em;
      font-size: 13px;
      color: var(--rose-dark);
      white-space: nowrap;
    }

    .brand .seal {
      width: 34px;
      height: 34px;
      border-radius: 50%;
      display: grid;
      place-items: center;
      background: linear-gradient(135deg, var(--rose), var(--gold));
      color: white;
      font-family: "Great Vibes", cursive;
      font-size: 23px;
      box-shadow: 0 10px 22px rgba(183, 110, 121, .28);
    }

    .nav-links {
      display: flex;
      gap: 6px;
      align-items: center;
      flex-wrap: wrap;
      justify-content: flex-end;
    }

    .nav-links a {
      padding: 9px 13px;
      border-radius: 999px;
      color: var(--muted);
      font-size: 13px;
      font-weight: 600;
      transition: .25s ease;
    }

    .nav-links a:hover {
      background: rgba(183, 110, 121, .1);
      color: var(--rose-dark);
    }

    .hero {
      min-height: 100vh;
      padding: 132px 22px 72px;
      display: grid;
      place-items: center;
      position: relative;
    }

    .hero-card {
      width: min(1120px, 100%);
      min-height: 680px;
      display: grid;
      grid-template-columns: 1fr 0.86fr;
      overflow: hidden;
      border-radius: 42px;
      background: rgba(255, 250, 246, .82);
      border: 1px solid rgba(198, 155, 69, .24);
      box-shadow: var(--shadow);
      position: relative;
    }

    .hero-content {
      padding: clamp(38px, 7vw, 76px);
      display: flex;
      flex-direction: column;
      justify-content: center;
      position: relative;
      z-index: 1;
    }

    .eyebrow {
      display: inline-flex;
      width: fit-content;
      align-items: center;
      gap: 10px;
      padding: 9px 14px;
      border: 1px solid rgba(198, 155, 69, .36);
      border-radius: 999px;
      background: rgba(255, 255, 255, .55);
      color: var(--green);
      font-size: 12px;
      font-weight: 700;
      letter-spacing: .15em;
      text-transform: uppercase;
      margin-bottom: 30px;
    }

    .eyebrow::before,
    .eyebrow::after {
      content: "";
      width: 7px;
      height: 7px;
      border-radius: 50%;
      background: var(--gold);
    }

    h1 {
      margin: 0;
      font-family: "Great Vibes", cursive;
      font-size: clamp(72px, 12vw, 138px);
      line-height: .82;
      color: var(--rose-dark);
      font-weight: 400;
      text-shadow: 0 8px 0 rgba(198, 155, 69, .08);
    }

    .amp {
      display: block;
      margin: 8px 0 14px 10px;
      font-family: "Cinzel", serif;
      font-size: clamp(24px, 4vw, 42px);
      color: var(--gold);
      letter-spacing: .12em;
    }

    .subtitle {
      margin: 26px 0 0;
      max-width: 560px;
      color: var(--muted);
      font-size: 17px;
      line-height: 1.8;
    }

    .date-box {
      margin: 34px 0 0;
      width: fit-content;
      padding: 20px 24px;
      display: grid;
      grid-template-columns: auto 1px auto;
      gap: 20px;
      align-items: center;
      border-radius: 24px;
      background: white;
      border: 1px solid rgba(198, 155, 69, .25);
      box-shadow: 0 16px 36px rgba(70, 37, 32, .08);
    }

    .date-box strong {
      font-family: "Cinzel", serif;
      color: var(--rose-dark);
      font-size: clamp(22px, 3vw, 32px);
      letter-spacing: .04em;
    }

    .date-box span {
      display: block;
      color: var(--muted);
      font-size: 12px;
      text-transform: uppercase;
      letter-spacing: .18em;
      font-weight: 700;
      margin-bottom: 6px;
    }

    .divider { height: 58px; background: rgba(198, 155, 69, .32); }

    .hero-art {
      position: relative;
      min-height: 640px;
      background:
        linear-gradient(160deg, rgba(141,63,82,.92), rgba(183,110,121,.72)),
        url("data:image/svg+xml,%3Csvg width='900' height='1100' viewBox='0 0 900 1100' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' stroke='%23fff4df' stroke-width='2' opacity='.45'%3E%3Cpath d='M95 945C185 725 297 599 461 485c136-95 235-201 276-354'/%3E%3Cpath d='M132 930c72-82 166-138 282-166 170-41 282-142 338-302'/%3E%3Cpath d='M222 192c88 49 133 118 135 209 1 72-22 132-69 181'/%3E%3C/g%3E%3Cg fill='%23fff4df' opacity='.55'%3E%3Ccircle cx='229' cy='188' r='7'/%3E%3Ccircle cx='755' cy='459' r='6'/%3E%3Ccircle cx='459' cy='487' r='7'/%3E%3Ccircle cx='414' cy='764' r='5'/%3E%3C/g%3E%3C/svg%3E");
      background-size: cover;
      display: grid;
      place-items: center;
      overflow: hidden;
    }

    .portrait-frame {
  width: min(360px, 78%);
  aspect-ratio: 3 / 4;
  border-radius: 50% 50% 10px 10px;
  border: 10px solid rgba(255, 250, 246, .82);
  box-shadow: 0 34px 80px rgba(65, 24, 33, .38);
  position: relative;
  overflow: hidden;
  background: #f9e4ca;
}

.portrait-frame img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  object-position: center top;
  display: block;
}

.portrait-frame::before,
.portrait-frame::after {
  display: none;
}

    .floating-card {
      position: absolute;
      right: 34px;
      bottom: 34px;
      max-width: 260px;
      padding: 20px;
      border-radius: 22px;
      background: rgba(255, 250, 246, .88);
      backdrop-filter: blur(16px);
      box-shadow: 0 16px 44px rgba(43, 18, 23, .25);
      color: var(--text);
    }

    .floating-card strong {
      display: block;
      color: var(--rose-dark);
      font-family: "Cinzel", serif;
      margin-bottom: 8px;
    }

    section {
      padding: 86px 22px;
    }

    .container {
      width: min(1120px, 100%);
      margin: 0 auto;
    }

    .section-title {
      text-align: center;
      margin-bottom: 44px;
    }

    .section-title .script {
      font-family: "Great Vibes", cursive;
      color: var(--rose);
      font-size: 44px;
      display: block;
      margin-bottom: -3px;
    }

    .section-title h2 {
      margin: 0;
      font-family: "Cinzel", serif;
      font-size: clamp(30px, 4vw, 48px);
      letter-spacing: .06em;
      color: var(--text);
    }

    .section-title p {
      max-width: 680px;
      margin: 14px auto 0;
      color: var(--muted);
      line-height: 1.7;
    }

    .countdown {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      gap: 18px;
    }

    .time-card, .info-card, .event-card, .rsvp-card {
      background: rgba(255, 250, 246, .86);
      border: 1px solid rgba(198, 155, 69, .24);
      border-radius: var(--radius);
      box-shadow: 0 18px 50px rgba(70, 37, 32, .08);
    }

    .time-card {
      padding: 28px 16px;
      text-align: center;
    }

    .time-card strong {
      display: block;
      font-family: "Cinzel", serif;
      font-size: clamp(34px, 5vw, 54px);
      color: var(--rose-dark);
    }

    .time-card span {
      color: var(--muted);
      text-transform: uppercase;
      letter-spacing: .15em;
      font-size: 12px;
      font-weight: 700;
    }

    .story-grid {
      display: grid;
      grid-template-columns: .88fr 1.12fr;
      gap: 26px;
      align-items: stretch;
    }

    .info-card {
      padding: clamp(28px, 5vw, 48px);
      line-height: 1.8;
      color: var(--muted);
    }

    .info-card h3 {
      margin: 0 0 12px;
      color: var(--rose-dark);
      font-family: "Cinzel", serif;
      font-size: 26px;
    }

    .quote-card {
      min-height: 380px;
      border-radius: var(--radius);
      position: relative;
      overflow: hidden;
      background:
        linear-gradient(rgba(82,107,85,.86), rgba(82,107,85,.68)),
        url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 800 600'%3E%3Cpath d='M0 520C180 420 280 480 410 330S640 60 800 140v460H0z' fill='%23f7dfac' opacity='.45'/%3E%3Cpath d='M0 120C190 30 260 190 390 150S600 10 800 70v530H0z' fill='%23fff8f3' opacity='.18'/%3E%3C/svg%3E");
      background-size: cover;
      display: flex;
      align-items: end;
      padding: 38px;
      color: white;
      box-shadow: var(--shadow);
    }

    .quote-card p {
      font-family: "Great Vibes", cursive;
      font-size: clamp(40px, 5vw, 64px);
      line-height: 1.05;
      margin: 0;
      text-shadow: 0 8px 34px rgba(0,0,0,.22);
    }

    .events {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 22px;
    }

    .event-card {
      padding: 32px;
      position: relative;
      overflow: hidden;
    }

    .event-card::before {
      content: "";
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      height: 7px;
      background: linear-gradient(90deg, var(--rose), var(--gold));
    }

    .event-card .icon {
      width: 56px;
      height: 56px;
      display: grid;
      place-items: center;
      border-radius: 18px;
      background: rgba(183, 110, 121, .1);
      color: var(--rose-dark);
      font-size: 26px;
      margin-bottom: 22px;
    }

    .event-card h3 {
      margin: 0 0 12px;
      font-family: "Cinzel", serif;
      color: var(--rose-dark);
      font-size: 22px;
    }

    .event-card p {
      color: var(--muted);
      line-height: 1.7;
      margin: 0;
    }

    .gallery {
      display: grid;
      grid-template-columns: 1.1fr .9fr .9fr;
      grid-auto-rows: 230px;
      gap: 18px;
    }

    .gallery-item {
      border-radius: 28px;
      overflow: hidden;
      position: relative;
      background:
        radial-gradient(circle at 30% 30%, rgba(255,255,255,.5), transparent 28%),
        linear-gradient(135deg, rgba(183,110,121,.8), rgba(198,155,69,.62));
      box-shadow: 0 18px 44px rgba(70,37,32,.09);
      border: 1px solid rgba(255,255,255,.7);
    }
	.gallery-item {
  overflow: hidden;
}

.gallery-item img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  object-position: center;
  display: block;
}

    .gallery-item.large { grid-row: span 2; }

    .gallery-item::after {
      content: attr(data-label);
      position: absolute;
      inset: auto 20px 20px 20px;
      padding: 12px 14px;
      border-radius: 16px;
      background: rgba(255, 250, 246, .78);
      backdrop-filter: blur(12px);
      color: var(--rose-dark);
      font-weight: 700;
      font-size: 13px;
      letter-spacing: .04em;
    }

    .map-wrap {
      display: grid;
      grid-template-columns: .85fr 1.15fr;
      gap: 24px;
      align-items: stretch;
    }

    .map-info {
      padding: 34px;
      border-radius: var(--radius);
      background: linear-gradient(145deg, rgba(141,63,82,.96), rgba(183,110,121,.86));
      color: white;
      box-shadow: var(--shadow);
    }

    .map-info h3 {
      margin: 0 0 16px;
      font-family: "Cinzel", serif;
      font-size: 28px;
    }

    .map-info p { line-height: 1.75; color: rgba(255,255,255,.85); }

    .details-list {
      display: grid;
      gap: 14px;
      margin: 26px 0;
    }

    .details-list div {
      padding: 14px 16px;
      border: 1px solid rgba(255,255,255,.22);
      border-radius: 18px;
      background: rgba(255,255,255,.09);
    }

    .btn-row {
      display: flex;
      flex-wrap: wrap;
      gap: 12px;
      margin-top: 28px;
    }

    .btn {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      gap: 8px;
      padding: 13px 18px;
      border-radius: 999px;
      border: 1px solid transparent;
      background: linear-gradient(135deg, var(--rose), var(--gold));
      color: white;
      font-weight: 800;
      box-shadow: 0 14px 28px rgba(183, 110, 121, .22);
      transition: transform .2s ease, box-shadow .2s ease;
    }

    .btn:hover { transform: translateY(-2px); box-shadow: 0 18px 34px rgba(183, 110, 121, .3); }

    .btn.ghost {
      background: rgba(255,255,255,.1);
      border-color: rgba(255,255,255,.36);
      box-shadow: none;
    }

    .map-frame {
      min-height: 470px;
      border-radius: var(--radius);
      overflow: hidden;
      border: 1px solid rgba(198, 155, 69, .24);
      box-shadow: var(--shadow);
      background: #eee;
    }

    .map-frame iframe {
      width: 100%;
      height: 100%;
      min-height: 470px;
      border: 0;
      display: block;
    }

    .rsvp-card {
      width: min(760px, 100%);
      margin: 0 auto;
      padding: clamp(28px, 5vw, 48px);
      text-align: center;
      position: relative;
      overflow: hidden;
    }

    .rsvp-card::before {
      content: "";
      position: absolute;
      width: 320px;
      height: 320px;
      border-radius: 50%;
      background: rgba(247, 223, 172, .55);
      top: -180px;
      right: -120px;
      z-index: 0;
    }

    .rsvp-card > * { position: relative; z-index: 1; }

    .rsvp-card h2 {
      margin: 0;
      font-family: "Great Vibes", cursive;
      font-size: clamp(54px, 8vw, 86px);
      color: var(--rose-dark);
      font-weight: 400;
    }

    .rsvp-card p {
      color: var(--muted);
      line-height: 1.8;
      margin: 12px auto 26px;
      max-width: 560px;
    }

    .footer {
      padding: 48px 22px 60px;
      text-align: center;
      color: var(--muted);
    }

    .footer .names {
      font-family: "Great Vibes", cursive;
      font-size: 42px;
      color: var(--rose-dark);
      margin-bottom: 8px;
    }

    .back-top {
      position: fixed;
      right: 18px;
      bottom: 18px;
      width: 48px;
      height: 48px;
      border-radius: 50%;
      background: var(--rose-dark);
      color: white;
      display: grid;
      place-items: center;
      box-shadow: 0 16px 34px rgba(141,63,82,.26);
      z-index: 12;
      font-weight: 900;
    }

    @media (max-width: 900px) {
      .nav { align-items: flex-start; border-radius: 24px; }
      .nav-links { display: none; }
      .hero-card, .story-grid, .map-wrap { grid-template-columns: 1fr; }
      .hero-art { min-height: 520px; order: -1; }
      .events { grid-template-columns: 1fr; }
      .countdown { grid-template-columns: repeat(2, 1fr); }
      .gallery { grid-template-columns: 1fr; grid-auto-rows: 240px; }
      .gallery-item.large { grid-row: span 1; }
      .date-box { grid-template-columns: 1fr; gap: 14px; width: 100%; }
      .divider { width: 100%; height: 1px; }
      .floating-card { left: 22px; right: 22px; bottom: 22px; max-width: none; }
    }

    @media (max-width: 560px) {
      .hero { padding-top: 108px; }
      .hero-card { border-radius: 30px; min-height: auto; }
      .hero-content { padding: 34px 24px; }
      h1 { font-size: 70px; }
      section { padding: 64px 18px; }
      .countdown { gap: 12px; }
      .time-card { padding: 22px 10px; }
      .btn-row { justify-content: center; }
    }
  </style>
</head>
<body>
  <div class="floral"></div>

  <nav class="nav" aria-label="Wedding navigation">
    <a class="brand" href="#home" aria-label="Home">
      <span class="seal">J</span>
      Jayoti & Partho
    </a>
    <div class="nav-links">
      <a href="#events">Events</a>
      <a href="#gallery">Gallery</a>
      <a href="#location">Location</a>
      <a href="#rsvp">RSVP</a>
    </div>
  </nav>

  <header class="hero" id="home">
    <div class="hero-card">
      <div class="hero-content">
        <h1>Jayoti <span class="amp">&</span> Partho</h1>
        <p class="subtitle">
          With joyful hearts, we invite you to celebrate the wedding of
          <strong>Jayoti Mandal</strong> and <strong>Partho Sutra Dhor</strong> —
          a day of love, blessings, laughter, and beautiful memories.
        </p>

        <div class="date-box" aria-label="Wedding date and place">
          <div>
            <span>Wedding Date</span>
            <strong>29 July 2026</strong>
          </div>
          <div class="divider"></div>
          <div>
            <span>Venue</span>
            <strong>Emmanuelle's Convention Center</strong>
          </div>
        </div>

        <div class="btn-row">
          <a class="btn" href="#location">View Location</a>
          <a class="btn ghost" href="#rsvp" style="color: var(--rose-dark); border-color: rgba(198,155,69,.35); background: rgba(255,255,255,.7);">Send Wishes</a>
        </div>
      </div>

      <div class="hero-art" aria-hidden="true">
        <div class="portrait-frame">
		<img src="images/couple.jpg" alt="Jayoti and Partho">
		</div>
        <div class="floating-card">
          <strong>Save the Date</strong>
          <span>We eagerly await your presence, which will make our celebration more meaningful.</span>
        </div>
      </div>
    </div>
  </header>

  <main>
    <section id="countdown-section">
      <div class="container">
        <div class="section-title">
          <span class="script">Counting the moments</span>
          <h2>Until Our Big Day</h2>
          <p>Every second brings us closer to a beautiful beginning.</p>
        </div>
        <div class="countdown" id="countdown" aria-live="polite">
          <div class="time-card"><strong id="days">00</strong><span>Days</span></div>
          <div class="time-card"><strong id="hours">00</strong><span>Hours</span></div>
          <div class="time-card"><strong id="minutes">00</strong><span>Minutes</span></div>
          <div class="time-card"><strong id="seconds">00</strong><span>Seconds</span></div>
        </div>
      </div>
    </section>


    <section id="events">
      <div class="container">
        <div class="section-title">
          <span class="script">Join the celebration</span>
          <h2>Wedding Events</h2>
        </div>

        <div class="events">
          <article class="event-card">
            <div class="icon">🌿</div>
            <h3>Haldi Ceremony</h3>
            <p><strong>Date:</strong> 27 July 2026<br><strong>Time:</strong> 6:00 PM<br><strong>Dress code:</strong> Yellow or festive traditional.</p>
          </article>
          <article class="event-card">
            <div class="icon">💍</div>
            <h3>Wedding Ceremony</h3>
            <p><strong>Date:</strong> 29 July 2026<br><strong>Time:</strong> 8:00 PM<br><strong>Venue:</strong> Emmanuelle's Convention Center, 6th Floor, Pilkhana, Dhanmondi, Dhaka.</p>
          </article>
          <article class="event-card">
            <div class="icon">✨</div>
            <h3>Reception</h3>
            <p><strong>Date:</strong> 31 July 2026<br><strong>Time:</strong> 2:00 PM<br><strong>Venue:</strong> Shree Shree Dhakeshwari National Temple, New Building, 2nd Floor, South Side, Dhakeshwari Road, Lalbagh, Dhaka-1211</p>
          </article>
        </div>
      </div>
    </section>

    <section id="gallery">
      <div class="container">
        <div class="section-title">
          <span class="script">Beautiful memories</span>
          <h2>Gallery</h2>
        </div>
        <div class="gallery">
          <div class="gallery-item large" data-label="PSD & JMDL">
		  <img src="images/couple-2.jpg" alt="Jayoti and Partho">
		  </div>
          <div class="gallery-item" data-label="Family Blessings">
		  <img src="images/g1.jpg" alt="Jayoti and Partho">
		  </div>
          <div class="gallery-item" data-label="Engaged">
		  <img src="images/g2.jpg" alt="Jayoti and Partho">
		  </div>
          <div class="gallery-item" data-label="Celebration">
		  <img src="images/g3.jpg" alt="Jayoti and Partho">
		  </div>
          <div class="gallery-item" data-label="DU Laal Bus">
		  <img src="images/g4.jpg" alt="Jayoti and Partho">
		  </div>
        </div>
      </div>
    </section>

    <section id="location">
      <div class="container">
        <div class="section-title">
          <span class="script">Find your way</span>
          <h2>Wedding Location</h2>
        </div>

        <div class="map-wrap">
          <div class="map-info">
            <h3>Venue Details</h3>
            <p>
              <strong>Venue:</strong> Emmanuelle's Convention Center, 6th Floor, Pilkhana, Dhanmondi, Dhaka.<br>
              <strong>Address:</strong> Dhaka, Bangladesh<br>
              <strong>Contact:</strong> +8801805063536,
				+8801801122055,
				+8801852569713,
				+880176560298
            </p>
            <div class="details-list">
              <div>🕯️ Ceremony: Please arrive 30 minutes early</div>
              <div>🎁 Blessings: Your presence is our greatest gift</div>
            </div>
            <div class="btn-row">
              <a class="btn" target="_blank" rel="noopener" href="https://maps.app.goo.gl/s3P8Tr5jnBNrCvVf8">Open in Google Maps</a>
              <a class="btn ghost" href="#rsvp">RSVP / Wishes</a>
            </div>
          </div>
          <div class="map-frame">
            <iframe
              title="Wedding location map"
              loading="lazy"
              allowfullscreen
              referrerpolicy="no-referrer-when-downgrade"
              src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d29218.08360529186!2d90.377377!3d23.73809!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8ca88354ddd%3A0x400756319069a80e!2sEmmanuelle&#39;s%20Convention%20Center!5e0!3m2!1sen!2sus!4v1783524830182!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="strict-origin-when-cross-origin">
            </iframe>
          </div>
        </div>
      </div>
    </section>

    <section id="rsvp">
      <div class="container">
        <div class="rsvp-card">
          <h2>Send Your Wishes</h2>
          <p>
            We would be honored by your presence and blessings. Please send your warm wishes
            or confirm your attendance through phone, WhatsApp, or the RSVP form link.
          </p>
          <div class="btn-row" style="justify-content:center;">
            <a class="btn" href="https://wa.me/+8801533557725?text=Congratulations%20Jayoti%20and%20Partho!%20I%20am%20pleased%20to%20confirm%20my%20attendance." target="_blank" rel="noopener">WhatsApp RSVP</a>
          </div>
        </div>
      </div>
    </section>
  </main>

  <footer class="footer">
    <div class="names">Jayoti & Partho</div>
    <div>Made with love for a beautiful beginning.</div>
  </footer>

  <a class="back-top" href="#home" aria-label="Back to top">↑</a>

  <script>
    // Change this date and time to your actual wedding date.
    const weddingDate = new Date("2026-07-29T20:00:00+06:00").getTime();

    const ids = {
      days: document.getElementById("days"),
      hours: document.getElementById("hours"),
      minutes: document.getElementById("minutes"),
      seconds: document.getElementById("seconds")
    };

    function pad(number) {
      return String(number).padStart(2, "0");
    }

    function updateCountdown() {
      const now = new Date().getTime();
      const distance = weddingDate - now;

      if (distance <= 0) {
        ids.days.textContent = "00";
        ids.hours.textContent = "00";
        ids.minutes.textContent = "00";
        ids.seconds.textContent = "00";
        return;
      }

      const days = Math.floor(distance / (1000 * 60 * 60 * 24));
      const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
      const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
      const seconds = Math.floor((distance % (1000 * 60)) / 1000);

      ids.days.textContent = pad(days);
      ids.hours.textContent = pad(hours);
      ids.minutes.textContent = pad(minutes);
      ids.seconds.textContent = pad(seconds);
    }

    updateCountdown();
    setInterval(updateCountdown, 1000);
  </script>
</body>
</html>
