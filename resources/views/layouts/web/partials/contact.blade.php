<a id="contacto" class="anchor"></a>
<section class="container-fluid contact-section 
	{{-- Give Grey Back in this sections --}}
	@if(Menu::activeMenu('galeria')) == 'active')
		grey-back
	@endif
	@if(Menu::activeMenu('noticias')) == 'active')
		grey-back
	@endif
	">
	<div class="container wow animated fadeIn">
		<div class="row inner">
			<div class="col-md-12 contact-form">
				<div class="col-md-12 text-center">
					{!! Form::open(['class' => 'MainContactForm', 'method' => 'POST']) !!}
						<h1>Contactanos</h1>
						<div class="col-md-6 left">
							<div class="form-group">
								{!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'NOMBRE', 'required']) !!}
							</div>
							<div class="form-group">
								{!! Form::text('phone', null, ['class' => 'form-control', 'placeholder' => 'TELÉFONO', 'required']) !!}
							</div>
							<div class="form-group">
								{!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'E-MAIL', 'required']) !!}
							</div>
						</div>
						<div class="col-md-6 right">
							<div class="form-group">
								{!! Form::textarea('message', null, ['size' => '30x5', 'class' => 'form-control', 'placeholder' => 'CONSULTA / MENSAJE']) !!}
							</div>
							{{ csrf_field() }}
						</div>
						<button type="submit" class="MainFormBtn btn btnBlue contactBtn">Enviar</button>
					{!! Form::close() !!}
					<div class="ResponsesMainContactForm">
						<div class="FormResponse"></div>
						<div class="FormSuccess form-responses animated fadeIn text-center Hidden">
							<i class="success ion-checkmark-round"></i>
							<h2>Mensaje Enviado !</h2> 
							Gracias por contactarse con nosotros. <br>
							Nos estaremos comunicando a la brevedad.
							<hr class="softhr">
						</div>
						<div class="FormError form-responses animated text-center fadeIn Hidden">
							<i class="error ion-close-round"></i>
							<h2>Ha ocurrido un error !</h2> 
							Intente comunicarse directamente por mail o teléfono <br>
							Gracias.
						</div>
					</div>
				<hr class="softhr">
				</div>
				<div class="col-md-12 contact-data">
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 inner-data">
						<span class="title">Socio Gerente Comercial</span> <br>
						<span class="sub-title">José Tomás Adorno</span> <br>
						<div class="icons">
							<img src="{{ asset('webimages/main/llamada1.png') }}" alt="">
							<img src="{{ asset('webimages/main/llamada2.png') }}" alt="">
						</div>
						<div class="divisor"></div>
						<span class="text">Tel.: (011) 5648-7952</span> <br>
						<span class="text">Cel.: (011) 156294-4460 | ID.: 54*819*781</span>
						<div class="divisor"></div>
						<i class="ion-android-mail"></i>
						<span class="text">comercial@cimhe.com</span>
						
					</div>
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 inner-data">
						<span class="title">Socio Gerente Técnico</span> <br>
						<span class="sub-title">Ingeniero Humberto Balzamo</span> <br>
						<div class="icons">
							<img src="{{ asset('webimages/main/llamada1.png') }}" alt="">
							<img src="{{ asset('webimages/main/llamada2.png') }}" alt="">
						</div>
						<div class="divisor"></div>
						<span class="text">Cel.: (011) 11-3488-0466</span> <br>
						<span class="text">ID: 819*129</span>
						<div class="divisor"></div>
						<i class="ion-android-mail"></i>
						<span class="text">hbalzamo@gmail.com</span>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 inner-data">
						<span class="title">Gerente Calidad</span> <br>
						<span class="sub-title">Ingeniero Jesus Rojas</span> <br>
						<div class="icons">
							<img src="{{ asset('webimages/main/llamada1.png') }}" alt="">
							<img src="{{ asset('webimages/main/llamada2.png') }}" alt="">
						</div>
						<div class="divisor"></div>
						<span class="text">Cel.: 11 55 79 45 92</span> <br>
						<span class="text">Cel.:+58 414 014 00 75</span>
						<div class="divisor"></div>
						<i class="ion-android-mail"></i>
						<span class="text">cimhe.hys@gmail.com</span>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="container-fluid section contact-section2">
	<div class="container">
		<div class="row">
			<div class="horiz-items">
				<div class="col-md-4 col-sm-4 col-xs-12 inner">
					<img src="{{ asset('webimages/main/contacto1.png') }}" alt="">
					<p>
						Tel.: (011) 4757-6985 <br>
						Radio ID: 819*3226
					</p>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-12 inner">
					<img src="{{ asset('webimages/main/contacto2.png') }}" alt="">
					<p>
						hbalzamo@gmail.com <br>
						contable@cimhe.com <br>
					</p>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-12 inner">
					<img src="{{ asset('webimages/main/contacto3.png') }}" alt="">
					<p>
						San Roque 2472<br>
						José Ingenieros, <br>
						Tres de Febrero, Buenos Aires.
					</p>
				</div>
			</div>
		</div>
	</div>
</section>
