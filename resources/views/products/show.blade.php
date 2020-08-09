@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="card">
				<div class="card-header">Producto #{{ $product->id }} </div>
				<div class="card-body">
					<p><strong>Nombre: </strong> {{ $product->name }}</p>
					<p><strong>Nombre: </strong> {{ $product->description }}</p>
					<div>
						<a class="btn btn-dark btn-block" href="{{ route('products.index') }}"> Regresar</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
