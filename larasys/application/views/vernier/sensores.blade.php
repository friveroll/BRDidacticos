@layout('layouts.master')

    @section('meta_seo')
    
    <meta name="description" content="Los Sensores Vernier permiten a los estudiantes colectar datos experimentales en tiempo real" />
    <link rel="canonical" href="http://vernier.mx/sensores-vernier" />
    <meta property='og:locale' content='es_MX'/>
    <meta property='og:title' content='Sensores Vernier - Puebla'/>
    <meta property='og:description' content='Los Sensores Vernier permiten a los estudiantes colectar datos experimentales en tiempo real'/>
    <meta property='og:url' content='http://vernier.mx/sensores-vernier'/>
    <meta property='og:site_name' content='Productos Vernier en Puebla'/>
    <meta property='og:type' content='article'/>
        
    @endsection

    @section('head')
    
        @parent
       	{{ HTML::style('js/bbGrid/bbGrid.css') }}

        
    @endsection
    
    @section('page_title')
    
        Sensores Vernier en Puebla
        
    @endsection

@section('header')
 <!-- Header -->
<div class="container-fluid" style="padding-top:2%;">
<header class="row-fluid media" id="header">
	{{ HTML::image('/img/ciencia-con-tecnologia.png', 'Vernier',  array("class" =>"pull-left media-object", "data-src"=>"holder.js/133x58"))}}
</header>
@endsection

@section('navbar')
	<li><a href="{{URL::base();}}"><i class="icon-home"></i> Inicio</a></li>
	<li><a href="{{URL::current();}}" ><i class="icon-info-sign"></i> Acerca</a></li>
	<li><a href="{{URL::to_route('contacto');}}" ><i class="icon-envelope"></i> Contacto</a></li>
@endsection

@section('content')

<h1>Contenido</h1>


@endsection

@section('scripts')

    {{ HTML::script('js/jquery-1.9.1.js'); }}
    {{ HTML::script('js/bootstrap.js'); }}
    {{ HTML::script('js/underscore.js'); }}    
	{{ HTML::script('js/backbone.js'); }}
	{{ HTML::script('js/bbGrid/bbGrid.js'); }}
	{{ HTML::script('js/sensores.js'); }}
	
    
@endsection