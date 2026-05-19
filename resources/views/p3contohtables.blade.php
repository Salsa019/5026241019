<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap 4 Example Tables - Tugas Pertemuan 3</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" type="text/css" href="contoh.css">
</head>

<body>
    <div class="page">

        <!--footer-->
        <div class="footer">Pemrograman Web / Tugas Pertemuan 3</div>

        <!-- header -->
        <div class="header-block">
            <div class="header-title"><span class="muted">Bootstrap 4</span><br>Tables</div>
            <div class="header-desc">Implementasi syntax tables dari dokumentasi
                <a href="https://www.w3schools.com/bootstrap4/bootstrap_tables.asp" target="_blank">W3Schools</a>
            </div>
        </div>


        <!--section 01 basic tables-->
        <div id="section-01" class="section-block">
            <div class="section-header">
                <div class="section-meta">
                    <span class="section-num">Section 01 / 09</span>
                    <span class="section-title">Basic Tables</span>
                </div>

            </div>
            <div class="sec-desc">
                Basic table Bootstrap 4 memiliki <em>light padding</em> (jarak dalam yang tipis) dan
                <em>horizontal dividers</em> (garis pemisah antar baris).
                Di class <code>.table</code>, <code>&lt;thead&gt;</code> untuk header atau kepala tabel,
                <code>&lt;th&gt;</code> untuk sel header,
                <code>&lt;tbody&gt;</code> untuk isi tabel (body),
                <code>&lt;tr&gt;</code> untuk baris, dan
                <code>&lt;td&gt;</code> untuk isi data pada tiap barisnya.
            </div>
        </div>

        <div class="code-block">
            <pre><span class="tag">&lt;table</span> <span class="attr">class</span>=<span class="val">"table"</span><span class="tag">&gt;</span>
  <span class="tag">&lt;thead&gt;</span>
    <span class="tag">&lt;tr&gt;</span>
      <span class="tag">&lt;th&gt;</span>Nama<span class="tag">&lt;/th&gt;</span>
      <span class="tag">&lt;th&gt;</span>NRP<span class="tag">&lt;/th&gt;</span>
      <span class="tag">&lt;th&gt;</span>Kelas<span class="tag">&lt;/th&gt;</span>
    <span class="tag">&lt;/tr&gt;</span>
  <span class="tag">&lt;/thead&gt;</span>
  <span class="tag">&lt;tbody&gt;</span>
    <span class="tag">&lt;tr&gt;</span>
      <span class="tag">&lt;td&gt;</span>Salsa<span class="tag">&lt;/td&gt;</span>
      <span class="tag">&lt;td&gt;</span>5026241019<span class="tag">&lt;/td&gt;</span>
      <span class="tag">&lt;td&gt;</span>B<span class="tag">&lt;/td&gt;</span>
    <span class="tag">&lt;/tr&gt;</span>
    <span class="tag">&lt;tr&gt;</span>
      <span class="tag">&lt;td&gt;</span>Aludra<span class="tag">&lt;/td&gt;</span>
      <span class="tag">&lt;td&gt;</span>5026241098<span class="tag">&lt;/td&gt;</span>
      <span class="tag">&lt;td&gt;</span>B<span class="tag">&lt;/td&gt;</span>
    <span class="tag">&lt;/tr&gt;</span>
    <span class="tag">&lt;tr&gt;</span>
      <span class="tag">&lt;td&gt;</span>Naufatuzaki<span class="tag">&lt;/td&gt;</span>
      <span class="tag">&lt;td&gt;</span>5026241032<span class="tag">&lt;/td&gt;</span>
      <span class="tag">&lt;td&gt;</span>D<span class="tag">&lt;/td&gt;</span>
    <span class="tag">&lt;/tr&gt;</span>
  <span class="tag">&lt;/tbody&gt;</span>
