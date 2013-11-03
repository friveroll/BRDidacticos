<!doctype html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	@yield('meta_seo')

	{{ HTML::style('assets/css/producto.min.css') }}
	<script type="text/javascript">

	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-39149409-1']);
	  _gaq.push(['_trackPageview']);

	  (function() {
	    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();

	</script>

	
	<title>
		@yield('page_title')
	</title>
	
</head>
<body>
<div itemscope itemtype="http://schema.org/Product">
	<div class="container-fluid main-container">
		<header class="row-fluid media" id="header">
	    	{{ HTML::image('assets/img/ciencia-con-tecnologia.png', 'Vernier', array('class' => 'pull-left media-object', 'data-src' => "holder.js/133x58")); }} 
	    </header>
		<div class="navbar">
		  <div class="navbar-inner">
		    <ul class="nav">
		      <li><a href="{{URL::base();}}"><i class="icon-home"></i> Inicio</a></li>
		      <li><a href="{{URL::to_route('acerca');}}" ><i class="icon-info-sign"></i> Acerca</a></li>
		      <li><a href="{{URL::to_route('sensores');}}"><i class="icon-circle-blank"></i> Sensores</a></li>
		      <li><a href="{{URL::to_route('contacto');}}"><i class="icon-envelope"></i> Contacto</a></li> 
		    </ul>
		  </div>
		</div>
	</div>

	<div class="container-fluid">
		<div class="well">
		<section class="row-fluid">
		  
      		<div class="title">
      			@yield('title')
      		</div>

			<!--Gallery-->
	        <section class="row-fluid">
	        	<div class="span3"></div>            
	            <div class="thumbnail span6">
	              <div id="gallery">
	                <div id="panel" class="product-gallery">
	                  		@yield('gallery_main_image')
	                  	<div id="description" class="carousel-caption">
	                  		@yield('gallery_main_desc')	                  	
	                  	</div>
	                </div>                
	              </div>
	            </div>
	            <div class="span3"></div>
	        </section>
	    
		</section>
		<section class="row-fluid">
        	<div class="span1"></div>
        	<div id="thumbs" class="center">
        		<ul class="thumbnails">
        			<li class="span2">
        				<a href="#" class="thumbnail">
        					@yield('gallery_image_thumb_1')
        				</a>
        			</li>
					<li class="span2">
						<a href="#" class="thumbnail">
							@yield('gallery_image_thumb_2')
						</a>
					</li>
					<li class="span2">
						<a href="#" class="thumbnail">
							@yield('gallery_image_thumb_3')
						</a>
					</li>
					<li class="span2">
						<a href="#" class="thumbnail">
							@yield('gallery_image_thumb_4')
						</a>
					</li>
					<li class="span2">
						<a href="#youtube" class="thumbnail video" role="button" data-toggle="modal">
							@yield('gallery_image_thumb_5')
						</a>
					</li>
				</ul>
				<div id="youtube" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				  <div class="modal-header">
				    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				    <h3 id="myModalLabel">
				    	@yield('youtube_label')
				    </h3>
				  </div>
				  <div class="modal-body">
				  </div>
				  <div class="modal-footer">
				    <button class="btn btn-br" data-dismiss="modal" aria-hidden="true">Cerrar</button>                       
				  </div>
				</div>

						
        	</div>
        	<div class="span1"></div>        	
        </section>

        <ul class="nav nav-pills">
          <li class="active"><a href="#descripcion" data-toggle="tab">Descripción</a></li>
          <li><a href="#spec" data-toggle="tab" class="tab">Especificaciones</a></li>
          <li><a href="#aplicacion" data-toggle="tab" class="tab" >Aplicacion</a></li>
          <li><a href="#soporte" data-toggle="tab" class="tab">Soporte</a></li>
        </ul>
          <div id="myTabContent" class="tab-content">
            <div class="tab-pane active in" id="descripcion">
            	@yield('descripcion')
           </div>
            <div class="tab-pane fade" id="spec">
            	@yield('spec')          
            </div>
            <div class="tab-pane fade" id="aplicacion">
            	@yield('aplicacion')
            </div>
            <div class="tab-pane fade" id="soporte">
            <h3>Manual del Usuario</h3>
            <ul>
              <li>
              	 @yield('soporte_manual')
              </li>
            </ul>
            <h3>Recursos en línea</h3>
            <ul>
            	@yield('soporte_renlinea')
            	<li>{{ HTML::link('http://www.vernier.com/forums/', 'Foros de discusión', array('rel'=>'nofollow')); }}</li>
            </ul>
            <h3>Garantía</h3>
                <ul>
                  <li>
                  	@section('soporte_garantia')
                  	{{ HTML::link('http://www.vernier.com/ordering/warranty-policy/', 'Garantía limitada de 5 años', array('rel'=>'nofollow')); }}
                  	@yield_section
                  </li>
                </ul>

            <h3>Contáctenos</h3>
            <ul>
              <li>Teléfono</li>
              <li>Correo</li>
            </ul>
            <h3>Refacciones</h3>
            <ul>
              @yield('refacciones')
            </ul>
            </div>
        </div>

            <section class="row-fluid">
              <div class="span6">
                <h2>Que está incluido</h2>
                	@yield('incluido')
              </div>
              <div class="span6">
                <h2>Requerimientos del Sensor</h2>
                	@yield('requerimientos')
                <h3>Interfases compatibles</h3>
                	@yield('interfases')
              </div>
            </section>
        </div>
	</div>
</div>


	<div class="footer">
		  <div class="container-fluid">
		  	<div class="row-fluid">
		  		<p class="author pull-right"><a href="http://feliperiveroll.name"><i class="icon-suitcase"></i> <small>Diseño: Felipe Riveroll Aguirre</small></a></p>		    
		    	<p class="author"><a href="http://brconsultores.org">BRConsultores &copy; 2013</a></p>
		    </div>
		  </div>
	</div>
	{{ HTML::script('assets/js/producto.min.js') }}
</body>
</html>