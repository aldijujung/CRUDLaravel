<!-- layout adalah nama folder dan main adalah
     nama template yang ada didalam folder layout-->
     @extends('layout.main')

     <!-- parameter title diisi dengan nama about yang dikirm ke content -->
     @section('title','Daftar Mahasiswa')

     <!-- container adalah nama yang dikirim kedalam content -->
     @section('container')
     <div class="container">
             <div class="row">
                 <div class="col-6">
                     <h1 class="mt-3">Detail Students</h1>
                     <div class="card">
                        <div class="card-body">
                          <h5 class="card-title">{{$student->nama}}</h5>
                          <h6 class="card-subtitle mb-2 text-muted">{{$student->nrp}}</h6>
                          <h5 class="card-title">{{$student->email}}</h5>
                          <h5 class="card-title">{{$student->jurusan}}</h5>

                          <a href="{{$student->id}}/edit" class="btn btn-primary btn-sm">Edit</a>
                        <form action="/students/{{$student->id}}" method="post" class="d-inline">
                            @method('delete')
                            @csrf
                          <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                          </form>
                          <a href="/students" class="card-link">kembali</a>
                        </div>
                      </div>
             </div>
         </div>
     </div>
     @endsection

     <!-- cara menampilkan semua section dan extenss dengan menulis @yeald didalam template utama -->
