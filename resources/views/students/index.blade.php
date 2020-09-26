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
                     <h1 class="mt-3">Daftar Students</h1>

                     @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                     <a href="http:/students/create" class="btn btn-primary my-3 btn-sm">Tambah Data Mahasiswa</a>
                    @foreach ($students as $student)
                     <ul class="list-group">
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                          {{$student->nama}}
                        <a href="/students/{{$student->id}}" class="badge badge-info">Detail</a>
                        </li>
                      </ul>
                      @endforeach
             </div>
         </div>
     </div>
     @endsection


     <!-- cara menampilkan semua section dan extenss dengan menulis @yeald didalam template utama -->
