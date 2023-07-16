@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('CV. Badan Usaha Milik Kita adalah tempat perbaikan elektronik yg tepat untuk memperbaikin elektronik anda yang rusak. kami siap di panggil dan pengerjaan di tempat, wilayah kerja kita di seluruh kota medan.

Kami menawarkan jasa service:
*PERAWATAN AC
-CUCI AC
-PERBAIKAN AC
-PEMASANGAN AC
*MESIN CUCI
*TV
*CCTV
*KULKAS
*KOMPOR GAS TANAM
*POMPA AIR

Kenapa harus memilih kita untuk memperbaikin elektronik anda ?
Karena kami memiliki teknisi yg:

*PROPESIONAL
*MENGUTAMAKAN SAFETY
*BERPENGALAMAN
*KERAPIAN SAAT BEKERJA
*JUJUR
*RAMAH

Dan pasti nya HARGA nya aman di kantong

Tunggu apa lagi, jika barang” elektronik di rumah anda bermasalah bisa hubungin kami. Kami siap datang dan siap melayani.

Wa: 0821-6661-5561

Alamat workshop: jl.pancing 5 ling. 2 kel. Besar, kec. Medan labuhan, kota MEDAN') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
