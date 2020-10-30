
@extends('Painel.Layouts.index')

@section('content')
{{-- <div class="container"> --}}
    <p class="text-right">
        <a class="btn btn-success" href="{{ route('veiculos.create') }}">Cadastrar Veículo</a>
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
                    <tr>
                        <td>{{ $veiculo['placa'] }}</td>
                        <td>{{ $veiculo['renevam'] }}</td>
                        <td>{{ $veiculo['modelo'] }}</td>
                        <td>{{ $veiculo['marca'] }}</td>
                        <td>{{ $veiculo['ano'] }}</td>
                        <td>{{ $veiculo['proprietario'] }}</td>
                        <td width='8%'>
                            <div class="row text-center">
                                <a href="{{ route('veiculos.edit', ['veiculo' => $veiculo->id]) }}" title="Editar" class="ml-2"><i class="fa fa-edit"></i></a>
                                <a href="#" title="Visualizar" class="ml-2 text-warning"><i class="fa fa-eye"></i></a>
                                <a href="#" title="Apagar" class="ml-2 text-danger"><i class="fa fa-trash"></i></a>
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