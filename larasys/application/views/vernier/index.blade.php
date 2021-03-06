@layout('layouts.master')

@section('meta_seo')
    <meta name="description" content="¿Buscando una manera dinamica para enseñar ciencias? Vernier ofrece registradores de datos, sensores, experimentos, software de graficación y análisis" />
    <link rel="canonical" href="http://brdidacticos.mx" />
    <meta property='og:locale' content='es_MX'/>
    <meta property='og:title' content='Productos Vernier - Puebla'/>
    <meta property='og:description' content='¿Buscando una manera dinamica para enseñar ciencias? Vernier ofrece registradores de datos, sensores, experimentos, software de graficación y análisis'/>
    <meta property='og:url' content='http://brdidacticos.mx'/>
    <meta property='og:site_name' content='Productos Vernier en Puebla'/>
    <meta property='og:type' content='article'/>
@endsection

@section('page_title')
    @parent
@endsection

@section('header')
<header class="row-fluid media" id="header">
    <img src="{{URL::base().'/assets/img/ciencia-con-tecnologia.png';}}" alt="Vernier Puebla" class="pull-left media-object" data-src="holder.js/133x58">
</header>
@endsection

@section('navbar')
    <li class="active"><a href="{{URL::current();}}"><i class="icon-home"></i> Inicio</a></li>
    <li><a href="{{URL::to_route('acerca');}}" ><i class="icon-info-sign"></i> Acerca</a></li>
    <li><a href="{{URL::to_route('sensores');}}"><i class="icon-circle-blank"></i> Sensores</a></li>
    <li><a href="{{URL::to_route('contacto');}}"><i class="icon-envelope"></i> Contacto</a></li>
