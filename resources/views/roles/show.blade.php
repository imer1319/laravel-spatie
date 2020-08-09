@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="card">
				<div class="card-header">Roles #{{ $role->id }} </div>
				<div class="card-body">
					<p><strong>Nombre: </strong> {{ $role->name }}</p>
					<div>
						<a class="btn btn-dark btn-block" href="{{ route('roles.index') }}"> Regresar</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
