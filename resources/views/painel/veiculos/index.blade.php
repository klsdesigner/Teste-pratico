
@extends('Painel.Layouts.index')

@section('content')
{{-- <div class="container"> --}}
    <p class="text-right">
        <a class="btn btn-success" href="{{ route('veiculos.create') }}">Cadastrar Veículo</a>
        {{-- <a class="btn btn-warning" href="{{ route('veiculos.trash') }}">Itens Excluidos</a> --}}
    </p>

    <div class="card">
        <div class="card-header">
        <h3 class="card-title">Listagem de Veículos</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
        <table id="example1" class="table table-bordered table-striped table-hover table-sm">
            <thead>
                <tr>
                    <th>Placa</th>
                    <th>Renevam</th>
                    <th>Modelo</th>
                    <th>Marca</th>
                    <th>Ano</th>
                    <th>Proprietário</th>
                    <th>Ação</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($veiculos as $veiculo)
                    <tr @if ($veiculo->trashed()) class="table-danger text-red"  @endif>
                        <td>{{ $veiculo['placa'] }}</td>
                        <td>{{ $veiculo['renevam'] }}</td>
                        <td>{{ $veiculo['modelo'] }}</td>
                        <td>{{ $veiculo['marca'] }}</td>
                        <td>{{ $veiculo['ano'] }}</td>
                        <td>{{ $veiculo['proprietario'] }}</td>                        
                        <td width='12%'>
                            <div class="row text-center">
                                @if (($veiculo->trashed()))
                                    <a href="" title="Editar" class="btn btn-primary" disabled><i class="fa fa-edit"></i></a>
                                @else 
                                    <a href="{{ route('veiculos.edit', ['veiculo' => $veiculo->id]) }}" title="Editar" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                                @endif
                                                                
                                <a href="{{ route('veiculos.show', $veiculo->id) }}" title="Visualizar" class="btn btn-warning"><i class="fa fa-eye"></i></a>     

                                <form action="{{ route('veiculos.destroy', $veiculo->id) }}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger" title="Enviar para Lixeira"><i class="fa fa-trash"></i></button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
            <tfoot>
            <tr>
                <th>Placa</th>
                <th>Renevam</th>
                <th>Modelo</th>
                <th>Marca</th>
                <th>Ano</th>
                <th>Proprietário</th>
                <th>Ação</th>
            </tr>
            </tfoot>
        </table>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->

{{-- </div> --}}

@endsection