<span class="tag">&lt;/table&gt;</span></pre>
        </div>

        <div class="preview-label">Preview</div>
        <table class="table">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>NRP</th>
                    <th>Kelas</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Salsa</td>
                    <td>5026241019</td>
                    <td>B</td>
                </tr>
                <tr>
                    <td>Aludra</td>
                    <td>5026241098</td>
                    <td>B</td>
                </tr>
                <tr>
                    <td>Naufatuzaki</td>
                    <td>5026241032</td>
                    <td>D</td>
                </tr>
            </tbody>
        </table>

        <!---section 02 striped rows-->
        <div id="section-02" class="section-block">
            <div class="section-header">
                <div class="section-meta">
                    <span class="section-num">Section 02 / 09</span>
                    <span class="section-title">Striped Rows</span>
                </div>

            </div>
            <div class="sec-desc">
                Class <code>.table-striped</code> memberikan warna selang-seling (zebra stripes) pada
                baris-baris di dalam <code>&lt;tbody&gt;</code>, sehingga data lebih mudah dibaca.
            </div>
        </div>

        <div class="code-block">
            <pre><span class="tag">&lt;table</span> <span class="attr">class</span>=<span class="val">"table table-striped"</span><span class="tag">&gt;</span>
  <span class="tag">&lt;thead&gt;</span> ... <span class="tag">&lt;/thead&gt;</span>
  <span class="tag">&lt;tbody&gt;</span> ... <span class="tag">&lt;/tbody&gt;</span>
<span class="tag">&lt;/table&gt;</span></pre>
        </div>

        <div class="preview-label">Preview</div>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>NRP</th>
                    <th>Kelas</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Salsa</td>
                    <td>5026241019</td>
                    <td>B</td>
                </tr>
                <tr>
                    <td>Aludra</td>
                    <td>5026241098</td>
                    <td>B</td>
                </tr>
                <tr>
                    <td>Naufatuzaki</td>
                    <td>5026241032</td>
                    <td>D</td>
                </tr>
            </tbody>
        </table>

        <!--section 03 bordered table-->
        <div id="section-03" class="section-block">
            <div class="section-header">
                <div class="section-meta">
                    <span class="section-num">Section 03 / 09</span>
                    <span class="section-title">Bordered Table</span>
                </div>

            </div>
            <div class="sec-desc">
                Class <code>.table-bordered</code> menambahkan garis tepi di seluruh sisi tabel,
                termasuk setiap sel data (<code>&lt;td&gt;</code>) dan sel judul (<code>&lt;th&gt;</code>).
            </div>
        </div>

        <div class="code-block">
            <pre><span class="tag">&lt;table</span> <span class="attr">class</span>=<span class="val">"table table-bordered"</span><span class="tag">&gt;</span>
  <span class="tag">&lt;thead&gt;</span> ... <span class="tag">&lt;/thead&gt;</span>
  <span class="tag">&lt;tbody&gt;</span> ... <span class="tag">&lt;/tbody&gt;</span>
<span class="tag">&lt;/table&gt;</span></pre>
        </div>

        <div class="preview-label">Preview</div>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>NRP</th>
                    <th>Kelas</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Salsa</td>
                    <td>5026241019</td>
                    <td>B</td>
                </tr>
                <tr>
                    <td>Aludra</td>
                    <td>5026241098</td>
                    <td>B</td>
                </tr>
                <tr>
                    <td>Naufatuzaki</td>
                    <td>5026241032</td>
                    <td>D</td>
                </tr>
            </tbody>
        </table>

        <!--section 04 hover table-->
        <div id="section-04" class="section-block">
            <div class="section-header">
                <div class="section-meta">
                    <span class="section-num">Section 04 / 09</span>
                    <span class="section-title">Hover Table</span>
                </div>

            </div>
            <div class="sec-desc">
                Class <code>.table-hover</code> memberi efek perubahan warna latar belakang menjadi
                abu-abu muda saat kursor berada di atas sebuah baris di dalam <code>&lt;tbody&gt;</code>.
            </div>
        </div>

        <div class="code-block">
            <pre><span class="tag">&lt;table</span> <span class="attr">class</span>=<span class="val">"table table-hover"</span><span class="tag">&gt;</span>
  <span class="tag">&lt;thead&gt;</span> ... <span class="tag">&lt;/thead&gt;</span>
  <span class="tag">&lt;tbody&gt;</span> ... <span class="tag">&lt;/tbody&gt;</span>
