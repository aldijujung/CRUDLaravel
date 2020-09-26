<!-- layout adalah nama folder dan main adalah
     nama template yang ada didalam folder layout-->
@extends('layout.main')

<!-- parameter title diisi dengan nama about yang dikirm ke content -->
@section('title','About')

<!-- container adalah nama yang dikirim kedalam content -->
@section('container')
<div class="container">
        <div class="row">
            <div class="col-10">
                <h1 class="mt-3">My Profile <br> nama {{ $name }}</h1>
        </div>
    </div>
</div>
@endsection

<!-- cara menampilkan semua section dan extenss dengan menulis @yeald didalam template utama -->
