
@extends('Painel.Layouts.index')

@section('content')
{{-- <div class="container"> --}}

    <div class="card card-primary">
        <div class="card-header">
        <h3 class="card-title">Cadastro de Veículos</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">

            @if ($errors->any())
                <div class="alert alert-danger">
                    
                    @foreach ($errors->all() as $error)

                        <h5><i class="icon fas fa-ban"> </i> {{ $error }}</h5>

                    @endforeach                        
                    
                </div>
            @endif

            <form id="qForm" name="qForm" action="{{ route('veiculos.store') }}" method="POST">
                @csrf

                <div class="card-body">

                    <div class="row">
                        <div class="col-sm-6">
                          <!-- text input -->
                          <div class="form-group">
                            <label>Placa</label>
                            <input type="text" class="form-control" placeholder="Informe a Placa" name="placa" value="{{ old('placa') }}" autofocus>
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <div class="form-group">
                            <label>Renevam</label>
                            <input type="text" class="form-control" placeholder="Informe o Renevam" name="renevam" value="{{ old('renevam') }}">
                          </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-sm-6">
                          <!-- text input -->
                          <div class="form-group">
                            <label>Modelo</label>
                            <input type="text" class="form-control" placeholder="Informe o Modelo" name="modelo" value="{{ old('modelo') }}">
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <div class="form-group">
                            <label>Marca</label>
                            <input type="text" class="form-control" placeholder="Informe a Marca" name="marca" value="{{ old('marca') }}">
                          </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                          <!-- text input -->
                          <div class="form-group">
                            <label>Ano</label>
                            <input type="text" class="form-control" placeholder="Informe o Ano de fabricação" name="ano" value="{{ old('ano') }}">
                          </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">                           
                                <label>Proprietário</label>
                                <select name="proprietario" id="proprietario" class="form-control" >
                                    @foreach ($users as $user)
                                        @if ($user->role == '1')
                                            <option value="{{ $user->id }}">{{ $user->name }}</option>
                                        @endif                                    
                                    @endforeach
                                </select>
                            </div>
                        </div>  
                    </div>              
                  
                </div>
                <!-- /.card-body -->
                <div class="card-footer text-center">
                  <button type="submit" class="btn btn-success">Cadastrar Veículo</button>
                  <a href="{{ route('veiculos.index') }}" title="Voltar">Voltar</a>
                </div>
              </form>   

        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->

{{-- </div> --}}

@endsection