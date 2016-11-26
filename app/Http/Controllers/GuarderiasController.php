<?php

namespace VamosAlRio\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}

class GuarderiasController extends Controller
{
    public function guarderias()
    {
        return 'Hola desde Controller';
    }

    public function nombre($nombre)
    {
        //$nombre = 'el delfin colorado';
        return 'el nombre de la guardería es: ' . $nombre;
    }


}