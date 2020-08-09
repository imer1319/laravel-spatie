@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Productos
                    @can('products.create')
                    <a href="{{ route('products.create') }}" class="btn btn-primary btn-sm float-right">Crear</a>
                    @endcan
                </div>

                <div class="card-body">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th width="10px">ID</th>
                                <th>Nombre</th>
                                <th colspan="3">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($products as $product)
                            <tr>
                                <td>{{ $product->id }}</td>
                                <td>{{ $product->name }}</td>
                                <td width="10px">
                                    @can('products.show')
                                    <a href="{{ route('products.show',$product->id) }}" class="btn btn-sm btn-light">Ver</a>
                                    @endcan
                                </td>
                                <td width="10px">
                                    @can('products.edit')
                                    <a href="{{ route('products.edit',$product->id) }}" class="btn btn-sm btn-primary">Editar</a>
                                    @endcan
                                </td>
                                <td width="10px">
                                    @can('products.destroy')
                                    <form action="{{ route('products.destroy',$product->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger">Eliminar</button>
                                    </form>
                                    @endcan
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $products->render() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
