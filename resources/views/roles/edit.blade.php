@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="card">
				<div class="card-header">Editar</div>

				<div class="card-body">
					<form action="{{ route('roles.update',$role->id) }}" method="POST">
						@csrf
						@method('PUT')
						<div class="form-group">
							<label for="nombre">Nombre</label>
							<input type="text" class="form-control" name="name" value="{{ $role->name }}"placeholder="nombre">
						</div>
						<hr>
						<h3>Lista de roles</h3>
						<div class="form-group">
							<ul class="list-unstyled">
								@foreach($permissions as $permission)
								<li>
									<label>
										<input type="checkbox" name="permissions[]" value="{{ $permission->id }}"
										@if($role->permissions->contains($permission->id)) checked=checked 
										@endif
										>
										{{ $permission->name }}
									</label>
								</li>
								@endforeach
							</ul>
						</div>
						<button type="submit" class="btn btn-primary btn-block">Actualizar</button>
					</form>
					<div>
						<a class="btn btn-dark btn-block" href="{{ route('roles.index') }}"> Regresar</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