@endsection


 @section('content')
                    <div id="main_area" class="left-padding">

                            <div class="row-fluid">
                                    <div class="span12" id="slider" >

                                            <div class="row">
                                                    <div class="span8" id="carousel-bounding-box">
                                                            <div id="myCarousel" class="carousel slide">

                                                                    <div class="carousel-inner">
                                                                            <div class="active item" data-slide-number="0"><img src="{{URL::base().'/assets/img/labquest2.jpg';}}" alt="LabQuest2 la interfase más poderosa versátil y conectada de Vernier"/></div>
                                                                            <div class="item" data-slide-number="1"><img src="{{URL::base().'/assets/img/physics2.jpg'}}" alt="Realize mejores experimentos de fisica con el sensor de movimiento Vernier" /></div>
                                                                            <div class="item" data-slide-number="2"><img src="{{URL::base().'/assets/img/college_chemistry.jpg'}}" alt="Registre los datos de una titulación en tiempo real con el contado de gotas de Vernier" /></div>
                                                                            <div class="item" data-slide-number="3"><img src="{{URL::base().'/assets/img/college_organic_chemistry.jpg'}}" alt="Comatografía de gases a bajo costo para sus experimentos de Quimica Organica" /></div>
                                                                            <div class="item" data-slide-number="4"><img src="{{URL::base().'/assets/img/spectro_vis.jpg'}}" alt="Spectro Vis Un espectrofotómetro de bajo costo para la docencia"/></div>
                                                                            <div class="item" data-slide-number="5"><img src="{{URL::base().'/assets/img/logger_Pro.jpg'}}" alt="LoggerPro un solo software para todos los productos de Vernier"/></div>
                                                                    </div>

                                                                    <a class="carousel-control left" href="#myCarousel" data-slide="prev">‹</a>
                                                                    <a class="carousel-control right" href="#myCarousel" data-slide="next">›</a>
                                                            </div>
                                                    </div>
                                                    <div class="span4 well" id="carousel-text"></div>

                                                    <div class="display-none" id="slide-content">
                                                            <div id="slide-content-0">
                                                                <div itemscope itemtype="http://schema.org/Product">
                                                                    <h2><span itemprop="name">LabQuest2</span></h2>
                                                                        <div class="justify">
                                                                            <span itemprop="description">
                                                                                Adquiera datos de los sensores Vernier con una interfase independiente que integra gráficos y análisis.
                                                                            </span>
                                                                            <ul>
                                                                                <li>Pantalla táctil</li>
                                                                                <li>Conectividad USB y Wireless</li>
                                                                                <li>Compatible con OSX y Windows</li>
                                                                                <li>Compatibilidad con todos los sensores Vernier</li>
                                                                                <li>Recargable, batería de larga duración</li>
                                                                            </ul>
                                                                        </div>
                                                                    <div class="sub-text"><a itemprop="url" href="{{ URL::to_route('labq2'); }}" class="btn btn-br">Leer más</a></div>
                                                                </div>
                                                            </div>
                                                            <div id="slide-content-1">
                                                                    <div itemscope itemtype="http://schema.org/Product">
                                                                        <h2><span itemprop="name">Sensor de Movimiento</span></h2>
                                                                            <div class="justify">
                                                                            <span itemprop="description">
                                                                                Coleccione datos de posición, velocidad y aceleración para sus experimentos de <strong>física.</strong>
                                                                            </span>
                                                                            <br>
                                                                            Analize por ejemplo:
                                                                                <ul>
                                                                                  <li>El movimiento armónico simple.</li>
                                                                                  <li>El movimiento de pendular.</li>
                                                                                  <li>La cinemática de objetos lanzados .</li>
                                                                                  <li>La dinámica de objetos.</li>
                                                                                </ul>
                                                                            </div>
                                                                        <div class="sub-text">
                                                                            <a itemprop="url" href="{{ URL::to_route('md-btd'); }}" class="btn btn-br">Leer más</a>
                                                                        </div>
                                                                    </div>
                                                            </div>
                                                            <div id="slide-content-2">
                                                                <div itemscope itemtype="http://schema.org/Product">
                                                                    <h2><span itemprop="name">Contador de gotas</span></h2>
                                                                        <div class="justify">
                                                                            <span itemprop="description">
                                                                                Registre el numero de gotas en forma de volúmen.
                                                                            </span>
                                                                            <br>
                                                                            <small><i>Utilize este sensor con sensores de pH, conductividad, potencial de oxido-reducción (ORP) y temperatura</i></small><br>
                                                                            Para Realizar por ejemplo:
                                                                            <ul>
                                                                              <li>Experimentos de titulación <br>(ácido-base, potenciométrica, conductimétrica)</li>
                                                                              <li>La colección de fracciones de cromatografía</li>
                                                                            </ul>
                                                                        </div>

                                                                    <a itemprop="url" href="{{ URL::to_route('vdc-btd'); }}" class="btn btn-br">Leer más</a>
                                                                </div>
                                                            </div>
                                                            <div id="slide-content-3">
                                                                <div itemscope itemtype="http://schema.org/Product">
                                                                    <h2>
                                                                        <span itemprop="name">
                                                                            Cromatógrafo de gases
                                                                        </span>
                                                                    </h2>

                                                                    <div class="justify">
                                                                        <span itemprop="description">Analize e identifique sustancias contenidas en un líquido volátil o una muestra gaseosa.</span>
                                                                    </div>
                                                                    <div class="center">
                                                                        <img src="assets/img/gc-mini_Quantifying-a-mixture.jpg" alt="Cuantificando un mezcla"><br><small>Cuantificando una mezcla</small>
                                                                        <div class="sub-text"><a itemprop="url" href="{{ URL::to_route('gc2-mini'); }}" class="btn btn-br">Leer más</a></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div id="slide-content-4">
                                                                <div itemscope itemtype="http://schema.org/Product">
                                                                    <h2>
                                                                        <span itemprop="name">
                                                                            Espectrofotómetro
                                                                        </span>
                                                                    </h2>

                                                                        <div class="justify">
                                                                            <span itemprop="description">
                                                                                SpectroVis Plus es un espectrofotómetro y fluorómetro, Visible a IR-cercano.
                                                                            </span>
                                                                            <br>
                                                                          Realize por ejemplo:
                                                                          <ul>
                                                                            <li>El registro de, la transmitancia, el espectro de emisión o fluorescencia</li>
                                                                            <li>Experimentos de la Ley de Beer</li>
                                                                            <li>Experimentos de cinética (concentración <i>Vs</i> tiempo)</li>
                                                                          </ul>
                                                                        </div>
                                                                    <div class="sub-text"><a itemprop="url" href="{{ URL::to_route('svis-pl'); }}" class="btn btn-br">Leer más</a></div>
                                                                </div>
                                                            </div>

                                                            <div id="slide-content-5">
                                                                <div itemscope itemtype="http://schema.org/Product">
                                                                    <h2>
                                                                        <span itemprop="name">
                                                                            LoggerPro
                                                                        </span>
                                                                    </h2>

                                                                    <div class="justify">
                                                                      <span itemprop="description">Software para la colección y análisis de datos para los sensores de vernier.</span>
                                                                    <br>
                                                                      Algunas de sus características son:
                                                                      <ul>
                                                                        <li>Compatibilidad Windows y OSX.</li>
                                                                        <li>Graficación en tiempo real.</li>
                                                                        <li>Análisis estadísticos de datos, incluyendo, integrales, tangentes, ajustes de curva y más.</li>
                                                                        <li>Análisis de videos de movimiento cuadro por cuadro.</li>
                                                                      </ul>
                                                                    </div>

                                                                    <div class="sub-text"><a itemprop="url" href="{{ URL::to_route('lp'); }}" class="btn btn-br">Leer más</a></div>
                                                            </div>
                                                    </div>
                                            </div>
                                    </div>
                            </div>

                            <div class="row hidden-phone" id="slider-thumbs">
                                    <div class="span12">

                                            <ul class="thumbnails">
                                                    <li class="span2">
                                                            <a class="thumbnail" id="carousel-selector-0">
                                                                    <img src="{{URL::base().'/assets/img/labquest_small.png'}}" alt="LabQuest2 la interfase más poderosa versátil y conectada de Vernier" />
                                                            </a>
                                                    </li>
                                                    <li class="span2">
                                                            <a class="thumbnail" id="carousel-selector-1">
                                                                    <img src="{{URL::base().'/assets/img/motion_sensor.png'}}" alt="Realize mejores experimentos de fisica con el sensor de movimiento Vernier" />
                                                            </a>
                                                    </li>
                                                    <li class="span2">
                                                            <a class="thumbnail" id="carousel-selector-2">
                                                                    <img src="{{URL::base().'/assets/img/drop_counter.png'}}" alt="Registre los datos de una titulación en tiempo real con el contado de gotas de Vernier" />
                                                            </a>
                                                    </li>
                                                    <li class="span2">
                                                            <a class="thumbnail" id="carousel-selector-3">
                                                                    <img src="{{URL::base().'/assets/img/GC.png'}}"  alt="Comatografía de gases a bajo costo para sus experimentos de Quimica Organica" />
                                                            </a>
                                                    </li>
                                                    <li class="span2">
                                                            <a class="thumbnail" id="carousel-selector-4">
                                                                    <img src="{{URL::base().'/assets/img/spectro_vis_small.png'}}" alt="Spectro Vis Un espectrofotómetro de bajo costo para la docencia" />
                                                            </a>
                                                    </li>
                                                    <li class="span2">
                                                            <a class="thumbnail" id="carousel-selector-5">
                                                                    <img src="{{URL::base().'/assets/img/loggerpro_logo.png'}}" alt="LoggerPro un solo software para todos los productos de Vernier" />
                                                            </a>
                                                    </li>
                                            </ul>
                                    </div>
                            </div>
    </div>
</div>

@endsection
