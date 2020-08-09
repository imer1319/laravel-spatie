@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Roles
                    @can('roles.create')
                    <a href="{{ route('roles.create') }}" class="btn btn-primary btn-sm float-right">Crear</a>
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
                            @foreach($roles as $role)
                            <tr>
                                <td>{{ $role->id }}</td>
                                <td>{{ $role->name }}</td>
                                <td width="10px">
                                    @can('roles.show')
                                    <a href="{{ route('roles.show',$role->id) }}" class="btn btn-sm btn-light">Ver</a>
                                    @endcan
                                </td>
                                <td width="10px">
                                    @if($role->id != 1)
                                    @can('roles.edit')
                                    <a href="{{ route('roles.edit',$role->id) }}" class="btn btn-sm btn-primary">Editar</a>
                                    @endcan
                                    @endif
                                </td>
                                <td width="10px">
                                    @if($role->id != 1)
                                    @can('roles.destroy')
                                    <form action="{{ route('roles.destroy',$role->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger">Eliminar</button>
                                    </form>
                                    @endcan
                                    @endif
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $roles->render() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection