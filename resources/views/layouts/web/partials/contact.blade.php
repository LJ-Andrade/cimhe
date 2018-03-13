<a id="contacto" class="anchor"></a>
<section class="container-fluid contact-section">
	<div class="container wow animated fadeIn">
		<div class="row inner">
			<div class="col-md-12 contact-form">
				<div class="col-md-4 text-center">
					<h1>Contactanos</h1>
					{!! Form::open(['id' => 'MainContactForm', 'method' => 'POST']) !!}
						<div class="form-group">
							{!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'NOMBRE', 'required']) !!}
						</div>
						<div class="form-group">
							{!! Form::text('phone', null, ['class' => 'form-control', 'placeholder' => 'TELÉFONO', 'required']) !!}
						</div>
						<div class="form-group">
							{!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'E-MAIL', 'required']) !!}
						</div>
						<div class="form-group">
							{!! Form::textarea('message', null, ['size' => '30x5', 'class' => 'form-control', 'placeholder' => 'CONSULTA / MENSAJE']) !!}
						</div>
						{{ csrf_field() }}
						<button type="submit" class="MainFormBtn btn btnBlue contactBtn">Enviar</button>
					{!! Form::close() !!}
					<div id="ResponsesMainContactForm">
						<div id="FormResponse"></div>
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
				</div>
				<div class="col-md-8 contact-data">
					<div class="col-lg-6 col-md-6 col-sm-4 col-xs-12 inner-data">
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
					<div class="col-lg-6 col-md-6 col-sm-4 col-xs-12 inner-data">
						<span class="title">Socio Gerente Técnico</span> <br>
						<span class="sub-title">Ingeniero Humberto Balzamo</span> <br>
						<div class="icons">
							<img src="{{ asset('webimages/main/llamada1.png') }}" alt="">
							<img src="{{ asset('webimages/main/llamada2.png') }}" alt="">
						</div>
						<div class="divisor"></div>
						<span class="text">Cel.: (011) 11-3488-0466</span> <br>
						<span class="text">ID: 819*3226</span>
						<div class="divisor"></div>
						<i class="ion-android-mail"></i>
						<span class="text">hbalzamo@gmail.com</span>
					</div>
					<div class="col-lg-12 col-md-12 col-sm-4 col-xs-12 inner-data">
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
				<div class="col-md-4 col-sm-6 col-xs-12 inner">
					<img src="{{ asset('webimages/main/contacto1.png') }}" alt="">
					<p>
						Tel.: (011) 4757-6985 <br>
						Radio ID: 819*3226
					</p>
				</div>
				<div class="col-md-4 col-sm-6 col-xs-12 inner">
					<img src="{{ asset('webimages/main/contacto2.png') }}" alt="">
					<p>
						hbalzamo@gmail.com <br>
						contable@cimhe.com <br>
					</p>
				</div>
				<div class="col-md-4 col-sm-6 col-xs-12 inner">
					<img src="{{ asset('webimages/main/contacto3.png') }}" alt="">
					<p>
						San Roque 2470 <br>
						José Ingenieros, <br>
						Tres de Febrero, Buenos Aires.
					</p>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="contact-map">
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13133.568470043838!2d-58.53853298162236!3d-34.61952996272408!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcb7e00b9b886f%3A0x6be25ae56d06d6de!2sSan+Roque+2470%2C+B1703BCF+Jos%C3%A9+Ingenieros%2C+Buenos+Aires!5e0!3m2!1ses-419!2sar!4v1519977329474" width="100%" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>
</section>
