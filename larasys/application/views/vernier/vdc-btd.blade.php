@layout('layouts.producto')

  @section('meta_seo')

      <meta name="description" content="El contador de gotas convierte automáticamente el numero de gotas en volumen, para desarrollar titulaciones automáticas de manera precisa "/>
      <link rel="canonical" href="http://brdidacticos.mx/sensores/contador-de-gotas" />
      <meta property='og:locale' content='es_MX'/>
      <meta property='og:title' content='Vernier Puebla - Contador de Gotas '/>
      <meta property='og:description' content='El contador de gotas convierte automáticamente el numero de gotas en volumen, para desarrollar titulaciones automáticas de manera precisa' />
      <meta property='og:url' content='http://brdidacticos.mx/sensores/contador-de-gotas'/>
      <meta property='og:site_name' content='Productos Vernier en Puebla'/>
      <meta property='og:type' content='article'/>

  @endsection

  @section('page_title')

      Contador de Gotas - BRDidacticos

  @endsection


	@section('title')

    <h1>
      <span itemprop="name">
        Contador de gotas
      </span>
    </h1>

    <meta itemprop='productID' content='vdc-btd'/>
	@endsection

  	@section('gallery_main_image')
 	   	{{ HTML::image('assets/img/drop_counter_03_large.jpg', 'Experimento de titulaci&oacute;n', array("id" => "largeImage")); }}
    @endsection

    @section('gallery_main_desc')
		Experimento de titulaci&oacute;n
    @endsection

    @section('gallery_image_thumb_1')
   		{{ HTML::image('assets/img/drop_counter_01_thumb.jpg', 'Componentes del Contador de gotas')}}
    @endsection

    @section('gallery_image_thumb_2')
    		{{ HTML::image('assets/img/drop_counter_02_thumb.jpg', 'Contador de gotas montado en la estación de agitaci&oacute;n Vernier ')}}
    @endsection

    @section('gallery_image_thumb_3')
    		{{ HTML::image('assets/img/drop_counter_03_thumb.jpg', 'Experimento de titulaci&oacute;n')}}
    @endsection

    @section('gallery_image_thumb_4')
    		{{ HTML::image('assets/img/drop_counter_04_thumb.jpg', 'Datos de ejemplo: Titulaci&oacute;n &Aacute;cido - Base')}}
    @endsection

    @section('gallery_image_thumb_5')
    		{{ HTML::image('assets/img/drop_counter_05_thumb.jpg', 'Video An&aacute;lisis de datos de titulaci&oacute;n con LabQuest')}}
   	@endsection

    @section('youtube_label')
        <strong>Contador de Gotas</strong>
    @endsection

   	@section('descripcion')
   	          <p>
               <span itemprop="description">El <strong>contador de gotas</strong> registra de manera precisa el numero de gotas de titulante durante una titulación,
               el cu&aacute;l es convertido de manera autom&aacute;tica en vol&uacute;men.</span><br>
               Puede ser utilizado en conjunto con otros sensores tales como un sensor de pH, el sensor de conductiviadad,
               o el sensor de oxidación-reducción para desarrollar titulaciones conductim&eacute;tricas o potenciom&eacute;tricas.
              </p>

   	@endsection

   	@section('spec')
   	    <p>
   	      {{ HTML::link('http://www.vernier.com/files/manuals/vdc-btd.pdf', 'Descargue el manual del usuario para ver todas las especificaciones.', array('rel'=>'nofollow')); }}
   	    </p>

   	@endsection

   	@section('aplicacion')

   	    <h2>Experimentos</h2>
   	    <p>El sensor de movimiento puede ser utilizado con los siguientes manuales.</p>
   	    <ul class="icons">
   	      <li><i class="icon-book"></i> {{ HTML::link('http://www.vernier.com/products/books/chem-a/', 'Advanced Chemistry with Vernier', array('rel'=>'nofollow')); }}</li>
   	      <li><i class="icon-book"></i> {{ HTML::link('http://www.vernier.com/products/books/cwv/', 'Chemistry with Vernier', array('rel'=>'nofollow')); }}</li>
   	    </ul>

   	    <h2>Ideas para Laboratorio</h2>
   	    <ul class="icons">
   	      <li><i class="icon-external-link"></i> {{ HTML::link('http://www.vernier.com/innovate/dimensions-of-a-rotating-box/', 'Drop Counter as Fraction Collector', array('rel'=>'nofollow')); }}</li>
   	      <li><i class="icon-external-link"></i> {{ HTML::link('http://www.vernier.com/innovate/speed-of-sound-with-a-motion-detector/', 'Investigating an Acid Mixture', array('rel'=>'nofollow')); }}</li>
   	      <li><i class="icon-external-link"></i> {{ HTML::link('http://www.vernier.com/innovate/measuring-stress-limits-of-printer-ribbon/', 'An Alternative to the Standard Acid-Base Titration', array('rel'=>'nofollow')); }}</li>
   	    </ul>

   	@endsection

   	@section('soporte_manual')
       	{{ HTML::link('http://www.vernier.com/files/manuals/vdc-btd.pdf', 'Descargar Manual del Usuario', array('rel'=>'nofollow')); }}
   	@endsection

   	@section('soporte_renlinea')
	    <li>
	       	{{ HTML::link('http://www.vernier.com/til/1414/', 'Preguntas Frecuentes y Guía de problemas', array('rel'=>'nofollow')); }}
      	</li>
   	@endsection

   	@section('refacciones')
          <li><span itemprop="isConsumableFor">{{ HTML::link('http://www.vernier.com/products/accessories/vdc-rr/', 'Bureta de pl&aacute;stico, 2 v&aacute;lvulas y punta', array('rel'=>'nofollow')); }}</span></li>
          <li><span itemprop="isConsumableFor">{{ HTML::link('http://www.vernier.com/products/accessories/mstir/', 'Microagitador', array('rel'=>'nofollow')); }}</span></li>
          <li><span itemprop="isConsumableFor">{{ HTML::link('http://www.vernier.com/products/accessories/ps-stem/', 'Tap&oacute;n de v&aacute;stago', array('rel'=>'nofollow')); }}</span></li>
          <li><span itemprop="isConsumableFor">{{ HTML::link('http://www.vernier.com/products/accessories/ps-2way/', 'V&aacute;lvula de pl&aacute;stico de dos v&iacute;as', array('rel'=>'nofollow')); }}</span></li>
          <li><span itemprop="isConsumableFor">{{ HTML::link('http://www.vernier.com/products/accessories/mdc-btd/', 'Cable digital de sensor', array('rel'=>'nofollow')); }}</span></li>
   	@endsection

   	@section('incluido')
   	    <p>
   	      El sensor de movimiento viene con el detector y un cable que conecta el sensor de movimiento a las interfases compatibles.
   	    </p>
        <ul>
          <li><span itemprop="isAccessoryOrSparePartFor"><strong>Contador de gotas</strong> Vernier</span></li>
          <li><span itemprop="isAccessoryOrSparePartFor">Cable digital de sensor</span></li>
          <li><span itemprop="isAccessoryOrSparePartFor">Bur&eacute;ta de pl&aacute;stico</span></li>
          <li><span itemprop="isAccessoryOrSparePartFor">V&aacute;lvula de pl&aacute;stico con llave doble de ajuste</span></li>
          <li><span itemprop="isAccessoryOrSparePartFor">{{ HTML::link('http://www.vernier.com/products/accessories/mstir/', 'Microagitador', array('rel'=>'nofollow')); }}</span></li>
          <li><span itemprop="isAccessoryOrSparePartFor">{{ HTML::link('http://www.vernier.com/files/manuals/vdc-btd.pdf', 'Manual del Usuario', array('rel'=>'nofollow')); }}</span></li>
        </ul>
   	@endsection

   	@section('requerimientos')
   	    <p>
   	      El <strong>contador de gotas</strong> requiere una interfaz compatible y software para coleccionar datos. La interfase y el software se venden por separado
   	    </p>
   	@endsection

   	@section('interfases')
   	    <p>El <strong>contador de gotas</strong> es compatible con las siguientes interfases</p>
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

@section('footer')
@endsection
