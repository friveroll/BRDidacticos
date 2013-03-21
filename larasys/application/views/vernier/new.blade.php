@layout('layouts.master')

@section('header')
 <!-- Header -->
<div class="container-fluid" style="padding-top:2%;">
<header class="row-fluid media" id="header">
	{{ HTML::image('/img/ciencia-con-tecnologia.png', 'Vernier',  ["class" =>"pull-left media-object", "data-src"=>"holder.js/133x58"])}}
	{{ HTML::style('src/bootstrap-wysihtml5.css') }}
<style>
	#message
	{
		max-width: auto;
		width: 500px; 
		max-height: auto;
		height: 200px;
	}	
</style>

</header>
@endsection

@section('navbar')
	<li><a href="{{URL::base();}}"><i class="icon-home"></i> Inicio</a></li>
	<li><a href="{{URL::to_route('acerca');}}" ><i class="icon-info-sign"></i> Acerca</a></li>
	<li class="active"><a href="{{URL::current();}}" ><i class="icon-envelope"></i> Contacto</a></li>
@endsection

@section('content')




<div class="container-fluid">    
   	<form>
      		
    	<section class="row-fluid">
      		<div class="span6 offset3 well">
      			<h1>Contacto</h1>
      			<p>Rellene el siguiente formulario y uno de nuestros ejecutivos se pondr&aacute; en contacto con usted</p>
      			<div class="controls-row row-fluid">
	      			<div class="input-prepend">
	      				<span class="add-on"><i class="icon-user"></i></span>
	      				<input type="text" placeholder="Nombre">
	      			</div>
	      			<div class="input-prepend">
	      			    <span class="add-on"><i class="icon-building"></i></span>
	      			    <input type="text" placeholder="Instituci&oacute;n">
	      			</div>
	      		</div>
	      		<div class="controls-row row-fluid">
	      			<div class="input-prepend">
	      			    <span class="add-on"><i class="icon-envelope"></i></span>
	      			    <input type="text" placeholder="Correo electr&oacute;nico">
	      		    </div>
	      			<div class="input-prepend">
	      			    <span class="add-on"><i class=" icon-phone"></i></span>
	      			    <input type="text" placeholder="Tel&eacute;fono">
	      			</div>
	      		</div>
				<div class="controls">
      				<label>Asunto
      				<select id="subject" name="subject">
      					<option value="na" selected="">Escoja Uno:</option>
      					<option value="servicio">Servicio General al Cliente</option>
      					<option value="sugerencias">Sugerencias</option>
      					<option value="cotizacion">Cotizaci&oacute;n</option>
      				</select>
      				</label>
      			</div>
   
      				<textarea name="message" id="message" placeholder="Mensaje"></textarea>
      			<div class="controls">
      				<button type="submit" class="btn btn-br">Enviar</button>
				</div>
      		</div>
      	</section>      		
    </form>
</div>
@endsection

@section('scripts')

    @parent
    {{ HTML::script('lib/js/wysihtml5-0.3.0.js') }}
	{{ HTML::script('src/bootstrap-wysihtml5.js') }}
    {{ HTML::script('js/contacto.js') }}

    
@endsection