<span class="tag">&lt;/table&gt;</span></pre>
        </div>

        <div class="preview-label">Preview</div>
        <p class="study-case-note">Arahkan kursor ke salah satu baris, warna latar belakangnya akan berubah menjadi
            abu-abu muda.</p>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>NRP</th>
                    <th>Kelas</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Salsa</td>
                    <td>5026241019</td>
                    <td>B</td>
                </tr>
                <tr>
                    <td>Aludra</td>
                    <td>5026241098</td>
                    <td>B</td>
                </tr>
                <tr>
                    <td>Naufatuzaki</td>
                    <td>5026241032</td>
                    <td>D</td>
                </tr>
            </tbody>
        </table>

        <!--section 05 black/dark table-->
        <div id="section-05" class="section-block">
            <div class="section-header">
                <div class="section-meta">
                    <span class="section-num">Section 05 / 09</span>
                    <span class="section-title">Black/Dark Table</span>
                </div>

            </div>
            <div class="sec-desc">
                Class <code>.table-dark</code> menambahkan latar belakang hitam pada tabel.
                Dapat dikombinasikan dengan <code>.table-striped</code> untuk baris selang-seling gelap,
                <code>.table-hover</code> untuk efek sorot, atau <code>.table-borderless</code>
                untuk tampilan tanpa garis sama sekali.
            </div>
        </div>

        <div class="code-block">
            <pre><span class="cmt">&lt;!-- Dark table --&gt;</span>
<span class="tag">&lt;table</span> <span class="attr">class</span>=<span class="val">"table table-dark"</span><span class="tag">&gt;</span> ... <span class="tag">&lt;/table&gt;</span>

<span class="cmt">&lt;!-- Dark + striped --&gt;</span>
<span class="tag">&lt;table</span> <span class="attr">class</span>=<span class="val">"table table-dark table-striped"</span><span class="tag">&gt;</span> ... <span class="tag">&lt;/table&gt;</span>

<span class="cmt">&lt;!-- Dark + hover --&gt;</span>
<span class="tag">&lt;table</span> <span class="attr">class</span>=<span class="val">"table table-dark table-hover"</span><span class="tag">&gt;</span> ... <span class="tag">&lt;/table&gt;</span>

