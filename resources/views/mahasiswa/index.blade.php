<!-- layout adalah nama folder dan main adalah
     nama template yang ada didalam folder layout-->
     @extends('layout.main')

     <!-- parameter title diisi dengan nama about yang dikirm ke content -->
     @section('title','Daftar Mahasiswa')

     <!-- container adalah nama yang dikirim kedalam content -->
     @section('container')
     <div class="container">
             <div class="row">
                 <div class="col-10">
                     <h1 class="mt-3">Daftar Mahasiswa</h1>

                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama</th>
                            <th scope="col">NRP</th>
                            <th scope="col">Email</th>
                            <th scope="col">Jurusan</th>
                            <th scope="col">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach ($mahasiswa as $mhs)
                            <tr>
                                <td scope="row">{{$loop->iteration}}</td>
                                <td scope="row">{{ $mhs->nama}}</td>
                                <td scope="row">{{$mhs->nrp}}</td>
                                <td scope="row">{{$mhs->email}}</td>
                                <td scope="row">{{$mhs->jurusan}}</td>
                                <td>
                                    <a href="" class="badge badge-success">edit</a>
                                    <a href="" class="badge badge-danger">delete</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

             </div>
         </div>
     </div>
     @endsection

     <!-- cara menampilkan semua section dan extenss dengan menulis @yeald didalam template utama -->
