<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Simply tell Laravel the HTTP verbs and URIs it should respond to. It is a
| breeze to setup your application using Laravel's RESTful routing and it
| is perfectly suited for building large applications and simple APIs.
|
| Let's respond to a simple GET request to http://example.com/hello:
|
|		Route::get('hello', function()
|		{
|			return 'Hello World!';
|		});
|
| You can even respond to more than one URI:
|
|		Route::post(array('hello', 'world'), function()
|		{
|			return 'Hello World!';
|		});
|
| It's easy to allow URI wildcards using (:num) or (:any):
|
|		Route::put('hello/(:any)', function($name)
|		{
|			return "Welcome, $name.";
|		});
|
*/

Route::get('/', function()
{
	return View::make('vernier.index');
});

Route::get('sensores-vernier', array('as' => 'sensores', function()
{
	return View::make('vernier.sensores');
}));

Route::get('sensores/'.Str::slug('Sensor de Movimiento'), array('as' => 'md-btd', function()
{
	return View::make('vernier.md-btd');
}));

Route::get('sensores/'.Str::slug('Contador de gotas'), array('as' => 'vdc-btd', function()
{
	return View::make('vernier.vdc-btd');
}));

Route::get('sensores/'.Str::slug('Cromatografo de Gases Mini GC Plus'), array('as' => 'gc2-mini', function()
{
	return View::make('vernier.gc2-mini');
}));

Route::get('sensores/'.Str::slug('Espectrofotómetro SpectroVis Plus'), array('as' => 'svis-pl', function()
{
	return View::make('vernier.svis-pl');
}));

Route::get('interfaces/'.Str::slug('LabQuest 2'), array('as' => 'labq2', function()
{
	return View::make('vernier.labq2');
}));

Route::get('software/'.Str::slug('Logger Pro'), array('as' => 'lp', function()
{
	return View::make('vernier.lp');
}));

Route::get('acerca', array('as' => 'acerca', function()
{
	return View::make('vernier.acerca');
}));

Route::get('contacto', array('as' => 'contacto', 'uses' => 'contacto@new'));

Route::post('contacto', array('as' => 'contacto', 'uses' => 'contacto@create'));

Route::controller(Controller::detect());

Route::get('sensores', function()
{
    return Redirect::to_route('sensores', 301);
});

Route::get('sensores/md-btd', function()
{
    return Redirect::to_route('md-btd', 301);
});

Route::get('sensores/vdc-btd', function()
{
    return Redirect::to_route('vdc-btd', 301);
});

Route::get('sensores/gc2-mini', function()
{
    return Redirect::to_route('gc2-mini', 301);
});

Route::get('sensores/svis-pl', function()
{
    return Redirect::to_route('svis-pl', 301);
});

Route::get('interfaces/labq2', function()
{
    return Redirect::to_route('labq2', 301);
});


Route::get('software/lp', function()
{
    return Redirect::to_route('lp', 301);
});

Route::get('software/loggerpro', function()
{
    return Redirect::to_route('lp', 301);
});

Route::get('sensores/cromatografo-de-gases', function()
{
    return Redirect::to_route('gc2-mini', 301);
});

/*
|--------------------------------------------------------------------------
| Application 404 & 500 Error Handlers
|--------------------------------------------------------------------------
|
| To centralize and simplify 404 handling, Laravel uses an awesome event
| system to retrieve the response. Feel free to modify this function to
| your tastes and the needs of your application.
|
| Similarly, we use an event to handle the display of 500 level errors
| within the application. These errors are fired when there is an
| uncaught exception thrown in the application.
|
*/

Event::listen('404', function()
{
	return Response::error('404');
});

Event::listen('500', function()
{
	return Response::error('500');
});

/*
|--------------------------------------------------------------------------
| Route Filters
|--------------------------------------------------------------------------
|
| Filters provide a convenient method for attaching functionality to your
| routes. The built-in before and after filters are called before and
| after every request to your application, and you may even create
| other filters that can be attached to individual routes.
|
| Let's walk through an example...
|
| First, define a filter:
|
|		Route::filter('filter', function()
|		{
|			return 'Filtered!';
|		});
|
| Next, attach the filter to a route:
|
|		Route::get('/', array('before' => 'filter', function()
|		{
|			return 'Hello World!';
|		}));
|
*/

Route::filter('before', function()
{
	// Do stuff before every request to your application...
});

Route::filter('after', function($response)
{
	// Do stuff after every request to your application...
});

Route::filter('csrf', function()
{
	if (Request::forged()) return Response::error('500');
});

Route::filter('auth', function()
{
	if (Auth::guest()) return Redirect::to('login');
});