<span class="cmt">&lt;!-- Borderless --&gt;</span>
<span class="tag">&lt;table</span> <span class="attr">class</span>=<span class="val">"table table-borderless"</span><span class="tag">&gt;</span> ... <span class="tag">&lt;/table&gt;</span></pre>
        </div>

        <div class="preview-label">Preview — Dark</div>
        <table class="table table-dark">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>NRP</th>
                    <th>Kelas</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Salsa</td>
                    <td>5026241019</td>
                    <td>B</td>
                </tr>
                <tr>
                    <td>Aludra</td>
                    <td>5026241098</td>
                    <td>B</td>
                </tr>
                <tr>
                    <td>Naufatuzaki</td>
                    <td>5026241032</td>
                    <td>D</td>
                </tr>
            </tbody>
        </table>

        <div class="preview-label" style="margin-top:0.75rem;">Preview — Dark + Striped</div>
        <table class="table table-dark table-striped">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>NRP</th>
                    <th>Kelas</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Salsa</td>
                    <td>5026241019</td>
                    <td>B</td>
                </tr>
                <tr>
                    <td>Aludra</td>
                    <td>5026241098</td>
                    <td>B</td>
                </tr>
                <tr>
                    <td>Naufatuzaki</td>
                    <td>5026241032</td>
                    <td>D</td>
                </tr>
            </tbody>
        </table>

        <div class="preview-label" style="margin-top:0.75rem;">Preview — Borderless</div>
        <table class="table table-borderless">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>NRP</th>
                    <th>Kelas</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Salsa</td>
                    <td>5026241019</td>
                    <td>B</td>
                </tr>
                <tr>
                    <td>Aludra</td>
                    <td>5026241098</td>
                    <td>B</td>
                </tr>
                <tr>
                    <td>Naufatuzaki</td>
                    <td>5026241032</td>
                    <td>D</td>
                </tr>
            </tbody>
        </table>

        <!--section 06 contextual classes-->
        <div id="section-06" class="section-block">
            <div class="section-header">
                <div class="section-meta">
                    <span class="section-num">Section 06 / 09</span>
                    <span class="section-title">Contextual Classes</span>
                </div>

            </div>
            <div class="sec-desc">
                Class kontekstual digunakan untuk memberikan makna visual pada data.
                Dapat diterapkan pada <code>&lt;table&gt;</code>, <code>&lt;tr&gt;</code>, atau <code>&lt;td&gt;</code>:
                <code>.table-primary</code> (biru), <code>.table-success</code> (hijau),
                <code>.table-danger</code> (merah), <code>.table-warning</code> (oranye),
                <code>.table-info</code> (biru muda), <code>.table-secondary</code> (abu-abu),
                <code>.table-light</code>, dan <code>.table-dark</code>.
            </div>
        </div>

        <div class="code-block">
            <pre><span class="tag">&lt;table</span> <span class="attr">class</span>=<span class="val">"table"</span><span class="tag">&gt;</span>
  <span class="tag">&lt;tbody&gt;</span>
    <span class="tag">&lt;tr</span> <span class="attr">class</span>=<span class="val">"table-primary"</span><span class="tag">&gt;</span> ... <span class="tag">&lt;/tr&gt;</span>
    <span class="tag">&lt;tr</span> <span class="attr">class</span>=<span class="val">"table-success"</span><span class="tag">&gt;</span> ... <span class="tag">&lt;/tr&gt;</span>
    <span class="tag">&lt;tr</span> <span class="attr">class</span>=<span class="val">"table-danger"</span><span class="tag">&gt;</span>  ... <span class="tag">&lt;/tr&gt;</span>
    <span class="tag">&lt;tr</span> <span class="attr">class</span>=<span class="val">"table-warning"</span><span class="tag">&gt;</span> ... <span class="tag">&lt;/tr&gt;</span>
    <span class="tag">&lt;tr</span> <span class="attr">class</span>=<span class="val">"table-info"</span><span class="tag">&gt;</span>    ... <span class="tag">&lt;/tr&gt;</span>
  <span class="tag">&lt;/tbody&gt;</span>
<span class="tag">&lt;/table&gt;</span></pre>
        </div>

        <div class="preview-label">Preview</div>
        <table class="table">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>NRP</th>
                    <th>Kelas</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <tr class="table-primary">
                    <td>Salsa</td>
                    <td>5026241019</td>
                    <td>B</td>
                    <td>Primary</td>
                </tr>
                <tr class="table-success">
                    <td>Aludra</td>
                    <td>5026241098</td>
                    <td>B</td>
                    <td>Success</td>
                </tr>
                <tr class="table-danger">
                    <td>Naufatuzaki</td>
                    <td>5026241032</td>
                    <td>D</td>
                    <td>Danger</td>
                </tr>
                <tr class="table-warning">
                    <td>Salsa</td>
                    <td>5026241019</td>
                    <td>B</td>
                    <td>Warning</td>
                </tr>
                <tr class="table-info">
                    <td>Aludra</td>
                    <td>5026241098</td>
                    <td>B</td>
                    <td>Info</td>
                </tr>
                <tr class="table-secondary">
                    <td>Naufatuzaki</td>
                    <td>5026241032</td>
                    <td>D</td>
                    <td>Secondary</td>
                </tr>
            </tbody>
        </table>

        <!--section 07 - table head colors-->
        <div id="section-07" class="section-block">
            <div class="section-header">
                <div class="section-meta">
                    <span class="section-num">Section 07 / 09</span>
                    <span class="section-title">Table Head Colors</span>
                </div>

            </div>
            <div class="sec-desc">
                Class <code>.thead-dark</code> menjadikan kepala tabel berwarna hitam dengan teks putih.
                Class <code>.thead-light</code> menjadikan kepala tabel berwarna abu-abu muda dengan teks gelap.
                Selain itu, class <code>.table-sm</code> dapat digunakan untuk menghemat ruang dengan
                memotong padding sel menjadi setengahnya.
            </div>
        </div>

        <div class="code-block">
            <pre><span class="cmt">&lt;!-- Dark head --&gt;</span>
