@extends('layouts.vadmin.main')

@section('title', 'Vadmin | Inicio')

@section('content')
	<div class="dashboard">
		<div class="content-body"><!--native-font-stack -->
			<section id="global-settings" class="card">
				{{-- --}}
				<div class="card-header">
					<h4 class="card-title">Bienvenid@ {{ Auth::user()->name }} a Vadmin</h4>
				</div>
				<div class="card-body collapse in">
					<div class="card-block">
						<div class="card-text">
							<p>
								Gestione el contenido de su web
							</p>
							
							
						</div>
					</div>
				</div>
			</section>


			</section>
		</div>
	<div id="Error"></div>
@endsection

@section('scripts')
@endsection

@section('custom_js')
@endsection
