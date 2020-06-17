<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Fast Learning Centre</title>
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.12.1/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/style_custom.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/js/sal.js/dist/sal.css') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    
    <!-- Sweet Alert -->
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.min.css"> --}}
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.all.min.js"></script> --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
</head>

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg bg-putih text-uppercase fixed-top text-biru" id="mainNav">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">
            <img class="logo-img" src="assets/img/logo.png" alt=""> Otten32Run
        </a>
        <button class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">Menu <i class="fas fa-bars"></i></button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-1 px-0 px-lg-2 rounded js-scroll-trigger" href="#tentang">Tentang</a></li>
                <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-1 px-0 px-lg-2 rounded js-scroll-trigger" href="#peraturan">Peraturan</a></li>
                <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-1 px-0 px-lg-2 rounded js-scroll-trigger" href="#pengumuman">Pengumuman</a></li>
                <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-1 px-0 px-lg-2 rounded js-scroll-trigger" href="#kontak">Kontak</a></li>
                <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-1 px-0 px-lg-2 rounded js-scroll-trigger" href="#login" data-toggle="modal" data-target="#loginModal">Login</a></li>
                <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-1 px-0 px-lg-2 rounded js-scroll-trigger" href="#register" data-toggle="modal" data-target="#registerModal">Register</a></li>
            </ul>
        </div>
    </nav>
    <!-- Masthead-->
    <header class="masthead bg-primary text-white text-center">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="assets/img/banner.png" alt="">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="assets/img/register.png" alt="Second slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </header>
    <!-- Tentang Section-->
    <section class="page-section" id="tentang">
        <div class="container">
            <!-- Portfolio Section Heading-->
            <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0" data-sal="slide-down" data-sal-duration="800">Otten32Run</h2>
            <!-- Icon Divider-->
            <div class="divider-custom">
                <div class="divider-custom-line"></div>
            </div>
            <h6 class="text-center" data-sal="fade" data-sal-duration="500">Otten 32 Run & Festival Musik dan Kesehatan adalah lomba lari yang digagas oleh<br>FAST (Forum Alumni Satgas Poltekkes Kemenkes Bandung) Learning Centre Bandung</h6>
            <div class="divider-custom">
                <div class="divider-custom-line"></div>
            </div>
            <div data-sal="slide-right" data-sal-duration="500">
                <p class="text-center"><b>Tujuan</b></p>
                <ol>
                    <li> Meningkatkan kepedulian masyarakat terhadap pentingnya kesehatan. </li>
                    <li> Meningkatkan kesadaran masyarakat untuk gemar berolahraga dalam upaya mengkampanyekan Pola Hidup Sehat melalui kegiatan lari dan Festival Kesehatan. </li>
                    <li> Membangun hubungan yang harmonis dan menjalin silatuhrahmi antar mahasiswa/i aktif, alumni, dan civitas akademika Poltekkes Kemenkes Bandung, perguruan tinggi lainnya, komunitas lari, perusahaan dan industri serta masyarakat umum. </li>
                    <li> Meningkatkan rasa sportivitas antar individu. </li>
                    <li> Menjadikan event Otten32 Run ini sebagai tradisi dan kegiatan tahunan FAST Learning Centre. </li>
                </ol>
                <span id="dots2"></span>
            </div>

            <span id="tentangmore">
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                </div>
                <p class="text-center"><b>Konsep Acara</b></p>
                <ol>
                    <li>Lokasi Penyelenggaraan<br> Otten 32 Run akan dilaksanakan di Jl. Dr.Otten No.32 (Kampus Keperawatan Poltekkes Kemenkes Bandung)</li>
                    <li>Target Peserta<br> 500 peserta terdiri dari siswa/i Sekolah Menengah Keatas, mahasiswa/i aktif, alumni, civitas Politekkes Kemenkes Bandung dan masyarakat umum.</li>
                    <li> Rancangan Kegiatan <br>
                        <ul type="disc">
                            <li>Tahap Pendaftaran<br> 29 Januari 2020<br> Peserta dapat mengisi formulir pendaftaran yang dapat diunggah di web Otten 32 Run dan mengikuti petunjuk yang tertera pada web. Pembayaran melalui transfer ke rekening BNI a.n Lulu Nurlia Kusfani 0456324335 lalu melakukan konfirmasi kepada narahubung yang tertera. </li>
                            <li> Tahap pelaksanaan <br> Kegaiatan akan dilaksanakan tanggal 5 april 2020.<br> Setelah kegiatan dibuka, start akan dimulai pada pukul 05.30 WIB dan ditargetkan finish pada pukul 08.00 WIB. Water point dan Medis terletak pada jarak 3 KM dan finish. Setelah melaksanakan kegiatan berlari, peserta dapat menonton hiburan yang ditampilkan oleh guest star dan menikmati bazaar setelah pembagian hadiah berlangsung. Selain itu, peserta juga dapat melakukan cek kesehatan yang terdiri dari pemeriksaan tekanan darah, Gula Darah, Asam Urat, dan Kolesterol di booth kesehatan. </li>
                        </ul>
                    </li>
                </ol>
            </span>
            <div class="text-center" data-sal="slide-up" data-sal-duration="500">

                <button onclick="openTentang()" id="openTn" class="btn btn-kuning text-center">Read more...</button>
            </div>


    </section>
    <!-- Peraturan Section-->
    <section class="page-section bg-primary text-white mb-0" id="peraturan">
        <div class="container">
            <!-- About Section Heading-->
            <h2 class="page-section-heading text-center text-uppercase text-white" data-sal="slide-down" data-sal-duration="800">Peraturan</h2>
            <!-- Icon Divider-->
            <div class="divider-custom">
                <div class="divider-custom-line"></div>
            </div>
            <!-- About Section Content-->
            <div class="row" data-sal="slide-up" data-sal-duration="500">
                <label><b>Peraturan Umum </b></label><br>
                <ol>
                    <li>Peserta memiliki identitas / tanda pengenal seperti (KTP/SIM/Kartu Pelajar/PASSPOR).</li>
                    <li>Peserta adalah Warga Negara Indonesia dan atau Warga Negara Asing.</li>
                    <li>Pendaftaran Peserta tidak dapat dialihnamakan dan bersifat final serta menerima sepenuhnya atas seluruh peraturan dan ketentuan yang berlaku. Barangsiapa memberikan nomor lomba (BIB) nya kepada pihak/peserta lain akan didiskualifikasi dari perlombaan.</li>
                    <li>Penyelesaian formulir pendaftaran online menegaskan persetujuan peserta untuk mematuhi seluruh aturan dan regulasi.</li>
                    <li>Konfirmasi pendaftaran lomba akan diberikan setelah melengkapi pendaftaran dan pembayaran.</li>
                    <li>Pihak penyelenggara tidak melayani pembatalan dan atau pengembalian biaya pendaftaran.</li>
                    <li>Pihak penyelenggara memiliki hak untuk menginformasikan kuota pendaftar jika kuota sudah terpenuhi.</li>
                    <li>Peserta menyetujui untuk memberikan informasi tentang kepesertaan yang benar, akurat, terkini dan menyeluruh, yang terdapat dalam formulir pendaftaran.</li>
                </ol>
                <span id="dots"></span>
            </div>
            <span id="peraturanmore">
                <label><b>Peraturan Acara</b></label>
                <br>
                <label><b>A. Ketentuan umum &amp; lomba</b></label><br>
                <ol>
                    <li>Pihak penyelenggara berhak untuk mengubah ketentuan dan kondisi yang berlaku tanpa disertai pemberitahuan terlebih dahulu.</li>
                    <li>Peserta menyetujui untuk memberikan informasi tentang kepesertaan yang benar, akurat, terkini dan menyeluruh, yang terdapat dalam formulir pendaftaran.</li>
                    <li>Pihak penyelenggara dapat menghubungi peserta sewaktu-waktu melalui surat elektronik. Surat pemberitahuan dikirim ke alamat surat elektronik yang terdaftar pada pihak penyelenggara dan akan disamakan dengan yang diterima oleh peserta.</li>
                    <li>Apabila kegiatan/acara terpaksa dibatalkan dikarenakan hal diluar kontrol (termasuk hujan deras, badai, atau musibah, demonstrasi, perubahan peraturan dari pihak pemerintah atau pihak terkait), maka tidak ada pengembalian biaya pendaftaran dan pihak penyelenggara tidak bertanggung jawab atas kerugian atau ketidaknyamanan yang terjadi.</li>
                    <li>Pihak penyelenggara berhak untuk menghentikan perlombaan atau merubah rute perlombaan.</li>
                    <li>Peserta wajib untuk mengetahui rute perlombaan, kesalahan rute merupakan tanggung jawab peserta.</li>
                    <li>Pengelola berhak menetapkan batas waktu atau <i>cut off time</i>, pengelola akan memberlakukan <i>cut off time</i> sebagai berikut:</li>
                    <ul type="disc">
                        <li><i>Cut off time</i> 2 jam untuk 5K</li>
                    </ul>
                    <li>Peserta yang tidak mencapai garis finish sebelum batas waktu <i>cut off time</i> yang telah ditetapkan akan dianggap tidak menyelesaikan perlombaan dan tidak berhak atas medali penamat.</li>
                    <li>Peserta dianggap memahami dan menyetujui, adanya resiko yang dapat muncul dari keikutsertaan dalam perlombaan dan tidak berhak menuntut atas segala kejadian yang dapat menyebabkan cedera tubuh, cacat bahkan kematian kepada pihak penyelenggara.</li>
                    <li>Peserta menjamin berada pada kesiapan fisik atau kesehatan yang baik untuk mengikuti acara dan setuju untuk bertanggung jawab atas tindakan peserta pada saat acara.</li>
                    <li>Peserta wajib mengetahui dan memahami jika tidak mematuhi peraturan yang telah ditentukan maka dapat mengakibatkan peserta untuk kehilangan hak yang seharusnya didapatkan oleh peserta pada perlombaan.</li>
                    <li>Pihak penyelenggara memiliki hak atas penggunaan dokumentasi baik berbentuk foto ataupun video dari acara ini.</li>
                </ol><label><b>B. Ketentuan Peserta</b></label><br>
                <ol>
                    <li>Usia peserta dibatasi minimal berusia 17 tahun.</li>
                    <li>Peserta memiliki identitas / tanda pengenal seperti (KTP/SIM/Kartu Pelajar/PASSPORT).</li>
                    <li>Pendaftaran hanya boleh dilakukan oleh warga negara Indonesia atau warga negara Asing yang telah memiliki KITAS.</li>
                    <li>Peserta wajib mengisi formulir pendaftaran melalui website pendaftaran secara lengkap dan benar, dan membayar biaya pendaftaran sesuai dengan informasi yang ditetapkan resmi pada website.</li>
                    <li>Bagi para calon peserta yang telah mengisi formulir pendaftaran dan telah menerima konfirmasi pendaftaran WAJIB MEMBAYAR selambat-lambatnya 24 (dua empat jam) jam terhitung sejak peserta melakukan pendaftaran. Lewat dari waktu pembayaran yang ditetapkan maka pendaftarannya akan dibatalkan.</li>
                    <li>Calon peserta yang telah melakukan pembayaran biaya pendaftaran akan mendapatkan Surat Elektronik Konfirmasi Kepesertaan selambat-lambatnya 1×24 jam setelah pembayaran.</li>
                    <li>Peserta tidak dapat mengubah ukuran kaos lari yang telah dipilihnya. Mohon perhatikan dan pertimbangkan dengan saksama ukuran kaos lari yang sesuai dengan peserta.</li>
                    <li>Peserta menyetujui untuk memberikan informasi tentang kepesertaan yang benar, akurat, terkini dan menyeluruh, yang terdapat dalam formulir pendaftaran.</li>
                    <li>Penyelesaian formulir pendaftaran online menegaskan persetujuan peserta untuk mematuhi seluruh aturan dan regulasi.</li>
                    <li>Konfirmasi pendaftaran lomba akan diberikan setelah melengkapi pendaftaran dan pembayaran.</li>
                    <li>Pembatalan pendaftaran tidak dapat dilakukan termasuk pengembalian biaya pendaftaran.</li>
                    <li>Peserta datang 1 jam sebelum waktu start.</li>
                    <li>Peserta diwajibkan mengenakan baju, menggunakan nomor BIB milik sendiri yang terpasang didepan dada dan dapat terlihat dengan jelas oleh pihak penyelenggara.</li>
                    <li>Peserta yang tidak memiliki atau tidak menggunakan nomor BIB saat perlombaan dilarang masuk kedalam venue.</li>
                    <li>Peserta dilarang keras memakai pakaian yang mengandung unsur sara dan politik.</li>
                    <li>Peserta dilarang keras membawa minum-minuman keras, senjata tajam yang dapat membahayakan peserta lain.</li>
                    <li>Peserta dilarang keras membawa rokok saat acara berlangsung.</li>
                    <li>Apabila saat body checking panitia menemukan barang-barang tersebut maka panitia berhak untuk mengambilnya.</li>
                </ol><label><b>C. Pengambilan Racepack</b></label><br>
                <ol>
                    <li>Racepack meliputi Nomor BIB, Kaos lari, <i>Timing chip</i>, Produk-produk sponsor.</li>
                    <li>Dengan alasan apa pun, peserta TIDAK DAPAT meminta pergantian ukuran kaos lari yang telah dipilihnya pada saat pendaftaran.</li>
                    <li>Paket lomba (<i>race pack</i>) TIDAK DAPAT diambil di hari perlombaan dengan alasan apapun. Dan panitia penyelenggara TIDAK menyiapkan dan menyediakan fasilitas pengambilan paket lomba (<i>race pack</i>) di luar jadwal dan ketentuan yang telah ditetapkan.</li>
                    <li>Pengambilan paket lomba (<i>race pack</i>) dilakukan sendiri oleh peserta terdaftar dengan menukarkan lembar surat elektronik konfirmasi pendaftaran dan foto copy kartu identitas diri yang masih berlaku (KTP / SIM / Kartu Pelajar /Passport).</li>
                    <li>Orang yang mewakili / dikuasakan mengambil paket lomba Anda wajib membawa lembar surat elektronik konfirmasi pendaftaran Anda, membawa Surat Kuasa yang Anda tandatangani yang menyatakan bahwa Anda mengijinkan orang tersebut mengambil paket lomba Anda, membawa fotokopi kartu identitas (KTP / SIM / Kartu Pelajar / Passport) dan menunjukan identitas diri dan menyerahkan fotokopi identitas diri (KTP / SIM / Kartu Pelajar / Passport) kepada petugas <i>race pack collection.</i></li>
                    <li>Nomor BIB merupakan nomor yang telah ditentukan oleh panitia.</li>
                    <li>Nomor BIB peserta hanya dapat di ambil pada tempat dan waktu yang telah ditentukan oleh pihak penyelenggara, sebagai berikut :</li>
                    <ul type="disc">
                        <li><strong>Hari, tanggal : Rabu – Jum’at, 1 – 3 April 2020</strong></li>
                        <li><b>Pukul : 09.00 – 16.00 WIB</b></li>
                        <li><b>Tempat : Jl. Dr. Otten No. 32 Bandung</b></li>
                    </ul>
                    <li>Diharapkan nomor BIB tidak hilang ataupun rusak.</li>
                    <li>Nomor BIB peserta tidak dapat dipindah tangankan atau diperjual belikan kepada pihak lain, jika terbukti terjadi pelanggaran akan didiskualifikasi dari perlombaan.</li>
                    <li>Peserta wajib membawa identitas KTP/SIM/PASSPORT untuk pengambilan racepack.</li>
                </ol><label><b>D. Penitipan Barang</b></label><br>
                <ol>
                    <li>Pihak penyelenggara menyediakan penitipan barang peserta.</li>
                    <li>Waktu penitipan barang peserta dibuka pada jam 05.00 dan ditutup jam 09.00 WIB.</li>
                    <li>Pihak penyelenggara tidak menerima penitipan atas barang berharga milik peserta.</li>
                </ol><label><b>E. Ketentuan Pemenang</b></label><br>
                <ol>
                    <li>Raihan waktu peserta akan tercatat di <i>timing system</i> lomba dengan ketentuan nomor BIB dengan Timing chip terpasang dengan benar sesuai dengan petunjuk pemasangan. Peserta berlari sesuai dengan rute lomba dan melalui seluruh <i>check point</i> yang telah ditetapkan oleh penyelenggara. Peserta mencapai garis akhir (<i>finish line</i>) sesuai dengan batas waktu yang ditetapkan.</li>
                    <li>Para peserta dari masing-masing kategori nomor lari yang berhasil melalui garis akhir lomba (<i>finish line</i>) paling awal akan diberikan <i>Potential Winner Card</i> oleh pihak penyelenggara. <i>Potential Winner Card</i> BUKAN pengesahan seorang peserta menjadi juara, melainkan hanya sebagai identitas bahwa peserta tersebut merupakan kandidat juara. Sebelum disahkan sebagai juara, para juri dan pihak penyelenggara akan memverifikasi keabsahan masing-masing kandidat juara tersebut.</li>
                    <li>Para pemegang <i>Potential Winner Card</i> (kandidat juara) yang lolos verifikasi dan dinyatakan sah sebagai juara OTTEN 32 RUN akan dituangkan dalam Surat Keputusan yang akan ditandatangani oleh Ketua FAST <i>Learning Centre</i></li>
                    <li>Pihak penyelenggara memiliki hak untuk membatalkan hasil perlombaan apabila peserta terbukti secara sah dan meyakinkan melakukan kecurangan selama perlombaan.</li>
                    <li>Pengambilan hadiah tidak dapat diwakilkan atau dipindahtangankan dan wajib untuk menunjukan identitas diri asli sesuai dengan data registrasi.</li>
                    <li>Keputusan pemenang oleh pihak juri adalah sah dan tidak dapat diganggu gugat.</li>
                    <li>Pihak penyelenggara berhak memberikan hadiah dalam bentuk barang/uang tunai/transfer dengan jangka waktu yang telah ditetapkan oleh panitia.</li>
                </ol><label><b>F. KETENTUAN LAIN</b></label><br><label>Hal-hal yang belum diatur atau belum cukup diatur dan/atau diperlukan perubahan atas ketentuan dan syarat dalam Syarat dan Peraturan ini akan diputuskan kemudian oleh Pihak Penyelenggara dan akan dituangkan dalam Syarat dan Peraturana Tambahan, dan merupakan satu kesatuan yang tidak terpisahkan dari Syarat dan Peraturan ini.</label>
            </span>
            <div class="text-center" data-sal="slide-up" data-sal-duration="500">
                <br>
                <button onclick="openPeraturan()" id="openPr" class="btn btn-kuning text-center">Read more...</button>
            </div>
        </div>
    </section>
    <!-- Pengumuman Section-->
    <section class="page-section" id="pengumuman">
        <div class="container">
            <!-- Contact Section Heading-->
            <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0" data-sal="slide-down" data-sal-duration="800">Pengumuman</h2>
            <!-- Icon Divider-->
            <div class="divider-custom">
                <div class="divider-custom-line"></div>
            </div>
            <br><br>
            <div class="row">
                <div class="col-md-6 col-lg-6 mb-5">
                    <div class="card" data-sal="slide-right" data-sal-duration="500">
                        <div class="card-header text-center">
                            Jadwal Lomba
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><i class="fas fa-map-marker-alt"></i>&nbsp;&nbsp;&nbsp;&nbsp;Kampus Keperawatan Poltekkes Kemenkes Bandung </li>
                            <li class="list-group-item"><i class="fas fa-calendar-alt"></i>&nbsp;&nbsp;&nbsp;&nbsp;Minggu, 5 April 2020 </li>
                            <li class="list-group-item"><i class="fas fa-clock"></i>&nbsp;&nbsp;&nbsp;&nbsp;05:30 WIB - 08:00 WIB </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 mb-5">
                    <div class="card" data-sal="slide-right" data-sal-duration="500" data-sal-delay="150">
                        <div class="card-header text-center">
                            Jadwal Pengambilan Atribut
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><i class="fas fa-map-marker-alt"></i>&nbsp;&nbsp;&nbsp;&nbsp;Jl. Dr. Otten No. 32 Bandung</li>
                            <li class="list-group-item"><i class="fas fa-calendar-alt"></i>&nbsp;&nbsp;&nbsp;&nbsp;Rabu – Jum’at, 1 – 3 April 2020 </li>
                            <li class="list-group-item"><i class="fas fa-clock"></i>&nbsp;&nbsp;&nbsp;&nbsp;09.00 – 16.00 WIB </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-12 mb-5 kebawah" data-sal="slide-up" data-sal-duration="500" data-sal-delay="300">
                    <a href="#sizechart" class="js-scroll-trigger text-center">
                        <h6>UKURAN KAOS<br><i class="fas fa-angle-down fa-2x"></i></h6>
                    </a>
                </div>


            </div>

        </div>
    </section>
    <!-- Sizechart Section-->
    <section class="page-section" id="sizechart">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-6 mb-5 offset-lg-3">
                    <div class="card">
                        <div class="card-header text-center">
                            Diagram Ukuran Kaos
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-sm">
                                    <thead class="text-center">
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Length</th>
                                            <th scope="col">Width</th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-center">
                                        <tr>
                                            <th scope="row">XS</th>
                                            <td>66</td>
                                            <td>49</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">S</th>
                                            <td>68</td>
                                            <td>50</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">M</th>
                                            <td>70</td>
                                            <td>52</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">L</th>
                                            <td>72</td>
                                            <td>54</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">XL</th>
                                            <td>74</td>
                                            <td>57</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">XXL</th>
                                            <td>76</td>
                                            <td>60</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Kontak Section-->
    <section class="page-section" id="kontak">
        <div class="container">
            <!-- Contact Section Heading-->
            <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Kontak</h2>
            <!-- Icon Divider-->
            <div class="divider-custom">
                <div class="divider-custom-line"></div>
            </div>
            <!-- Contact Section Form-->
            <div class="d-flex justify-content-center">
                <div>
                    <a href="https://wa.me/6285775000157">
                        <div class="kontak-container">
                            <img class="kontak-img" src="assets/img/wa.png" alt="" />
                        </div>
                    </a>
                </div>
                <div>
                    <a href="https://www.instagram.com/otten32run/">

                        <div class="kontak-container">
                            <img class="kontak-img" src="assets/img/ig.png" alt="" />
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer-->
    <footer class="footer text-center">
        <div class="container">
            <div class="row">
                <!-- Footer Location-->
                <div class="col-lg-4 mb-5 mb-lg-0">
                </div>
                <!-- Footer Social Icons-->
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <h4 class="text-uppercase mb-4">Media Partner</h4>
                    <div class="d-flex justify-content-center">
                        <div class="mp-container">
                            <img class="kontak-img" src="assets/img/infobdg.id.jpg" alt="" />
                        </div>
                        <div class="mp-container">
                            <img class="kontak-img" src="assets/img/mqfm.jpeg" alt="" />
                        </div>
                        <div class="mp-container">
                            <img class="kontak-img" src="assets/img/larikuinfo.jpg" alt="" />
                        </div>
                    </div>
                </div>
                <!-- <a class="btn btn-outline-light btn-social mx-1" href="#"><i class="fab fa-fw fa-facebook-f"></i></a><a class="btn btn-outline-light btn-social mx-1" href="#"><i class="fab fa-fw fa-twitter"></i></a><a class="btn btn-outline-light btn-social mx-1" href="#"><i class="fab fa-fw fa-linkedin-in"></i></a><a class="btn btn-outline-light btn-social mx-1" href="#"><i class="fab fa-fw fa-dribbble"></i></a> -->
            </div>
            <!-- Footer About Text-->
            <div class="col-lg-4">
            </div>
        </div>
        </div>
    </footer>
    <!-- Copyright Section-->
    <section class="copyright py-1 text-center text-white">
        <div class="container"><small>Copyright © GinaRizka Production 2020</small></div>
    </section>
    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes)-->
    <div class="scroll-to-top d-lg-none position-fixed">
        <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top"><i class="fa fa-chevron-up"></i></a>
    </div>
    <!-- Modals-->
    <!-- Login Modal -->
    <div class="portfolio-modal modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><i class="fas fa-times"></i></span>
                </button>
                <div class="modal-body text-center">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <!-- Portfolio Modal - Title-->
                                <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Login</h2>
                                <!-- Icon Divider-->
                                <div class="divider-custom">
                                    <div class="divider-custom-line"></div>
                                </div>
                                <br><br>
                                <!-- <img style="width: 200px" src="assets/img/logo2.png" alt="">
                                <br><br> -->
                                <div>
                                    <form method="POST" action="{{ route('login') }}" id="ajaxSubmitLogin">
                                        {{ csrf_field() }}
                                        <div class="form-group">
                                            <!-- <label for="exampleInputEmail1">Email address</label> -->
                                            <input autofocus type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Email" required>
                                            <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                                        </div>
                                        <div class="form-group">
                                            <!-- <label for="exampleInputPassword1">Password</label> -->
                                            <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
                                        </div>
                                        <button type="submit" class="btn btn-biru btn-block rounded-pill">Login</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Register Modal -->
    <div class="portfolio-modal modal fade" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="registerModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><i class="fas fa-times"></i></span>
                </button>
                <div class="modal-body text-center">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <!-- Portfolio Modal - Title-->

                                <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Register</h2>
                                <!-- Icon Divider-->
                                <div class="divider-custom">
                                    <div class="divider-custom-line"></div>
                                </div>
                                <br><br>
                                <!-- <img style="width: 200px" src="assets/img/logo2.png" alt="">
                                <br><br> -->
                                <div>
                                    <form method="POST" action="{{ route('register') }}" id="ajaxSubmit">
                                        {{ csrf_field() }}
                                        <div class="form-group">
                                            <input type="text" name="name" class="form-control " id="nameInput" value="{{ old('name') }}" placeholder="Name" autofocus required>
                                            <div class="invalid-feedback " id="nameError">
                                                <strong></strong>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <input type="email" name="email" class="form-control " id="emailInput" value="{{ old('email') }}" placeholder="Email" required>
                                            <div class="invalid-feedback " id="emailError">
                                                <strong></strong>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="password" class="form-control " id="passwordInput" placeholder="Password" required>
                                            <div class="invalid-feedback" role="alert" id="passwordError">
                                                <strong></strong>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="password_confirmation" class="form-control " id="password_confirmationInput" placeholder="Password Confirmation" required>
                                            <div class="invalid-feedback" role="alert" id="password_confirmationError">
                                                <strong></strong>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-biru btn-block rounded-pill">Register</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Bootstrap core JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <!-- Third party plugin JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>

    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    <script src="js/sal.js/dist/sal.js"></script>
    <script>
        sal({
            once: false
        });
    </script>
    <script>
        $('#registerModal').on('hidden.bs.modal', function(e) {
            $("#nameInput").removeClass("is-invalid"); $("#emailInput").removeClass("is-invalid");
            $("#passwordInput").removeClass("is-invalid"); $("#password_confirmationInput").removeClass("is-invalid");
            $(this).find('#ajaxSubmit')[0].reset();
        });
    </script>
    <script>
        function openPeraturan() {
            var dots = document.getElementById("dots");
            var moreText = document.getElementById("peraturanmore");
            var btnText = document.getElementById("openPr");

            if (dots.style.display === "none") {
                dots.style.display = "inline";
                btnText.innerHTML = "Read more...";
                moreText.style.display = "none";
            } else {
                dots.style.display = "none";
                btnText.innerHTML = "Read less";
                moreText.style.display = "inline";
            }
        }

        function openTentang() {
            var dots2 = document.getElementById("dots2");
            var moreText = document.getElementById("tentangmore");
            var btnText = document.getElementById("openTn");

            if (dots2.style.display === "none") {
                dots2.style.display = "inline";
                btnText.innerHTML = "Read more...";
                moreText.style.display = "none";
            } else {
                dots2.style.display = "none";
                btnText.innerHTML = "Read less";
                moreText.style.display = "inline";
            }
        }
    </script>
    <script>
        jQuery('#ajaxSubmit').submit(function(e) {
            console.log('klik')
            e.preventDefault();
            let datanya = $(this).serializeArray();
            console.log('data yg dikirim', datanya);
            $(".invalid-feedback").children("strong").text("");
            $("#ajaxSubmit input").removeClass("is-invalid");
            $.ajax({
                type: "POST",
                headers: {
                    Accept: "application/json"
                },
                url: "{{ url('/register') }}",
                data: datanya,
                success: function(response){
                    if (response.status === 'success') {
                        Swal.fire({
                            title: response.message,
                            icon: 'success',
                            confirmButtonColor: '#3085d6',
                            confirmButtonText: 'OK',
                            allowOutsideClick: false
                        }).then((result) => {
                            if (result.value) {
                                $('#registerModal').modal('hide');
                                $('#loginModal').modal('show');
                            }
                        })
                    }
                    // console.log('sukses', response);
                },
                error: function(response) {
                    if(response.status === 422) {
                        console.log('mantap gan');
                        let errors = response.responseJSON.errors;
                        Object.keys(errors).forEach(function (key) {
                            console.log("#"+key);
                            console.log("#"+key+"Error");
                            $("#"+key+"Input").addClass("is-invalid");
                            $("#"+key+"Error").children("strong").text(errors[key][0]);
                        });
                    } else {
                        Swal.fire({
                            title: 'Oopss!',
                            text: 'Something Went Wrong',
                            icon: 'error',
                            confirmButtonText: 'try again'
                        });
                    }
                    // console.log('gagal', response);
                }
            });
        });
    </script>
    <script>
        jQuery('#ajaxSubmitLogin').submit(function(e) {
            console.log('login');
            e.preventDefault();
            let dataLogin = $(this).serializeArray();
            console.log('datalogin kirim', dataLogin);
            $.ajax({
                type: "POST",
                headers: {
                    Accept: "Application/json"
                },
                url: "{{ url('/login') }}",
                data: dataLogin,
                success: function(response) {
                    console.log('sukses', response);
                    if (response.status === 'success') {
                        $('#loginModal').modal('hide');
                        const Toast = Swal.mixin({
                            toast: true,
                            position: 'center',
                            showConfirmButton: false,
                            timer: 2000,
                            timerProgressBar: true
                        });
                        
                        Toast.fire({
                            icon: 'success',
                            title: 'Signed in successfully'
                        }).then((result) => {
                            window.location = '/home';
                        })
                    }
                },
                error: function(response) {
                    console.log('gagal', response);
                    if(response.status === 422) {
                        Swal.fire({
                            title: 'Oopss!',
                            text: response.responseJSON.message,
                            icon: 'error',
                            confirmButtonText: 'try again'
                        });
                    } else {
                        Swal.fire({
                            title: 'Oopss!',
                            text: 'Something went wrong!',
                            icon: 'error',
                            confirmButtonText: 'try again'
                        });
                    }
                }
            });
        });
    </script>
</body>

</html>