<span class="tag">&lt;table</span> <span class="attr">class</span>=<span class="val">"table"</span><span class="tag">&gt;</span>
  <span class="tag">&lt;thead</span> <span class="attr">class</span>=<span class="val">"thead-dark"</span><span class="tag">&gt;</span> ... <span class="tag">&lt;/thead&gt;</span>
<span class="tag">&lt;/table&gt;</span>

<span class="cmt">&lt;!-- Light head --&gt;</span>
<span class="tag">&lt;table</span> <span class="attr">class</span>=<span class="val">"table"</span><span class="tag">&gt;</span>
  <span class="tag">&lt;thead</span> <span class="attr">class</span>=<span class="val">"thead-light"</span><span class="tag">&gt;</span> ... <span class="tag">&lt;/thead&gt;</span>
<span class="tag">&lt;/table&gt;</span>

<span class="cmt">&lt;!-- Small table --&gt;</span>
<span class="tag">&lt;table</span> <span class="attr">class</span>=<span class="val">"table table-sm"</span><span class="tag">&gt;</span> ... <span class="tag">&lt;/table&gt;</span></pre>
        </div>

        <div class="preview-label">Preview — thead-dark</div>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th>Nama</th>
                    <th>NRP</th>
                    <th>Kelas</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Salsa</td>
                    <td>5026241019</td>
                    <td>B</td>
                </tr>
                <tr>
                    <td>Aludra</td>
                    <td>5026241098</td>
                    <td>B</td>
                </tr>
                <tr>
                    <td>Naufatuzaki</td>
                    <td>5026241032</td>
                    <td>D</td>
                </tr>
            </tbody>
        </table>

        <div class="preview-label" style="margin-top:0.75rem;">Preview — thead-light</div>
        <table class="table">
            <thead class="thead-light">
                <tr>
                    <th>Nama</th>
                    <th>NRP</th>
                    <th>Kelas</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Salsa</td>
                    <td>5026241019</td>
                    <td>B</td>
                </tr>
                <tr>
                    <td>Aludra</td>
                    <td>5026241098</td>
                    <td>B</td>
                </tr>
                <tr>
                    <td>Naufatuzaki</td>
                    <td>5026241032</td>
                    <td>D</td>
                </tr>
            </tbody>
        </table>

        <div class="preview-label" style="margin-top:0.75rem;">Preview — table-sm</div>
        <table class="table table-sm">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>NRP</th>
                    <th>Kelas</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Salsa</td>
                    <td>5026241019</td>
                    <td>B</td>
                </tr>
                <tr>
                    <td>Aludra</td>
                    <td>5026241098</td>
                    <td>B</td>
                </tr>
                <tr>
                    <td>Naufatuzaki</td>
                    <td>5026241032</td>
                    <td>D</td>
                </tr>
            </tbody>
        </table>

        <!--section 08 - responsive tables-->
        <div id="section-08" class="section-block">
            <div class="section-header">
                <div class="section-meta">
                    <span class="section-num">Section 08 / 09</span>
                    <span class="section-title">Responsive Tables</span>
                </div>

            </div>
            <div class="sec-desc">
                Membungkus tabel dengan <code>.table-responsive</code> menambahkan scrollbar horizontal
                jika konten terlalu lebar. Tersedia varian breakpoint:
                <code>.table-responsive-sm</code> (aktif di &lt;576px),
                <code>.table-responsive-md</code> (aktif di &lt;768px),
                <code>.table-responsive-lg</code> (aktif di &lt;992px).
            </div>
        </div>

        <div class="code-block">
            <pre><span class="cmt">&lt;!-- Selalu responsive --&gt;</span>
