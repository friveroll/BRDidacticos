@layout('layouts.master')

    @section('meta_seo')

        <meta name="description" content="Somos distribuidores autorizados de vernier en Puebla "/>
        <link rel="canonical" href="http://brdidacticos.mx/acerca" />
        <meta property='og:locale' content='es_MX'/>
        <meta property='og:title' content='Vernier Puebla - Acerca '/>
        <meta property='og:description' content='Somos distribuidores autorizados de vernier en Puebla' />
        <meta property='og:url' content='http://brdidacticos.mx/acerca'/>
        <meta property='og:site_name' content='Productos Vernier en Puebla'/>
        <meta property='og:type' content='article'/>

    @endsection

    @section('page_title')

        Vernier Puebla - Acerca

    @endsection

@section('header')
<header class="row-fluid media" id="header">
	{{ HTML::image('/assets/img/ciencia-con-tecnologia.png', 'Vernier',  array("class" =>"pull-left media-object", "data-src"=>"holder.js/133x58"))}}
</header>
@endsection

@section('navbar')
	<li><a href="{{URL::base();}}"><i class="icon-home"></i> Inicio</a></li>
	<li class="active"><a href="{{URL::current();}}" ><i class="icon-info-sign"></i> Acerca</a></li>
	<li><a href="{{URL::to_route('contacto');}}" ><i class="icon-envelope"></i> Contacto</a></li>
@endsection

@section('content')
	<div class="container-fluid">
		<div class="row-fluid">
			<div class="span10 offset1">
				<div>

					<h1>Video: Taller Tecnología VERNIER para el Laboratorio de Ciencias e Ingenieria</h1>


				</div>
				<div class="row-fluid well center">
						<div id="video" style="width: 433px; height: 362px;" class="span4 offset1"></div>
					<div id="slidesharediv" class="span4 offset1"></div>
				</div>
			</div>
		</div>
	</div>

<div class="container-fluid">
	<div itemscope itemtype="http://schema.org/LocalBusiness">
		<div class="row-fluid well">
		<div class="span6">
			<meta itemprop="name" content="Vernier Puebla" />
			<meta itemprop="brand" content="Vernier" />
			<meta itemprop="description" content="Somos distribuidores distribuidores autorizados para la venta de productos Vernier en Puebla." />
			<h3>Somos distribuidores distribuidores autorizados para la venta de productos Vernier en Puebla.</h3>
			<p>Trabajamos en conjunto con <a href="http://lctdidacticos.com/DISTRIBUIDORES.html"><span itemprop="branchOf">LCTDidácticos</span></a> el cuál es el distribuidor Exclusivo de <a href="http://www.vernier.com/ordering/international-dealers/?country=Mexico">Vernier en M&eacute;xico</a> </p>
		</div>
		<div class="span6">
		<p>Ofrecemos:</p>
			<ul>
				<li>Venta.</li>
				<li>Soporte.</li>
				<li>Asesoría y Capacitación para que aproveche al m&aacute;ximo los productos que adquiera.</li>
				<li>Traducción de Manuales y experimentos para los productos Vernier.</li>
			</ul>
		</div>

		</div>
	</div>
</div>


@endsection

@section('scripts')

	{{ HTML::script('assets/js/acerca.min.js'); }}

@endsection
