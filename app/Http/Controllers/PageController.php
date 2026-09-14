<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function mahasiswa(string $nrp)
    {
        return view('mahasiswa', compact('nrp'));
    }

    public function agent(?string $tema = null)
    {
        $tema = $tema ?? 'General Assistant Agent';

        return view('agent', compact('tema'));
    }

    public function hitungIpk(Request $request, ?float $ip1 = null, ?float $ip2 = null)
    {
        $nilaiDariForm = $request->filled('ip1') || $request->filled('ip2');

        if ($nilaiDariForm) {
            $validated = $request->validate([
                'ip1' => ['required', 'numeric', 'between:0,4'],
                'ip2' => ['required', 'numeric', 'between:0,4'],
            ]);

            $ip1 = (float) $validated['ip1'];
            $ip2 = (float) $validated['ip2'];
        }

        $total = $ip1 !== null && $ip2 !== null ? $ip1 + $ip2 : null;
        $rataRata = $total !== null ? $total / 2 : null;

        return view('ipk', compact('ip1', 'ip2', 'total', 'rataRata'));
    }
}
