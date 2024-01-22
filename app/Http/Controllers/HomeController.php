<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

use App\Models\FormPelaporan;
use App\Models\Jenazah;
use App\Models\Pelapor;
use App\Models\Saksi;

class HomeController extends Controller
{
    public function index()
    {
        if(Auth::id())
        {
            $usertype=Auth()->user()->usertype;
            
            if($usertype=='user')
            {
                return view('frontend.page.homepage-frontend');
            }

            else if($usertype=='admin')
            {
                return view('backend.page.adminhome-backend');
            }

            else
            {
                return redirect()->back();
            }
        }
    }

    public function homepage()
    {
        return view('frontend.page.homepage-frontend');
    }

    public function form_pelaporan()
    {
        return view('frontend.page.form.formpage-frontend');
    }

    public function kirim_laporan(Request $request)
    {
        $user = Auth()->user()->id;
        $jenazah = Jenazah::create([
            'nik_jz' => $request->input('nik_jz'),
            'nama_jz' => $request->input('nama_jz'),
            'jeniskelamin_jz' => $request->input('jeniskelamin_jz'),
            'tmptlahir_jz' => $request->input('tmptlahir_jz'),
            'tglahir_jz' => $request->input('tglahir_jz'),
            'umur_jz' => $request->input('umur_jz'),
            'agama_jz' => $request->input('agama_jz'),
            'pkerjaan_jz' => $request->input('pkerjaan_jz'),
            'alamat_jz' => $request->input('alamat_jz'),
            'tmptkematian_jz' => $request->input('tmptkematian_jz'),
            'tglkematian_jz' => $request->input('tglkematian_jz'),
            'jamkematian_jz' => $request->input('jamkematian_jz'),
            'sebabkematian_jz' => $request->input('sebabkematian_jz'),
            'yang_menerangkan' => $request->input('yang_menerangkan'),
            'nik_ayah' => $request->input('nik_ayah'),
            'nama_ayah' => $request->input('nama_ayah'),
            'tglahir_ayah' => $request->input('tglahir_ayah'),
            'umur_ayah' => $request->input('umur_ayah'),
            'pkerjaan_ayah' => $request->input('pkerjaan_ayah'),
            'nik_ibu' => $request->input('nik_ibu'),
            'nama_ibu' => $request->input('nama_ibu'),
            'tglahir_ibu' => $request->input('tglahir_ibu'),
            'umur_ibu' => $request->input('umur_ibu'),
            'pkerjaan_ibu' => $request->input('pkerjaan_ibu'),
            'alamat_orgtua' =>$request->input('alamat_orgtua'),
        ]);

        $pelapor = Pelapor::create([
            'nik_plapor' => $request->input('nik_plapor'),
            'nama_plapor' => $request->input('nama_plapor'),
            'tglahir_plapor' => $request->input('tglahir_plapor'),
            'umur_plapor' => $request->input('umur_plapor'),
            'pkerjaan_plapor' => $request->input('pkerjaan_plapor'),
            'alamat_plapor' => $request->input('alamat_plapor'),
        ]);

        $saksi = Saksi::create([
        'nik_saksi' => $request->input('nik_saksi'),
        'nama_saksi' => $request->input('nama_saksi'),
        'tglahir_saksi' => $request->input('tglahir_saksi'),
        'umur_saksi' => $request->input('umur_saksi'),
        'pkerjaan_saksi' => $request->input('pkerjaan_saksi'),
        'alamat_saksi' => $request->input('alamat_saksi'),
        ]);

        $form_pelaporan = FormPelaporan::create([
            'user_id' => $user,
            'form_kec' => $request->input('form_kec'),
            'nik_kk' => $request->input('nik_kk'),
            'nama_kk' => $request->input('nama_kk'),
            'nik_jz' => $request->input('nik_jz'),
            'nama_jz' => $request->input('nama_jz'),
            'nik_plapor' => $request->input('nik_plapor'),
            'nama_plapor' => $request->input('nama_plapor'),
            'nik_saksi' => $request->input('nik_saksi'),
            'nama_saksi' => $request->input('nama_saksi'),
            'status_pelaporan' => 'Pending',
            'jenazah_id' => $jenazah->id,
            'pelapor_id' => $pelapor->id,
            'saksi_id' => $saksi->id,
        ]);
        return redirect('/home')->with('pesan', 'Laporan anda telah Terkirim');

        // $user            = Auth()->user();
        // $userid          = $user->id;
        // $name            = $user->name;
        // $usertype        = $user->usertype;

        // $nik_jz             = $request->input('nik_jz');
        // $nama_jz            = $request->input('nama_jz');
        // $jeniskelamin_jz    = $request->input('jeniskelamin_jz');
        // $tmptlahir_jz       = $request->input('tmptlahir_jz');
        // $tglahir_jz         = $request->input('tglahir_jz');
        // $umur_jz            = $request->input('umur_jz');
        // $agama_jz           = $request->input('agama_jz');
        // $pkerjaan_jz        = $request->input('pkerjaan_jz');
        // $alamat_jz          = $request->input('alamat_jz');
        // $kel_jz             = $request->input('kel_jz');
        // $kec_jz             = $request->input('kec_jz');
        // $tmptkematian_jz    = $request->input('tmptkematian_jz');
        // $tglkematian_jz     = $request->input('tglkematian_jz');
        // $jamkematian_jz     = $request->input('jamkematian_jz');
        // $sebabkematian_jz   = $request->input('sebabkematian_jz');
        // $yang_menerangkan   = $request->input('yang_menerangkan');

        // $jenazahs    = new Jenazah
        // ([
        //     'nik_jz'=>$nik_jz, 
        //     'nama_jz'=>$nama_jz, 
        //     'jeniskelamin_jz'=>$jeniskelamin_jz, 
        //     'tmptlahir_jz'=>$tmptlahir_jz, 
        //     'tglahir_jz'=>$tglahir_jz,
        //     'umur_jz'=>$umur_jz,
        //     'agama_jz'=>$agama_jz,
        //     'pkerjaan_jz'=>$pkerjaan_jz,
        //     'alamat_jz'=>$alamat_jz,
        //     'kel_jz'=>$kel_jz,
        //     'kec_jz'=>$kec_jz,
        //     'tmptkematian_jz'=>$tmptkematian_jz,
        //     'tglkematian_jz'=>$tglkematian_jz,
        //     'jamkematian_jz'=>$jamkematian_jz,
        //     'sebabkematian_jz'=>$sebabkematian_jz,
        //     'yang_menerangkan'=>$yang_menerangkan
        // ]);

        // $form_pelaporans = new FormPelaporan;

        // $form_pelaporans->form_kec = $request->form_kec;
        // $form_pelaporans->nik_kk = $request->nik_kk;
        // $form_pelaporans->nama_kk = $request->nama_kk;
        // $form_pelaporans->nik_jnzh = $request->nik_jnzh;
        // $form_pelaporans->nama_jnzh = $request->nama_jnzh;
        // $form_pelaporans->nik_plapor = $request->nik_plapor;
        // $form_pelaporans->nama_plapor = $request->nama_plapor;
        // $form_pelaporans->nik_saksi = $request->nik_saksi;
        // $form_pelaporans->nama_saksi = $request->nama_saksi;
        
        // $form_pelaporans->status_pelaporan = 'Pending';
        // $form_pelaporans->user_id = $userid;
        // $form_pelaporans->name = $name;
        // $form_pelaporans->usertype = $usertype;
        // $form_pelaporans->save();
        // return redirect()->back()->with('pesan', 'Laporan anda telah Terkirim');
    }
}
