<?php

class Contacto_Controller extends Base_Controller {

	public $restful = true;
 

	function __construct()
    {
        parent::__construct();

    }

    public function get_new()
    {
    	return View::make('contacto.new');
    }    

	public function post_create()
    {
    	$rules = array('nombre' => 'required',
                       'institucion' => 'required',
                       'correo' => 'required|email',
                       'telefono' => 'required',
                       'asunto' => 'required',
                       'mensaje' => 'required', );

        $messages = array(
            'required' => 'Se requiere el campo :attribute',
            'email' => 'Debe proporcionar un correo v&aacute;lido'
        );

        $validation = Validator::make(Input::all(), $rules, $messages);

        if ($validation->fails()) 
        {
            return Redirect::to(URL::to_route('contacto'))->with_errors($validation)->with_input();
        }
        
        else
        {
            Message::send(function($message)
            {
                $message->to('ventas@vernier.mx');
                $message->cc('alfcesar@gmail.com');
                $message->from(Input::get('correo'), Input::get('nombre'));

                $message->subject(Input::get('asunto'));
                $message->body('view: contacto.mensaje');

                // You can add View data by simply setting the value
                // to the message.
                $message->body->nombre = Input::get('nombre');
                $message->body->institucion = Input::get('institucion');
                $message->body->correo = Input::get('correo');
                $message->body->telefono = Input::get('telefono');
                $message->body->asunto = Input::get('asunto');
                $message->body->mensaje = Input::get('mensaje');

                $message->html(true);
            });

            if(Message::was_sent())
            {
                Session::flash('success', 'Su mensaje ha sido enviado, en breve nos comunicaremos con usted');
                return Redirect::to(URL::to_route('contacto'));
                
            }
        }
         

    
        return View::make('contacto.new');
    }
}