<!-- Form Section Start -->
<div class="container mx-auto bg-white w-[55%] shadow-2xl mb-[60px]">
    <div class="w-full px-5 pt-5 pb-3">
        <div class="mx-auto bg-primary">
            <h2 class="font-bold text-white font-poppins p-2 text-md sm:text-md lg:text-2xl">Form Pelaporan Kematian</h2>
        </div>
        @if(session()->has('pesan'))
            <div id="alert-border-3" class="flex items-center p-4 mb-4 text-green-800 border-t-4 border-green-300 bg-green-50" role="alert">
                <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                </svg>
                <div class="ms-3 text-sm font-medium">
                    {{session()->get('pesan')}}
                </div>
                <button type="button" class="close ms-auto -mx-1.5 -my-1.5 bg-green-50 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex items-center justify-center h-8 w-8"  data-dismiss-target="#alert-border-3" aria-hidden="Close">
                <span class="close sr-only">Dismiss</span>
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                </svg>
                </button>
                
            </div>
        @endif
    </div>

    <form action="{{url('kirim-laporan')}}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="w-full px-4">
            <div class="w-full items-center">
                <legend for="form_kec" class="w-full px-4 text-dark text-sm font-semibold">Pilih Kecamatan</legend>
                <div class="mt-2 px-4 flex flex-wrap items-center">
                  <div>
                    <label class="inline-flex items-center w-40">
                      <input class="form-radio" type="radio" checked="" name="form_kec" value="Batam Kota">
                      <span class="ml-2">Batam Kota</span>
                    </label>
                  </div>
                  <div>
                    <label class="inline-flex items-center w-40">
                      <input class="form-radio" type="radio" name="form_kec" value="Batu Aji">
                      <span class="ml-2">Batu Aji</span>
                    </label>
                  </div>
                  <div>
                    <label class="inline-flex items-center w-40">
                      <input class="form-radio" type="radio" name="form_kec" value="Batu Ampar">
                      <span class="ml-2">Batu Ampar</span>
                    </label>
                  </div>
                  <div>
                    <label class="inline-flex items-center w-40">
                      <input class="form-radio" type="radio" name="form_kec" value="Belakang Padang">
                      <span class="ml-2">Belakang Padang</span>
                    </label>
                  </div>
                  <div>
                    <label class="inline-flex items-center w-40">
                      <input class="form-radio" type="radio" name="form_kec" value="Bengkong">
                      <span class="ml-2">Bengkong</span>
                    </label>
                  </div>
                  <div>
                    <label class="inline-flex items-center w-40">
                      <input class="form-radio" type="radio" name="form_kec" value="Bulang">
                      <span class="ml-2">Bulang</span>
                    </label>
                  </div>
                  <div>
                    <label class="inline-flex items-center w-40">
                      <input class="form-radio" type="radio" name="form_kec" value="Galang">
                      <span class="ml-2">Galang</span>
                    </label>
                  </div>
                  <div>
                    <label class="inline-flex items-center w-40">
                      <input class="form-radio" type="radio" name="form_kec" value="Lubuk Baja">
                      <span class="ml-2">Lubuk Baja</span>
                    </label>
                  </div>
                  <div>
                    <label class="inline-flex items-center w-40">
                      <input class="form-radio" type="radio" name="form_kec" value="Nongsa">
                      <span class="ml-2">Nongsa</span>
                    </label>
                  </div>
                  <div>
                    <label class="inline-flex items-center w-40">
                      <input class="form-radio" type="radio" name="form_kec" value="Sagulung">
                      <span class="ml-2">Sagulung</span>
                    </label>
                  </div>
                  <div>
                    <label class="inline-flex items-center w-40">
                      <input class="form-radio" type="radio" name="form_kec" value="Sei Beduk">
                      <span class="ml-2">Sei Beduk</span>
                    </label>
                  </div>
                  <div>
                    <label class="inline-flex items-center w-40">
                      <input class="form-radio" type="radio" name="form_kec" value="Sekupang">
                      <span class="ml-2">Sekupang</span>
                    </label>
                  </div>
                </div>
            </div>
            <div class="w-full px-4 mb-3 mt-2 flex items-center mx-auto justify-center">
                <h2 class="px-2 text-dark text-sm font-medium ">Perhatikan cara Pelaporan yang Baik dan Benar 
                </h2>
                <img class="" src="{{asset('images/info.svg')}}" alt="" width="30">
            </div>
            <div class="w-full px-4">
                <label class="block">
                    <span class="text-gray-700 inline-flex">NIK Kepala Keluarga</span>
                    <input type="text" name="nik_kk" class="form-input mt-1 mb-2 block w-full px-4 rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="NIK Kepala Keluarga">
                </label>
                <label class="block">
                    <span class="text-gray-700 inline-flex">Nama Kepala Keluarga</span>
                    <input type="text" name="nama_kk" class="form-input mt-1 mb-2 block w-full px-4 rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="Nama Kepala Keluarga">
                </label>
                <legend class=" w-full text-dark text-lg font-semibold py-3">Jenazah</legend>
                <label class="block">
                    <span class="text-gray-700 inline-flex">NIK</span>
                    <input type="text" name="nik_jz" class="form-input mt-1 mb-2 block w-full px-4 rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="NIK">
                </label>
                <label class="block">
                    <span class="text-gray-700 inline-flex">Nama Lengkap</span>
                    <input type="text" name="nama_jz" class="form-input mt-1 mb-2 block w-full px-4 rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="Nama Lengkap">
                </label>
                <label class="block">
                    <span for="jeniskelamin_jz" class="text-gray-700 inline-flex">Jenis Kelamin</span>
                    <select name="jeniskelamin_jz" class="form-select mt-1 mb-2 block w-full px-4 rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                        <option hidden>Jenis Kelamin</option>
                        <option>Laki Laki</option>
                        <option>Perempuan</option>
                    </select>
                </label>
                <div class="flex justify-between mx-auto">
                    <label class="block">
                        <span class="text-gray-700 inline-flex">Tempat Lahir</span>
                        <input type="input" name="tmptlahir_jz" class="form-input mt-1 mb-2 block w-full px-4 rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="Tempat Lahir">
                    </label>
                    <label class="block w-full px-3">
                        <span class="text-gray-700 inline-flex">Tanggal Lahir</span>
                        <input type="date" name="tglahir_jz" class="form-input mt-1 mb-2 block w-full px-4 rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="Tanggal Lahir">
                    </label>
                    <label class="block">
                        <span class="text-gray-700 inline-flex">Umur</span>
                        <input type="input" name="umur_jz" class="form-input mt-1 mb-2 block w-full px-4 rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="Umur">
                    </label>
                </div>
                <label class="block">
                    <span class="text-gray-700 inline-flex">Agama</span>
                    <select name="agama_jz" class="form-select mt-1 mb-2 block w-full px-4 rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                        <option hidden>Agama</option>
                        <option>Islam</option>
                        <option>Kristen</option>
                        <option>Katolik</option>
                        <option>Hindu</option>
                        <option>Budha</option>
                        <option>Khonghucu</option>
                    </select>
                </label>
                <label class="block">
                    <span class="text-gray-700 inline-flex">Pekerjaan</span>
                    <input type="text" name="pkerjaan_jz" class="form-input mt-1 mb-2 block w-full px-4 rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="Pekerjaan">
                </label>
                <label class="block">
                    <span class="text-gray-700 inline-flex">Alamat</span>
                    <textarea type="textarea" name="alamat_jz" class="form-input mt-1 mb-2 block w-full px-4 rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="Alamat"></textarea>
                </label>
                <div class="flex justify-between mx-auto">
                    <label class="block w-full">
                        <span class="text-gray-700 inline-flex">Tempat Kematian</span>
                        <input type="input" name="tmptkematian_jz" class="form-input mt-1 mb-2 block w-full px-4 rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="Tempat Kematian">
                    </label>
                    <label class="block w-full px-3">
                        <span class="text-gray-700 inline-flex">Tanggal Kematian</span>
                        <input type="date" name="tglkematian_jz" class="form-input mt-1 mb-2 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="Tanggal Kematian">
                    </label>
                    <label class="block">
                        <span class="text-gray-700 inline-flex">Jam Kematian</span>
                        <input type="time" name="jamkematian_jz" class="form-input mt-1 mb-2 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="Pukul">
                    </label>
                </div>
                <label class="block">
                    <span for="sebabkematian_jz" class="text-gray-700 inline-flex">Sebab Kematian</span>
                    <select name="sebabkematian_jz" class="form-select mt-1 mb-2 block w-full px-4 rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                        <option hidden>Sebab Kematian</option>
                        <option>Sakit biasa / Tua</option>
                        <option>Wabah Penyakit</option>
                        <option>Kecelakaan</option>
                        <option>Kriminalitas</option>
                        <option>Bunuh Diri</option>
                    </select>
                </label>
                <label class="block">
                    <span for="yang_menerangkan" class="text-gray-700 inline-flex">Yang Menerangkan</span>
                    <select name="yang_menerangkan" class="form-select mt-1 mb-2 block w-full px-4 rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                        <option hidden>Yang Menerangkan</option>
                        <option>Dokter</option>
                        <option>Tenaga Kesehatan</option>
                        <option>Kepolisian</option>
                    </select>
                </label>
                <legend class=" w-full text-dark text-lg font-semibold py-3">Orang Tua</legend>
                <div class="flex justify-between mx-auto">
                    <label class="block w-full pr-3">
                        <span class="text-gray-700 inline-flex">NIK Ayah</span>
                        <input type="text" name="nik_ayah" class="form-input mt-1 mb-2 block w-full px-4 rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="NIK Ayah">
                    </label>
                    <label class="block w-full">
                        <span class="text-gray-700 inline-flex">NIK Ibu</span>
                        <input type="text" name="nik_ibu" class="form-input mt-1 mb-2 block w-full px-4 rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="NIK Ibu">
                    </label>
                </div>
                <div class="flex justify-between mx-auto">
                    <label class="block w-full pr-3">
                        <span class="text-gray-700 inline-flex">Nama Lengkap Ayah</span>
                        <input type="text" name="nama_ayah" class="form-input mt-1 mb-2 block w-full px-4 rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="Nama Lengkap Ayah">
                    </label>
                    <label class="block w-full">
                        <span class="text-gray-700 inline-flex">Nama Lengkap Ibu</span>
                        <input type="text" name="nama_ibu" class="form-input mt-1 mb-2 block w-full px-4 rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="Nama Lengkap Ibu">
                    </label>
                </div>
                <div class="flex justify-between mx-auto">
                    <label class="block w-full pr-3">
                        <span class="text-gray-700 inline-flex">Tanggal Lahir Ayah</span>
                        <input type="date" name="tglahir_ayah" class="form-input mt-1 mb-2 block w-full px-4 rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="Tanggal Lahir Ayah">
                    </label>
                    <label class="block pr-3">
                        <span class="text-gray-700 inline-flex ">Umur  </span>
                        <input type="input" name="umur_ayah" class="form-input mt-1 mb-2 block w-full px-4 rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="Umur  ">
                    </label>
                    <label class="block w-full pr-3">
                        <span class="text-gray-700 inline-flex">Tanggal Lahir Ibu</span>
                        <input type="date" name="tglahir_ibu" class="form-input mt-1 mb-2 block w-full px-4 rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="Tanggal Lahir Ibu">
                    </label>
                    <label class="block">
                        <span class="text-gray-700 inline-flex">Umur</span>
                        <input type="input" name="umur_ibu" class="form-input mt-1 mb-2 block w-full px-4 rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="Umur">
                    </label>
                </div>
                <div class="flex justify-between mx-auto">
                    <label class="block w-full pr-3">
                        <span class="text-gray-700 inline-flex">Pekerjaan Ayah</span>
                        <input type="text" name="pkerjaan_ayah" class="form-input mt-1 mb-2 block w-full px-4 rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="Pekerjaan">
                    </label>
                    <label class="block w-full">
                        <span class="text-gray-700 inline-flex">Pekerjaan Ibu</span>
                        <input type="text" name="pkerjaan_ibu" class="form-input mt-1 mb-2 block w-full px-4 rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="Pekerjaan">
                    </label>
                </div>
                <label class="block">
                    <span class="text-gray-700 inline-flex">Alamat</span>
                    <textarea type="textarea" name="alamat_orgtua" class="form-input mt-1 mb-2 block w-full px-4 rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="Alamat"></textarea>
                </label>
                <legend class=" w-full text-dark text-lg font-semibold py-3">Pelapor</legend>
                <label class="block">
                    <span class="text-gray-700 inline-flex">NIK</span>
                    <input type="text" name="nik_plapor" class="form-input mt-1 mb-2 block w-full px-4 rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="NIK">
                </label>
                <label class="block">
                    <span class="text-gray-700 inline-flex">Nama Lengkap</span>
                    <input type="text" name="nama_plapor" class="form-input mt-1 mb-2 block w-full px-4 rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="Nama Lengkap">
                </label>
                <div class="flex justify-between items-center">
                    <label class="block w-full pr-3">
                        <span class="text-gray-700 inline-flex">Tanggal Lahir</span>
                        <input type="date" name="tglahir_plapor" class="form-input mt-1 mb-2 block w-full px-4 rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="Tanggal Lahir Ayah">
                    </label>
                    <label class="block pr-3">
                        <span class="text-gray-700 inline-flex ">Umur</span>
                        <input type="input" name="umur_plapor" class="form-input mt-1 mb-2 block w-full px-4 rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="Umur  ">
                    </label>
                </div>
                <label class="block">
                    <span class="text-gray-700 inline-flex">Pekerjaan</span>
                    <input type="text" name="pkerjaan_plapor" class="form-input mt-1 mb-2 block w-full px-4 rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="Pekerjaan">
                </label>
                <label class="block">
                    <span class="text-gray-700 inline-flex">Alamat</span>
                    <textarea type="textarea" name="alamat_plapor" class="form-input mt-1 mb-2 block w-full px-4 rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="Alamat"></textarea>
                </label>
                <legend class=" w-full text-dark text-lg font-semibold py-3">Saksi</legend>
                <label class="block">
                    <span class="text-gray-700 inline-flex">NIK</span>
                    <input type="text" name="nik_saksi" class="form-input mt-1 mb-2 block w-full px-4 rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="NIK">
                </label>
                <label class="block">
                    <span class="text-gray-700 inline-flex">Nama Lengkap</span>
                    <input type="text" name="nama_saksi" class="form-input mt-1 mb-2 block w-full px-4 rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="Nama Lengkap">
                </label>
                <div class="flex justify-between items-center">
                    <label class="block w-full pr-3">
                        <span class="text-gray-700 inline-flex">Tanggal Lahir</span>
                        <input type="date" name="tglahir_saksi" class="form-input mt-1 mb-2 block w-full px-4 rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="Tanggal Lahir Ayah">
                    </label>
                    <label class="block pr-3">
                        <span class="text-gray-700 inline-flex ">Umur</span>
                        <input type="input" name="umur_saksi" class="form-input mt-1 mb-2 block w-full px-4 rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="Umur  ">
                    </label>
                </div>
                <label class="block">
                    <span class="text-gray-700 inline-flex">Pekerjaan</span>
                    <input type="text" name="pkerjaan_saksi" class="form-input mt-1 mb-2 block w-full px-4 rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="Pekerjaan">
                </label>
                <label class="block">
                    <span class="text-gray-700 inline-flex">Alamat</span>
                    <textarea type="textarea" name="alamat_saksi" class="form-input mt-1 mb-2 block w-full px-4 rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="Alamat"></textarea>
                </label>
            </div>
            
            <!-- Button -->
            <div class="w-full px-4 pb-5 pt-5">
                <button type="submit" class="text-base font-semibold text-white bg-primary py-4 px-8 rounded-full w-full hover:opacity-80 hover:shadow-lg transition duration-500">
                    Kirim
                </button>
            </div>
        </div>

    </form>
</div>
<!-- Form Section End -->