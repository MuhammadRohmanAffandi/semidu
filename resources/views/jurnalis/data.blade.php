@extends('layouts/admin')
@section('konten')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Jurnalis</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ url('/admin') }}" class="btn btn-secondary"><i
                                class="fas fa-home"></i> Home</a></li>
                    <li class="breadcrumb-item active"><a href="{{ url('add/jurnalis') }}" class="btn btn-primary">
                            <i class="fas fa-plus-square"></i> Tambah Data</a>
                    </li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Data Artikel</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example2" class="table table-bordered table-hover text-center">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Judul</th>
                                    <th>Deskripsi</th>
                                    <th>Opsi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($data as $a)
                                <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td>{{ $a->judul }}</td>
                                    <td>{{ $a->deskripsi }}</td>
                                    <td>
                                        <a href="{{ url('edit/artikel/'.$a->id) }}" class="btn btn-success">
                                            <i class="nav-icon fas fa-edit"></i>Edit</a>
                                        <a href="{{ url('delete/artikel/'.$a->id) }}" class="btn btn-danger">
                                            <i class="fas fa-trash"></i>Hapus</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                            </tfoot>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->

                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</section>
@endsection
@section('js')
<script>
    $(function () {
        $("#example1").DataTable({
            "responsive": false,
            "autoWidth": false,
        });
    });

</script>
@endsection
