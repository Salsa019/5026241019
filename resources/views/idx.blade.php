{{-- Tugas Pertemuan 8 - Pengaplikasian Laravel | Salsa Aulia Azzahra Havenanda | 5026241019 | PWEB (B) --}}
<!DOCTYPE html>
<html lang="id">

<head>
    <title>Salsa Aulia Azzahra Havenanda</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display:ital@0;1&family=DM+Sans:wght@300;400;500&display=swap" rel="stylesheet">
    <style>
        *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

        :root {
            --ink:     #140D1B;
            --muted:   #54475E;
            --cream:   #EFE6F2;
            --card-bg: #FFFFFF;
            --border:  #D0BDD5;
            --gold:    #B3698B;
            --rust:    #733B7B;
            --sage:    #8D70B8;
        }

        body {
            background-color: var(--cream);
            font-family: 'DM Sans', sans-serif;
            color: var(--ink);
            min-height: 100vh;
            padding: 3rem 1.5rem 5rem;
        }

        /* ── header ── */
        header {
            max-width: 860px;
            margin: 0 auto 4rem;
            display: flex;
            flex-direction: column;
            gap: .5rem;
        }
        .label {
            font-size: .7rem;
            letter-spacing: .2em;
            text-transform: uppercase;
            color: var(--muted);
            font-weight: 500;
        }
        header h1 {
            font-family: 'DM Serif Display', serif;
            font-size: clamp(2rem, 5vw, 3.2rem);
            line-height: 1.1;
            color: var(--ink);
        }
        header h1 em {
            font-style: italic;
            color: var(--gold);
        }
        .divider {
            margin-top: 1.2rem;
            width: 60px;
            height: 3px;
            background: linear-gradient(90deg, var(--gold), var(--rust));
            border-radius: 2px;
        }

        /* ── section (per-pertemuan) ── */
        .sessions {
            max-width: 860px;
            margin: 0 auto;
            display: flex;
            flex-direction: column;
            gap: 2.8rem;
        }

        .session-block {
            display: grid;
            grid-template-columns: 160px 1fr;
            gap: 0 2rem;
            align-items: start;
        }

        .session-label {
            padding-top: .3rem;
            position: relative;
        }
        .session-label::after {
            content: '';
            position: absolute;
            top: .85rem;
            right: -1rem;
            width: 1px;
            height: calc(100% + 2rem);
            background: var(--border);
        }
        .session-number {
            font-family: 'DM Serif Display', serif;
            font-size: 2.6rem;
            line-height: 1;
            color: var(--gold);
            opacity: .35;
        }
        .session-title {
            font-size: .72rem;
            letter-spacing: .15em;
            text-transform: uppercase;
            color: var(--muted);
            font-weight: 500;
            margin-top: .2rem;
        }

        /* ── cards inside each session ── */
        .cards {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(180px, 1fr));
            gap: 1rem;
        }

        .card {
            background: var(--card-bg);
            border: 1px solid var(--border);
            border-radius: 10px;
            padding: 1.2rem 1.1rem 1rem;
            display: flex;
            flex-direction: column;
            gap: .6rem;
            transition: box-shadow .2s, transform .2s, border-color .2s;
        }
        .card:hover {
            box-shadow: 0 6px 24px rgba(26,26,46,.09);
            transform: translateY(-2px);
            border-color: var(--gold);
        }

        .card-name {
            font-family: 'DM Serif Display', serif;
            font-size: 1.05rem;
            color: var(--ink);
            line-height: 1.2;
        }
        .card-desc {
            font-size: .78rem;
            color: var(--muted);
            line-height: 1.5;
            flex: 1;
        }

        /* multi-button cards */
        .btn-row {
            display: flex;
            gap: .5rem;
        }

        .btn {
            display: inline-block;
            text-decoration: none;
            font-size: .75rem;
            font-weight: 500;
            letter-spacing: .05em;
            padding: .42rem .9rem;
            border-radius: 6px;
            border: 1.5px solid var(--gold);
            color: var(--gold);
            background: transparent;
            transition: background .18s, color .18s;
            text-align: center;
            flex: 1;
        }
        .btn:hover {
            background: var(--gold);
            color: #fff;
        }
        .btn-full { width: 100%; }

        /* ETS badge */
        .ets-badge {
            display: inline-block;
            font-size: .65rem;
            letter-spacing: .12em;
            text-transform: uppercase;
            padding: .2rem .55rem;
            border-radius: 4px;
            background: var(--rust);
            color: #fff;
            font-weight: 600;
            align-self: flex-start;
        }

        /* responsive */
        @media (max-width: 600px) {
            .session-block {
                grid-template-columns: 1fr;
            }
            .session-label::after { display: none; }
            .session-number { font-size: 1.6rem; display: inline; margin-right: .5rem; }
        }
    </style>
