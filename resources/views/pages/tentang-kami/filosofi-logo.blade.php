@extends('layouts.app')

@section('title')
Filosofi Logo | Kabinet Catralingga
@endsection

@section('content')
<!-- Logo Section -->
<section id="logo" class="logo mt-5">

    <div class="container" data-aos="fade-up">

        <header class="section-header mt-5 fw-bold">
            <p>Filosofi Logo BEM Fasilkom UNSIKA 2022</p>
        </header>

        <div class="row justify-content-center mt-5 mb-5 gap-5">
            <div class="col-md-3">
                <img src="{{ url('frontend/assets/img/bawah_22.png') }}" width="180" class="logo-arthasastra">
            </div>
            <div class="col-md-6 deskripsi-arthasastra">
                <h2>Nilai Catralingga</h2>
                <p>#CATRALINGGA–didasarkan pada dua kata dalam bahasa sansekerta catra dan lingga. 
                    “Catra” bermakna payung yang mengibaratkan BEM FASILKOM 2022 sebagai pelindung ormawa dalam lingkup FASILKOM 
                    dan “Lingga” yang diadaptasi dari nama kerajaan hindu Kalingga yang memiliki arti burung yang menunjukkan harapan 
                    dan tujuan BEM FASILKOM 2022 untuk terbang setinggi dan sejauh apapun untuk mencapai tujuan dengan sepasang sayapnya.</p>

                <p>Mengacu pada hal tersebut, kami memakai nama Catralingga sebagai nama kabinet
                    BEM FASILKOM UNSIKA periode 2022 dengan harapan dan cita-cita untuk menjadikan
                    BEM FASILKOM UNSIKA sebagai organisasi yang dapat melindungi ormawa dalam
                    lingkup Fakultas dan bisa mencapai tujuan-tujuan lainnya yang sudah dirumuskan bersama.</p>
                
                <p>Catralingga juga dapat diartikan sebagai sarana harapan dan tujuan yang
                    dilambangkan dengan seekor burung Lingga yang tangguh nan gagah, untuk mencapai tujuan
                    dengan sepasang sayapnya. Dengan lambang api diatasnya yang mengartikan semangat yang
                    harus terus berkobar dalam BEM FASILKOM 2022.</p>
            </div>
        </div>

        <hr>

        <div class="row justify-content-center mt-5 mb-5 gap-5">
            <div class="col-md-3">
                <img src="{{ url('frontend/assets/img/Logo/Burung-Elang.png') }}" class="w-75">
            </div>
            <div class="col-md-6">
                <h2 class="mt-5">Burung Elang</h2>
                <p>Melambangkan ketangguhan dan kegagahan, fokus pada tujuan, meningkatkan potensi diri dan berdikari.</p>
            </div>
        </div>

        <hr>

        <div class="row justify-content-center mt-5 mb-5 gap-5">
            <div class="col-md-3">
                <img src="{{ url('frontend/assets/img/Logo/Lima-Bagian-Sayap.png') }}" class="w-75">
            </div>
            <div class="col-md-6">
                <h2 class="mt-5">Lima Bagian Sayap</h2>
                <p>Dengan makna lima sayap yang melambangkan 5 peran fungsi dari mahasiswa.</p>
            </div>
        </div>

        <hr>

        <div class="row justify-content-center mt-5 mb-5 gap-5">
            <div class="col-md-3">
                <img src="{{ url('frontend/assets/img/Logo/Wifi.png') }}" class="w-75">
            </div>
            <div class="col-md-6">
                <h2 class="mt-5">Wifi</h2>
                <p>Simbol wifi melambangkan ciri khas dari Fakultas Ilmu Komputer.</p>
            </div>
        </div>

        <hr>

        <div class="row justify-content-center mt-5 mb-5 gap-5">
            <div class="col-md-3">
                <img src="{{ url('frontend/assets/img/Logo/Tiga-Titik-Fokus.png') }}" class="w-75">
            </div>
            <div class="col-md-6">
                <h2 class="mt-5">Tiga Titik Fokus</h2>
                <p>Dengan makna tiga titik yang melambangkan Tri Dharma Perguruan Tinggi.</p>
            </div>
        </div>

        <hr>

        <div class="row justify-content-center mt-5 mb-5 gap-5">
            <div class="col-md-3">
                <img src="{{ url('frontend/assets/img/Logo/Padi.png') }}" class="w-75">
            </div>
            <div class="col-md-6">
                <h2 class="mt-5">Padi</h2>
                <p>Dengan makna Fasilkom Unsika berlokasi di Karawang dan Karawang merupakan kota lumbung padi.</p>
            </div>
        </div>

    </div>

</section>
<!-- End Logo Section -->
@endsection