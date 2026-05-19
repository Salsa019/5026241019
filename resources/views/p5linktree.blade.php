<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>5026241019 Linktree NAKDI</title>

    <!-- Bootstrap 4.6 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Font Inter dari Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- buat javascript -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        function showme() {
            //alert("Halo, Selamat Siang!");

            Swal.fire({
                title: "Halo!",
                text: "selamat siang",
                icon: "success"
            });

            console.log("Ini baris 22, sudah sampai di sini");
            a = 22 + 10;
            console.log("Hasil Penjumlahan: " + a);
            c = 1 * 2 * 3;
            console.log("Hasil Perkalian: " + c);
        }

        function changeText() {
            const element = document.getElementById("intro");
            element.innerHTML = "Sistem Informasi ITS";
            // document.getElementById("intro").innerHTML = "Sistem Informasi ITS" //
        }

        function changeStyle() {
            const element = document.getElementById("tombol");
            element.style.color = "red";
            element.style.background = "yellow";
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


    <!-- style -->

    <style>
        body {
            background-color: #000000;
            font-family: 'Inter', sans-serif;
            font-weight: 500;
            color: #ffffff;
            overflow-x: hidden;
            padding-top: 5%;
        }

        .center-panel {
            box-shadow: 0 1.5rem 2rem rgba(0, 0, 0, 0.15);
            max-width: 36.25rem;
            margin: 0 auto;
            min-height: 100vh;
            border-radius: 1.5rem 1.5rem 0 0;
            background-size: cover;
            background-position: top center;
            overflow-x: hidden;
            background-color: #3c3b3a;
            padding-left: 1%;
            padding-right: 1%;
        }

        .topbar {
            padding: 0.875rem;
            top: 0;
            z-index: 2;
        }

        .btn-topbar {
            width: 2.5rem;
            height: 2.5rem;
            border-radius: 50%;
            border: 1px solid rgba(255, 255, 255, 0.4);
            background: rgba(255, 255, 255, 0.7);
            color: #000000;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            backdrop-filter: blur(0.5rem);
            transition: background 0.15s;
        }

        .btn-topbar:hover {
            background: #ffffff;
        }

        .foto-profil {
            width: 6rem;
            height: 6rem;
            border-radius: 50%;
            object-fit: cover;
        }

        .nama-profil {
            font-size: x-large;
            font-weight: 600;
            line-height: 1.3;
        }

        .bio-profil {
            font-size: large;
            font-weight: 500;
            line-height: 1.3;
            white-space: pre-line;
        }

        .btn-social {
            color: #ffffff;
            transition: transform 0.15s;
            padding: 0.5rem;
        }

        .btn-social:hover {
            transform: scale(1.075);
            color: #ffffff;
        }

        .link-featured {
            background: #000000;
            border-radius: 0.5rem;
            overflow: hidden;
            display: block;
            color: #ffffff;
            transition: opacity 0.15s;
        }

        .link-featured:hover {
            background: rgb(32, 32, 32);
            color: #ffffff;
            text-decoration: none;
        }

        .featured-thumb-wrapper {
            width: 100%;
            aspect-ratio: 16 / 9;
            padding: 0.875rem 0.875rem 0;
        }

        .featured-thumb-wrapper img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 0.25rem;
            display: block;
        }

        .featured-label {
            min-height: 4rem;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 0.75rem 3rem;
            font-size: large;
            font-weight: 500;
            line-height: 1.2;
            text-align: center;
        }

        .link-stack {
            background: #000000;
            border-radius: 0.5rem;
            display: block;
            text-decoration: none;
            color: #ffffff;
            transition: opacity 0.15s;
            position: relative;
        }

        .link-stack:hover {
            background: rgb(32, 32, 32);
            color: #ffffff;
            text-decoration: none;
        }

        .stack-inner {
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 4rem;
            padding: 0.75rem 4rem;
            position: relative;
        }

        .stack-thumb {
            position: absolute;
            left: 0.5rem;
            top: 0.5rem;
            bottom: 0.5rem;
            width: 3rem;
            border-radius: 0.25rem;
            overflow: hidden;
        }

        .stack-thumb img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .stack-label {
            font-size: large;
            font-weight: 500;
            line-height: 1.2;
            text-align: center;
            overflow: hidden;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
        }

        .btn-dot {
            position: absolute;
            right: 0.75rem;
            top: 50%;
            transform: translateY(-50%);
            width: 1.5rem;
            height: 1.5rem;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 0.75rem;
            color: #ffffff;
            opacity: 0.5;
            border: none;
            background: transparent;
            cursor: pointer;
            transition: opacity 0.15s, background 0.15s;
        }

        .btn-dot:hover {
            opacity: 1;
            background: rgba(0, 0, 0, 0.1);
        }

        .footer-links {
            font-size: x-small;
            line-height: 1.5;
            color: #ffffff;
        }

        .footer-links a,
        .footer-links button {
            font-size: x-small;
            color: #ffffff;
            text-decoration: none;
            background: none;
            border: none;
            cursor: pointer;
            padding: 0;
        }

        .footer-links a:hover,
        .footer-links button:hover {
            text-decoration: underline;
            color: #ffffff;
        }

        .footer-dot {
            padding: 0 0.25rem;
            color: rgba(255, 255, 255, 0.5);
        }
    </style>
