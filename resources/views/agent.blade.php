@extends('layouts.app')
@section('title', 'Platform Agentic AI ')
@section('content')
@php
    $tujuanList = [
        ['icon' => '⌁', 'color' => 'coral', 'text' => 'Mengurangi proses pencarian dan seleksi lowongan yang dilakukan secara manual.'],
        ['icon' => '◎', 'color' => 'indigo', 'text' => 'Membantu pengguna menemukan pekerjaan yang paling relevan dengan profil dan tujuan kariernya.'],
        ['icon' => '▤', 'color' => 'mustard', 'text' => 'Membantu menyesuaikan CV dan materi lamaran berdasarkan karakteristik setiap pekerjaan.'],
        ['icon' => '✦', 'color' => 'coral', 'text' => 'Memberikan rekomendasi yang lebih personal dibandingkan pencarian pekerjaan berbasis keyword biasa.'],
    ];

    $fiturAgen = [
        ['step' => '01', 'title' => 'Profil & Preferensi Karier', 'desc' => 'Input latar belakang pendidikan, skill, proyek, pengalaman, dan preferensi karier pengguna.'],
        ['step' => '02', 'title' => 'Analisis & Matching Lowongan', 'desc' => 'Agent menganalisis berbagai lowongan pekerjaan dan menentukan tingkat relevansi serta prioritas.'],
        ['step' => '03', 'title' => 'Penyesuaian Materi Lamaran', 'desc' => 'Mengidentifikasi kompetensi terbaik dan menyesuaikan CV dan dokumen lamaran secara personal.'],
        ['step' => '04', 'title' => 'Rekomendasi & Keputusan', 'desc' => 'Memberikan panduan berbasis AI bagi pengguna untuk mengambil keputusan lamaran pekerjaan.'],
    ];
@endphp

<section class="agent-hero">
    <div>
        <div class="eyebrow">PLATFORM AGENTIC AI</div>
        <h1>Career<span>Navigator Agent</span></h1>
        <p class="intro">{{ $tema }} adalah asisten karier berbasis AI yang membantu Anda menemukan peluang kerja, menyiapkan lamaran, dan memilih langkah karier dengan lebih percaya diri.</p>
    </div>
    <div class="agent-mark" aria-hidden="true"><span>AI</span><i>✦</i></div>
</section>

<section class="agent-section">
    <div class="section-heading"><div class="eyebrow">TUJUAN PLATFORM</div><h2>Dirancang untuk pencarian kerja yang lebih terarah.</h2></div>
    <div class="purpose-grid">
        @foreach ($tujuanList as $tujuan)
            <article class="purpose-card">
                <span class="agent-icon {{ $tujuan['color'] }}">{{ $tujuan['icon'] }}</span>
                <p>{{ $tujuan['text'] }}</p>
            </article>
        @endforeach
    </div>
</section>

<section class="agent-section workflow-section">
    <div class="section-heading"><div class="eyebrow">CARA KERJA AGEN</div><h2>Dari profil Anda hingga keputusan terbaik.</h2></div>
    <div class="feature-grid">
        @foreach ($fiturAgen as $fitur)
            <article class="feature-card">
                <span class="step">{{ $fitur['step'] }}</span>
                <h3>{{ $fitur['title'] }}</h3>
                <p>{{ $fitur['desc'] }}</p>
            </article>
        @endforeach
    </div>
</section>
@endsection
