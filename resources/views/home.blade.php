@extends('layouts.app')

@section('title', 'home ')

@section('content')
<section class="hero">
    <div class="hero-copy">
        <div class="eyebrow">SELAMAT DATANG</div>
        <h1>Halo, Saya <span>Rafi Attar Maulana</span></h1>
        <p class="intro">Mahasiswa Teknik Informatika ITS yang berfokus pada pengembangan sistem agentic berbasis kecerdasan buatan untuk transformasi digital yang berdampak.</p>
        <div class="actions">
            <a class="button primary" href="{{ route('mahasiswa.nrp', ['nrp' => '5025241141']) }}">Lihat Profil Lengkap →</a>
            <a class="button" href="{{ route('agent.tema', ['tema' => 'agentic-ai']) }}">Ide Agentic AI</a>
        </div>
    </div>
    <div class="portrait-wrap" role="img" aria-label="Ilustrasi profil">
        <div class="portrait"></div>
        <p class="role">SOFTWARE ENGINEER</p>
    </div>
</section>
@endsection