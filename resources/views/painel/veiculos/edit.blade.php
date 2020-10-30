
@extends('Painel.Layouts.index')

@section('content')
{{-- <div class="container"> --}}

    <div class="card card-primary">
        <div class="card-header">
        <h3 class="card-title">Alteração de Veículos</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
        
            <form id="qForm" name="qForm" action="{{ route('veiculos.update', ['veiculo' => $veiculo->id]) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="card-body">

                  @if ($errors->any())
                    <div class="alert alert-danger">
                        
                        @foreach ($errors->all() as $error)
    
                            <h5><i class="icon fas fa-ban"> </i> {{ $error }}</h5>
    
                        @endforeach                        
                        
                    </div>
                  @endif

                    <div class="row">
                        <div class="col-sm-6">
                          <!-- text input -->
                          <div class="form-group">
                            <label>Placa</label>
                            <input type="text" class="form-control" placeholder="Informe a Placa" name="placa" value="{{ $veiculo->placa }}" autofocus>
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <div class="form-group">
                            <label>Renevam</label>
                            <input type="text" class="form-control" placeholder="Informe o Renevam" name="renevam" value="{{ $veiculo->renevam }}">
                          </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-sm-6">
                          <!-- text input -->
                          <div class="form-group">
                            <label>Modelo</label>
                            <input type="text" class="form-control" placeholder="Informe o Modelo" name="modelo" value="{{ $veiculo->modelo }}">
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <div class="form-group">
                            <label>Marca</label>
                            <input type="text" class="form-control" placeholder="Informe a Marca" name="marca" value="{{ $veiculo->marca }}" >
                          </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                          <!-- text input -->
                          <div class="form-group">
                            <label>Ano</label>
                            <input type="text" class="form-control" placeholder="Informe o Ano de fabricação" name="ano" value="{{ $veiculo->ano }}"  >
                          </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">                           
                                <label>Proprietário</label>
                                <select name="proprietario" id="proprietario" class="form-control" >
                                    @foreach ($users as $user)                                    
                                        @if ($user->role == 1)
                                            <option value="{{ $user->id }}"
                                              @if ($veiculo->proprietario == $user->id) selected @endif      
                                              >{{ $user->name }}</option>
                                        @endif                                    
                                    @endforeach
                                </select>
                            </div>
                        </div>  
                    </div> 

                </div>
                <!-- /.card-body -->
                <div class="card-footer text-center">
                  <button type="submit" class="btn btn-success">Alterar Veículo</button>
                  <a href="{{ route('veiculos.index') }}" title="Voltar">Voltar</a>
                </div>
              </form>   

        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->

{{-- </div> --}}

@endsection