@extends('layouts.app')
@section('title', 'Kalkulator IPK | Ahmad.')
@section('content')
<section class="page">
    <article class="card">
        <div class="eyebrow">KALKULATOR AKADEMIS</div>
        <h1>Hitung Rata-rata IP</h1>
        <p>Masukkan IP dari dua semester. Nilai yang diterima berada pada rentang 0,00 hingga 4,00.</p>

        <form method="GET" action="{{ route('ipk.hitung', ['ip1' => old('ip1', $ip1 ?? 0), 'ip2' => old('ip2', $ip2 ?? 0)]) }}" class="ipk-form">
            <label for="ip1">IP Semester 1</label>
            <input id="ip1" name="ip1" type="number" inputmode="decimal" min="0" max="4" step="0.01" value="{{ old('ip1', $ip1) }}" placeholder="Contoh: 3.75" required>
            @error('ip1')<small class="error">{{ $message }}</small>@enderror

            <label for="ip2">IP Semester 2</label>
            <input id="ip2" name="ip2" type="number" inputmode="decimal" min="0" max="4" step="0.01" value="{{ old('ip2', $ip2) }}" placeholder="Contoh: 3.90" required>
            @error('ip2')<small class="error">{{ $message }}</small>@enderror

            <button class="button primary" type="submit">Hitung IPK →</button>
        </form>

        @if($rataRata !== null)
            <div class="result">IP Semester 1: <strong>{{ number_format($ip1, 2) }}</strong><br>IP Semester 2: <strong>{{ number_format($ip2, 2) }}</strong><br>Total: <strong>{{ number_format($total, 2) }}</strong><br>Rata-rata IP: <strong>{{ number_format($rataRata, 2) }}</strong></div>
        @endif
    </article>
</section>
@endsection