<!doctype html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	@yield('meta_seo')
	
	@section('head')

	
	{{ HTML::style('css/master.min.css') }}
	{{ HTML::style('http://fonts.googleapis.com/css?family=Open+Sans') }}
	{{ HTML::style('http://fonts.googleapis.com/css?family=Bree+Serif') }}

	@yield_section

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
		@section('page_title')
		    Vernier Puebla
		@yield_section
	</title>
	
</head>
<body>

	@yield('header')

	<!-- NavBar -->
	<div class="navbar">
	<div class="navbar-inner">
	<ul class="nav">	  
	  @yield('navbar')
	</ul>
	</div>
	</div>
	<div class="container-fluid">
		@yield('content')
	</div>

	 
		<div class="footer">
			  <div class="container-fluid">
			  	<div class="row-fluid">
			  		<p class="author pull-right"><a href="http://feliperiveroll.name"><i class="icon-suitcase"></i> <small>Diseño: Felipe Riveroll Aguirre</small></a></p>		    
			    	<p class="author"><a href="http://brconsultores.org">BRConsultores &copy; 2013</a></p>
			    </div>
			  </div>
		</div>
			

	@section('scripts')
	    {{ HTML::script('js/master.min.js') }}
	@yield_section

	
</body>
</html>