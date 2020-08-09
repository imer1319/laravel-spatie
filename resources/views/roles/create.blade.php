@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="card">
				<div class="card-header">Crear Rol</div>

				<div class="card-body">
					<form action="{{ route('roles.store') }}" method="POST">
						@csrf
						<div class="form-group">
							<label for="nombre">Nombre</label>
							<input type="text" class="form-control" name="name" placeholder="nombre">
						</div>
						<hr>
						<h3>Lista de Permisos</h3>
						<div class="form-group">
							<ul class="list-unstyled">
								@foreach($permissions as $permission)
								<li>
									<label>
										<input type="checkbox" name="permissions[]" value="{{ $permission->id }}"
										@if($permission->permissions->contains($permission->id)) checked=checked 
										@endif
										>
										{{ $permission->name }}
									</label>
								</li>
								@endforeach
							</ul>
						</div>
						<button type="submit" class="btn btn-primary btn-block">Crear</button>
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
