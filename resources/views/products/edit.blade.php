@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="card">
				<div class="card-header">Editar</div>

				<div class="card-body">
					<form action="{{ route('products.update',$product->id) }}" method="POST">
						@csrf
						@method('PUT')
						<div class="form-group">
							<label for="nombre">Nombre</label>
							<input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $product->name }}" required autocomplete="name" autofocus>

							@error('name')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
							@enderror
						</div>
						<div class="form-group">
							<label for="description">Descripcion</label>
							<textarea class="form-control @error('description') is-invalid @enderror" rows="6" name="description" placeholder="Contenido" required autocomplete="description"autofocus>{{ $product->description }}</textarea>
							@error('description')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
							@enderror
						</div>
						<button type="submit" class="btn btn-primary btn-block">Actualizar</button>
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
