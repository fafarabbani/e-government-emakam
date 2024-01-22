@extends('backend.page.adminhome-backend')
@section('title', 'Table Data Jenazah | E-Makam')

@section('content')
<section>
    <h1 class="text-xl font-bold text-white p-7 text-center">Table Data Jenazah</h1>
    <div class="flex flex-col">
        <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
            <div class="overflow-hidden">
            <table class="min-w-full text-center text-xs font-light border shadow-md">
                <thead class="border-b font-medium text-slate-300 bg-slate-900 dark:border-neutral-500">
                <tr>
                    <th scope="col" class="px-2 py-2">No</th>
                    <th scope="col" class="px-4 py-2">NIK Jenazah</th>
                    <th scope="col" class="px-4 py-2">Nama Jenazah</th>
                    <th scope="col" class="px-4 py-2">Jenis Kelamin</th>
                    <th scope="col" class="px-4 py-2">Tempat Kematian</th>
                    <th scope="col" class="px-4 py-2">Tanggal Kematian</th>
                    <th scope="col" class="px-4 py-2">Sebab Kematian</th>
                    <th scope="col" class="px-4 py-2">Yang Menerangkan</th>
                    <th scope="col" class="px-4 py-2">Nama Ayah</th>
                    <th scope="col" class="px-4 py-2">Aksi</th>
                </tr>
                </thead>

                <tbody>
                    @foreach ($dataJenazah as $dataJz)
                        <tr class="border-b border-neutral-100 text-base bg-neutral-500 text-dark dark:bg-neutral-50">
                            <td class="whitespace-nowrap px-4 py-1">1</td>
                            <td class="whitespace-nowrap px-4 py-1">{{$dataJz->nik_jz}}</td>
                            <td class="whitespace-nowrap px-4 py-1">{{$dataJz->nama_jz}}</td>
                            <td class="whitespace-nowrap px-4 py-1">{{$dataJz->jeniskelamin_jz}}</td>
                            <td class="whitespace-nowrap px-4 py-1">{{$dataJz->tmptkematian_jz}}</td>
                            <td class="whitespace-nowrap px-4 py-1">{{$dataJz->tglkematian_jz}}</td>
                            <td class="whitespace-nowrap px-4 py-1">{{$dataJz->sebabkematian_jz}}</td>
                            <td class="whitespace-nowrap px-4 py-1">{{$dataJz->yang_menerangkan}}</td>
                            <td class="whitespace-nowrap px-4 py-1">{{$dataJz->nama_ayah}}</td>
                            <td class="whitespace-nowrap px-4 py-1">
                                <button class="btn bg-primary">Edit</button>
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