<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <header>
        <div class='logo'>
            <img src="{{ asset('images/gbi.png') }}">
        </div>   

        <nav>
            <ul>
                <li><a href="#">Beranda</a></li>
                <li><a href="#tentang-kami">Tentang Kami</a></li>
                <li><a href="#pelayanan">Pelayanan</a></li>
                <li><a href="{{ url('/gallery') }}">Gallery</a></li>
                <li><a href="{{ url('/kontak') }}">Kontak</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <div class="hero">
            <div class="hero-text" id="beranda">
                <h1 class="welcome">GBI KINGDOM OF GOD BANJARMASIN</h1>
                <h2 class="intro">Anda bukan orang asing di keluarga ini.</h2>
            </div>
        </div>
        <!-- Tentang Kami Section -->
        <section id="tentang-kami" class="about">
            <h2 class="section-title">Tentang Kami</h2>

        <!-- History (Text + Image) — placed first -->
            <div class="history">
                <div class="history-text">
                    <p>
                        Sinode GBI berdiri sejak tanggal 6 Oktober 1970 di kota Sukabumi, Jawa Barat, 
                        yang pada tahun 1972 telah diakui oleh Pemerintah dengan sah sebagai suatu 
                        <strong>KERKGENOOTSCHAP</strong>, yang berhak hidup dan berkembang di bumi Indonesia.
                    </p>
                    <a href="https://bppgbi.org/tentang-kami/" target="_blank" class="btn"> Read More →</a>
                </div>
                <div class="history-image">
                    <img src="{{ asset('images/pray2.png') }}" alt="GBI Kingdom of God Banjarmasin">
                </div>
            </div>
        </section>
        <section id="visi-misi">
            <div class="row">
                <div class="column">
                    <h2>VISI</h2>
                    <p>MENJADI SEPERTI KRISTUS SERTA TERCAPAINYA 10,000 JEMAAT GBI DI SELURUH DUNIA.</p>
                </div>
                <div class="column">    
                    <h2>MISI</h2>
                    <ul>
                        <li>MEMBERITAKAN KABAR KESELAMATAN KE SEGALA BANGSA</li>
                    </ul>
                </div>
            </div>
        </section>
        <section id="pelayanan" class="bg-section">
            <div class="bg-overlay"></div>
            <div class="section-text">
                <h2>Pelayanan</h2>
            </div>
        </section>

    </main>

    <script>
        const header = document.querySelector('header');

        window.addEventListener('scroll', () => {
            if (window.scrollY > 50) { // change 50 to the height where you want the effect
                header.classList.add('solid');
            } else {
                header.classList.remove('solid');
            }   
        });
    </script>

</body>
</html>