<span class="tag">&lt;div</span> <span class="attr">class</span>=<span class="val">"table-responsive"</span><span class="tag">&gt;</span>
  <span class="tag">&lt;table</span> <span class="attr">class</span>=<span class="val">"table"</span><span class="tag">&gt;</span> ... <span class="tag">&lt;/table&gt;</span>
<span class="tag">&lt;/div&gt;</span>

<span class="cmt">&lt;!-- Responsive hanya di layar kecil (&lt;576px) --&gt;</span>
<span class="tag">&lt;div</span> <span class="attr">class</span>=<span class="val">"table-responsive-sm"</span><span class="tag">&gt;</span>
  <span class="tag">&lt;table</span> <span class="attr">class</span>=<span class="val">"table"</span><span class="tag">&gt;</span> ... <span class="tag">&lt;/table&gt;</span>
<span class="tag">&lt;/div&gt;</span></pre>
        </div>

        <div class="preview-label">Preview</div>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>NRP</th>
                        <th>Kelas</th>
                        <th>Prodi</th>
                        <th>Fakultas</th>
                        <th>Angkatan</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Salsa</td>
                        <td>5026241019</td>
                        <td>B</td>
                        <td>Sistem Informasi</td>
                        <td>FTEIC</td>
                        <td>2024</td>
                    </tr>
                    <tr>
                        <td>Aludra</td>
                        <td>5026241098</td>
                        <td>B</td>
                        <td>Sistem Informasi</td>
                        <td>FTEIC</td>
                        <td>2024</td>
                    </tr>
                    <tr>
                        <td>Naufatuzaki</td>
                        <td>5026241032</td>
                        <td>D</td>
                        <td>Sistem Informasi</td>
                        <td>FTEIC</td>
                        <td>2024</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!--study case-->
        <div id="section-09" class="section-block">
            <div class="section-header">
                <div class="section-meta">
                    <span class="section-num">Section 09 / 09</span>
                    <span class="section-title">Study Case</span>
                </div>

            </div>
            <div class="sec-desc">
                Penerapan seluruh fitur tabel Bootstrap 4 secara bersamaan dalam satu tabel
                <em>Daftar Nilai Mahasiswa</em>. Tabel ini menggabungkan:
                <code>.table-bordered</code> untuk garis tepi,
                <code>.table-hover</code> untuk efek sorot,
                <code>.table-sm</code> untuk memotong padding sel menjadi setengahnya,
                <code>.thead-dark</code> untuk kepala tabel gelap (dark header),
                kelas kontekstual (<code>.table-success</code>, <code>.table-warning</code>, <code>.table-danger</code>)
                untuk menandai status nilai, serta menggunakan <code>.table-responsive</code>
                agar responsive di layar kecil (dapat digeser).
            </div>
        </div>

        <div class="code-block">
            <pre><span class="tag">&lt;div</span> <span class="attr">class</span>=<span class="val">"table-responsive"</span><span class="tag">&gt;</span>
  <span class="tag">&lt;table</span> <span class="attr">class</span>=<span class="val">"table table-bordered table-hover table-sm"</span><span class="tag">&gt;</span>
    <span class="tag">&lt;thead</span> <span class="attr">class</span>=<span class="val">"thead-dark"</span><span class="tag">&gt;</span>
      <span class="tag">&lt;tr&gt;</span>
        <span class="tag">&lt;th&gt;</span>No<span class="tag">&lt;/th&gt;</span>
        <span class="tag">&lt;th&gt;</span>Nama<span class="tag">&lt;/th&gt;</span>
        <span class="tag">&lt;th&gt;</span>NRP<span class="tag">&lt;/th&gt;</span>
        <span class="tag">&lt;th&gt;</span>Kelas<span class="tag">&lt;/th&gt;</span>
        <span class="tag">&lt;th&gt;</span>Nilai<span class="tag">&lt;/th&gt;</span>
        <span class="tag">&lt;th&gt;</span>Grade<span class="tag">&lt;/th&gt;</span>
        <span class="tag">&lt;th&gt;</span>Status<span class="tag">&lt;/th&gt;</span>
      <span class="tag">&lt;/tr&gt;</span>
    <span class="tag">&lt;/thead&gt;</span>
    <span class="tag">&lt;tbody&gt;</span>
      <span class="cmt">&lt;!-- Lulus --&gt;</span>
      <span class="tag">&lt;tr</span> <span class="attr">class</span>=<span class="val">"table-success"</span><span class="tag">&gt;</span> ... <span class="tag">&lt;/tr&gt;</span>
      <span class="cmt">&lt;!-- Perlu perbaikan --&gt;</span>
      <span class="tag">&lt;tr</span> <span class="attr">class</span>=<span class="val">"table-warning"</span><span class="tag">&gt;</span> ... <span class="tag">&lt;/tr&gt;</span>
      <span class="cmt">&lt;!-- Tidak lulus --&gt;</span>
      <span class="tag">&lt;tr</span> <span class="attr">class</span>=<span class="val">"table-danger"</span><span class="tag">&gt;</span>  ... <span class="tag">&lt;/tr&gt;</span>
    <span class="tag">&lt;/tbody&gt;</span>
  <span class="tag">&lt;/table&gt;</span>
