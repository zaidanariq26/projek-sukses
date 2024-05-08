@extends('layouts.main')

@section('container')
    <div class="row align-items-center" style="margin-top: 81px;">
        <div class="col-lg-5 offset-lg-1">
            <h3 style="font-weight: bold">Selamat datang di web <br> pendaftaran magang SDPPI Kominfo</h3>
            <p>Mulailah pengalamanmu dengan mendaftarkan diri dan bergabung dengan kami</p>
            <a href="/register"><button class="tombol btn mt-2 mb-5" style="background-color: #6CBEF9; width: 208px; border-radius: 10px; font-weight: 700; color: white ; text-align: center; padding: 12px 8px;"  type="submit">Daftar Sekarang <img src="img/rightA.png" alt=""></button></a>
        </div>
        <div class="col-lg-5">
            <img src="img/picture1.png" alt="" class="img-fluid">
        </div>
    </div>

    <div class="row" style="margin-top: 256px">
        <div class="col-12">
            <img id="sejarah" src="img/logo-sdppi-2019.png" alt="" class="img-fluid">
        </div>
    </div>

    <div class="row mt-5 justify-content-center">
        <div class="col-lg-8">
            <h1  class="text-center mb-5">Sejarah Singkat</h1>
            <p class="text-justify">Dalam rangka melaksanakan mandat dari Peraturan Presiden Nomor 24 Tahun 2010 tentang Kedudukan, Tugas, dan Fungsi Kementerian Negara serta Susunan Organisasi, Tugas, dan Fungsi Eselon I Kementerian Negara, maka pada tanggal 28 Oktober 2010 ditetapkan struktur baru Kementerian Komunikasi dan Informatika berdasarkan Peraturan Menteri Komunikasi dan Informatika (Permenkominfo) Nomor 17/PER/M.KOMINFO/10/2010 tentang Organisasi dan Tata Kerja Kementerian Komunikasi dan Informatika sebagai pengganti dari Peraturan Menteri Kominfo Nomor 25/PER/M.KOMINFO/07/2008. 
            <br><br>
            Struktur yang baru Kementerian Komunikasi dan Informatika terdiri dari Sekretariat Jenderal, Inspektorat Jenderal, Direktorat Jenderal Sumber Daya dan Perangkat Pos dan Informatika (Ditjen SDPPI), Direktorat Jenderal Penyelenggaraan Pos dan Informatika (Ditjen PPI), Direktorat Jenderal Aplikasi Informatika (Ditjen Aptika), Direktorat Jenderal Informasi dan Komunikasi Publik (Ditjen IKP) dan Badan Penelitian dan Pengembangan Sumber Daya Manusia. Dua Direktorat Jenderal yang baru yaitu Direktorat Jenderal Sumber Daya dan Perangkat Pos dan Informatika bersama Direktorat Jenderal Penyelenggaraan Pos dan Informatika merupakan hasil pemekaran dari Direktorat Jenderal Pos dan Telekomunikasi pada struktur organisasi yang lama.</p>
        </div>
    </div>

    <div  class="row mt-5">
        <a id="fungsi" style="text-decoration: none; color: black;" href="#p"><div class="col-lg-3" style="background-color: #B6DFF1; padding: 10px; border-radius: 8px"><h2 style="font-weight: 600;" class="text-center">Fungsi SDPPI</h2></div></a>
    </div>

    <div class="row mt-5 align-items-center justify-content-center">
        <div class="col-lg-4 offset-lg-1 text-center">
            <img class="mb-3" style="border-radius: 16px" src="img/image6.png" alt="" class="img-fluid">
        </div>
        <div class="col-lg-5 offset-lg-1">
            <p class="text-justify">A. Perumusan kebijakan di bidang penataan, perizinan, monitoring dan evaluasi, serta penegakan hukum penggunaan spektrum frekuensi radio dan orbit satelit, serta standardisasi perangkat pos dan informatika. <br><br>
            B. Pelaksanaan kebijakan di bidang penataan, perizinan, monitoring dan evaluasi, serta penegakan hukum penggunaan spektrum frekuensi radio dan orbit satelit, serta standardisasi perangkat pos dan informatika.
            </p>
        </div>
    </div>

    <div id="p" class="row mt-5 align-items-center">
        <div class="col-lg-5 offset-lg-1 order-2 ">
            <p class="text-justify">C. penyusunan norma, standar, prosedur, dan kriteria di bidang pengawasan standardisasi perangkat telekomunikasi. <br><br>
            D. pelaksanaan pemberian bimbingan teknis dan supervisi di bidang pengawasan standardisasi perangkat telekomunikasi.
            </p>
        </div>
        <div class="col-lg-4 offset-lg-1 order-lg-2 order-1 text-center">
            <img class="mb-3" style="border-radius: 16px" src="img/image7.png" alt="" class="img-fluid">
        </div>
    </div>

    <div class="row mt-5 align-items-center">
        <div class="col-lg-4 offset-lg-1 text-center">
            <img class="mb-3" style="border-radius: 16px" src="img/image8.png" alt="" class="img-fluid">
        </div>
        <div class="col-lg-5 offset-lg-1">
            <p class="text-justify">E. Pelaksanaan evaluasi dan pelaporan di bidang penataan, perizinan, monitoring dan evaluasi, serta penegakan hukum penggunaan spektrum frekuensi radio dan orbit satelit, serta standardisasi perangkat pos dan informatika. <br><br>
            F. pelaksanaan administrasi Direktorat Jenderal Sumber Daya dan Perangkat Pos dan Informatika dan <br><br>
            G. pelaksanaan fungsi lain yang diberikan oleh Menteri.
            </p>
        </div>
    </div>

@endsection