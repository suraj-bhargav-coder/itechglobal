<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="description" content="Professional IT consulting, EDI integration, cloud modernization, and product engineering for growth-focused businesses." />
  <link rel="icon" href="<?php echo esc_url(get_template_directory_uri()); ?>/assets/itech-mark.png" />
  <?php wp_head(); ?>
  <style>
    :root {
      --ink: #0f1e2d;
      --muted: #4f5d6f;
      --accent: #1496d4;
      --accent-2: #0b2a4a;
      --bg: #f6f8fb;
      --bg-2: #eef5fb;
      --card: #ffffff;
      --line: #d9e1ec;
      --shadow: 0 24px 50px rgba(15, 30, 45, 0.12);
    }

    * { box-sizing: border-box; }

    body {
      margin: 0;
      font-family: 'Manrope', system-ui, -apple-system, 'Segoe UI', sans-serif;
      color: var(--ink);
      background: radial-gradient(circle at 15% 20%, #f2f7fb 0%, var(--bg) 50%, #eef3f9 100%);
      line-height: 1.6;
    }

    img { max-width: 100%; display: block; }
    a { color: inherit; text-decoration: none; }

    .container { width: min(1180px, 92vw); margin: 0 auto; }

    header {
      position: sticky;
      top: 0;
      z-index: 30;
      background: rgba(246, 248, 251, 0.92);
      backdrop-filter: blur(10px);
      border-bottom: 1px solid rgba(217, 225, 236, 0.7);
    }

    .nav {
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: 20px;
      padding: 18px 0;
      flex-wrap: wrap;
    }

    .brand { display: flex; align-items: center; gap: 12px; }
    .brand img { height: 38px; width: auto; }

    nav {
      display: flex;
      align-items: center;
      gap: 16px;
      flex-wrap: wrap;
      justify-content: flex-end;
    }

    nav a {
      font-size: 14px;
      font-weight: 600;
      color: var(--muted);
      padding: 6px 12px;
      border-radius: 999px;
      transition: all 0.25s ease;
    }

    nav a:hover { background: rgba(31, 61, 109, 0.1); color: var(--accent-2); }

    .hero { padding: 90px 0 70px; }

    .hero-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
      gap: 40px;
      align-items: center;
    }

    .hero h1 {
      font-weight: 700;
      font-size: clamp(34px, 4.8vw, 62px);
      line-height: 1.08;
      margin-bottom: 18px;
    }

    .hero p { font-size: 18px; color: var(--muted); margin-bottom: 26px; }

    .hero-actions { display: flex; gap: 14px; flex-wrap: wrap; }

    .btn {
      padding: 14px 22px;
      border-radius: 8px;
      font-weight: 700;
      font-size: 15px;
      border: none;
      cursor: pointer;
      transition: transform 0.2s ease, box-shadow 0.2s ease;
    }

    .btn-primary { background: var(--accent); color: #fff; box-shadow: 0 14px 28px rgba(20, 150, 212, 0.28); }
    .btn-secondary { background: #fff; border: 1px solid var(--line); color: var(--accent-2); }
    .btn:hover { transform: translateY(-2px); }

    .hero-card {
      background: var(--card);
      border: 1px solid var(--line);
      border-radius: 18px;
      padding: 28px;
      box-shadow: var(--shadow);
      position: relative;
      overflow: hidden;
    }

    .hero-card::after {
      content: '';
      position: absolute;
      inset: -40% -30% auto auto;
      width: 250px;
      height: 250px;
      background: radial-gradient(circle, rgba(20, 150, 212, 0.18), transparent 70%);
      border-radius: 50%;
      animation: float 9s ease-in-out infinite alternate;
    }

    .stat-grid {
      display: grid;
      grid-template-columns: repeat(2, minmax(0, 1fr));
      gap: 14px;
      margin-top: 20px;
    }

    .stat {
      padding: 14px;
      border-radius: 12px;
      border: 1px solid var(--line);
      background: #f8fbff;
    }

    .stat h3 { margin: 0 0 6px; font-size: 22px; font-weight: 700; }

    .trust { padding: 0 0 40px; }

    .trust-row {
      display: flex;
      flex-wrap: wrap;
      gap: 12px;
      align-items: center;
      color: var(--muted);
      font-size: 12px;
      letter-spacing: 1px;
      text-transform: uppercase;
    }

    .trust-row span {
      border: 1px solid var(--line);
      padding: 6px 12px;
      border-radius: 999px;
      background: #fff;
    }

    .section { padding: 70px 0; }

    .section-title {
      display: flex;
      align-items: flex-end;
      justify-content: space-between;
      gap: 18px;
      flex-wrap: wrap;
      margin-bottom: 30px;
    }

    .section-title h2 { margin: 0; font-size: clamp(26px, 3vw, 40px); font-weight: 700; }
    .section-title p { margin: 0; max-width: 480px; color: var(--muted); }

    .card-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
      gap: 22px;
    }

    .card {
      background: var(--card);
      border: 1px solid var(--line);
      border-radius: 14px;
      padding: 22px;
      box-shadow: 0 14px 32px rgba(18, 24, 39, 0.08);
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .card:hover { transform: translateY(-6px); box-shadow: 0 20px 40px rgba(18, 24, 39, 0.12); }
    .card h3 { margin-top: 0; font-weight: 700; }

    .pill-row { display: flex; gap: 12px; flex-wrap: wrap; margin-top: 18px; }
    .pill { background: #fff; border: 1px solid var(--line); color: var(--muted); padding: 6px 12px; border-radius: 999px; font-size: 13px; }

    .highlight-panel {
      background: linear-gradient(120deg, #f7fbff 0%, #eef4fb 100%);
      border-radius: 18px;
      border: 1px solid var(--line);
      padding: 32px;
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(230px, 1fr));
      gap: 20px;
    }

    .case-grid {
      display: grid;
      gap: 20px;
      grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
    }

    .case {
      border-radius: 16px;
      overflow: hidden;
      border: 1px solid var(--line);
      background: var(--card);
    }

    .case-shot { height: 170px; background: linear-gradient(135deg, #1f2937, #425aa6, #ffb992); }
    .case-body { padding: 18px; }

    .timeline {
      display: grid;
      gap: 16px;
      grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
    }

    .step {
      background: #fff;
      border: 1px dashed var(--accent);
      padding: 18px;
      border-radius: 12px;
    }

    .step span {
      display: inline-block;
      background: #e2f2fb;
      color: #0b5c8a;
      padding: 4px 10px;
      border-radius: 999px;
      font-weight: 700;
      font-size: 12px;
      margin-bottom: 10px;
    }

    .testimonials {
      display: grid;
      gap: 20px;
      grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
    }

    .testimonial {
      border: 1px solid var(--line);
      padding: 22px;
      border-radius: 14px;
      background: #fff;
    }

    .testimonial strong { display: block; margin-top: 14px; color: var(--accent-2); }

    .faq { border-top: 1px solid var(--line); }

    .faq-item {
      padding: 18px 0;
      border-bottom: 1px solid var(--line);
      cursor: pointer;
    }

    .faq-item h4 { margin: 0; font-weight: 700; }
    .faq-item p { margin: 10px 0 0; color: var(--muted); display: none; }

    .contact {
      background: var(--accent-2);
      color: #fff;
      border-radius: 18px;
      padding: 40px;
      display: grid;
      gap: 24px;
      grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
    }

    .contact form { display: grid; gap: 12px; }

    input, textarea {
      width: 100%;
      padding: 12px 14px;
      border-radius: 10px;
      border: none;
      font-family: inherit;
    }

    .contact button {
      background: var(--accent);
      color: #fff;
      border: none;
      padding: 12px 16px;
      border-radius: 10px;
      font-weight: 700;
      cursor: pointer;
    }

    footer { padding: 30px 0 50px; color: var(--muted); text-align: center; }

    .reveal { opacity: 0; transform: translateY(24px); transition: opacity 0.8s ease, transform 0.8s ease; }
    .reveal.is-visible { opacity: 1; transform: translateY(0); }

    @keyframes float { from { transform: translateY(-8px); } to { transform: translateY(18px); } }

    @media (max-width: 760px) {
      nav { justify-content: flex-start; }
      header { position: static; }
      .contact { padding: 28px; }
    }
  </style>
</head>
<body>
  <header>
    <div class="container nav">
      <div class="brand">
        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/itech-logo.png" alt="Itech Global logo" />
      </div>
      <nav>
        <a href="#home">Home</a>
        <a href="#services">Services</a>
        <a href="#cases">Work</a>
        <a href="#process">Process</a>
        <a href="#about">About</a>
        <a href="#faq">FAQ</a>
        <a href="#contact">Contact</a>
      </nav>
    </div>
  </header>