</head>

<body>

    <div class="center-panel pb-4" responsive>

        <!-- topbar icon linktree dan share -->
        <div class="topbar d-flex justify-content-between align-items-center">
            <a href="https://linktr.ee" class="btn-topbar" aria-label="Linktree">
                <!-- ikon logo linktree diambil dari inspect website asli (pathnya sama) -->
                <svg fill="none" height="18" width="18" viewBox="0 0 28 28">
                    <path
                        d="m15.7603 6.829 4.6725-4.80317 2.712 2.77734-4.9012 4.67248h6.8944v3.85565h-6.9271l4.9339 4.7922-2.712 2.7229-6.6983-6.731-6.69829 6.731-2.712-2.712 4.93387-4.7923h-6.92703v-3.86645h6.89436l-4.9012-4.67248 2.712-2.77734 4.67249 4.80317v-6.829h4.0516zm-4.0516 12.0243h4.0516v9.1489h-4.0516z"
                        fill="currentColor" />
                </svg>
            </a>
            <button class="btn-topbar" aria-label="Share profile">
                <!-- ikon share diambil dari inspect website asli (pathnya sama) -->
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                    viewBox="0 0 256 256">
                    <path
                        d="M216,112v96a16,16,0,0,1-16,16H56a16,16,0,0,1-16-16V112A16,16,0,0,1,56,96H80a8,8,0,0,1,0,16H56v96H200V112H176a8,8,0,0,1,0-16h24A16,16,0,0,1,216,112ZM93.66,69.66,120,43.31V136a8,8,0,0,0,16,0V43.31l26.34,26.35a8,8,0,0,0,11.32-11.32l-40-40a8,8,0,0,0-11.32,0l-40,40A8,8,0,0,0,93.66,69.66Z" />
                </svg>
            </button>
        </div>
        <!-- /topbar -->

        <!-- profil -->
        <!-- kuberi id intro -->
        <div class="text-center px-4 pt-2 pb-3">
            <!-- foto profil diambil dari linktree inspect -->
            <img src="https://ugc.production.linktr.ee/c36f0756-7567-498e-b8c4-ce8d0e955518_output-557450568.jpeg?io=true&size=avatar-v3_0"
                alt="NAKDI" class="foto-profil mb-3" crossorigin="anonymous">
            <h1 id="intro" class="nama-profil mb-1">NAKDI</h1>
            <p class="bio-profil px-4">contact :: nakddidi@reticles.kr
                Artist | Art Director, YouTube Creator, Illustrator</p>
        </div>
        <!-- /profil -->

        <!-- sosial media -->
        <div class="d-flex justify-content-center flex-wrap mb-2">
            <!-- ikon Instagram diambil dari inspect website asli -->
            <a href="https://instagram.com/nakddidi" class="btn-social" target="_blank" aria-label="Instagram">
                <svg fill="currentColor" width="32" height="32" viewBox="0 0 24 24">
                    <path
                        d="M12 2C9.2912 2 8.94131 2 7.86907 2.05643C7.03985 2.07241 6.21934 2.22888 5.44244 2.51919C4.78781 2.77878 4.23476 3.11738 3.67043 3.68172C3.11738 4.23476 2.76749 4.78781 2.51919 5.45372C2.27088 6.08578 2.10158 6.80813 2.05643 7.88036C2.01129 8.94131 2 9.27991 2 12C2 14.7088 2 15.0474 2.05643 16.1196C2.10158 17.1919 2.28217 17.9255 2.51919 18.5576C2.77878 19.2122 3.11738 19.7652 3.67043 20.3296C4.23476 20.8826 4.78781 21.2325 5.44244 21.4808C6.08578 21.7291 6.80813 21.8984 7.86907 21.9436C8.94131 21.9887 9.27991 22 12 22C14.7088 22 15.0474 22 16.1196 21.9436C17.1806 21.8984 17.9142 21.7178 18.5463 21.4808C19.2137 21.2306 19.8184 20.8377 20.3183 20.3296C20.8826 19.7652 21.2212 19.2009 21.4695 18.5576C21.7178 17.9142 21.8871 17.1919 21.9436 16.1196C21.9887 15.0587 22 14.7201 22 12C22 9.2912 21.9887 8.9526 21.9436 7.88036C21.9225 7.05065 21.7622 6.23037 21.4695 5.45372C21.2189 4.78649 20.8261 4.18182 20.3183 3.68172C19.754 3.11738 19.2122 2.77878 18.5463 2.51919C17.7686 2.23315 16.9482 2.08051 16.1196 2.06772C15.0474 2.01129 14.7088 2 12 2ZM11.0971 3.80587H12C14.6637 3.80587 14.9797 3.80587 16.0406 3.8623C16.6724 3.8686 17.2985 3.98313 17.8916 4.2009C18.3657 4.38149 18.693 4.59594 19.0429 4.94582C19.3928 5.29571 19.6072 5.63431 19.7991 6.09706C19.9345 6.45824 20.0925 6.97743 20.1377 7.95937C20.1828 9.00903 20.1941 9.32506 20.1941 12C20.1941 14.6637 20.1941 14.9797 20.1377 16.0406C20.1314 16.6724 20.0169 17.2985 19.7991 17.8916C19.6185 18.3657 19.3928 18.693 19.0429 19.0429C18.7043 19.3928 18.3657 19.6072 17.8916 19.7878C17.2992 20.0094 16.6731 20.1278 16.0406 20.1377C14.9797 20.1828 14.6637 20.1941 12 20.1941C9.32506 20.1941 9.00903 20.1941 7.95937 20.1377C7.3238 20.1322 6.69388 20.0177 6.09706 19.7991C5.63431 19.6072 5.307 19.3928 4.94582 19.0429C4.60722 18.7043 4.38149 18.3657 4.2009 17.8916C3.98313 17.2985 3.8686 16.6724 3.8623 16.0406C3.80587 14.9797 3.79458 14.6637 3.79458 12C3.79458 9.32506 3.80587 9.00903 3.85102 7.95937C3.85602 7.32375 3.97057 6.69376 4.18962 6.09706C4.38149 5.63431 4.59594 5.307 4.94582 4.94582C5.29571 4.60722 5.62302 4.38149 6.09706 4.2009C6.69376 3.98185 7.32375 3.86731 7.95937 3.8623C8.87359 3.81716 9.23476 3.80587 11.0971 3.79458V3.80587ZM17.3386 5.46501C17.1815 5.46501 17.0259 5.49596 16.8808 5.55608C16.7356 5.6162 16.6037 5.70433 16.4926 5.81542C16.3815 5.92652 16.2934 6.05841 16.2333 6.20356C16.1732 6.34871 16.1422 6.50429 16.1422 6.6614C16.1422 6.81851 16.1732 6.97408 16.2333 7.11924C16.2934 7.26439 16.3815 7.39628 16.4926 7.50737C16.6037 7.61847 16.7356 7.70659 16.8808 7.76672C17.0259 7.82684 17.1815 7.85779 17.3386 7.85779C17.6559 7.85779 17.9602 7.73174 18.1846 7.50737C18.4089 7.28301 18.535 6.9787 18.535 6.6614C18.535 6.3441 18.4089 6.03979 18.1846 5.81542C17.9602 5.59106 17.6559 5.46501 17.3386 5.46501ZM12 6.86456C11.3256 6.86456 10.6578 6.99739 10.0348 7.25547C9.41169 7.51355 8.84556 7.89182 8.36869 8.36869C7.89182 8.84556 7.51355 9.41169 7.25547 10.0348C6.99739 10.6578 6.86456 11.3256 6.86456 12C6.86456 12.6744 6.99739 13.3422 7.25547 13.9652C7.51355 14.5883 7.89182 15.1544 8.36869 15.6313C8.84556 16.1082 9.41169 16.4864 10.0348 16.7445C10.6578 17.0026 11.3256 17.1354 12 17.1354C13.362 17.1354 14.6682 16.5944 15.6313 15.6313C16.5944 14.6682 17.1354 13.362 17.1354 12C17.1354 10.638 16.5944 9.33178 15.6313 8.36869C14.6682 7.40561 13.362 6.86456 12 6.86456ZM12 8.67043C12.4372 8.67043 12.8702 8.75655 13.2742 8.92388C13.6781 9.0912 14.0452 9.33646 14.3544 9.64564C14.6635 9.95482 14.9088 10.3219 15.0761 10.7258C15.2434 11.1298 15.3296 11.5628 15.3296 12C15.3296 12.4372 15.2434 12.8702 15.0761 13.2742C14.9088 13.6781 14.6635 14.0452 14.3544 14.3544C14.0452 14.6635 13.6781 14.9088 13.2742 15.0761C12.8702 15.2434 12.4372 15.3296 12 15.3296C11.1169 15.3296 10.2701 14.9788 9.64564 14.3544C9.02122 13.7299 8.67043 12.8831 8.67043 12C8.67043 11.1169 9.02122 10.2701 9.64564 9.64564C10.2701 9.02122 11.1169 8.67043 12 8.67043Z" />
                </svg>
            </a>
            <!-- ikon YouTube diambil dari inspect website asli -->
            <a href="https://www.youtube.com/@NAKDI" class="btn-social" target="_blank" aria-label="YouTube">
                <svg fill="currentColor" width="32" height="32" viewBox="0 0 24 24">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M19.8142 5.41679C20.6763 5.64906 21.3541 6.32675 21.5832 7.18581C22 8.74483 22 11.9997 22 11.9997C22 11.9997 22 15.2545 21.5832 16.8136C21.3509 17.6757 20.6733 18.3535 19.8142 18.5825C18.2551 18.9993 12 18.9993 12 18.9993C12 18.9993 5.74801 18.9993 4.18581 18.5825C3.32358 18.3502 2.64588 17.6726 2.4168 16.8136C2 15.2545 2 11.9997 2 11.9997C2 11.9997 2 8.74483 2.4168 7.18581C2.64907 6.32358 3.32676 5.64588 4.18581 5.41679C5.74801 5 12 5 12 5C12 5 18.2551 5 19.8142 5.41679ZM15.1961 11.9992L10.0004 14.9994V8.99883L15.1961 11.9992Z" />
                </svg>
            </a>
        </div>
        <!-- /sosial media -->



        <!-- links button -->
        <div class="px-3 d-flex flex-column" style="gap: 0.875rem;">

            <!-- link 1 portfolio -->
            <!-- kuberi id tombol -->
            <a id="tombol" href="https://nakdi.notion.site/NAKDI-f2ec98b5496444b1b4c0bb02faa8ef81?pvs=143"
                target="_blank" class="link-featured">
                <div class="featured-thumb-wrapper">
                    <!-- thumbnail diambil dari linktree inspect -->
                    <img src="https://ugc.production.linktr.ee/20572779-27fd-4b54-82ee-a8822244eb3a_.png?io=true&size=thumbnail-feature-v1_0"
                        alt="Portfolio" loading="eager">
                </div>
                <div class="featured-label position-relative">
                    Portfolio
                    <!-- tombol titik tiga -->
                    <button class="btn-dot" onclick="showme()">
                        <svg width="3" height="11" viewBox="0 0 3 11" fill="none">
                            <!-- path titik tiga diambil dari inspect website asli -->
                            <path fill="currentColor"
                                d="M1.33333 10.6667C0.966667 10.6667 0.652778 10.5361 0.391667 10.275C0.130556 10.0139 0 9.7 0 9.33333C0 8.96667 0.130556 8.65278 0.391667 8.39167C0.652778 8.13056 0.966667 8 1.33333 8C1.7 8 2.01389 8.13056 2.275 8.39167C2.53611 8.65278 2.66667 8.96667 2.66667 9.33333C2.66667 9.7 2.53611 10.0139 2.275 10.275C2.01389 10.5361 1.7 10.6667 1.33333 10.6667ZM1.33333 6.66667C0.966667 6.66667 0.652778 6.53611 0.391667 6.275C0.130556 6.01389 0 5.7 0 5.33333C0 4.96667 0.130556 4.65278 0.391667 4.39167C0.652778 4.13056 0.966667 4 1.33333 4C1.7 4 2.01389 4.13056 2.275 4.39167C2.53611 4.65278 2.66667 4.96667 2.66667 5.33333C2.66667 5.7 2.53611 6.01389 2.275 6.275C2.01389 6.53611 1.7 6.66667 1.33333 6.66667ZM1.33333 2.66667C0.966667 2.66667 0.652778 2.53611 0.391667 2.275C0.130556 2.01389 0 1.7 0 1.33333C0 0.966667 0.130556 0.652778 0.391667 0.391667C0.652778 0.130556 0.966667 0 1.33333 0C1.7 0 2.01389 0.130556 2.275 0.391667C2.53611 0.652778 2.66667 0.966667 2.66667 1.33333C2.66667 1.7 2.53611 2.01389 2.275 2.275C2.01389 2.53611 1.7 2.66667 1.33333 2.66667Z" />
                        </svg>
                    </button>
                </div>
            </a>

            <!-- link 2 youtube -->
            <a href="https://www.youtube.com/@NAKDI" target="_blank" class="link-stack">
                <div class="stack-inner">
                    <div class="stack-thumb" onclick="changeText()">
                        <img src="https://ugc.production.linktr.ee/50c65ffc-10b2-4b24-8378-b4546c569dec_QieGneRDJ7hcG2BZCYs9Q906gKfxxGJQwfs5nVOUD5HVoSGNi3wuC86lA90PCyf5Imvh0MV3-s88-c-k-c0x00ffffff-no-rj.jpeg?io=true&size=thumbnail-stack_v1_0"
                            alt="YOUTUBE" loading="eager">
                    </div>
                    <div class="stack-label">YOUTUBE</div>
                    <button class="btn-dot">
                        <svg width="3" height="11" viewBox="0 0 3 11" fill="none">
                            <path fill="currentColor"
                                d="M1.33333 10.6667C0.966667 10.6667 0.652778 10.5361 0.391667 10.275C0.130556 10.0139 0 9.7 0 9.33333C0 8.96667 0.130556 8.65278 0.391667 8.39167C0.652778 8.13056 0.966667 8 1.33333 8C1.7 8 2.01389 8.13056 2.275 8.39167C2.53611 8.65278 2.66667 8.96667 2.66667 9.33333C2.66667 9.7 2.53611 10.0139 2.275 10.275C2.01389 10.5361 1.7 10.6667 1.33333 10.6667ZM1.33333 6.66667C0.966667 6.66667 0.652778 6.53611 0.391667 6.275C0.130556 6.01389 0 5.7 0 5.33333C0 4.96667 0.130556 4.65278 0.391667 4.39167C0.652778 4.13056 0.966667 4 1.33333 4C1.7 4 2.01389 4.13056 2.275 4.39167C2.53611 4.65278 2.66667 4.96667 2.66667 5.33333C2.66667 5.7 2.53611 6.01389 2.275 6.275C2.01389 6.53611 1.7 6.66667 1.33333 6.66667ZM1.33333 2.66667C0.966667 2.66667 0.652778 2.53611 0.391667 2.275C0.130556 2.01389 0 1.7 0 1.33333C0 0.966667 0.130556 0.652778 0.391667 0.391667C0.652778 0.130556 0.966667 0 1.33333 0C1.7 0 2.01389 0.130556 2.275 0.391667C2.53611 0.652778 2.66667 0.966667 2.66667 1.33333C2.66667 1.7 2.53611 2.01389 2.275 2.275C2.01389 2.53611 1.7 2.66667 1.33333 2.66667Z" />
                        </svg>
                    </button>
                </div>
            </a>

            <!-- link 3 main brush -->
            <a href="https://pxplus.io/product/8256/detail" target="_blank" class="link-stack">
                <div class="stack-inner">
                    <div class="stack-thumb">
                        <img src="https://ugc.production.linktr.ee/91246b37-fc28-4d0e-a35d-9dfc269cdb8f_0821-Prokit-OG-Banner-Mockup-1-6e8092d6f2.png?io=true&size=thumbnail-stack_v1_0"
                            alt="Main Brush" loading="eager">
                    </div>
                    <div class="stack-label">Main Brush &lt; Secret Garden &gt;</div>
                    <button class="btn-dot">
                        <svg width="3" height="11" viewBox="0 0 3 11" fill="none">
                            <path fill="currentColor"
                                d="M1.33333 10.6667C0.966667 10.6667 0.652778 10.5361 0.391667 10.275C0.130556 10.0139 0 9.7 0 9.33333C0 8.96667 0.130556 8.65278 0.391667 8.39167C0.652778 8.13056 0.966667 8 1.33333 8C1.7 8 2.01389 8.13056 2.275 8.39167C2.53611 8.65278 2.66667 8.96667 2.66667 9.33333C2.66667 9.7 2.53611 10.0139 2.275 10.275C2.01389 10.5361 1.7 10.6667 1.33333 10.6667ZM1.33333 6.66667C0.966667 6.66667 0.652778 6.53611 0.391667 6.275C0.130556 6.01389 0 5.7 0 5.33333C0 4.96667 0.130556 4.65278 0.391667 4.39167C0.652778 4.13056 0.966667 4 1.33333 4C1.7 4 2.01389 4.13056 2.275 4.39167C2.53611 4.65278 2.66667 4.96667 2.66667 5.33333C2.66667 5.7 2.53611 6.01389 2.275 6.275C2.01389 6.53611 1.7 2.66667 1.33333 2.66667ZM1.33333 2.66667C0.966667 2.66667 0.652778 2.53611 0.391667 2.275C0.130556 2.01389 0 1.7 0 1.33333C0 0.966667 0.130556 0.652778 0.391667 0.391667C0.652778 0.130556 0.966667 0 1.33333 0C1.7 0 2.01389 0.130556 2.275 0.391667C2.53611 0.652778 2.66667 0.966667 2.66667 1.33333C2.66667 1.7 2.53611 2.01389 2.275 2.275C2.01389 2.53611 1.7 2.66667 1.33333 2.66667Z" />
                        </svg>
                    </button>
                </div>
            </a>

            <!-- link 4 3D손 소재 -->
            <a href="https://tumblbug.com/lineart_3d_hand" target="_blank" class="link-stack">
                <div class="stack-inner">
                    <div class="stack-thumb">
                        <img src="https://ugc.production.linktr.ee/df3e79c5-b17b-4454-9134-7c1dd5cbbe64_eyJidWNrZXQiOiJ0dW1ibGJ1Zy1pbWctcHJvZCIsImtleSI6ImNvdmVyLzUyZTJmZWYxLTg5OWYtNDU3Yi1iZTdlLTJiZjQyMmYz.jpeg?io=true&size=thumbnail-stack_v1_0"
                            alt="3D손 소재" loading="lazy">
                    </div>
                    <div class="stack-label">3D손 소재 ✨</div>
                    <button class="btn-dot">
                        <svg width="3" height="11" viewBox="0 0 3 11" fill="none">
                            <path fill="currentColor"
                                d="M1.33333 10.6667C0.966667 10.6667 0.652778 10.5361 0.391667 10.275C0.130556 10.0139 0 9.7 0 9.33333C0 8.96667 0.130556 8.65278 0.391667 8.39167C0.652778 8.13056 0.966667 8 1.33333 8C1.7 8 2.01389 8.13056 2.275 8.39167C2.53611 8.65278 2.66667 8.96667 2.66667 9.33333C2.66667 9.7 2.53611 10.0139 2.275 10.275C2.01389 10.5361 1.7 10.6667 1.33333 10.6667ZM1.33333 6.66667C0.966667 6.66667 0.652778 6.53611 0.391667 6.275C0.130556 6.01389 0 5.7 0 5.33333C0 4.96667 0.130556 4.65278 0.391667 4.39167C0.652778 4.13056 0.966667 4 1.33333 4C1.7 4 2.01389 4.13056 2.275 4.39167C2.53611 4.65278 2.66667 4.96667 2.66667 5.33333C2.66667 5.7 2.53611 6.01389 2.275 6.275C2.01389 6.53611 1.7 2.66667 1.33333 2.66667ZM1.33333 2.66667C0.966667 2.66667 0.652778 2.53611 0.391667 2.275C0.130556 2.01389 0 1.7 0 1.33333C0 0.966667 0.130556 0.652778 0.391667 0.391667C0.652778 0.130556 0.966667 0 1.33333 0C1.7 0 2.01389 0.130556 2.275 0.391667C2.53611 0.652778 2.66667 0.966667 2.66667 1.33333C2.66667 1.7 2.53611 2.01389 2.275 2.275C2.01389 2.53611 1.7 2.66667 1.33333 2.66667Z" />
                        </svg>
                    </button>
                </div>
            </a>

            <!-- link 5 goods shop -->
            <a href="https://marpple.shop/kr/nakdi" target="_blank" class="link-stack">
                <div class="stack-inner">
                    <div class="stack-thumb">
                        <img src="https://ugc.production.linktr.ee/2ec8881f-3b69-42e5-b0fd-48b1255e5aa0_868df2e463c8ef5e5d4eee73a94f65f050e684f81.png?io=true&size=thumbnail-stack_v1_0"
                            alt="GOODS SHOP" loading="lazy">
                    </div>
                    <div class="stack-label">GOODS SHOP</div>
                    <button class="btn-dot">
                        <svg width="3" height="11" viewBox="0 0 3 11" fill="none">
                            <path fill="currentColor"
                                d="M1.33333 10.6667C0.966667 10.6667 0.652778 10.5361 0.391667 10.275C0.130556 10.0139 0 9.7 0 9.33333C0 8.96667 0.130556 8.65278 0.391667 8.39167C0.652778 8.13056 0.966667 8 1.33333 8C1.7 8 2.01389 8.13056 2.275 8.39167C2.53611 8.65278 2.66667 8.96667 2.66667 9.33333C2.66667 9.7 2.53611 10.0139 2.275 10.275C2.01389 10.5361 1.7 10.6667 1.33333 10.6667ZM1.33333 6.66667C0.966667 6.66667 0.652778 6.53611 0.391667 6.275C0.130556 6.01389 0 5.7 0 5.33333C0 4.96667 0.130556 4.65278 0.391667 4.39167C0.652778 4.13056 0.966667 4 1.33333 4C1.7 4 2.01389 4.13056 2.275 4.39167C2.53611 4.65278 2.66667 4.96667 2.66667 5.33333C2.66667 5.7 2.53611 6.01389 2.275 6.275C2.01389 6.53611 1.7 2.66667 1.33333 2.66667ZM1.33333 2.66667C0.966667 2.66667 0.652778 2.53611 0.391667 2.275C0.130556 2.01389 0 1.7 0 1.33333C0 0.966667 0.130556 0.652778 0.391667 0.391667C0.652778 0.130556 0.966667 0 1.33333 0C1.7 0 2.01389 0.130556 2.275 0.391667C2.53611 0.652778 2.66667 0.966667 2.66667 1.33333C2.66667 1.7 2.53611 2.01389 2.275 2.275C2.01389 2.53611 1.7 2.66667 1.33333 2.66667Z" />
                        </svg>
                    </button>
                </div>
            </a>

            <!-- link 6 secret garden drink brush -->
            <a href="https://pxplus.io/product/8552/detail" target="_blank" class="link-stack">
                <div class="stack-inner">
                    <div class="stack-thumb">
                        <img src="https://ugc.production.linktr.ee/c1c7c0c8-ac22-40ac-94ad-10389e924d88_Prokit-OG-Banner-Mockup-v02-1-dff072e6ed.png?io=true&size=thumbnail-stack_v1_0"
                            alt="Secret Garden Drink Brush" loading="lazy">
                    </div>
                    <div class="stack-label">&lt;Secret Garden&gt; Drink Brush</div>
                    <button class="btn-dot" onclick="event.preventDefault()">
                        <svg width="3" height="11" viewBox="0 0 3 11" fill="none">
                            <path fill="currentColor"
                                d="M1.33333 10.6667C0.966667 10.6667 0.652778 10.5361 0.391667 10.275C0.130556 10.0139 0 9.7 0 9.33333C0 8.96667 0.130556 8.65278 0.391667 8.39167C0.652778 8.13056 0.966667 8 1.33333 8C1.7 8 2.01389 8.13056 2.275 8.39167C2.53611 8.65278 2.66667 8.96667 2.66667 9.33333C2.66667 9.7 2.53611 10.0139 2.275 10.275C2.01389 10.5361 1.7 10.6667 1.33333 10.6667ZM1.33333 6.66667C0.966667 6.66667 0.652778 6.53611 0.391667 6.275C0.130556 6.01389 0 5.7 0 5.33333C0 4.96667 0.130556 4.65278 0.391667 4.39167C0.652778 4.13056 0.966667 4 1.33333 4C1.7 4 2.01389 4.13056 2.275 4.39167C2.53611 4.65278 2.66667 4.96667 2.66667 5.33333C2.66667 5.7 2.53611 6.01389 2.275 6.275C2.01389 6.53611 1.7 2.66667 1.33333 2.66667ZM1.33333 2.66667C0.966667 2.66667 0.652778 2.53611 0.391667 2.275C0.130556 2.01389 0 1.7 0 1.33333C0 0.966667 0.130556 0.652778 0.391667 0.391667C0.652778 0.130556 0.966667 0 1.33333 0C1.7 0 2.01389 0.130556 2.275 0.391667C2.53611 0.652778 2.66667 0.966667 2.66667 1.33333C2.66667 1.7 2.53611 2.01389 2.275 2.275C2.01389 2.53611 1.7 2.66667 1.33333 2.66667Z" />
                        </svg>
                    </button>
                </div>
            </a>

            <!-- link 7 seminar brush -->
            <a href="https://www.postype.com/@ddidiru/post/20466606" target="_blank" class="link-stack">
                <div class="stack-inner">
                    <div class="stack-thumb">
                        <img src="https://ugc.production.linktr.ee/742e74d4-da68-4870-914b-12afdcd4452c_97b90f14657467814243536900.png?io=true&size=thumbnail-stack_v1_0"
                            alt="Seminar Brush" loading="lazy">
                    </div>
                    <div class="stack-label">Seminar Brush</div>
                    <button class="btn-dot" onclick="event.preventDefault()">
                        <svg width="3" height="11" viewBox="0 0 3 11" fill="none">
                            <path fill="currentColor"
                                d="M1.33333 10.6667C0.966667 10.6667 0.652778 10.5361 0.391667 10.275C0.130556 10.0139 0 9.7 0 9.33333C0 8.96667 0.130556 8.65278 0.391667 8.39167C0.652778 8.13056 0.966667 8 1.33333 8C1.7 8 2.01389 8.13056 2.275 8.39167C2.53611 8.65278 2.66667 8.96667 2.66667 9.33333C2.66667 9.7 2.53611 10.0139 2.275 10.275C2.01389 10.5361 1.7 10.6667 1.33333 10.6667ZM1.33333 6.66667C0.966667 6.66667 0.652778 6.53611 0.391667 6.275C0.130556 6.01389 0 5.7 0 5.33333C0 4.96667 0.130556 4.65278 0.391667 4.39167C0.652778 4.13056 0.966667 4 1.33333 4C1.7 4 2.01389 4.13056 2.275 4.39167C2.53611 4.65278 2.66667 4.96667 2.66667 5.33333C2.66667 5.7 2.53611 6.01389 2.275 6.275C2.01389 6.53611 1.7 2.66667 1.33333 2.66667ZM1.33333 2.66667C0.966667 2.66667 0.652778 2.53611 0.391667 2.275C0.130556 2.01389 0 1.7 0 1.33333C0 0.966667 0.130556 0.652778 0.391667 0.391667C0.652778 0.130556 0.966667 0 1.33333 0C1.7 0 2.01389 0.130556 2.275 0.391667C2.53611 0.652778 2.66667 0.966667 2.66667 1.33333C2.66667 1.7 2.53611 2.01389 2.275 2.275C2.01389 2.53611 1.7 2.66667 1.33333 2.66667Z" />
                        </svg>
                    </button>
                </div>
            </a>

            <!--button javascript-->
            <button class="btn btn-primary" onclick="showme();">Show Me</button>
            <button class="btn btn-primary" onclick="changeText();">Change Text</button>
            <button class="btn btn-primary" onclick="changeStyle();">Change Style</button>


        </div>
        <!-- /links -->

        <!-- footer -->
        <div class="text-center mt-5 pb-4">
            <div class="footer-links">
                <button>Cookie Preferences</button>
                <span class="footer-dot">•</span>
                <a href="https://linktr.ee/s/about/trust-center/report/" target="_blank">Report</a>
                <span class="footer-dot">•</span>
                <a href="https://linktr.ee/privacy" target="_blank">Privacy</a>
                <span class="footer-dot">•</span>
                <button>Explore</button>
            </div>
        </div>
        <!-- /footer -->


    </div>

</body>

</html>