</head>

<body>

    <header>
        <span class="label">PWEB B &nbsp;·&nbsp; 5026241019</span>
        <h1>Kumpulan Tugas<br><em>Salsa Aulia Azzahra Havenanda</em></h1>
        <div class="divider"></div>
    </header>

    <main class="sessions">

        {{-- Pertemuan 1 --}}
        <div class="session-block">
            <div class="session-label">
                <div class="session-number">01</div>
                <div class="session-title">Pertemuan 1</div>
            </div>
            <div class="cards">
                <div class="card">
                    <span class="card-name">Index</span>
                    <span class="card-desc">Tampilan utama dari salsa019.github.io</span>
                    <a href="{{ url('/index') }}" class="btn btn-full">Open</a>
                </div>
            </div>
        </div>

        {{-- Pertemuan 2 --}}
        <div class="session-block">
            <div class="session-label">
                <div class="session-number">02</div>
                <div class="session-title">Pertemuan 2</div>
            </div>
            <div class="cards">
                <div class="card">
                    <span class="card-name">Intro</span>
                    <span class="card-desc">File pembelajaran basic HTML pertemuan 2</span>
                    <a href="{{ url('/intro') }}" class="btn btn-full">Open</a>
                </div>
                <div class="card">
                    <span class="card-name">News &amp; News 1</span>
                    <span class="card-desc">Latihan membuat halaman berita</span>
                    <div class="btn-row">
                        <a href="{{ url('/news') }}" class="btn">News</a>
                        <a href="{{ url('/news1') }}" class="btn">News 1</a>
                    </div>
                </div>
            </div>
        </div>

        {{-- Pertemuan 3 --}}
        <div class="session-block">
            <div class="session-label">
                <div class="session-number">03</div>
                <div class="session-title">Pertemuan 3</div>
            </div>
            <div class="cards">
                <div class="card">
                    <span class="card-name">Contoh</span>
                    <span class="card-desc">Tugas pertemuan 3 contoh implementasi Tables</span>
                    <a href="{{ url('/tables') }}" class="btn btn-full">Open</a>
                </div>
                <div class="card">
                    <span class="card-name">Responsive</span>
                    <span class="card-desc">Implementasi layout responsif Bootstrap</span>
                    <a href="{{ url('/responsive') }}" class="btn btn-full">Open</a>
                </div>
                <div class="card">
                    <span class="card-name">Template</span>
                    <span class="card-desc">Template Bootstrap 4</span>
                    <a href="{{ url('/template') }}" class="btn btn-full">Open</a>
                </div>
            </div>
        </div>

        {{-- Pertemuan 4 --}}
        <div class="session-block">
            <div class="session-label">
                <div class="session-number">04</div>
                <div class="session-title">Pertemuan 4</div>
            </div>
            <div class="cards">
                <div class="card">
                    <span class="card-name">Pertemuan 4</span>
                    <span class="card-desc">File pembelajaran dan latihan pertemuan 4</span>
                    <a href="{{ url('/pertemuan4') }}" class="btn btn-full">Open</a>
                </div>
            </div>
        </div>

        {{-- Pertemuan 5 --}}
        <div class="session-block">
            <div class="session-label">
                <div class="session-number">05</div>
                <div class="session-title">Pertemuan 5</div>
            </div>
            <div class="cards">
                <div class="card">
                    <span class="card-name">Pertemuan 5</span>
                    <span class="card-desc">File pembelajaran dan latihan pertemuan 5</span>
                    <a href="{{ url('/pertemuan5') }}" class="btn btn-full">Open</a>
                </div>
                <div class="card">
                    <span class="card-name">Linktree</span>
                    <span class="card-desc">Tugas membuat halaman linktree pribadi</span>
                    <a href="{{ url('/linktree') }}" class="btn btn-full">Open</a>
                </div>
            </div>
        </div>

        {{-- ETS --}}
        <div class="session-block">
            <div class="session-label">
                <div class="session-number" style="color:var(--rust); opacity:.5;">ETS</div>
                <div class="session-title">Evaluasi Tengah Semester</div>
            </div>
            <div class="cards">
                <div class="card">
                    <span class="card-name">Tugas Pra ETS</span>
                    <span class="card-desc">Tugas makeover instagram sebagai syarat</span>
                    <a href="{{ url('/pra-ets') }}" class="btn btn-full">Open</a>
                </div>
                <div class="card">
                    <spam class="ets-badge">ETS</spam>
                    <span class="card-desc">File hasil Evaluasi Tengah Semester</span>
                    <div class="btn-row">
                        <a href="{{ url('/ets') }}" class="btn">ETS</a>
                        <a href="{{ url('https://youtu.be/LdS4Na7P0dY') }}" class="btn">Video</a>
                    </div>
                </div>
            </div>
        </div>

    </main>

</body>
</html>
