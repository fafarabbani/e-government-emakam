@extends('backend.page.adminhome-backend')
@section('title', 'Dashboard | E-Makam')

@section('content')
<section>
    <h1 class="text-xl font-bold text-white p-7 text-center">Dashboard</h1>
    <div class="w-full px-4 ">
        <div class="px-4 grid grid-cols-4 gap-4 text-center py-4">
            <div class="bg-slate-300 py-5 rounded-md">
                <h2 class="font-medium">Form Pelaporan</h2>
                <span>{{$totalPelaporan}}</span>
            </div>
            <div class="bg-slate-300 py-5 rounded-md">
                <h2 class="font-medium">Jenazah</h2>
                <span>{{$totalJenazah}}</span>
            </div>
            <div class="bg-slate-300 py-5 rounded-md">
                <h2 class="font-medium">Pelapor</h2>
                <span>{{$totalPelapor}}</span>
            </div>
            <div class="bg-slate-300 py-5 rounded-md">
                <h2 class="font-medium">Saksi</h2>
                <span>{{$totalSaksi}}</span>
            </div>
        </div>
    </div>
</section>
@endsection