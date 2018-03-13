@extends('layouts.web.main')
@section('title', 'Cimhe | Profesionales')

@section('styles')
    {{-- Slider --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('plugins/swiper-slider/swiper.min.css') }}">
@endsection

@section('content')
    <div class="top-space-big"></div>
    <div class="container-fluid top-banner">
        <div class="container">
            <div class="row">
            </div>
        </div>
    </div>

    <section class="small-section maincolor-back">
        <div class="container">
            <div class="row text-center">
                <h1>Profesionales Intervinientes</h1>    
            </div>
        </div>
    </section>

    <section class="small-section profesionales-section-1 enum-items-left grey-back">
        <div class="container">
            <div class="row">
                <h2>Prof. Ing. Humberto M. Balzamo</h2>
                <hr>
                <div class="row inner">
                    <h4>Antecedentes Universitarios</h4>
                    <div class="col-md-12 pad0 item">
                        <img src="webimages/main/punto.png" alt="">
                        <p>ESTUDIOS TERCIARIOS, UNIVERSITARIOS DE GRADO: Institución: Facultad de Ingeniería – Universidad de Buenos Aires Título obtenido: Ingeniero Civil con
                        especialización en Construcciones (1998).</p>
                    </div>
                    <div class="col-md-12 pad0 item">
                        <img src="webimages/main/punto.png" alt="">
                        <p>TÍTULOS DE POSGRADO: Carreras de especialización, Maestrías y Doctorados: Maestría en Tecnología del Hormigón – U.N.C.P.B.A. – Olavarría. Categorizado
                        como grado "C" por la CONEAU.</p>
                    </div>
                </div>
                <div class="row inner">
                    <h4>Antecedentes laborales</h4>
                    <?php $items =  array(
                                    'Asesor Técnico especialista en Tecnología del Hormigón para CIMHE S.R.L. Duración: Desde 2011 hasta la actualidad.',
                                    'Asesor Técnico – Consultor. Estudio G& G Ingenieros (Ing. Alberto Giovambattista y Juan Carlos Galuppo) Duración: Agosto de 2009 hasta la actualidad.',
                                    'Consultor externo de la División Químicos para la Construcción de la empresa Basf Argentina S.A. Duración: Agosto de 2009 hasta la actualidad',
                                    'Director del Laboratorio de Hormigones perteneciente al Laboratorio de Materiales y Estructuras de la Facultad de Ingeniería (UBA). Cargo: Profesor Adjunto. Duración: Marzo de 2004 hasta la actualidad.',
                                    'Asesor Técnico de la División Hormigones en la empresa Basf Argentina S.A. Duración: Junio de 2004 hasta Julio de 2009.',
                                    'Responsable del Área Hormigones en el Centro de Investigaciones de Construcciones – Instituto Nacional de Tecnología Industrial (INTI). Duración: Marzo de 1998 – Mayo 2004',
                                    'Becario (estudio e investigación) en el Laboratorio del Instituto del Cemento Portland. Temas desarrollados: "Hormigones de Alta Performance" "Hormigones de Densidad Controlada" Duración: Mayo de 1996 - Abril de 1997.'
                                ); 
                    foreach($items as $item){
                    ?>
                    <div class="col-md-12 pad0 item">
                        <img src="webimages/main/punto.png" alt="">
                        <p>{{ $item }}</p>
                    </div> 
                    <?php } unset($items); ?>
                </div>
                <div class="row inner">
                    <h4>Publicaciones y antecedentes científicos y de investigación relacionados con la especialidad</h4>
                    <p>Presenta más de 30 publicaciones en diferentes revistas y congresos de gran prestigio. <br>
                    DICTADO DE CURSOS: De especialización y conferencias en Universidades o Instituciones académicas significativas con la especialidad para la que se postula <br>
                    &#9679; Capacitación de personal no docente para el curso de "Técnico de Laboratorio de Ensayo de Materiales" dictado en el Laboratorio de Ensayos del Instituto
                    del Cemento Pórtland, 1997.
                    </p>
                </div>
                <div class="row inner">
                    <h4>Cargos o funciones directivas académicas desempeñadas o que desempeña en universidades nacionales, privadas o estrangeras:</h4>
                    <?php $items =  array(
                                    'Docente de la Cátedra "Comportamiento de las Materiales" en la Facultad de Ingeniería. Ayudante desde agosto de 1997 hasta la actualidad.',
                                    'Docente de la Cátedra "Tecnología del Hormigón" en la Facultad de Ingeniería. Ayudante rentado desde agosto de 2001 hasta febrero 2006.',
                                    'Docente de la Cátedra "Tecnología del Hormigón" en la Facultad de Ingeniería. Jefe de Trabajos Prácticos desde marzo de 2006 hasta la actualidad.',
                                    'Coordinador del Área Hormigones en el Laboratorio de Materiales y Estructuras de la Ftad. de Ingeniería (UBA). Cargo: Profesor Adjunto.',
                                ); 
                    foreach($items as $item){
                    ?>
                    <div class="col-md-12 pad0 item">
                        <img src="webimages/main/punto.png" alt="">
                        <p>{{ $item }}</p>
                    </div> 
                    <?php } unset($items);  ?>
                </div>
                <div class="row inner">
                    <h4>Cargos que desempeñó o desempeña en la administración pública, en el podes ejecutivo, legislativo, judicial o en la actividad profesional privada:</h4>
                    <?php $items =  array(
                                    'IRAM (Instituto Argentino de Normalización) - Subcomités de "Hormigones y sus Aplicaciones" y "Morteros" desde Noviembre de 2001 hasta la actualidad.',
                                    'CyMAT – INTI (Comisión de Condiciones y Medio Ambiente de Trabajo): Miembro suplente desde Marzo 2002 hasta mayo 2004.',
                                    'Miembro de la Comisión Directiva de la Asociación Argentina de Tecnología del Hormigón. De diciembre de 2002 a la actualidad.'
                                ); 
                    foreach($items as $item){
                    ?>
                    <div class="col-md-12 pad0 item">
                        <img src="webimages/main/punto.png" alt="">
                        <p>{{ $item }}</p>
                    </div> 
                    <?php } unset($items);  ?>
                </div>
                <div class="row">
                    <h2>Dr. Cecilia Griselda Guzmán</h2>
                    <hr>
                    <h4>Antecedentes universitarios</h4>
                    <p style="font-size: 0.9rem">
                    FORMACIÓN ACADÉMICA DE GRADO Y POSGRADO: Dra. en Ciencias Geológicas (UBA),
                    posdoctorado de dos años en UBA y un segundo postdoctorado subsidiado por Fundación Bunge y Born. Investigadora Asistente CONICET. <br>
                    La Doctora ha publicado cuatro trabajos en revistas periódicas, tres de ellos como primera autora de dos y primera de tres en revistas internacionales del máximo prestigio en la disciplina (Tectónicas y Journal of
                    Geophysical Research). El tercer artículo ha sido publicado en la R.A.G.A., siendo segunda autora de de cinco. Además reporta otro artículo en la Revista de la Asociación Geológica Argentina en la que también es
                    primera autora. Los tres artículos validados tratan sobre campos de esfuerzos actuales, en uno también incluye la evolución del campo de esfuerzos a través del tiempo, principalmente con información brindada por
                    la elasticidad de pozos analizados en áreas de los Andes patagónicos. Los artículos son de calidad y el estudio de los esfuerzos actuales está relacionado con diferentes situaciones del retroarco como cuencas o
                    inclinación de la placa subducida y sobre relaciones entre erosión fluvial y estructuras de crecimiento en fajas plegadas y corridas. Su producción científica también incluye nueve publicaciones en actas de Congresos,
                    Reuniones y Conferencias, entre éstas dos artículos de dos páginas en las Actas del 17º CGA-Jujuy (2008), uno como primera autora de dos y otro como segunda autora de tres sobre análisis de la deformación en
                    modelos análogos. También ha presentado resúmenes en la GEOSUR (2008) como primera autora de dos y en el Backbones of the Americas (2006) como primera autora de tres, ambos sobre análisis de esfuerzos a
                    partir de elipticidad de pozos. Sobre temáticas similares en diferentes áreas de la cuenca neuquina publicó dos trabajos de cuatro páginas, uno en el ISAG 2005, primera autora de cuatro, y el otro en el 16º CGA-La
                    Plata, primera autora de tres. <br>
                    Tiene dos resúmenes presentados en la 12º Reunión de Tectónica y Geología Estructural (2004). También es primera autora de tres de un resumen presentado en 2008 en la 3rd World Stress Map Conference. Su
                    participación como primera autora en la gran mayoría de las presentaciones a congresos y reuniones está refrendada por la exposición o defensa de éstas. Los resúmenes expandidos (de dos y cuatro
                    páginas) publicados en las actas de estas reuniones han sido sometidos a arbitrajes.
                    Sus trabajos principales han sido publicados en los órganos más importantes de difusión internacional. Demuestra gran protagonismo en la producción científica.
                    </p><br>
                </div>
                <div class="row inner">
                    <h4>Tareas docentes desarrolladas</h4>
                    <div class="col-md-12 pad0 item">
                        <img src="webimages/main/punto.png" alt="">
                        <p>Posee 8 años de experiencia como ayudante de primera en la UBA</p><br>
                    </div>
                    <h4>Otra información relevante</h4>
                    <div class="col-md-12 pad0 item">
                        <img src="webimages/main/punto.png" alt="">
                        <p>Ha participado en 10 proyectos de investigación. Ha actuado como evaluadora de proyectos de la ANPCyT y ha arbitrado un trabajo para una revista internacional</p>
                    </div> 
                </div> 

                <div class="row inner">
                    <h2>Ingeniero Civil Jesus Rojas</h2>
                    <hr>
                </div>
                <div class="row inner">
                    <h4>Estudios Realizados</h4>
                    <div class="col-md-12 pad0 item">
                        <img src="webimages/main/punto.png" alt="">
                        <p>2004 – 2009, Universidad Nacional Experimental de las Fuerzas Armadas / Ingeniero Civil</p>
                    </div>
                    <div class="col-md-12 pad0 item">
                        <img src="webimages/main/punto.png" alt="">
                        <p>1999 – 2002, Instituto Universitario de Tecnología Dr. "Federico Rivero Palacio", Técnico Superior Universitario en Construcciones Civiles. Rango de Promoción 1 – 20.</p>
                    </div>
                </div>
                <div class="row inner">
                    <h4>Curso de Mejoramiento Profesional</h4>
                    <?php $items = array(
                                    'Abril 2010 VENECONSULT 2410 / INESA "Programa de Especialización en Ingeniería Estructural Sismorresistente Utilizando SAP2000, ETABS y SAFE.',
                                    'Febrero 2007, I.U.T. R.C."Normas ISO 9000 Aplicadas en la Educación"',
                                    'Marzo 2005, I.U.T. R.C. "Habilidades Facilitantes"',
                                    'Enero 2004, GUNT "Manejo de Equipos para la Educación en Ingeniería"',
                                    'Marzo 2004, EDUCTRADE, "Uso de Equipos Marca Controls"',
                                    'Mayo 2003, I.U.T. R.C. "Expresión Verbal y Dicción"',
                                    'Julio 2001, C.V.A." Inglés Como Lengua Extranjera" Dominio del Idioma Ingles.'
                                ); 
                    foreach($items as $item){
                    ?>
                    <div class="col-md-12 pad0 item">
                        <img src="webimages/main/punto.png" alt="">
                        <p>{{ $item }}</p>
                    </div> <br>
                    <?php } unset($items);  ?>
                </div>    
                <div class="row inner">
                    <h4>Experiencia Laboral</h4>
                    <?php $items = array(
                                    '2013 – Actualidad, INGENIERIA Y LABORATORIO JPR, C.A. Asociado, Presidente. Ingeniero Inspector de calidad de obras civiles. Técnico analista de Laboratorio en Áreas de Agregados, Cemento, Concreto, Asfalto, Acero Suelos y patología de estructuras. Proyectista en estructuras de Concreto Armado y Técnico en exploraciones Geotécnicas.',
                                    '2013 – 2017, Instituto Universitario de Tecnología Dr. "Federico Rivero Palacio", Departamento de Construcción Civil. Docente Asistente. Dedicación Exclusiva. Cátedras. Resistencia de Materiales, Estructuras de Concreto Armado, Inspección de Obras. Coordinador General de Laboratorios.',
                                    '2012 – 2013, Instituto Universitario de Tecnología Dr. "Federico Rivero Palacio", Departamento de Construcción Civil. Docente Instructor. Dedicación Exclusiva. Cátedras, Tecnología de la Construcción, Materiales de la Construcción, Administración de Obras. Coordinador General de Laboratorios.',
                                    'Marzo 2003 – 2012, Instituto Universitario de Tecnología Dr. "Federico Rivero Palacio", Departamento de Construcción Civil. Auxiliar Docente. Cátedras. Laboratorio de Materiales, Concreto, Mecánica de Suelos',
                                    'Marzo 2003 – 2017, Fundación para el Desarrollo y Asesoría Tecnológica, Laboratorios de Construcciones Civiles (FUNDATEC – LACOCIV), Técnico Analista de Laboratorio en Evaluación y Control de Calidad de Materiales usados en Obras Civiles. Jefe de Laboratorio de Obras Civiles. Administración de Proyectos.',
                                    'Junio 2002- Febrero 2003, Construcciones Copresca, C.A. Técnico Supervisor en Administración y Control de Obras Civiles. Ofertas nuevas, presupuestos análisis de costos y licitaciones.'
                                ); 
                    foreach($items as $item){
                    ?>
                    <div class="col-md-12 pad0 item">
                        <img src="webimages/main/punto.png" alt="">
                        <p>{{ $item }}</p>
                    </div> 
                    <?php } unset($items);  ?>
                </div> 
                <div class="row inner">
                    <h4>Investigación</h4>
                    <?php $items = array(
                                    'Ajustes de las ecuaciones de diseño de mezclas de concreto, Ley de Abrams y Relación Triangular planteadas en el Manual del Concreto Estructural para cemento portland Tipo I, para distintos tipos de cementos.',
                                    'Influencia del Micro Sílice y el Fly ASH como sustitución parcial del cemento en la fabricación de mezclas de concreto de características específicas.',
                                    'Determinación de relaciones entre la resistencia del concreto determinada en Núcleos Core Drills de distintas características y la determinada sobre cilindros estándar estipulados en la Norma COVENIN 338 / ASTM C31C31M',
                                    'Evaluación comparativa entre los métodos ASTM C 227, C 289 y C1260, para determinar la Reactividad Potencial Alcalina en muestras de arenas para concreto de la Región Capital, Caracas Venezuela.'
                                ); 
                    foreach($items as $item){
                    ?>
                    <div class="col-md-12 pad0 item">
                        <img src="webimages/main/punto.png" alt="">
                        <p>{{ $item }}</p>
                    </div> 
                    <?php } unset($items);  ?>
                </div>


            </div>
        </div>
    </section>

    @include('layouts.web.partials.contact')

    @include('layouts.web.partials.foot')
@endsection

@section('scripts')
    <script type="text/javascript" src="{{ asset('plugins/parallax/parallax.min.js') }}"></script>
    {{-- Slider --}}
    <script type="text/javascript" src="{{ asset('plugins/swiper-slider/swiper.jquery.min.js') }}"></script>
@endsection

@section('custom_js')
<script>    

</script>
@endsection