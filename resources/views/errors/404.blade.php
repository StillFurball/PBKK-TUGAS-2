@extends('layouts.app')
@section('title', '404 | Halaman Tidak Ditemukan')
@section('content')
<section class="page"><article class="card"><div class="eyebrow">ERROR 404</div><h1>Halaman tidak ditemukan.</h1><p>Alamat yang Anda buka tidak tersedia atau telah dipindahkan.</p><a class="button primary" href="{{ route('home') }}">Kembali ke Beranda</a></article></section>
@endsection