<span class="tag">&lt;/div&gt;</span></pre>
        </div>

        <div class="preview-label">Preview — Daftar Nilai Mahasiswa</div>
        <div class="table-responsive">
            <table class="table table-bordered table-hover table-sm">
                <thead class="thead-dark">
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>NRP</th>
                        <th>Kelas</th>
                        <th>Nilai</th>
                        <th>Grade</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="table-success">
                        <td>1</td>
                        <td>Salsa</td>
                        <td>5026241019</td>
                        <td>B</td>
                        <td>92</td>
                        <td>A</td>
                        <td>Lulus</td>
                    </tr>
                    <tr class="table-success">
                        <td>2</td>
                        <td>Aludra</td>
                        <td>5026241098</td>
                        <td>B</td>
                        <td>85</td>
                        <td>A-</td>
                        <td>Lulus</td>
                    </tr>
                    <tr class="table-success">
                        <td>3</td>
                        <td>Naufatuzaki</td>
                        <td>5026241032</td>
                        <td>D</td>
                        <td>78</td>
                        <td>B+</td>
                        <td>Lulus</td>
                    </tr>
                    <tr class="table-warning">
                        <td>4</td>
                        <td>Salsa</td>
                        <td>5026241019</td>
                        <td>B</td>
                        <td>62</td>
                        <td>C+</td>
                        <td>Perlu Perbaikan</td>
                    </tr>
                    <tr class="table-warning">
                        <td>5</td>
                        <td>Aludra</td>
                        <td>5026241098</td>
                        <td>B</td>
                        <td>55</td>
                        <td>C</td>
                        <td>Perlu Perbaikan</td>
                    </tr>
                    <tr class="table-danger">
                        <td>6</td>
                        <td>Naufatuzaki</td>
                        <td>5026241032</td>
                        <td>D</td>
                        <td>38</td>
                        <td>D</td>
                        <td>Tidak Lulus</td>
                    </tr>
                </tbody>
            </table>
            <p class="study-case-note">Arahkan kursor ke salah satu baris, warna latar belakangnya akan berubah menjadi
                lebih tua.</p>
        </div>

        <div class="page-footer">Bootstrap 4 Tables &mdash; Tugas Pertemuan 3</div>

    </div>
</body>

</html>
