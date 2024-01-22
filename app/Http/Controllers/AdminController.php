<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\FormPelaporan;
use App\Models\Jenazah;
use App\Models\Pelapor;
use App\Models\Saksi;

class AdminController extends Controller
{
    public function home()
    {
        $totalPelaporan = FormPelaporan::count();
        $totalJenazah   = Jenazah::count();
        $totalPelapor   = Pelapor::count();
        $totalSaksi     = Saksi::count();

        if(Auth::id())
        {
            $usertype=Auth()->user()->usertype;
            
            if($usertype=='user')
            {
                return view('frontend.page.homepage-frontend');
            }

            else if($usertype=='admin')
            {
                return view('backend.content.dashboard-admin-backend', compact('totalPelaporan', 'totalJenazah', 'totalPelapor', 'totalSaksi'));
            }

            else
            {
                return redirect()->back();
            }
        }
    }
    public function table_pelaporan()
    {
        $dataFormPelaporan = FormPelaporan::with(['user', 'jenazah', 'pelapor', 'saksi'])->get();
        return view('backend.content.table-pelaporan-backend', compact('dataFormPelaporan'));
    }
    public function table_data_jenazah()
    {
        $dataJenazah = Jenazah::all();
        return view('backend.content.table-jenazah-backend', compact('dataJenazah'));
    }
    public function table_data_pelapor()
    {
        $dataPelapor = Pelapor::all();
        return view('backend.content.table-pelapor-backend', compact('dataPelapor'));
    }
    public function table_data_saksi()
    {
        $dataSaksi = Saksi::all();
        return view('backend.content.table-saksi-backend', compact('dataSaksi'));
    }
}
