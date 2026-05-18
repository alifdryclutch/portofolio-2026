<!DOCTYPE HTML>
<html>
<head>
    <title>{{ $project->title }} - Portfolio</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="{{ asset('css/main.css') }}" />
    <noscript>
        <link rel="stylesheet" href="{{ asset('css/noscript.css') }}" />
    </noscript>
    <style>
        .project-image-container {
            text-align: center;
            margin: 2rem 0;
        }
        .project-image-circle {
            width: 300px;
            height: 300px;
            border-radius: 50%;
            object-fit: cover;
            margin: 0 auto;
            display: block;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .project-details {
            margin: 2rem 0;
        }
        .tech-stack {
            display: flex;
            flex-wrap: wrap;
            gap: 0.5rem;
            margin: 1rem 0;
        }
        .tech-badge {
            background: #0066cc;
            color: white;
            padding: 0.25rem 0.75rem;
            border-radius: 20px;
            font-size: 0.875rem;
        }
    </style>
</head>
<body class="is-preload">
    <div id="page-wrapper">
        <header id="header">
            <h1 id="logo"><a href="{{ url('/') }}">Portfolio</a></h1>
            <nav id="nav">
                <ul>
                    <li><a href="{{ url('/') }}#portfolio">Kembali</a></li>
                </ul>
            </nav>
        </header>

        <section id="main" class="wrapper style1">
            <div class="container">
                <header class="major">
                    <h1>{{ $project->title }}</h1>
                </header>

                <div class="project-image-container">
                    @if($project->image)
                        <img 
                            src="{{ asset('storage/' . $project->image) }}" 
                            alt="{{ $project->title }}"
                            class="project-image-circle"
                        />
                    @else
                        <img 
                            src="{{ asset('images/pic01.jpg') }}" 
                            alt="{{ $project->title }}"
                            class="project-image-circle"
                        />
                    @endif
                </div>

                <article class="project-details">
                    <h2>Deskripsi</h2>
                    <p>{{ $project->description }}</p>

                    @if($project->tech_stack)
                        <h3>Tech Stack</h3>
                        <div class="tech-stack">
                            @foreach(explode(',', $project->tech_stack) as $tech)
                                <span class="tech-badge">{{ trim($tech) }}</span>
                            @endforeach
                        </div>
                    @endif

                    @if($project->analysis)
                        <h3>Analisis</h3>
                        <p>{{ $project->analysis }}</p>
                    @endif

                    @if($project->architecture)
                        <h3>Arsitektur</h3>
                        <p>{{ $project->architecture }}</p>
                    @endif
                </article>

                <ul class="actions">
                    <li><a href="{{ url('/') }}" class="button">Kembali ke Portfolio</a></li>
                    <li><a href="{{ route('portfolio.report', $project) }}" class="button primary">Lihat Laporan Project</a></li>
                </ul>
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