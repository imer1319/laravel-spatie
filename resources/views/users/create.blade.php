@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="card">
				<div class="card-header">Crear Producto</div>

				<div class="card-body">
					<form action="{{ route('products.store') }}" method="POST">
						@csrf
						<div class="form-group">
							<label for="nombre">Nombre</label>
							<input type="text" class="form-control" name="name" placeholder="nombre">
						</div>
						<div class="form-group">
							<label for="description">Descripcion</label>
							<textarea class="form-control" rows="6" name="description" placeholder="Contenido"></textarea>
						</div>
						<button type="submit" class="btn btn-primary btn-block">Crear</button>
					</form>
					<div>
						<a class="btn btn-dark btn-block" href="{{ route('products.index') }}"> Regresar</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
