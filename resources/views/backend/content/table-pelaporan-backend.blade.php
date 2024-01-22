@extends('backend.page.adminhome-backend')
@section('title', 'Table Data Pelaporan | E-Makam')

@section('content')
<section>
    <h1 class="text-xl font-bold text-white p-7 text-center">Table Data Pelaporan</h1>
    <div class="flex flex-col">
        <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
            <div class="overflow-hidden">
            <table class="min-w-full text-center text-xs font-light border shadow-md">
                <thead class="border-b font-medium text-slate-300 bg-slate-900 dark:border-neutral-500">
                <tr>
                    <th scope="col" class="px-2 py-2">No</th>
                    <th scope="col" class="px-4 py-2">Nama User</th>
                    <th scope="col" class="px-4 py-2">Form Kecamatan</th>
                    <th scope="col" class="px-4 py-2">Nama Jenazah</th>
                    <th scope="col" class="px-4 py-2">NIK Kepala Keluarga</th>
                    <th scope="col" class="px-4 py-2">Nama Kepala Keluarga</th>
                    <th scope="col" class="px-4 py-2">Nama Pelapor</th>
                    <th scope="col" class="px-4 py-2">Nama Saksi</th>
                    <th scope="col" class="px-4 py-2">Status Pelaporan</th>
                    <th scope="col" class="px-4 py-2"></th>
                </tr>
                </thead>

                <tbody>
                    @foreach ($dataFormPelaporan as $dataPelaporan)
                        <tr class="border-b border-neutral-100 text-base bg-neutral-500 text-dark dark:bg-neutral-50">
                            <td class="whitespace-nowrap px-4 py-1">1</td>
                            <td class="whitespace-nowrap px-4 py-1">{{$dataPelaporan->user->name}}</td>
                            <td class="whitespace-nowrap px-4 py-1">{{$dataPelaporan->form_kec}}</td>
                            <td class="whitespace-nowrap px-4 py-1">{{$dataPelaporan->jenazah->nama_jz}}</td>
                            <td class="whitespace-nowrap px-4 py-1">{{$dataPelaporan->nik_kk}}</td>
                            <td class="whitespace-nowrap px-4 py-1">{{$dataPelaporan->nama_kk}}</td>
                            <td class="whitespace-nowrap px-4 py-1">{{$dataPelaporan->pelapor->nama_plapor}}</td>
                            <td class="whitespace-nowrap px-4 py-1">{{$dataPelaporan->saksi->nama_saksi}}</td>
                            <td class="whitespace-nowrap px-4 py-1">{{$dataPelaporan->status_pelaporan}}</td>
                            <td class="whitespace-nowrap px-4 py-1">
                                <button class="btn bg-primary">Terima</button>
                                <button class="btn">Hapus</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            </div>
        </div>
        </div>
    </div>
</section>
@endsection