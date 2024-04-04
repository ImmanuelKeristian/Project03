@extends('layouts.master')

@section('web-content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Data Kartu Keluarga</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Kartu Keluarga</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div>
                    @if($errors->any())
                        {{ implode('', $errors->all(':message')) }}
                    @endif
                </div>
                <form>
                    @csrf
                    <div class="form-group">
                        <label for="no-kk">Nomor Kartu Keluarga</label>
                        <input type="text" class="form-control" id="no-kk"
                               placeholder="Contoh:3171021415230005" name="no" required autofocus maxlength="16">
                    </div>
                    <div class="form-group">
                        <label for="nama-kk">Nomor Kepala Keluarga</label>
                        <input type="text" class="form-control" id="nama-" placeholder="password">
                    </div>
                    <button type="submit" class="btn btn-primary"></button>
                </form>
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </div>
@endsection

@section('ExtraCSS')
    <link rel="stylesheet" href="{{ asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
@endsection

@section('ExtraJS')
    <script src="{{ asset('plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script>
        $('#table-kk').DataTable();
    </script>
@endsection
