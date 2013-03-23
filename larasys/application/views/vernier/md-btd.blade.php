@layout('layouts.producto')

  @section('meta_seo')

      <meta name="description" content="El sensor de movimiento se utiliza para registrar en tiempo real los datos de posición, velocidad y aceleración de objetos en movimiento."/>
      <link rel="canonical" href="http://vernier.mx/sensores/sensor-de-movimiento" />
      <meta property='og:locale' content='es_MX'/>
      <meta property='og:title' content='Vernier Puebla - Sensor de Movimiento '/>
      <meta property='og:description' content='El sensor de movimiento se utiliza para registrar en tiempo real los datos de posición, velocidad y aceleración de objetos en movimiento.' />
      <meta property='og:url' content='http://vernier.mx/sensores/sensor-de-movimiento'/>
      <meta property='og:site_name' content='Productos Vernier en Puebla'/>
      <meta property='og:type' content='article'/>
      
  @endsection

  @section('page_title')
  
      Sensor de Movimiento - Vernier Puebla
      
  @endsection

	@section('title')
    
  	<h1>
      <span itemprop="name">
        Sensor de Movimiento
      </span>
    </h1>
    
    <meta itemprop='productID' content='md-btd'/>

	@endsection

  	@section('gallery_main_image')
 	   	{{ HTML::image('assets/img/motion_sensor_03_large.jpg', 'Uso de LabQuest2 y LoggerPro como interfase para el sensor de movimiento', array("id" => "largeImage")); }} 
    @endsection

    @section('gallery_main_desc')
		Uso de LabQuest2 y LoggerPro como interfase para el sensor de movimiento
    @endsection

    @section('gallery_image_thumb_1')
   		{{ HTML::image('assets/img/motion_sensor_01_thumb.jpg', 'Sensor de Movimiento')}}
    @endsection

    @section('gallery_image_thumb_2')
    		{{ HTML::image('assets/img/motion_sensor_02_thumb.jpg', 'Sistema de Din&aacute;mica Vernier y Sensor de Movimiento')}}
    @endsection

    @section('gallery_image_thumb_3')
    		{{ HTML::image('assets/img/motion_sensor_03_thumb.jpg', 'Uso de LabQuest2 y LoggerPro como interfase para el sensor de movimiento')}}
    @endsection

    @section('gallery_image_thumb_4')
    		{{ HTML::image('assets/img/motion_sensor_04_thumb.jpg', 'Datos de ejemplo: Pelota rebotando')}}
    @endsection

    @section('gallery_image_thumb_5')
    		{{ HTML::image('assets/img/motion_sensor_05_thumb.jpg', 'Video Consejos t&eacute;cnicos de Vernier')}}
   	@endsection

   	@section('youtube_label')
        <strong>Sensor de Movimiento</strong>
    @endsection

    @section('descripcion')
           <p>
              <span itemprop="description">El <strong>sensor de movimiento</strong> utiliza ultrasonido para medir la posición de carros, pelotas, gente y otros objetos.</span>
            </p>
            <ul>
              <li>
                Mida objetos desde 15cm hasta 6m.
              </li>
              <li>
                Se acopla f&aacute;cilmente a el sistema de din&aacute;mica Vernier
              </li>
              <li>
                El interruptor de sensibilidad reduce el ruido y produce una mejora en la calidad de la colecci&oacute;n de datos para el estudio de carros pista.
              </li>
              <li>
                Su cabeza movible permite flexibilidad para el montaje de sus experimentos.
              </li>
            </ul>

   	@endsection

   	@section('spec')
   	    <p>
   	      Especificaciones
   	    </p>
   	    <ul>
   	      <li>Rango: 0.15 to 6 m</li>
   	      <li>Resoluci&oacute;n: 1 mm</li>
   	    </ul>
   	@endsection

   	@section('aplicacion')
   	
   	    <h2>Experimentos</h2>
   	    <p>El sensor de movimiento puede ser utilizado con los siguientes manuales.</p>
   	    <ul class="icons">
   	      <li><i class="icon-book"></i> {{ HTML::link('http://www.vernier.com/products/books/rwv/', 'Real-World Math with Vernier', array('rel'=>'nofollow')); }}</li>
   	      <li><i class="icon-book"></i> {{ HTML::link('http://www.vernier.com/products/books/pwv/', 'Physics with Vernier', array('rel'=>'nofollow')); }}</li>
   	      <li><i class="icon-book"></i> {{ HTML::link('http://www.vernier.com/products/books/msv/', 'Middle School Science with Vernier', array('rel'=>'nofollow')); }}</li>
   	      <li><i class="icon-book"></i> {{ HTML::link('http://www.vernier.com/products/books/ewv/', 'Elementary Science with Vernier', array('rel'=>'nofollow')); }}</li>
   	      <li><i class="icon-book"></i> {{ HTML::link('http://www.vernier.com/products/books/psv/', 'Physical Science with Vernier', array('rel'=>'nofollow')); }}</li>
   	      <li><i class="icon-book"></i> {{ HTML::link('http://www.vernier.com/products/books/phys-am/', 'Advanced Physics with Vernier - Mechanics', array('rel'=>'nofollow')); }}</li>
   	      <li><i class="icon-book"></i> {{ HTML::link('http://www.vernier.com/products/books/swn/', 'Science with TI-Nspire Technology', array('rel'=>'nofollow')); }}</li>
   	      <li><i class="icon-book"></i> {{ HTML::link('http://www.vernier.com/products/books/fwv/', 'Forensics with Vernier', array('rel'=>'nofollow')); }}</li>
   	      <li><i class="icon-book"></i> {{ HTML::link('http://www.vernier.com/products/books/esv/', 'Earth Science with Vernier', array('rel'=>'nofollow')); }}</li>
   	      <li><i class="icon-book"></i> {{ HTML::link('http://www.vernier.com/products/books/epv/', 'Engineering Projects with NI LabVIEW and Vernier', array('rel'=>'nofollow')); }}</li>
   	    </ul>

   	    <h2>Ideas para Laboratorio</h2>
   	    <ul class="icons">
   	      <li><i class="icon-external-link"></i> {{ HTML::link('http://www.vernier.com/innovate/dimensions-of-a-rotating-box/', 'Dimensions of a Rotating Box', array('rel'=>'nofollow')); }}</li>
   	      <li><i class="icon-external-link"></i> {{ HTML::link('http://www.vernier.com/innovate/speed-of-sound-with-a-motion-detector/', 'Speed of Sound with a Motion Detector', array('rel'=>'nofollow')); }}</li>
   	      <li><i class="icon-external-link"></i> {{ HTML::link('http://www.vernier.com/innovate/measuring-stress-limits-of-printer-ribbon/', 'Measuring Stress Limits of Printer Ribbon', array('rel'=>'nofollow')); }}</li>
   	      <li><i class="icon-external-link"></i> {{ HTML::link('http://www.vernier.com/innovate/creating-a-topographic-map-with-motion-detectors/', 'Creating a Topographic Map with Motion Detectors', array('rel'=>'nofollow')); }}</li>
   	      <li><i class="icon-external-link"></i> {{ HTML::link('http://www.vernier.com/innovate/hookes-law/', "Hooke's Law", array('rel'=>'nofollow')); }}</li>
   	      <li><i class="icon-external-link"></i> {{ HTML::link('http://www.vernier.com/innovate/exploring-animated-vector-displays-in-logger-pro/', 'Exploring Animated Vector Displays in Logger Pro', array('rel'=>'nofollow')); }}</li>
   	      <li><i class="icon-external-link"></i> {{ HTML::link('http://www.vernier.com/innovate/video-analysis-with-high-speed-cameras/', 'Exploring Animated Vector Displays in Logger Pro', array('rel'=>'nofollow')); }}</li>
   	      <li><i class="icon-external-link"></i> {{ HTML::link('http://www.vernier.com/innovate/video-analysis-with-high-speed-cameras/', 'Video Analysis with High-Speed Cameras', array('rel'=>'nofollow')); }}</li>
   	      <li><i class="icon-external-link"></i> {{ HTML::link('http://www.vernier.com/innovate/elastic-hysteresis-of-a-rubber-band/', 'Elastic Hysteresis of a Rubber Band', array('rel'=>'nofollow')); }}</li>
   	      <li><i class="icon-external-link"></i> {{ HTML::link('http://www.vernier.com/innovate/physics-puzzle/', 'Physics Puzzle', array('rel'=>'nofollow')); }}</li>
   	    </ul>
   	    
   	@endsection

   	@section('soporte_manual')
       	{{ HTML::link('http://www.vernier.com/files/manuals/md-btd.pdf', 'Descargar Manual del Usuario', array('rel'=>'nofollow')); }}
   	@endsection

   	@section('soporte_renlinea')
	      <li>
	         	{{ HTML::link('http://www.vernier.com/til/1374/', 'Preguntas Frecuentes y Guía de problemas', array('rel'=>'nofollow')); }}
      	</li>            
   	@endsection

   	@section('refacciones')
      <li>
   	    {{ HTML::link('http://www.vernier.com/products/accessories/mdc-btd/', 'Cable de sensor digital', array('rel'=>'nofollow')); }}
      </li>
   	@endsection

   	@section('incluido')
   	    <p>
   	      El sensor de movimiento viene con el <span itemprop="isAccessoryOrSparePartFor">detector de movimiento</span> y un <span itemprop="isAccessoryOrSparePartFor">cable</span> que conecta el sensor de movimiento a las interfases compatibles.
   	    </p>
   	@endsection

   	@section('requerimientos')
   	    <p>
   	      El sensor de movimiento requiere una interfaz compatible para coleccionar datos. La interfase y el software se venden por separado
   	    </p>
   	@endsection

   	@section('interfases')
   	
   	    <p>El <strong>sensor de movimiento</strong> es compatible con las siguientes interfases</p>
   	    <ul>
   	      <li><a href="{{URL::to_route('labq2');}}"><span itemprop="isRelatedTo">LabQuest 2</span></a></li>
   	      <li><span itemprop="isRelatedTo">LabQuest</span></li>
   	      <li><span itemprop="isRelatedTo">LabQuest Mini</span></li>
   	      <li><span itemprop="isRelatedTo">SensorDAQ</span></li>
   	      <li><span itemprop="isRelatedTo">LabPro</span></li>
   	      <li><span itemprop="isRelatedTo">CBL 2</span></li>
   	      <li><span itemprop="isRelatedTo">TI-Nspire Lab Cradle</span></li>
   	    </ul>

   	    
   	@endsection

