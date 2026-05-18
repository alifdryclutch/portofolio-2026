<!DOCTYPE HTML>
<html>
<head>
    <title>{{ $project->title }} - Laporan Project</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="{{ asset('css/main.css') }}" />
    <noscript>
        <link rel="stylesheet" href="{{ asset('css/noscript.css') }}" />
    </noscript>
    <style>
        .report-header {
            margin-bottom: 2rem;
            text-align: center;
        }
        .report-summary,
        .report-section {
            background: rgba(255, 255, 255, 0.95);
            border-radius: 1rem;
            padding: 2rem;
            margin-bottom: 1.5rem;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
        }
        .report-summary h2,
        .report-section h3 {
            margin-bottom: 1rem;
        }
        .tech-stack {
            display: flex;
            flex-wrap: wrap;
            gap: 0.75rem;
            margin-top: 1rem;
        }
        .tech-badge {
            background: #0066cc;
            color: #fff;
            padding: 0.5rem 1rem;
            border-radius: 999px;
            font-size: 0.9rem;
        }
        .flowchart-card {
            background: #081f4f;
            color: #fff;
            padding: 1.5rem;
            border-radius: 1rem;
            margin-top: 1rem;
        }
        .flowchart-card svg {
            width: 100%;
            height: auto;
            max-height: 420px;
        }
        .flowchart-box {
            fill: #1f4fad;
            stroke: #ffffff;
            stroke-width: 2px;
        }
        .flowchart-arrow {
            stroke: #ffffff;
            stroke-width: 3px;
            marker-end: url(#arrow);
        }
        .flowchart-text {
            font: 600 14px 'Arial';
            fill: #ffffff;
        }
        .report-actions {
            display: flex;
            flex-wrap: wrap;
            gap: 1rem;
            justify-content: center;
            margin-top: 1.5rem;
        }
        @media (max-width: 768px) {
            .report-actions {
                flex-direction: column;
            }
        }
    </style>
</head>
<body class="is-preload">
    <div id="page-wrapper">
        <header id="header">
            <h1 id="logo"><a href="{{ url('/') }}">Portfolio</a></h1>
            <nav id="nav">
                <ul>
                    <li><a href="{{ url('/') }}#portfolio">Portfolio</a></li>
                    <li><a href="{{ url('/') }}">Beranda</a></li>
                </ul>
            </nav>
        </header>

        <section id="main" class="wrapper style1">
            <div class="container">
                <header class="major report-header">
                    <h1>Laporan Project Akhir</h1>
                    <p>Halaman khusus laporan awal project dengan data dinamis langsung dari database.</p>
                </header>

                <div class="report-summary">
                    <h2>{{ $project->title }}</h2>
                    <p><strong>Solusi yang ditawarkan:</strong> {{ $project->description }}</p>
                </div>

                <div class="report-section">
                    <h3>Analisis Masalah & Kebutuhan Sistem</h3>
                    @if($project->analysis)
                        <p>{{ $project->analysis }}</p>
                    @else
                        <p>Analisis masalah dan kebutuhan sistem belum diisi. Silakan lengkapi di halaman admin proyek.</p>
                    @endif
                </div>

                <div class="report-section">
                    <h3>Arsitektur & Tech Stack</h3>
                    @if($project->architecture)
                        <p>{{ $project->architecture }}</p>
                    @else
                        <p>Deskripsi arsitektur belum diisi. Silakan lengkapi di halaman admin proyek.</p>
                    @endif

                    @if($project->tech_stack)
                        <div class="tech-stack">
                            @foreach(explode(',', $project->tech_stack) as $tech)
                                <span class="tech-badge">{{ trim($tech) }}</span>
                            @endforeach
                        </div>
                    @endif
                </div>

                <div class="report-section flowchart-card">
                    <h3>Flowchart Sistem</h3>
                    <svg viewBox="0 0 700 1500" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid meet">
                        <defs>
                            <marker id="arrow" markerWidth="10" markerHeight="10" refX="10" refY="5" orient="auto-start-reverse">
                                <path d="M0,0 L10,5 L0,10 Z" fill="#ffffff" />
                            </marker>
                        </defs>

                        <!-- Start -->
                        <rect x="140" y="20" width="420" height="60" rx="12" class="flowchart-box" />
                        <text x="400" y="58" text-anchor="middle" class="flowchart-text">Start</text>

                        <!-- Buka Website -->
                        <line x1="400" y1="80" x2="400" y2="120" class="flowchart-arrow" />
                        <rect x="140" y="120" width="420" height="60" rx="12" class="flowchart-box" />
                        <text x="400" y="158" text-anchor="middle" class="flowchart-text">Buka Website (Landing Page)</text>

                        <!-- Pilih Register? -->
                        <line x1="400" y1="180" x2="400" y2="240" class="flowchart-arrow" />
                        <rect x="140" y="240" width="420" height="60" rx="12" class="flowchart-box" />
                        <text x="400" y="278" text-anchor="middle" class="flowchart-text">Pilih: Register?</text>

                        <!-- Decision diamond for register -->
                        <line x1="400" y1="300" x2="400" y2="320" class="flowchart-arrow" />
                        <polygon points="400,360 460,400 400,440 340,400" fill="#163a78" stroke="#fff" stroke-width="2" />
                        <text x="400" y="402" text-anchor="middle" class="flowchart-text">Ya / Tidak</text>

                        <!-- Left branch: Register flow -->
                        <line x1="340" y1="400" x2="250" y2="440" class="flowchart-arrow" />
                        <rect x="60" y="440" width="300" height="60" rx="10" class="flowchart-box" />
                        <text x="210" y="478" text-anchor="middle" class="flowchart-text">Isi Data</text>

                        <line x1="210" y1="500" x2="210" y2="540" class="flowchart-arrow" />
                        <rect x="60" y="540" width="300" height="60" rx="10" class="flowchart-box" />
                        <text x="210" y="578" text-anchor="middle" class="flowchart-text">Simpan ke DB</text>

                        <line x1="360" y1="560" x2="400" y2="600" class="flowchart-arrow" />

                        <!-- Right and center converge to Login -->
                        <line x1="460" y1="400" x2="550" y2="440" class="flowchart-arrow" />
                        <rect x="200" y="600" width="300" height="60" rx="10" class="flowchart-box" />
                        <text x="350" y="638" text-anchor="middle" class="flowchart-text">Login (Email + Password)</text>

                        <line x1="350" y1="660" x2="350" y2="700" class="flowchart-arrow" />
                        <rect x="200" y="700" width="300" height="60" rx="10" class="flowchart-box" />
                        <text x="350" y="738" text-anchor="middle" class="flowchart-text">Validasi</text>

                        <line x1="350" y1="760" x2="350" y2="800" class="flowchart-arrow" />
                        <rect x="140" y="800" width="420" height="60" rx="12" class="flowchart-box" />
                        <text x="400" y="838" text-anchor="middle" class="flowchart-text">Dashboard Pengguna</text>

                        <line x1="400" y1="860" x2="400" y2="900" class="flowchart-arrow" />
                        <rect x="140" y="900" width="420" height="60" rx="12" class="flowchart-box" />
                        <text x="400" y="938" text-anchor="middle" class="flowchart-text">Lihat Statistik + Pilih Game</text>

                        <line x1="400" y1="960" x2="400" y2="1000" class="flowchart-arrow" />
                        <rect x="140" y="1000" width="420" height="60" rx="12" class="flowchart-box" />
                        <text x="400" y="1038" text-anchor="middle" class="flowchart-text">Main Game (Tic Tac Toe)</text>

                        <line x1="400" y1="1060" x2="400" y2="1100" class="flowchart-arrow" />
                        <rect x="140" y="1100" width="420" height="60" rx="12" class="flowchart-box" />
                        <text x="400" y="1138" text-anchor="middle" class="flowchart-text">Selesai Game → Simpan Skor ke Database</text>

                        <line x1="400" y1="1160" x2="400" y2="1200" class="flowchart-arrow" />
                        <rect x="140" y="1200" width="420" height="60" rx="12" class="flowchart-box" />
                        <text x="400" y="1238" text-anchor="middle" class="flowchart-text">Kembali ke Dashboard / Main Game Lagi</text>

                        <line x1="400" y1="1258" x2="400" y2="1296" class="flowchart-arrow" />
                        <rect x="140" y="1296" width="420" height="60" rx="12" class="flowchart-box" />
                        <text x="400" y="1334" text-anchor="middle" class="flowchart-text">Logout</text>

                        <line x1="400" y1="1354" x2="400" y2="1394" class="flowchart-arrow" />
                        <rect x="240" y="1394" width="220" height="60" rx="12" class="flowchart-box" />
                        <text x="350" y="1432" text-anchor="middle" class="flowchart-text">End</text>
                    </svg>
                </div>

                <div class="report-actions">
                    <a href="{{ url('/') }}" class="button">Kembali ke Beranda</a>
                    <a href="{{ route('portfolio.report', $project) }}" class="button primary">Refresh Laporan</a>
                </div>
            </div>
        </section>

        <footer id="footer">
            <ul class="icons">
                <li><a href="#" class="icon brands alt fa-github"><span class="label">GitHub</span></a></li>
                <li><a href="#" class="icon brands alt fa-linkedin-in"><span class="label">LinkedIn</span></a></li>
                <li><a href="#" class="icon solid alt fa-envelope"><span class="label">Email</span></a></li>
            </ul>
            <ul class="copyright">
                <li>&copy; 2026 Aliff. All rights reserved.</li>
            </ul>
        </footer>
    </div>

    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/jquery.scrolly.min.js') }}"></script>
    <script src="{{ asset('js/jquery.dropotron.min.js') }}"></script>
    <script src="{{ asset('js/jquery.scrollex.min.js') }}"></script>
    <script src="{{ asset('js/browser.min.js') }}"></script>
    <script src="{{ asset('js/breakpoints.min.js') }}"></script>
    <script src="{{ asset('js/util.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
</body>
</html>
