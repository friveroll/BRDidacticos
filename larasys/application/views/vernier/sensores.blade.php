@layout('layouts.master')

    @section('meta_seo')

    <meta name="description" content="Los Sensores Vernier permiten a los estudiantes colectar datos experimentales en tiempo real" />
    <link rel="canonical" href="http://brdidacticos.mx/sensores-vernier" />
    <meta property='og:locale' content='es_MX'/>
    <meta property='og:title' content='Sensores Vernier - Puebla'/>
    <meta property='og:description' content='Los Sensores Vernier permiten a los estudiantes colectar datos experimentales en tiempo real'/>
    <meta property='og:url' content='http://brdidacticos.mx/sensores-vernier'/>
    <meta property='og:site_name' content='Productos Vernier en Puebla'/>
    <meta property='og:type' content='article'/>

    @endsection

    @section('head')
       	{{ HTML::style('/assets/css/sensores.min.css') }}
    @endsection

    @section('page_title')

        Sensores Vernier en Puebla

    @endsection

@section('header')
 <!-- Header -->
	<header class="row-fluid media" id="header">
		{{ HTML::image('assets/img/ciencia-con-tecnologia.png', 'Vernier',  array("class" =>"pull-left media-object", "data-src"=>"holder.js/133x58"))}}
	</header>

@endsection

@section('navbar')
	<li><a href="{{URL::base();}}"><i class="icon-home"></i> Inicio</a></li>
	<li><a href="{{URL::to_route('acerca');}}" ><i class="icon-info-sign"></i> Acerca</a></li>
	<li><a href="{{URL::to_route('contacto');}}" ><i class="icon-envelope"></i> Contacto</a></li>

@endsection


@section('content')

	<section class="row-fluid">

	<div class="well2 span12">
	    <h1>Sensores Vernier como Ayuda para la docencia.</h1>
	    <section class="row-fluid">
	        <div class="span6">
	            <p>
	                Un sensor (tambi&eacute;n llamado detector) es un dispositivo capaz de detectar magnitudes
	                f&iacute;sicas o qu&iacute;micas, llamadas variables de instrumentación, y transformarlas en
	                variables el&eacute;ctricas. <br><br>

	                Los <strong>Sensores Vernier</strong> permiten registrar los datos en funci&oacute;n del
	                tiempo, de manera que el estudiante puede observar como se generan los datos durante el
	                experimento en tiempo real, y al mismo tiempo analizarlos para poder obtener m&uacute;ltiples graficos.
	            </p>
	        </div>
	        <div class="span6">
	            <h3>La ventaja de los Sensores Vernier</h3>
	            <p>
	                Solo conecte el sensor y comienze a colectar datos. Todos los <strong>Sensores Vernier</strong>
	                se configuran de manera autom&aacute;tica para la recolecci&oacute;n de datos cuando
	                se utilizan con interfases compatibles. La tecnolog&iacute;a es amigable con los estudiantes
	                est&aacute; dise&ntilde;ada para su f&aacute;cil uso.
	            </p>
	            <h3>Los experimentos se ajustan a cualquier plan de estudios</h3>
	            <p>
	                Los <strong>Sensores Vernier</strong> son compatibles con m&aacute;s de 400 experimentos detallados
	                elaborados por cient&iacute;ficos, profesores y expertos en tecnolog&iacute;a, disponibles en los
	                <a href="http://www.vernier.com/products/books/" rel="nofollow" target="_blank">manuales de laboratorio Vernier</a>.
	            </p>

	        </div>
	    </section>
	    <h2 style="text-align: center;">Nuevos Sensores</h2>
	    <section class="row-fluid">
	        <div class="span2">
	            {{ HTML::image('assets/img/sonda-de-optica-de-oxigeno-disuelto-vernier.png', 'Sensores Vernier: Sonda &oacute;ptica de Ox&iacute;geno disuelto', array('title'=>'Sensores Vernier: Piran&oacute;metro', 'class'=>'thumbnail',)) }}
	        </div>
	        <div class="span2">
	            {{ HTML::image('assets/img/piranometro.png', 'Sensores Vernier: Piran&oacute;metro', array('title'=>'Sensores Vernier: Piran&oacute;metro', 'class'=>'thumbnail',)) }}
	        </div>
	        <div class="span2">
	            {{ HTML::image('assets/img/monitor-de-radiacion-vernier.png', 'Sensores Vernier: Monitor de Radiaci&oacute;n', array('title'=>'Sensores Vernier: Monitor de Radiaci&oacute;n', 'class'=>'thumbnail',)) }}
	        </div>
	        <div class="span2">
	            {{ HTML::image('assets/img/goinometro-vernier.png', 'Sensores Vernier: Goin&oacute;metro', array('title'=>'Sensores Vernier: Goin&oacute;metro', 'class'=>'thumbnail',)) }}
	        </div>
	        <div class="span2">
	            {{ HTML::image('assets/img/mini-gc-plus-vernier.png', 'Sensores Vernier: Cromat&oacute;grafo de gases Mini GC Plus', array('title'=>'Sensores Vernier: Cromat&oacute;grafo de gases Mini GC Plus', 'class'=>'thumbnail',)) }}
	        </div>
	        <div class="span2">
	            {{ HTML::image('assets/img/sensor-vernier-etanol.png', 'Sensores Vernier: Sensor de Etanol', array('title'=>'Sensores Vernier: Sensor de Etanol', 'class'=>'thumbnail',)) }}
	        </div>
	    </section>

	    <br><br>
	    <h2>Tabla de Compatibilidad de Sensores e interfases</h2>
	    <small><i class="icon-question-sign"></i> Instrucciones: escriba las tres primeras letras de la clave, nombre del sensor o interfase
	        en los campos de texto de la tabla para buscar la informaci&oacute;n deseada, tambi&eacute;n puede
	        elegir el numero de filas para poder observar los resutlados en una sola p&aacute;gina. <br><br> </small>
	    <div id="bbGrid-search"></div>
	</div>

	</section>


@endsection

@section('scripts')

	{{ HTML::script('assets/js/sensores.min.js'); }}


@endsection
