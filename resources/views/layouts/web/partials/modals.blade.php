 <!-- Suelos Modal -->
    <div id="SuelosModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Solicitar presupuesto de suelos</h4>
                </div>
                <div class="modal-body contact-form">
                    {!! Form::open(['id' => 'SuelosContactForm', 'method' => 'POST']) !!}
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
                            {!! Form::text('data4', null, ['class' => 'form-control', 'placeholder' => 'TIPO DE SERVICIO', 'required']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::text('data5', null, ['class' => 'form-control', 'placeholder' => 'EMPRESA (CUIT)', 'required']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::text('data6', null, ['class' => 'form-control', 'placeholder' => 'DIRECCIÓN DE OBRA', 'required']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::text('data7', null, ['class' => 'form-control', 'placeholder' => 'RESPONSABLE DE OBRA', 'required']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::text('data8', null, ['class' => 'form-control', 'placeholder' => 'REQUERIMIENTO PARTICULAR', 'required']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::textarea('message', null, ['size' => '30x5', 'class' => 'form-control', 'placeholder' => 'CONSULTA / MENSAJE']) !!}
                        </div>
					    {{ csrf_field() }} 
                        <button type="submit" class="SuelosFormBtn btn btnBlue contactBtn">Enviar</button>
                    {!! Form::close() !!}
                    <div id="ResponsesSuelosForm"> 
                        <div class="FormSuccess Hidden"><i class="success ion-checkmark-round">
                            </i> Mensaje enviado ! <br> Gracias por contactarse con nosotros.
                            <br> Nos estaremos comunicando a la brevedad
                            <div class="FormError Hidden">Error al enviar !</div> 
                        </div> 
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Hormigon Modal -->
    <div id="HormigonModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Solicitar presupuesto de hormigón</h4>
                </div>
                <div class="modal-body contact-form">
                    {!! Form::open(['id' => 'HormigonContactForm', 'method' => 'POST']) !!}
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
                            {!! Form::text('data4', null, ['class' => 'form-control', 'placeholder' => 'TIPO DE SERVICIO', 'required']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::text('data5', null, ['class' => 'form-control', 'placeholder' => 'EMPRESA (CUIT)', 'required']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::text('data6', null, ['class' => 'form-control', 'placeholder' => 'DIRECCIÓN DE OBRA', 'required']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::text('data7', null, ['class' => 'form-control', 'placeholder' => 'RESPONSABLE DE OBRA', 'required']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::text('data8', null, ['class' => 'form-control', 'placeholder' => 'REQUERIMIENTO PARTICULAR', 'required']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::textarea('message', null, ['size' => '30x5', 'class' => 'form-control', 'placeholder' => 'CONSULTA / MENSAJE']) !!}
                        </div>
					    {{ csrf_field() }} 
                        <button type="submit" class="HormigonFormBtn btn btnBlue contactBtn">Enviar</button>
                    {!! Form::close() !!}
                    <div id="ResponsesHormigonForm"> 
                        <div class="FormSuccess Hidden"><i class="success ion-checkmark-round">
                            </i> Mensaje enviado ! <br> Gracias por contactarse con nosotros.
                            <br> Nos estaremos comunicando a la brevedad
                        </div> 
                        <div class="FormError Hidden">Error al enviar !</div> 
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>