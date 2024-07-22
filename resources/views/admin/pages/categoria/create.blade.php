@extends('admin.layout.app')
@section('title', 'Categoria cadastrar')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">

                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Categoria</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard', ['id' => 1]) }}">Home</a></li>
                            <li class="breadcrumb-item active">Categoria</li>
                        </ol>
                    </div>
                </div>

            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <!-- /.card-body -->
            <div class="row">
                <div class="col-md-12">
                    @if (session('msg'))
                        <div class="alert alert-success text-center">
                            {{ session('msg') }}
                        </div>
                    @endif
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Cadastrar</h3>
                            </div>
                            <!-- /.card-header -->

                            <form action="{{ route('admin.pages.categoria.store') }}" method="post">
                                @csrf
                                <div class="modal-body">
                                    <div class="form-group">
                                        <div class="form-group">
                                            <label for="customFile">Nome</label>
                                            <div class="custom-file">
                                                <input type="text" required class="form-control" name="name">
                                            </div>
                                        </div>

                                    </div>
                                    <div class="modal-footer justify-content-between">
                                        <button type="submit" class="btn btn-primary">Cadastrar</button>
                                    </div>

                                </div>
                            </form>
                            <!-- /.card-body -->

                        </div>
                        <!-- /.card -->

                    </div>
                    <!-- /.col -->

                </div>

                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
