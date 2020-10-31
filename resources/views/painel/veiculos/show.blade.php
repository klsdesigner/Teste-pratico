
@extends('Painel.Layouts.index')

@section('content')
{{-- <div class="container"> --}}

    <div class="card">
        <div class="card-header">
        <h3 class="card-title">Listagem de Veículos e Proprietário</h3>
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
                                
                                <a href="#" title="Visualizar" class="ml-2 text-warning"><i class="fa fa-eye"></i></a>
                                
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