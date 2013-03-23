@layout('layouts.software')

  @section('meta_seo')
  
  <meta name="description" content="Logger Pro es el Software galardonado de Vernier para la colección y el análisis de datos para PC y Mac "/>
  <link rel="canonical" href="http://vernier.mx/software/logger-pro" />
  <meta property='og:locale' content='es_MX'/>
  <meta property='og:title' content='Vernier Puebla - Logger Pro '/>
  <meta property='og:description' content='Logger Pro es el Software galardonado de Vernier para la colección y el análisis de datos para PC y Mac' />
  <meta property='og:url' content='http://vernier.mx/software/logger-pro'/>
  <meta property='og:site_name' content='Productos Vernier en Puebla'/>
  <meta property='og:type' content='article'/>    
      
  @endsection

  @section('page_title')
  
    Logger Pro - Vernier Puebla 
      
  @endsection

  @section('title')
    <h1>
      <span itemprop="name">
          Logger Pro
      </span>
    </h1>
    <meta itemprop='productID' content='lp'/>
  @endsection

    @section('gallery_main_image')
      
        <img itemprop="image" src="{{URL::base().'/assets/img/lp_03_large.jpg'}}" alt="Analize videos para estudiar el movimiento en 2D" id="largeImage" />
        
    @endsection
     
    @section('gallery_main_desc')
    Analize videos para estudiar el movimiento en 2D con Logger Pro
    @endsection

    @section('gallery_image_thumb_1') 
      {{ HTML::image('assets/img/lp_01_thumb.jpg', 'Logger Pro: Inicio de la aplicaci&oacute;n con el sensor de temperatura conectado. <br> Tabla, medidor y gr&aacute;fica.')}}
    @endsection

    @section('gallery_image_thumb_2')
        {{ HTML::image('assets/img/lp_02_thumb.jpg', 'Logger Pro: Gr&aacute;fica de doble eje Y')}}
    @endsection

    @section('gallery_image_thumb_3')
        {{ HTML::image('assets/img/lp_03_thumb.jpg', 'Logger Pro: Analize videos para estudiar el movimiento en 2D' )}}
    @endsection

    @section('gallery_image_thumb_4')
        {{ HTML::image('assets/img/lp_04_thumb.jpg', 'Logger Pro: An&aacute;lisis para datos de electroforesis')}}
    @endsection

    @section('gallery_image_thumb_5')
        {{ HTML::image('assets/img/lp_05_thumb.jpg', 'Logger Pro: Video')}}
    @endsection

    @section('youtube_label')
        <strong>Logger Pro</strong>
    @endsection

    @section('descripcion')
    
      <p><span itemprop="description"><strong>Logger Pro</strong> es el software de Vernier galardonado para la recopilaci&oacute;n y an&aacute;lisis de datos para Mac y PC</span></p>
     
      <div class="container-fluid">
        <section class="row-fluid">
          <div class="span4">
            <h3>De uso f&aacute;cil para los estudiantes</h3>
            <ul>
              <li>12 tutoriales Guiados incluidos</li>
              <li>Escriba reportes de pr&aacute;cticas y exporte los datos a Word o Excel</li>
              <li>Incluye cerca de 1000 archivos de experimentos apoyado por nuestra librer&iacute;a de Manuales para Laboratorio</li>
              <li>Desarrolle sus propios archivos de experimento.</li>
            </ul>
          </div>
          <div class="span4">
            <h3>Vers&aacute;til</h3>
            <ul>
              <li>Soporta cerca de 80 sensores vernier para graficaci&oacute;n en tiempo real</li>
              <li>Adquiera datos de una variedad de interfases, incluyendo LabQuest, LabQuestMini, LabPro, WDSS, espectrofot&oacute;metros, GPS, Balanzas Ohaus, ProscopeHR y m&aacute;s.</li>
              <li>Ingrese valores manualmente, importe datos o tablas de datos.</li>
            </ul>
          </div>
          <div class="span4">
            <h3>Poderoso</h3>
            <ul>
              <li>Capture Videos, para añadir un registro visual de sus experimentos sincronizado con sus datos.</li>
              <li>Analize videos cuadro por cuadro o tome mediciones de una foto.</li>
              <li>Dibuje predicciones de gr&aacute;ficas antes de la recoleccion de datos.</li>
              <li>Desarrolle an&aacute;lisis estad&iacute;sticos de datos, incluyendo integrales, tangentes, ajustes de curva y m&aacute;s. </li>
            </ul>
          </div>
        </section>
    </div>

        <div class="container-fluid">
          <section class="row-fluid">
            <div class="span6">
              <h3>Caracter&iacute;sticas B&aacute;sicas</h3>
              <ul>
                <li>Auto identificacion de sensores.</li>
                <li>Colecte datos de m&aacute;s de 80 sensores e interfases.</li>
                <li>Dibuje predicciones de las graficas antes de colectar los datos.</li>
                <li>Utilize una variedad de modos de recolecci&oacute;n de datos seg&uacute;n lo requiera su experimento: datos basados ​​en el tiempo, eventos seleccionados, eventos con nombre, utilizando un sensor foto el&eacute;ctrico, conteo de radiación, y más. </li>
                <li>Ingrese datos manualmente para graficaci&oacute;n y an&aacute;lisis.</li>
                <li>Importe datos de las interfases Vernier.</li>
                <li>Diseñe gr&aacute;ficos, tablas y texto seg&uactue;n sea necesario para describir su experimento.</li>
                <li>Lea valores y pendientes de gr&aacute;ficas utilizando las herramientas examinar y l&iacute;nea tangente.</li>
                <li>Imprima tablas y gr&aacute;ficos.</li>
              </ul>
            </div>
            <div class="span6">
              <h3>Caracter&iacute;sticas Avanzadas</h3>
              <ul>
                <li>Gr&aacute;ficas XY, Logar&iacute;tmicas, de doble eje Y, gr&aacute;ficos de banda y gr&aacute;ficas FFT</li>
                <li>Modele datos utilizando funciones ajustables.</li>
                <li>Obtenga datos de videos utilizando an&aacute;lisis de video cuadro por cuadro.</li>
                <li>Capture videos de camaras DV y camaras web</li>
                <li>Sincronize video con el registro de datos para su experimento.</li>
                <li>An&aacute;lisis de datos para geles de electroforesis.</li>
                <li>Columnas calculadas que permiten añadir nuevas cantidades como por ejemplo, la energ&iacute;a cin&eacute;tica.</li>
                <li>Soporte para espectrofot&oacute;metros Ocean Optics.</li>
                <li>Soporte GPS.</li>
                <li>Analisis de picos de cromatograf&iacute;a de gases.</li>
                <li>Modo de configuracion Manual.</li>
              </ul>
            </div>
          </section>
        </div>
    @endsection


    @section('spec')    
      <div class="container-fluid">
          <div class="row-fluid">
            <div class="span4">
              <h3>Windows</h3>
              <ul>
                <li>Windows XP / Vista (32 or 64-bit) / 7 (32 or 64-bit) / Soporte provisional para Windows 8 (32-bit or 64-bit)</li>
                <li>Procesador Pentium o equivalente con una velociad de 500 MHz o superior.</li>
                <li>Memoria RAM de 512 Mb</li>
                <li>Al menos 200 Mb de espacio en disco duro para la instalaci&oacute;n.</li>
                <li>Pueto USB disponible.</li>
              </ul>
            </div>
            <div class="span4">
              <h3>Mac</h3>
              <ul>
                <li>Mac OSX 10.6/10.7/10.8</li>
                <li>Memoria RAM de 512 Mb</li>
                <li>Al menos 200 Mb de espacio en disco duro para la instalaci&oacute;n.</li>
                <li>Pueto USB disponible.</li>
              </ul>
            </div>
            <div class="span4">
              <h3>Linux</h3>
              <p>Estamos ofreciendo una beta pública gratuita de nuestro galardonado software <strong>Logger Pro</strong> para el sistema operativo Ubuntu Linux.</p><br>
              {{ HTML::link('http://www.vernier.com/downloads/logger-pro-linux/', 'LoggerPro Beta para Ubuntu Linux', array('rel'=>'nofollow')); }}
            </div>
          </div>
        </div>  
    @endsection





    @section('soporte_manual')
        {{ HTML::link('http://www2.vernier.com/manuals/LP3QuickRefManual.pdf', 'Manual de referencia r&aacute;pida.', array('rel'=>'nofollow')); }}
    @endsection

    @section('soporte_renlinea')
            <li>
              {{ HTML::link('http://www.vernier.com/til/2089/', 'Preguntas frecuentes y Gu&iacute;a de problemas', array('rel'=>'nofollow')); }}
            </li>
            <li>
              {{ HTML::link('http://www.vernier.com/support/updates/logger-pro/', 'Descargue la &uacute;ltima actualizacion en l&iacute;nea.', array('rel'=>'nofollow')); }}
            </li>
            <li>
              {{ HTML::link('http://www2.vernier.com/manuals/video_and_logger_pro.pdf', 'Tutorial para an&aacute;lisis de video', array('rel'=>'nofollow')); }}
            </li>
            <li>
              {{ HTML::link('http://www.vernier.com/files/manuals/LP-modeling_fitting_linearization.pdf', 'Gu&iacute;a para Modelacion, ajuste y linealizaci&oacute;n', array('rel'=>'nofollow')); }}
            </li>            
    @endsection

    @section('incluido')
            <ul>
              <li><span itemprop="isAccessoryOrSparePartFor">CD de Software LoggerPro</span></li>
              <li><span itemprop="isAccessoryOrSparePartFor">Licencia de Sitio</span> para todas las computadoras en su escuela o departamente incluyendo las computadoras de sus estudiantes.</li>
              <li><span itemprop="isAccessoryOrSparePartFor">{{ HTML::link('http://www.vernier.com/support/updates/logger-pro/', 'Actualizaciones Gratuitas.', array('rel'=>'nofollow')); }}</span></li>
              <li><span itemprop="isAccessoryOrSparePartFor">{{ HTML::link('http://www2.vernier.com/manuals/LP3QuickRefManual.pdf', 'Manual de referencia r&aacute;pida.', array('rel'=>'nofollow')); }}</span></li>
            </ul>
    @endsection
