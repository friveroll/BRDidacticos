@layout('layouts.interfase')

  @section('meta_seo')
  
      <meta name="description" content="LabQuest 2 es la interfase más poderosa e intuitiva para la educacion en ciencias."/>
      <link rel="canonical" href="http://vernier.mx/interfaces/labquest-2" />
      <meta property='og:locale' content='es_MX'/>
      <meta property='og:title' content='Vernier Puebla - LabQuest 2 '/>
      <meta property='og:description' content='LabQuest 2 es la interfase más poderosa e intuitiva para la educacion en ciencias.' />
      <meta property='og:url' content='http://vernier.mx/interfaces/labquest-2'/>
      <meta property='og:site_name' content='Productos Vernier en Puebla'/>
      <meta property='og:type' content='article'/>

      
  @endsection

  @section('page_title')
      LabQuest 2 - Vernier Puebla
  @endsection

  @section('title')
    
    <h1>
      <span itemprop="name">
        LabQuest 2
      </span>
    </h1>
    
    <meta itemprop='productID' content='labq2'/>
  @endsection

    @section('gallery_main_image')
      {{ HTML::image('img/labquest2_01_large.jpg', 'Resumen de las funciones de LabQuest 2', array("id" => "largeImage")); }} 
    @endsection
     
    @section('gallery_main_desc')
    Resumen de las funciones de LabQuest 2
    @endsection

    @section('gallery_image_thumb_1')
      <img src="{{URL::base().'/img/labquest2_01_thumb.jpg'}}" alt="Resumen de las funciones de LabQuest 2" />
    @endsection

    @section('gallery_image_thumb_2')
        {{ HTML::image('img/labquest2_02_thumb.jpg', 'Conectividad de LabQuest 2')}}
    @endsection

    @section('gallery_image_thumb_3')
        {{ HTML::image('img/labquest2_03_thumb.jpg', 'LabQuest 2 puede guardar manuales de pr&aacute;cticas y notas' )}}
    @endsection

    @section('gallery_image_thumb_4')
        {{ HTML::image('img/labquest2_04_thumb.jpg', 'Datos de ejemplo: Pelota rebotando')}}
    @endsection

    @section('gallery_image_thumb_5')
        {{ HTML::image('img/labquest2_05_thumb.jpg', 'Video: Introducci&oacute;n a LabQuest 2')}}
    @endsection

    @section('youtube_label')
        LabQuest 2
    @endsection

    @section('descripcion')
           
            <p>
              <span itemprop="description">Vernier <strong>LabQuest 2</strong> es una interfase independiente utilizada para coleccionar datos de todos los sensores
              Vernier</span> y posee una aplicación para la graficaci&oacute;n en tiempo real y su posterior
              an&aacute;lisis. 
              <br> 
              Su pantalla t&aacute;ctil de alta resoluci&oacute;n hace relativamente f&aacute;cil 
              e intuitiva la colecci&oacute;n de datos y el an&aacute;lisis posterior, además usted puede compartir 
              los datos de sus experimentos f&aacute;cilmente. Su conectividad inal&aacute;mbrica fomenta la 
              colaboración y el aprendizaje personalizado.
              <br> 
              Usted tambi&eacute;n puede utilizar <strong>LabQuest 2</strong> como una interfase para utilizar una computadora
              que tenga instalado Logger Pro, para an&aacute;lisis avanzado y funciones de video.
              <br>
           </p>
      <div class="container-fluid"> 
        <section class="row-fluid">
          <div class="span4">
                 <h2>Caracter&iacute;sticas principales</h2>
                 <ul>
                    <li>Interfase Independiente con una pantalla t&aacute;ctil.</li>
                    <li>Compatible con todos los sensores Vernier.</li>
                    <li>Ra&acute;pida colecci&oacute;n de datos.</li>
                    <li>Recargable, bater&iacute;a de alta capacidad.</li>
                    <li>Compatible con Mac y PC.</li>
                    <li>Actualizaciones de Software gratuitas.</li>
                </ul>
          </div>
          <div class="span4">
            <h2>Hardware</h2>
            <ul>
              <li>Pantalla t&aacute;ctil grande de alta resoluci&oacute;n.</li>
              <li>Sensores de GPS y aceler&oacute;metros integrados.</li>
              <li>Conectividad inal&aacute;mbrica Wi-Fi y Bluetooth</li>
              <li>Colección de Datos R&aacute;pida 100,000 muestras por segundo</li>
            </ul>
          </div>
          <div class="span4">
            <h2>Software</h2>
            <ul>
              <li>Datos de sensores y graficaci&oacute;n en tiempo real.</li>
              <li>An&aacute;lisis avanzados con soporte para regresi&oacute;n lineal y ajuste de curvas</li>
              <li>Tabla peri&oacute;dica integrada, cron&oacute;metro, calculadora cient&iacute;fica y m&aacute;s.</li>
              <li>Navegación por toque o con stylus para una mayor precisi&oacute;n.</li>
            </ul>
          </div>
        </section>
      </div>

    @endsection

    @section('sensores')
    <h2>Sensores Compatibles</h2>
        <div class="container-fluid">
          <section class="row-fluid">

            <div class="span4">
              <ul>
                <li><span itemprop="isRelatedTo">{{ HTML::link('http://www.vernier.com/lga-bta/', 'Aceler&oacute;metro de baja gravedad', array('rel'=>'nofollow')); }}</span></li>
                <li><span itemprop="isRelatedTo">{{ HTML::link('http://www.vernier.com/acc-bta/', 'Aceler&oacute;metro de 25-g', array('rel'=>'nofollow')); }}</span></li>
                <li><span itemprop="isRelatedTo">{{ HTML::link('http://www.vernier.com/3d-bta/', 'Aceler&oacute;metro de 3-Ejes', array('rel'=>'nofollow')); }}</span></li>
                <li><span itemprop="isRelatedTo">{{ HTML::link('http://www.vernier.com/anm-bta/', 'Anem&oacute;metro', array('rel'=>'nofollow')); }}</span></li>
                <li><span itemprop="isRelatedTo">{{ HTML::link('http://www.vernier.com/bar-bta/', 'Bar&oacute;metero', array('rel'=>'nofollow')); }}</span></li>
                <li><span itemprop="isRelatedTo">{{ HTML::link('http://www.vernier.com/bps-bta/', 'Sensor de Presi&oacute;n Sangu&iacute;nea', array('rel'=>'nofollow')); }}</span></li>
                <li><span itemprop="isRelatedTo">{{ HTML::link('http://www.vernier.com/crg-bta/', 'Sensor de Carga', array('rel'=>'nofollow')); }}</span></li>
                <li><span itemprop="isRelatedTo">{{ HTML::link('http://www.vernier.com/co2-bta/', 'Sensor de Gas CO2', array('rel'=>'nofollow')); }}</span></li>
                <li><span itemprop="isRelatedTo">{{ HTML::link('http://www.vernier.com/col-bta/', 'Color&iacute;metro', array('rel'=>'nofollow')); }}</span></li>
                <li><span itemprop="isRelatedTo">{{ HTML::link('http://www.vernier.com/con-bta/', 'Sonda de Conductividad', array('rel'=>'nofollow')); }}</span></li>
                <li><span itemprop="isRelatedTo">{{ HTML::link('http://www.vernier.com/ccs-bta/', 'Sistema de Corriente Constante', array('rel'=>'nofollow')); }}</span></li>
                <li><span itemprop="isRelatedTo">{{ HTML::link('http://www.vernier.com/dcp-bta/', 'Sonda de Corriente', array('rel'=>'nofollow')); }}</span></li>
                <li><span itemprop="isRelatedTo">{{ HTML::link('http://www.vernier.com/hcs-bta/', 'Sensor de Alta tensi&oacute;n', array('rel'=>'nofollow')); }}</span></li>
                <li><span itemprop="isRelatedTo">{{ HTML::link('http://www.vernier.com/dak/', 'Aparato de Difracci&oacute;n', array('rel'=>'nofollow')); }}</span></li>
                <li><span itemprop="isRelatedTo">{{ HTML::link('http://www.vernier.com/dcu-btd/', 'Unidad de Control Digital', array('rel'=>'nofollow')); }}</span></li>
                <li><span itemprop="isRelatedTo">{{ HTML::link('http://www.vernier.com/do-bta/', 'Sonda de Ox&iacute;geno Disuelto', array('rel'=>'nofollow')); }}</span></li>
                <li><span itemprop="isRelatedTo">{{ HTML::link('http://www.vernier.com/odo-bta/', 'Sonda &Oacute;ptica de Ox&iacute;geno disuelto', array('rel'=>'nofollow')); }}</span></li>
                <li><span itemprop="isRelatedTo">{{ HTML::link('http://www.vernier.com/vdc-btd/', 'Contador de Gotas', array('rel'=>'nofollow')); }}</span></li>
                <li><span itemprop="isRelatedTo">{{ HTML::link('http://www.vernier.com/ekg-bta/', 'Sensor de electrocardiograma', array('rel'=>'nofollow')); }}</span></li>
                <li><span itemprop="isRelatedTo">{{ HTML::link('http://www.vernier.com/ea-bta/', 'Amplificador de electrodo', array('rel'=>'nofollow')); }}</span></li>
                <li><span itemprop="isRelatedTo">{{ HTML::link('http://www.vernier.com/eth-bta/', 'Sensor de etanol', array('rel'=>'nofollow')); }}</span></li>
                <li><span itemprop="isRelatedTo">{{ HTML::link('http://www.vernier.com/ehr-bta/', 'Monitor de ritmo card&iacute;aco para ejercicio', array('rel'=>'nofollow')); }}</span></li>
                <li><span itemprop="isRelatedTo">{{ HTML::link('http://www.vernier.com/flo-bta/', 'Sensor de medición de Flujo', array('rel'=>'nofollow')); }}</span></li>
                <li><span itemprop="isRelatedTo">{{ HTML::link('http://www.vernier.com/dfs-bta/', 'Sesor de Fuerza de Rango dual', array('rel'=>'nofollow')); }}</span></li>
                <li><span itemprop="isRelatedTo">{{ HTML::link('http://www.vernier.com/fp-bta/', 'Placa de Fuerza', array('rel'=>'nofollow')); }}</span></li>
                <li><span itemprop="isRelatedTo">{{ HTML::link('http://www.vernier.com/gps-bta/', 'Sensor de Presi&oacute;n de Gas', array('rel'=>'nofollow')); }}</span></li>
                <li><span itemprop="isRelatedTo">{{ HTML::link('http://www.vernier.com/gnm-bta/', 'Goni&oacute;metro', array('rel'=>'nofollow')); }}</span></li>
                <li><span itemprop="isRelatedTo">{{ HTML::link('http://www.vernier.com/vgps/', 'Sensor GPS Vernier', array('rel'=>'nofollow')); }}</span></li>
              </ul>
            </div>
            <div class="span4">
              <ul>
                <li><span itemprop="isRelatedTo">{{ HTML::link('http://www.vernier.com/hd-bta/', 'Dinam&oacute;metro Manual', array('rel'=>'nofollow')); }}</span></li>
                <li><span itemprop="isRelatedTo">{{ HTML::link('http://www.vernier.com/hgh-bta/', 'Monitor card&iacute;aco para mu&ntilde;eca', array('rel'=>'nofollow')); }}</span></li>
                <li><span itemprop="isRelatedTo">{{ HTML::link('http://www.vernier.com/ina-bta/', 'Amplificador de Instrumentaci&oacute;n', array('rel'=>'nofollow')); }}</span></li>
                <li><span itemprop="isRelatedTo">{{ HTML::link('http://www.vernier.com/nh4-bta/', 'Electrodo Ion-selectivo de Amonio', array('rel'=>'nofollow')); }}</span></li>
                <li><span itemprop="isRelatedTo">{{ HTML::link('http://www.vernier.com/ca-bta/', 'Electrodo Ion-selectivo de Calcio ', array('rel'=>'nofollow')); }}</span></li>
                <li><span itemprop="isRelatedTo">{{ HTML::link('http://www.vernier.com/cl-bta/', 'Electrodo Ion-selectivo de Cloro ', array('rel'=>'nofollow')); }}</span></li>
                <li><span itemprop="isRelatedTo">{{ HTML::link('http://www.vernier.com/no3-bta/', 'Electrodo Ion-selectivo de Nitrato ', array('rel'=>'nofollow')); }}</span></li>
                <li><span itemprop="isRelatedTo">{{ HTML::link('http://www.vernier.com/ls-bta/', 'Sensor de Luz', array('rel'=>'nofollow')); }}</span></li>
                <li><span itemprop="isRelatedTo">{{ HTML::link('http://www.vernier.com/mg-bta/', 'Sensor de Campo Magne&eacute;tico', array('rel'=>'nofollow')); }}</span></li>
                <li><span itemprop="isRelatedTo">{{ HTML::link('http://www.vernier.com/mlt-bta/', 'Estacion para fundir', array('rel'=>'nofollow')); }}</span></li>
                <li><span itemprop="isRelatedTo">{{ HTML::link('http://www.vernier.com/mca-bta/', 'Microfono', array('rel'=>'nofollow')); }}</span></li>
                <li><span itemprop="isRelatedTo">{{ HTML::link('http://www.vernier.com/go-mot/', 'Go!Motion', array('rel'=>'nofollow')); }}</span></li>
                <li><span itemprop="isRelatedTo">{{ HTML::link('http://www.vernier.com/md-btd/', 'Detector de Movimiento', array('rel'=>'nofollow')); }}</span></li>
                <li><span itemprop="isRelatedTo">{{ HTML::link('http://www.vernier.com/cbr2/', 'CBR 2', array('rel'=>'nofollow')); }}</span></li>
                <li><span itemprop="isRelatedTo">{{ HTML::link('http://www.vernier.com/o2-bta/', 'Sensor de Gas O2', array('rel'=>'nofollow')); }}</span></li>
                <li><span itemprop="isRelatedTo">{{ HTML::link('http://www.vernier.com/orp-bta/', 'Sensor del potencial oxido-reducci&oacute;n', array('rel'=>'nofollow')); }}</span></li>
                <li><span itemprop="isRelatedTo">{{ HTML::link('http://www.vernier.com/ph-bta/', 'Sensor de pH ', array('rel'=>'nofollow')); }}</span></li>
                <li><span itemprop="isRelatedTo">{{ HTML::link('http://www.vernier.com/fph-bta/', 'Sensor plano de pH compatible con Tris', array('rel'=>'nofollow')); }}</span></li>
                <li><span itemprop="isRelatedTo">{{ HTML::link('http://www.vernier.com/vpg-btd/', 'Sensor fotoel&eacute;ctrico', array('rel'=>'nofollow')); }}</span></li>
                <li><span itemprop="isRelatedTo">{{ HTML::link('http://www.vernier.com/chem-pol/', 'Polar&iacute;metro (Qu&iacute;mica)', array('rel'=>'nofollow')); }}</span></li>
                <li><span itemprop="isRelatedTo">{{ HTML::link('http://www.vernier.com/pamp/', 'Amplificador de Poder', array('rel'=>'nofollow')); }}</span></li>
                <li><span itemprop="isRelatedTo">{{ HTML::link('http://www.vernier.com/pyr-bta/', 'Piran&oacute;metro', array('rel'=>'nofollow')); }}</span></li>
                <li><span itemprop="isRelatedTo">{{ HTML::link('http://www.vernier.com/drm-btd/', 'Monitor de Radiaci&oacute;n Digital', array('rel'=>'nofollow')); }}</span></li>
                <li><span itemprop="isRelatedTo">{{ HTML::link('http://www.vernier.com/vrm-btd/', 'Monitor de Radiaci&oacute;n Vernier', array('rel'=>'nofollow')); }}</span></li>
                <li><span itemprop="isRelatedTo">{{ HTML::link('http://www.vernier.com/rh-bta/', 'Sensor de Humedad Relativa', array('rel'=>'nofollow')); }}</span></li>
                <li><span itemprop="isRelatedTo">{{ HTML::link('http://www.vernier.com/rmb/', 'Cintur&oacute;n Monitor de Respiraci&oacute;n', array('rel'=>'nofollow')); }}</span></li>
                <li><span itemprop="isRelatedTo">{{ HTML::link('http://www.vernier.com/rmv-btd/', 'Sensor para Movimiento de Rotaci&oacute;n', array('rel'=>'nofollow')); }}</span></li>
                <li><span itemprop="isRelatedTo">{{ HTML::link('http://www.vernier.com/sal-bta/', 'Sensor de Salinidad', array('rel'=>'nofollow')); }}</span></li>
              </ul>
            </div>
            <div class="span4">
              <ul>
                <li><span itemprop="isRelatedTo">{{ HTML::link('http://www.vernier.com/sms-bta/', 'Sensor de humedad del suelo', array('rel'=>'nofollow')); }}</span></li>
                <li><span itemprop="isRelatedTo">{{ HTML::link('http://www.vernier.com/slm-bta/', 'Medidor del nivel de Sonido', array('rel'=>'nofollow')); }}</span></li>
                <li><span itemprop="isRelatedTo">{{ HTML::link('http://www.vernier.com/svis-pl/', 'SpectroVis Plus', array('rel'=>'nofollow')); }}</span></li>
                <li><span itemprop="isRelatedTo">{{ HTML::link('http://www.vernier.com/v-spec/', 'Espectr&oacute;fotometro', array('rel'=>'nofollow')); }}</span></li>
                <li><span itemprop="isRelatedTo">{{ HTML::link('http://www.vernier.com/sprt-vis/', 'Espectr&oacute;fotometro Red Tide VIS-NIR', array('rel'=>'nofollow')); }}</span></li>
                <li><span itemprop="isRelatedTo">{{ HTML::link('http://www.vernier.com/sprt-uv-vis/', 'Espectr&oacute;fotometro Red Tide UV-VIS ', array('rel'=>'nofollow')); }}</span></li>
                <li><span itemprop="isRelatedTo">{{ HTML::link('http://www.vernier.com/esrt-vis/', 'Espectr&oacute;fotometro Red Tide de Emisi&oacute;n ', array('rel'=>'nofollow')); }}</span></li>
                <li><span itemprop="isRelatedTo">{{ HTML::link('http://www.vernier.com/spr-bta/', 'Espir&oacute;metro', array('rel'=>'nofollow')); }}</span></li>
                <li><span itemprop="isRelatedTo">{{ HTML::link('http://www.vernier.com/tmp-bta/', 'Sonda de temperatura de acero inoxidable', array('rel'=>'nofollow')); }}</span></li>
                <li><span itemprop="isRelatedTo">{{ HTML::link('http://www.vernier.com/go-temp/', 'Go!Temp', array('rel'=>'nofollow')); }}</span></li>
                <li><span itemprop="isRelatedTo">{{ HTML::link('http://www.vernier.com/irt-bta/', 'Term&oacute;metro Infrarrojo', array('rel'=>'nofollow')); }}</span></li>
                <li><span itemprop="isRelatedTo">{{ HTML::link('http://www.vernier.com/sts-bta/', 'Sensor de temperatura superficial', array('rel'=>'nofollow')); }}</span></li>
                <li><span itemprop="isRelatedTo">{{ HTML::link('http://www.vernier.com/tpl-bta/', 'Sonda de Temparatura Extra Larga', array('rel'=>'nofollow')); }}</span></li>
                <li><span itemprop="isRelatedTo">{{ HTML::link('http://www.vernier.com/tca-bta/', 'Termocupla', array('rel'=>'nofollow')); }}</span></li>
                <li><span itemprop="isRelatedTo">{{ HTML::link('http://www.vernier.com/wrt-bta/', 'Sonda de temperatura de amplio espectro', array('rel'=>'nofollow')); }}</span></li>
                <li><span itemprop="isRelatedTo">{{ HTML::link('http://www.vernier.com/tilt-bta/', 'Sonda de luz TI', array('rel'=>'nofollow')); }}</span></li>
                <li><span itemprop="isRelatedTo">{{ HTML::link('http://www.vernier.com/tof-vpl/', 'Time of Flight Pad', array('rel'=>'nofollow')); }}</span></li>
                <li><span itemprop="isRelatedTo">{{ HTML::link('http://www.vernier.com/trb-bta/', 'Sensor de Turbidez', array('rel'=>'nofollow')); }}</span></li>
                <li><span itemprop="isRelatedTo">{{ HTML::link('http://www.vernier.com/uva-bta/', 'Sensor de UVA', array('rel'=>'nofollow')); }}</span></li>
                <li><span itemprop="isRelatedTo">{{ HTML::link('http://www.vernier.com/uvb-bta/', 'Sensor de UVB', array('rel'=>'nofollow')); }}</span></li>
                <li><span itemprop="isRelatedTo">{{ HTML::link('http://www.vernier.com/vpl/', 'Lanzador de proyectiles Vernier', array('rel'=>'nofollow')); }}</span></li>
                <li><span itemprop="isRelatedTo">{{ HTML::link('http://www.vernier.com/30v-bta/', 'Sonda de voltage de 30-Volts', array('rel'=>'nofollow')); }}</span></li>
                <li><span itemprop="isRelatedTo">{{ HTML::link('http://www.vernier.com/dvp-bta/', 'Sonda de voltage diferencial', array('rel'=>'nofollow')); }}</span></li>
                <li><span itemprop="isRelatedTo">{{ HTML::link('http://www.vernier.com/vp-bta/', 'Sonda de Voltage', array('rel'=>'nofollow')); }}</span></li>
                <li><span itemprop="isRelatedTo">{{ HTML::link('http://www.vernier.com/wu-pro/', 'Watts Up Pro', array('rel'=>'nofollow')); }}</span></li>
                <li><span itemprop="isRelatedTo">{{ HTML::link('http://www.vernier.com/wdss/', 'Sistema inal&aacute;mbrico de Din&aacute;mica Vernier', array('rel'=>'nofollow')); }}</span></li>
              </ul>
            </div>
          </section>
        </div>
        <h2>Paquetes de sensores para <strong>LabQuest 2</strong> </h2>
        <div class="container-fluid">
            <section class="row-fluid">
              <div class="span4">
                <ul>
                  <li>{{ HTML::link('http://www.vernier.com/products/packages/agricultural-science/labq2/', 'Ciencias Agron&oacute;micas', array('rel'=>'nofollow')); }}</li>
                  <li>{{ HTML::link('http://www.vernier.com/products/packages/biology/labq2/', 'Biolog&iacute;a', array('rel'=>'nofollow')); }}</li>
                  <li>{{ HTML::link('http://www.vernier.com/products/packages/advanced-biology/labq2/', 'Biolog&iacute;a Avanzada', array('rel'=>'nofollow')); }}</li>
                  <li>{{ HTML::link('http://www.vernier.com/products/packages/inquiry-biology/labq2/', 'Investigaci&oacute;n Biol&oacute;gica', array('rel'=>'nofollow')); }}</li>
                  <li>{{ HTML::link('http://www.vernier.com/products/packages/chemistry/labq2/', 'Qu&iacute;mica', array('rel'=>'nofollow')); }}</li>
                  <li>{{ HTML::link('http://www.vernier.com/products/packages/advanced-chemistry/labq2/', 'Qu&iacute;mica Avanzada', array('rel'=>'nofollow')); }}</li>
                </ul>
              </div>
              <div class="span4">
                <ul>
                  <li>{{ HTML::link('http://www.vernier.com/products/packages/inquiry-chemistry/labq2/', 'Investigaci&oacute;n Qu&iacute;mica', array('rel'=>'nofollow')); }}</li>
                  <li>{{ HTML::link('http://www.vernier.com/products/packages/earth-science/labq2/', 'Ciencias de la Tierra', array('rel'=>'nofollow')); }}</li>
                  <li>{{ HTML::link('http://www.vernier.com/products/packages/elementary-science/labq2/', 'Ciencia para educaci&oacute;n primaria', array('rel'=>'nofollow')); }}</li>
                  <li>{{ HTML::link('http://www.vernier.com/products/packages/engineering-intro/labq2/', 'Ingenier&iacute;a: introducci&oacute;n a NI LabView', array('rel'=>'nofollow')); }}</li>
                  <li>{{ HTML::link('http://www.vernier.com/products/packages/engineering-projects/labq2/', 'Proyectos de ingenier&iacute;a con NI LabView', array('rel'=>'nofollow')); }}</li>
                  <li>{{ HTML::link('http://www.vernier.com/products/packages/environmental-science/labq2/', 'Ciencias Ambientales', array('rel'=>'nofollow')); }}</li>
                </ul>
              </div>
              <div class="span4">
                <ul>
                  <li>{{ HTML::link('http://www.vernier.com/products/packages/middle-school-science/labq2/', 'Ciencia para educaci&oacute;n Secundaria', array('rel'=>'nofollow')); }}</li>
                  <li>{{ HTML::link('http://www.vernier.com/products/packages/physical-science/labq2/', 'Ciencias F&iacute;sicas', array('rel'=>'nofollow')); }}</li>
                  <li>{{ HTML::link('http://www.vernier.com/products/packages/physics/labq2/', 'F&iacute;sica', array('rel'=>'nofollow')); }}</li>
                  <li>{{ HTML::link('http://www.vernier.com/products/packages/physiology/labq2/', 'Fisiolog&iacute;a', array('rel'=>'nofollow')); }}</li>
                  <li>{{ HTML::link('http://www.vernier.com/products/packages/water-quality/labq2/', 'Calidad del agua', array('rel'=>'nofollow')); }}</li>
                  <li>{{ HTML::link('http://www.vernier.com/products/packages/science-department/labq2/', 'Departamento de Ciencias', array('rel'=>'nofollow')); }}</li>
                </ul>

              </div>
            </section>
        </div>
        
    @endsection

    @section('spec')
        <div class="container-fluid">
          <section class="row-fluid">
            <div class="span4">
              <h2>Pantalla</h2>
              <ul>
                <li>11.2 cm x 6.7 cm (13.1 cm diagonal).</li>
                <li>Resoluci&oacute;n de 800 x 480 pixeles a color y 188 dpi.</li>
                <li>Retroiluminación LED.</li>
                <li>Orientaci&oacute;n de pantalla vertical u horizontal.</li>
                <li>Modo de alto contraste para visibilidad en exteriores.</li>
              </ul>
              <h2>Procesador</h2>
              <ul>
                <li>Velocidad de 800 MHz</li>
              </ul>
              <h2>Conectividad</h2>
              <ul>
                <li>Wi-Fi 802.11 b/g/n</li>
                <li>Bluetooth <i>solo para WDSS</i></li>
              </ul>
              <h2>Interfase de Usuario</h2>
              <ul>
                <li>Pantalla táctil resistiva</li>
                <li>Táctil y stylus para una mayor precisi&oacute;n</li>
              </ul>
          </div>
          <div class="span4"> 
              <h2>Adquisici&oacute;n de datos</h2>
              <ul>
                <li>100,000 muestras por segundo</li>
                <li>Resoluci&oacute;n de 12 bits</li>
                <li>Sensores integrados: GPS, aceler&oacute;metro de 3 ejes, temperatura ambiente, luz y micr&oacute;fono interno</li>
              </ul>
              <h2>Condiciones de Operaci&oacute;n</h2>
              <ul>
                <li>Temperatura de operaci&oacute;n 0 - 45&deg; C.</li>
                <li>Temperatura de almacenemiento -30 - 60&deg; C.</li>
                <li>Resistente a salpicaduras</li>
                <li>Carcasa resistente diseñada para resistir una caída desde una mesa de laboratorio</li>
              </ul>
              <h2>Tama&ntilde;o y peso</h2>
              <ul>
                <li>Tama&ntilde;o:  8.8 cm x 15.4 cm x 2.5 cm</li>
                <li>Peso: 350 g.</li>
              </ul>
          </div>
          <div class="span4">
              <h2>Puertos</h2>
              <ul>
                <li>5 canales para sensores</li>
                <li>Puerto USB para sensores, memorias USB y perif&eacute;ricos.</li>
                <li>Minipuero USB</li>
                <li>Tomacorriente de Corriente directa</li>
                <li>Ranura para memoria MicroSD/MMC</li>
                <li>Entrada y salida de audio</li>
              </ul>
              <h2>Almacenamiento</h2>
              <ul>
                <li>200 Mb</li>
                <li>Expansible con MicroSD y Memoria USB.</li>
              </ul>
              <h2>Poder</h2>
              <ul>
                <li>Recargable, bater&iacute;a de alta capacidad.</li>
                <li>Adaptador para cargar/corriente inclu&iacute;do.</li>
              </ul>
          </div>
        </section>
        </div>
    @endsection





    @section('soporte_manual')
        {{ HTML::link('http://www2.vernier.com/manuals/labquest2_user_manual.pdf', 'Descargar Manual del Usuario', array('rel'=>'nofollow')); }}
    @endsection

    @section('soporte_renlinea')
          <li>
            {{ HTML::link('http://www.vernier.com/support/connected-science-system/', 'Sistema de ciencia conectado, Videos y tutoriales', array('rel'=>'nofollow')); }}
            </li>
            <li>
              {{ HTML::link('http://www.vernier.com/til/2694/', 'Preguntas frecuentes y Gu&iacute;a de problemas', array('rel'=>'nofollow')); }}
            </li>            
    @endsection

    @section('soporte_garantia')
    
        {{ HTML::link('http://www.vernier.com/ordering/warranty-policy/', '5 Años (2 a&ntilde;os en la fuente de luz)', array('rel'=>'nofollow')); }}
        
    @endsection


    @section('refacciones')
        <li><span itemprop="isConsumableFor">{{ HTML::link('http://www.vernier.com/products/lq2-styl-5/', 'Set de 5 stylus', array('rel'=>'nofollow')); }}</span></li>
        <li><span itemprop="isConsumableFor">{{ HTML::link('http://www.vernier.com/products/lq-teth-5/', 'Set de 5 correas para stylus', array('rel'=>'nofollow')); }}</span></li>
        <li><span itemprop="isConsumableFor">{{ HTML::link('http://www.vernier.com/products/lq-cb-usb/', 'Cable USB para conecci&oacute;n a computadora', array('rel'=>'nofollow')); }}</span></li>
        <li><span itemprop="isConsumableFor">{{ HTML::link('http://www.vernier.com/products/lq2-bat/', 'Bater&iacute;a LabQuest 2', array('rel'=>'nofollow')); }}</span></li>
        <li><span itemprop="isConsumableFor">{{ HTML::link('http://www.vernier.com/products/lq-ps/', 'Adaptador de corriente alterna', array('rel'=>'nofollow')); }}</span></li>
    @endsection

    @section('incluido')
          <ul>
            <li><span itemprop="isAccessoryOrSparePartFor">Interfase LabQuest 2</span></li>
            <li><span itemprop="isAccessoryOrSparePartFor">1 stylus</span></li>
            <li><span itemprop="isAccessoryOrSparePartFor">Correa para el stylus</span></li>
            <li><span itemprop="isAccessoryOrSparePartFor">Cable USB</span></li>
            <li><span itemprop="isAccessoryOrSparePartFor">Adaptador de corriente alterna</span></li>
            <li><span itemprop="isAccessoryOrSparePartFor">Gu&iacute;a de inicio r&aacute;pido</span></li>
          </ul>
    @endsection
          @section('actualizaciones')
          
            <div class="span6">
              <h2>Actualizaciones de Software Gratuitas</h2>
              <ul>
                <li>Obtenga nuevas caracter&iacute;sticas y mejoras con actualizaciones de software para <strong>LabQuest 2</strong>.</li>
              </ul>
            </div>
              
          @endsection