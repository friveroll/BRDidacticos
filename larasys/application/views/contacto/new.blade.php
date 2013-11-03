@layout('layouts.master')

@section('head')
    {{ HTML::style('assets/css/contacto.min.css') }}
@endsection

@section('meta_seo')

    <meta name="description" content="Contactanos si necesitas informacion o alguna cotizazion de productos vernier en Puebla" />
    <link rel="canonical" href="http://vernier.mx/contacto" />
    <meta property='og:locale' content='es_MX'/>
    <meta property='og:title' content='Productos Vernier - Puebla'/>
    <meta property='og:description' content='Contactanos si necesitas informacion o alguna cotizazion de productos vernier en Puebla'/>
    <meta property='og:url' content='http://vernier.mx/contacto'/>
    <meta property='og:site_name' content='Productos Vernier en Puebla'/>
    <meta property='og:type' content='article'/>
    
@endsection

@section('header')
 <!-- Header -->
<header class="row-fluid media" id="header">
  {{ HTML::image('assets/img/ciencia-con-tecnologia.png', 'Vernier Puebla', array('class' => 'pull-left media-object', 'data-src' => "holder.js/133x58")); }}
</header>
@endsection

@section('page_title')
  Contacto - Vernier Puebla
@endsection

@section('navbar')
  <li><a href="{{URL::base();}}"><i class="icon-home"></i> Inicio</a></li>
  <li><a href="{{URL::to_route('acerca');}}" ><i class="icon-info-sign"></i> Acerca</a></li>
  <li><a href="{{URL::to_route('sensores');}}"><i class="icon-circle-blank"></i> Sensores</a></li>
  <li class="active"><a href="{{URL::current();}}" ><i class="icon-envelope"></i> Contacto</a></li>
@endsection

@section('content')
<div class="container-fluid">    
    {{ Form::open(URL::to_route('contacto')) }}
      <section class="row-fluid">
          <div class="span6 offset3 well">
            {{ render('shared._notifications') }}
            <h1>Contacto</h1>
            <p>Rellene el siguiente formulario y uno de nuestros ejecutivos se pondr&aacute; en contacto con usted</p>
            <div class="controls-row row-fluid">
              <div class="input-prepend">
                <span class="add-on"><i class="icon-user"></i></span>
                <input type="text" name='nombre' placeholder="Nombre">
              </div>
              {{ $errors->first('nombre', "<span class='error'>:message</span>") }}
              <div class="input-prepend">
                  <span class="add-on"><i class="icon-building"></i></span>
                  <input type="text" name='institucion' placeholder="Instituci&oacute;n">
              </div>
              {{ $errors->first('institucion', "<span class='error'>:message</span>") }}
            </div>
            <div class="controls-row row-fluid">
              <div class="input-prepend">
                  <span class="add-on"><i class="icon-envelope"></i></span>
                  <input type="text" name='correo' placeholder="Correo electr&oacute;nico">
                </div>
              {{ $errors->first('correo', "<span class='error'>:message</span>") }}
              <div class="input-prepend">
                  <span class="add-on"><i class=" icon-phone"></i></span>
                  <input type="text" name='telefono' placeholder="Tel&eacute;fono">
              </div>
              {{ $errors->first('telefono', "<span class='error'>:message</span>") }}
            </div>
        <div class="controls">
              <label>Asunto
              <select id="subject" name='asunto'>
                <option value="" selected="">Escoja Uno:</option>
                <option value="Servicio al cliente">Servicio General al Cliente</option>
                <option value="Sugerencias">Sugerencias</option>
                <option value="Cotizacion">Cotizaci&oacute;n</option>
              </select>
            {{ $errors->first('asunto', "<span class='error'>:message</span>") }}
              </label>
            </div>
          <div> 
              <textarea name='mensaje' id="message" placeholder="Mensaje"></textarea>
              {{ $errors->first('mensaje', "<br><span class='error'>:message</span>") }}
            </div>
            <div class="controls">
              <button type="submit" class="btn btn-br">Enviar</button>
        </div>
          </div>
        </section>          
    {{ Form::close() }}
</div>
@endsection
@section('scripts')
    {{ HTML::script('assets/js/contacto.min.js') }}
@endsection