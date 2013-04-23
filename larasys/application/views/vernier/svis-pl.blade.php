@layout('layouts.producto')

  @section('meta_seo')

      <meta name="description" content="El espectrofot&oacute;metro SpectroVis Plus es un espectrofotómetro visible a Infrarojo Cercano, Económico y Portatil "/>
      <link rel="canonical" href="http://brdidacticos.mx/sensores/espectrofotometro-spectrovis-plus" />
      <meta property='og:locale' content='es_MX'/>
      <meta property='og:title' content='Vernier Puebla - SpectroVis Plus '/>
      <meta property='og:description' content='El espectrofot&oacute;metro SpectroVis Plus es un espectrofotómetro visible a Infrarojo Cercano, Económico y Portatil' />
      <meta property='og:url' content='http://brdidacticos.mx/sensores/espectrofotometro-spectrovis-plus'/>
      <meta property='og:site_name' content='Productos Vernier en Puebla'/>
      <meta property='og:type' content='article'/>

  @endsection

  @section('page_title')

      Espectrofot&oacute;metro SpectroVis Plus - Vernier Puebla

  @endsection

	@section('title')
    <h1>
      <span itemprop="name">
          Espectrofot&oacute;metro SpectroVis Plus
      </span>
    </h1>
      <meta itemprop='productID' content='svis-pl'/>

	@endsection

  	@section('gallery_main_image')

        {{ HTML::image('assets/img/svis_03_large.jpg', 'SpectroVis Plus conectado a LabQuest 2', array("id" => "largeImage")); }}

    @endsection

    @section('gallery_main_desc')
		 Espectrofot&oacute;metro SpectroVis Plus conectado a LabQuest 2
    @endsection

    @section('gallery_image_thumb_1')
       {{ HTML::image('assets/img/svis_01_thumb.jpg', 'Espectrofot&oacute;metro SpectroVis Plus para la docencia, preciso y potente.')}}
    @endsection

    @section('gallery_image_thumb_2')
    		{{ HTML::image('assets/img/svis_02_thumb.jpg', 'Espectrofot&oacute;metro SpectroVis Plus conectado por USB a la computadora')}}
    @endsection

    @section('gallery_image_thumb_3')
        {{ HTML::image('assets/img/svis_03_thumb.jpg', 'Espectrofot&oacute;metro SpectroVis Plus conectado a LabQuest 2')}}
    @endsection

    @section('gallery_image_thumb_4')
    		{{ HTML::image('assets/img/svis_04_thumb.jpg', 'Espectrofot&oacute;metro SpectroVis Plus, Datos de ejemplo: Ley de Beer')}}
    @endsection

    @section('gallery_image_thumb_5')
    		{{ HTML::image('assets/img/svis_05_thumb.jpg', 'Espectrofot&oacute;metro SpectroVis Plus, Video: Ley de Beer')}}
   	@endsection

   	@section('youtube_label')
        <strong>Espectrofot&oacute;metro SpectroVis Plus</strong>
    @endsection

    @section('descripcion')
           <p>
           <span itemprop="description">Tener un arreglo CCD (dispositivo acoplado por carga) expectrofot&oacute;metro/fluor&oacute;metro
           es ahora accesible para cada una de tus mesas de laboratorio.</span><br>

           La tecnología de arreglo permite obtener un espectro de longitud de onda completa (absorbancia, transmitancia o intensidad)
           en menos de un segundo. Una vez que se determina el pico de la longitud de onda, se puede determinar f&aacute;cilmente la
           concentraci&oacute;n de una soluci&oacute;n (Ley de Beer) o monitorear la velocidad de reacción.<br>

           Con sus dos longitudes de onda de excitación distintas, el <span>espectrofot&oacute;metro SpectroVis Plus</span> puede medir cuantitativamente el espectro de
           fluorescencia de muchos compuestos, tales como clorofila, fluoresce&iacute;na, GFP y más.<br>

           Conecte el <span>espectrofot&oacute;metro SpectroVis Plus</span> a <a href="{{URL::to_route('labq2');}}">LabQuest 2</a> o una computadora corriendo <a href="{{URL::to_route('lp');}}">Logger Pro</a> utilizando un cable USB est&aacute;ndar (inclu&iacute;do),
           y vea los resultados a todo color.<br>
            </p>


   	@endsection

   	@section('spec')
   	    <p>
   	      Especificaciones
   	    </p>
   	    <ul>
          <li>
            Rango de Longitud de Onda: 380 nm–950 nm.
          </li>
          <li>
            Soporte para fluorescencia (dos fuentes de exitaci&oacute;n centradas a 405 nm y 500 nm).
          </li>
          <li>
            Intervalo de reporte de Longitud de onda; 1 nm entre valores reportados (colecciona 570 valores).
          </li>
          <li>
            Resolución &Oacute;ptica; &#126; 2.5 nm.
          </li>
          <li>
            Dimensiones: 15 cm x 9 cm x 4 cm
          </li>
          <li>
            Fuentes de luz: Bombilla incandescente blanca, de aproximadamente 8000 horas de vida útil, basada en LED,
            aproximadamente 100.000 horas de vida útil.
          </li>
          <li>
            Calibración de un solo paso.
          </li>
          <li>
            No requiere fuente de poder externa.
          </li>
   	    </ul>
   	@endsection

   	@section('aplicacion')

   	    <h2>Experimentos</h2>
   	    <p>El  <strong>espectrofot&oacute;metro SpectroVis Plus</strong> puede ser utilizado con los siguientes manuales.</p>
   	    <ul class="icons">
   	      <li><i class="icon-book"></i> {{ HTML::link('http://www.vernier.com/products/books/bio-i/', 'Investigating Biology through Inquiry', array('rel'=>'nofollow')); }}</li>
   	      <li><i class="icon-book"></i> {{ HTML::link('http://www.vernier.com/products/books/bio-a/', 'Advanced Biology with Vernier', array('rel'=>'nofollow')); }}</li>
   	      <li><i class="icon-book"></i> {{ HTML::link('http://www.vernier.com/products/books/cwv/', 'Chemistry with Vernier', array('rel'=>'nofollow')); }}</li>
   	      <li><i class="icon-book"></i> {{ HTML::link('http://www.vernier.com/products/books/chem-o/', 'Organic Chemistry with Vernier', array('rel'=>'nofollow')); }}</li>
   	      <li><i class="icon-book"></i> {{ HTML::link('http://www.vernier.com/products/books/chem-a/', 'Advanced Chemistry with Vernier', array('rel'=>'nofollow')); }}</li>
   	      <li><i class="icon-book"></i> {{ HTML::link('http://www.vernier.com/products/books/bwv/', 'Biology with Vernier', array('rel'=>'nofollow')); }}</li>
   	      <li><i class="icon-book"></i> {{ HTML::link('http://www.vernier.com/products/books/fwv/', 'Forensics with Vernier', array('rel'=>'nofollow')); }}</li>
   	      <li><i class="icon-book"></i> {{ HTML::link('http://www.vernier.com/products/books/wqv/', 'Water Quality with Vernier', array('rel'=>'nofollow')); }}</li>
   	      <li><i class="icon-book"></i> {{ HTML::link('http://www.vernier.com/products/books/swn/', 'Science with TI-Nspire Technology', array('rel'=>'nofollow')); }}</li>
   	      <li><i class="icon-book"></i> {{ HTML::link('http://www.vernier.com/products/books/chem-i/', 'Investigating Chemistry through Inquiry', array('rel'=>'nofollow')); }}</li>
   	    </ul>


   	    <h2>Ideas para Laboratorio</h2>
   	    <ul class="icons">
   	      <li><i class="icon-external-link"></i> {{ HTML::link('http://www.vernier.com/innovate/use-the-spectrovis-plus-to-study-neurotransmitters/', 'Use the SpectroVis Plus to Study Neurotransmitters', array('rel'=>'nofollow')); }}</li>
          <li><i class="icon-external-link"></i> {{ HTML::link('http://www.vernier.com/innovate/studying-enzymes-in-the-laboratory/', 'Studying Enzymes in the Laboratory', array('rel'=>'nofollow')); }}</li>
          <li><i class="icon-external-link"></i> {{ HTML::link('http://www.vernier.com/innovate/use-the-spectrovis-plus-to-explore-fluorescence-spectroscopy/', 'Use the SpectroVis Plus to Explore Fluorescence Spectroscopy', array('rel'=>'nofollow')); }}</li>
          <li><i class="icon-external-link"></i> {{ HTML::link('http://www.vernier.com/innovate/measure-gas-discharge-tube-emissions/', 'Measure Gas Discharge Tube Emissions', array('rel'=>'nofollow')); }}</li>
          <li><i class="icon-external-link"></i> {{ HTML::link('http://www.vernier.com/innovate/biofuel-investigation-using-spectrovis-plus/', 'Biofuel Investigation Using SpectroVis Plus', array('rel'=>'nofollow')); }}</li>
          <li><i class="icon-external-link"></i> {{ HTML::link('http://www.vernier.com/innovate/use-the-spectrovis-plus-to-study-proteins/', 'Use the SpectroVis Plus to Study Proteins', array('rel'=>'nofollow')); }}</li>
          <li><i class="icon-external-link"></i> {{ HTML::link('http://www.vernier.com/innovate/food-dye-forensics-experiment-using-the-spectrovis-plus/', 'Food Dye Forensics Experiment Using the SpectroVis Plus', array('rel'=>'nofollow')); }}</li>
   	    </ul>

        <h2>Experimentos Gratis de para el espectrofot&oacute;metro SpectroVis Plus</h2>
        <ul class="icons">
          <li><i class="icon-file"></i> {{ HTML::link('http://www.vernier.com/files/sample_labs/SPECTROSCOPY-01-beers_law.doc', 'Beer’s Law', array('rel'=>'nofollow')); }}</li>
          <li><i class="icon-file"></i> {{ HTML::link('http://www.vernier.com/files/sample_labs/SPECTROSCOPY-02-kinetics_of_bleach_reaction.doc', 'Kinetics of a Bleach Reaction', array('rel'=>'nofollow')); }}</li>
          <li><i class="icon-file"></i> {{ HTML::link('http://www.vernier.com/files/sample_labs/SPECTROSCOPY-03-visible_spectra.doc', 'Visible Spectra of Commercial Dyes', array('rel'=>'nofollow')); }}</li>
          <li><i class="icon-file"></i> {{ HTML::link('http://www.vernier.com/files/sample_labs/SPECTROSCOPY-04-emission_spectra.doc', 'Emission Spectra', array('rel'=>'nofollow')); }}</li>
          <li><i class="icon-file"></i> {{ HTML::link('http://www.vernier.com/files/sample_labs/SPECTROSCOPY-05-spectrum_chlorophyll.doc', 'The Visible Spectrum of Chlorophyll', array('rel'=>'nofollow')); }}</li>
          <li><i class="icon-file"></i> {{ HTML::link('http://www.vernier.com/files/sample_labs/SPECTROSCOPY-06-rydberg_constant.doc', 'The Rydberg Constant', array('rel'=>'nofollow')); }}</li>
        </ul>

   	@endsection

   	@section('soporte_manual')
       	{{ HTML::link('http://www.vernier.com/files/manuals/svis-pl.pdf', 'Descargar Manual del Usuario', array('rel'=>'nofollow')); }}
   	@endsection

   	@section('soporte_renlinea')
	      <li>
	         	{{ HTML::link('http://www.vernier.com/til/1557/', 'Preguntas Frecuentes y Guía de problemas', array('rel'=>'nofollow')); }}
      	</li>
   	@endsection

    @section('soporte_garantia')

        {{ HTML::link('http://www.vernier.com/ordering/warranty-policy/', '5 Años (2 a&ntilde;os en la fuente de luz)', array('rel'=>'nofollow')); }}

    @endsection


    @section('refacciones')
        <li><span itemprop="isConsumableFor">{{ HTML::link('http://www.vernier.com/products/accessories/cuv/', '100 Cubetas de pl&aacute;stico (Rango Visible)', array('rel'=>'nofollow')); }}</span></li>
        <li><span itemprop="isConsumableFor">{{ HTML::link('http://www.vernier.com/products/accessories/cuv-rack/', 'Rack para Cubetas de pl&aacute;stico', array('rel'=>'nofollow')); }}</span></li>
    @endsection

   	@section('incluido')

        <p>
   	      El  <strong>espectrofot&oacute;metro SpectroVis Plus</strong> viene con el detector y un cable para su conección a las interfases compatibles.
   	    </p>
          <ul>

            <li><span itemprop="isAccessoryOrSparePartFor">Espectrofot&oacute;metro SpectroVis Plus</span></li>
            <li><span itemprop="isAccessoryOrSparePartFor">15 Cubetas de pl&aacute;stico</span></li>
            <li><span itemprop="isAccessoryOrSparePartFor">Cable USB</span></li>

            <li>{{ HTML::link('http://www.vernier.com/files/manuals/svis-pl.pdf', 'Manual del Usuario', array('rel'=>'nofollow')); }}</li>

          </ul>


   	@endsection

   	@section('requerimientos')
   	    <p>
   	      El <strong>espectrofot&oacute;metro SpectroVis Plus</strong> requiere de interfaz LabQuest o software para coleccionar datos. La interfase y el software se venden por separado
   	    </p>
        <ul>
          <li>Computadora: Se necesita <a href="{{URL::to_route('lp');}}">Logger Pro</a> version 3.8.2 o posterior</li>
          <li><a href="{{URL::to_route('labq2');}}">LabQuest 2</a>: Software versi&oacute;n 1.3 o posterior</li>
        </ul>

   	@endsection

   	@section('interfases')

   	    <p>El <strong>espectrofot&oacute;metro SpectroVis Plus</strong> es compatible con las siguientes interfases</p>
   	    <ul>

   	      <li><a href="{{URL::to_route('labq2');}}"><span itemprop="isRelatedTo">LabQuest 2</span></a></li>
   	      <li><span itemprop="isRelatedTo">LabQuest</span></li>
   	      <li><span itemprop="isRelatedTo">LabQuest Mini</span></li>

   	    </ul>

   	@endsection
