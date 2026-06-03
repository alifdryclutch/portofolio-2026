<!DOCTYPE HTML>
<html>
<head>
    <title>Aliff Portfolio</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="{{ asset('css/main.css') }}" />
    <noscript>
        <link rel="stylesheet" href="{{ asset('css/noscript.css') }}" />
    </noscript>
</head>
<body class="is-preload landing">
    <div id="page-wrapper">
        <header id="header">
            <h1 id="logo"><a href="{{ url('/') }}">Portfolio</a></h1>
            <nav id="nav">
                <ul>
                    <li><a href="#portfolio">Portfolio</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </nav>
        </header>

        <section id="banner">
            <div class="content">
                <header>
                    <h2>{{ $profileUser->name }}</h2>
                    <p>Saya {{ $profileUser->name  }}, mahasiswa Program Studi Teknik Informatika yang memiliki ketertarikan pada pengembangan sistem informasi dan web development. Saya berfokus dalam mempelajari serta membangun aplikasi berbasis web dengan dukungan teknologi seperti Filament v3, Livewire, Blade, dan MariaDB.

</p>
                </header>
                <span class="image">
                    <img
                        src="{{ $profileUser && $profileUser->avatar_url ? asset('storage/' . $profileUser->avatar_url) : asset('images/pic01.jpg') }}"
                        alt="{{ $profileUser->name ?? 'Portfolio banner' }}"
                    />
                </span>
            </div>
            <a href="#portfolio" class="goto-next scrolly">Lihat Portfolio</a>
        </section>

        <section id="portfolio" class="wrapper style1 special fade-up">
            <div class="container">
                <header class="major">
                    <h2>Project Saya</h2>
                    <p>Kumpulan pekerjaan yang saya kerjakan.</p>
                </header>
                <div class="box alt">
                    <div class="row gtr-uniform">
                        @foreach($projects as $project)
                            <section class="col-4 col-6-medium col-12-xsmall">
                                <div style="text-align: center; margin-bottom: 1rem;">
                                    @if($project->image)
                                        <img 
                                            src="{{ asset('storage/' . $project->image) }}" 
                                            alt="{{ $project->title }}"
                                            style="width: 150px; height: 150px; border-radius: 50%; object-fit: cover; display: inline-block;"
                                        />
                                    @else
                                        <span class="icon solid alt major fa-code"></span>
                                    @endif
                                </div>
                                <h3>{{ $project->title }}</h3>
                                <p>{{ $project->description }}</p>
                                <ul class="actions">
                                    <li><a href="/portfolio/{{ $project->id }}" class="button">Lihat Detail</a></li>
                                </ul>
                            </section>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>

        <section id="contact" class="wrapper style2 special fade-up">
            <div class="container">
                <header>
                    <h2>Hubungi Saya</h2>
                    <p>Ingin bekerja sama? Isi form di bawah dan kirim pesan.</p>
                </header>

                @if(isset($contact))
                    <div class="contact-details" style="margin-bottom: 1.5rem; background: rgba(255,255,255,0.95); padding: 1rem; border-radius: 0.75rem;">
                        <p><strong>Nama:</strong> {{ $contact->name }}</p>
                        <p><strong>Email:</strong> {{ $contact->email }}</p>
                        <p><strong>Pesan:</strong> {{ $contact->message }}</p>
                    </div>
                @endif

                <form method="POST" action="{{ url('/contact') }}">
                    @csrf
                    <div class="fields">
                        <div class="field half">
                            <input type="text" name="name" id="name" placeholder="Nama" required />
                        </div>
                        <div class="field half">
                            <input type="email" name="email" id="email" placeholder="Email" required />
                        </div>
                        <div class="field">
                            <textarea name="message" id="message" placeholder="Pesan Anda" rows="4" required></textarea>
                        </div>
                    </div>

                    <ul class="actions special">
                        <li><button type="submit" class="button primary">Kirim Pesan</button></li>
                    </ul>
                </form>
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
