<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Portfolio mahasiswa ITS dan ide platform Agentic AI.">
    <title>@yield('title', 'PBKK. | Portfolio ITS')</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Mono:wght@400;500&family=DM+Sans:wght@400;500;600;700&family=Playfair+Display:wght@700;800&display=swap" rel="stylesheet">
    <style>
        :root { --ink:#111a2e; --orange:#e78000; --cream:#fffdf9; --muted:#667085; --line:#e8e1d7; }
        * { box-sizing:border-box; }
        body { margin:0; color:var(--ink); background:var(--cream); font-family:'DM Sans',sans-serif; }
        .nav { min-height:56px; background:var(--ink); color:#fff; display:flex; align-items:center; justify-content:space-between; padding:0 5.5vw;position: sticky;top: 0;z-index: 1000; }
        .brand { color:#fff; font:700 21px 'Playfair Display',serif; text-decoration:none; }
        .brand::after { content:''; display:inline-block; margin-left:2px; width:5px; height:5px; background:var(--orange); border-radius:50%; }
        .menu { display:flex; align-items:center; gap:5px; }
        .menu a { color:#adbacd; text-decoration:none; padding:17px 16px 14px; font-size:14px; font-weight:600; border-bottom:2px solid transparent; }
        .menu a:hover,.menu a.active { color:var(--orange); background:#20283a; border-color:var(--orange); }
        .hero { min-height:530px; display:grid; grid-template-columns:1.35fr .65fr; align-items:center; gap:70px; padding:60px 9vw 76px 5.5vw; }
        .eyebrow { display:flex; align-items:center; gap:12px; color:#e48a28; font:500 12px 'DM Mono',monospace; letter-spacing:2px; }
        .eyebrow::after { content:''; height:1px; width:clamp(90px,20vw,330px); background:var(--line); }
        h1 { margin:25px 0 20px; font:800 clamp(45px,5vw,64px)/1.04 'Playfair Display',serif; letter-spacing:-1.5px; }
        h1 span { color:var(--orange); display:block; }
        .intro { max-width:610px; margin:0; color:var(--muted); font-size:18px; line-height:1.62; }
        .actions { margin-top:25px; display:flex; flex-wrap:wrap; gap:12px; }
        .button { display:inline-flex; align-items:center; justify-content:center; min-height:47px; padding:0 24px; border:1px solid var(--line); border-radius:4px; color:var(--ink); font-weight:700; font-size:14px; text-decoration:none; transition:.2s ease; }
        .button.primary { color:#fff; background:var(--ink); border-color:var(--ink); }
        .button:hover { transform:translateY(-2px); box-shadow:0 8px 18px #111a2e20; }
        .portrait-wrap { position:relative; margin:auto; width:min(100%,315px); padding:14px 14px 3px; background:#f8ecdd; border-radius:4px; transform:rotate(1deg); }
        .portrait { height:370px; overflow:hidden; border:4px solid #fff; background:linear-gradient(145deg,#b2dfd4,#4f8180 50%,#1d3642); box-shadow:0 13px 23px #111a2e1c; position:relative; }
        .portrait::before { content:''; position:absolute; left:50%; bottom:-30px; width:200px; height:260px; border-radius:45% 45% 0 0; transform:translateX(-50%); background:linear-gradient(90deg,#1e2d34,#34464a); }
        .portrait::after { content:''; position:absolute; left:50%; bottom:120px; width:126px; height:150px; transform:translateX(-50%); border-radius:48% 48% 45% 45%; background:radial-gradient(circle at 36% 45%,#222 0 6px,transparent 7px),radial-gradient(circle at 68% 45%,#222 0 6px,transparent 7px),linear-gradient(100deg,#ca8d68,#f4c6a2); box-shadow:0 -55px 0 14px #8a6048; }
        .role { position:absolute; right:-12px; bottom:-9px; margin:0; padding:12px 14px; color:#fff; background:var(--orange); border-radius:5px; font:700 13px 'DM Mono',monospace; box-shadow:0 8px 13px #8e560c4a; }
        .page { max-width:900px; margin:70px auto; padding:0 24px; }
        .card { padding:32px; background:#fff; border:1px solid var(--line); border-radius:10px; box-shadow:0 15px 45px #111a2e0b; }
        .card h1 { font-size:42px; margin-top:0; } .card p { color:var(--muted); line-height:1.7; }
        .result { margin-top:20px; padding:18px; background:#fff4e5; border-left:4px solid var(--orange); border-radius:4px; }
        .ipk-form { display:grid; gap:8px; max-width:430px; margin-top:24px; }
        .ipk-form label { margin-top:8px; font-size:14px; font-weight:700; }
        .ipk-form input { width:100%; min-height:46px; padding:10px 12px; border:1px solid var(--line); border-radius:4px; color:var(--ink); font:16px 'DM Sans',sans-serif; outline-color:var(--orange); }
        .ipk-form .button { width:max-content; margin-top:12px; cursor:pointer; }
        .error { color:#b42318; font-size:13px; }
        .footer {padding: 20px 5.5vw;color: #667085;background: #fff;border-top: 1px solid #e8e1d7;text-align: center;font-size: 14px;}   
        .agent-hero { max-width:1120px; min-height:340px; margin:0 auto; padding:76px 24px 55px; display:grid; grid-template-columns:1fr 230px; align-items:center; gap:70px; }
        .agent-hero h1 { margin-bottom:16px; } .agent-hero h1 span { color:var(--orange); }
        .agent-mark { width:190px; height:190px; display:grid; place-items:center; position:relative; border:1px solid #f0cf9c; border-radius:50%; color:var(--ink); background:radial-gradient(circle at 30% 25%,#fff6e8,#f9e3bd); box-shadow:0 20px 45px #e7800024; font:800 55px 'Playfair Display',serif; }
        .agent-mark::before,.agent-mark::after { content:''; position:absolute; inset:13px; border:1px dashed #e7800080; border-radius:50%; } .agent-mark::after { inset:34px; border-style:solid; border-color:#111a2e28; }
        .agent-mark span,.agent-mark i { position:relative; z-index:1; } .agent-mark i { position:absolute; right:20px; top:21px; color:var(--orange); font:26px 'DM Sans',sans-serif; }
        .agent-section { max-width:1120px; margin:0 auto; padding:55px 24px; border-top:1px solid var(--line); }
        .section-heading { max-width:620px; } .section-heading h2 { margin:14px 0 28px; font:800 clamp(30px,3.4vw,43px)/1.14 'Playfair Display',serif; letter-spacing:-.7px; }
        .purpose-grid,.feature-grid { display:grid; grid-template-columns:repeat(2,1fr); gap:16px; }
        .purpose-card,.feature-card { background:#fff; border:1px solid var(--line); border-radius:8px; padding:22px; }
        .purpose-card { display:flex; align-items:flex-start; gap:15px; } .purpose-card p,.feature-card p { margin:0; color:var(--muted); line-height:1.6; }
        .agent-icon { width:38px; height:38px; flex:none; display:grid; place-items:center; border-radius:50%; font:700 24px 'DM Sans',sans-serif; }
        .agent-icon.coral { color:#d7544a; background:#fff0ed; } .agent-icon.indigo { color:#4f46e5; background:#efefff; } .agent-icon.mustard { color:#b97700; background:#fff7d8; }
        .workflow-section { padding-bottom:84px; } .feature-card { position:relative; min-height:190px; padding-top:56px; } .step { position:absolute; top:18px; right:20px; color:var(--orange); font:500 13px 'DM Mono',monospace; }
        .feature-card h3 { margin:0 0 9px; font-size:18px; } .feature-card:hover { transform:translateY(-3px); box-shadow:0 14px 30px #111a2e12; transition:.2s ease; }
        @media (max-width:760px) { .nav { padding:0 24px; } .menu { gap:0; overflow-x:auto; } .menu a { padding:17px 10px 14px; white-space:nowrap; font-size:12px; } .hero { grid-template-columns:1fr; gap:38px; padding:55px 28px; } .hero-copy { order:2; } .portrait-wrap { order:1; width:240px; }
         .portrait { height:285px; } .intro { font-size:16px; } .agent-hero { grid-template-columns:1fr; gap:30px; padding-top:55px; } .agent-mark { width:140px; height:140px; font-size:42px; } .purpose-grid,.feature-grid { grid-template-columns:1fr; } .footer {padding: 16px 24px;font-size: 13px;} }
</head>
</style>
<body>
    @php($demoNrp = '5025241141')
    <nav class="nav" aria-label="Navigasi utama">
        <a class="brand" href="{{ route('home') }}">PBKK</a>
        <div class="menu">
            <a class="{{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">Beranda</a>
            <a class="{{ request()->routeIs('mahasiswa.*') ? 'active' : '' }}" href="{{ route('mahasiswa.nrp', ['nrp' => $demoNrp]) }}">Detail Profil</a>
            <a class="{{ request()->routeIs('agent.*') ? 'active' : '' }}" href="{{ route('agent.tema', ['tema' => 'job-seeker']) }}">Ide Platform Agentic AI</a>
            <a class="{{ request()->routeIs('ipk.*') ? 'active' : '' }}" href="{{ route('ipk.hitung', ['ip1' => '3.75', 'ip2' => '3.80']) }}">Kalkulator</a>
        </div>
    </nav>
    <main>@yield('content')</main>
    <footer class="footer">
        <div>© {{ date('Y') }} PBKK. All rights reserved.</div>
    </footer>
</body>
</html>