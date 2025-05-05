<?php
namespace App\Http\Controllers\Controles;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth; // Asegúrate de tener esta línea
use Illuminate\Support\Facades\File;

class ControlController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function indexRedireccionamiento(){

        $user = Auth::user();

        // ADMINISTRADOR SISTEMA
        if($user->hasRole('admin')){
            $ruta = 'admin.roles.index';
        }
        else if($user->hasRole('usuario')){
            $ruta = 'admin.dashboard.index';
        }
        else{
            // no tiene ningun permiso de vista, redirigir a pantalla sin permisos
            $ruta = 'no.permisos.index';
        }

        $titulo = "Base Proyecto";

        return view('backend.index', compact( 'ruta', 'user', 'titulo'));
    }

    // Redirige a vista sin permisos
    public function indexSinPermiso(){
        return view('errors.403');
    }

    public function mostrarLibrosEnVista()
    {
        $path = storage_path('xml/Libros.xml'); // <-- Nombre correcto
    
        if (!file_exists($path)) {
            return view('preferencias', ['libros' => []]);
        }
    
        $xml = simplexml_load_file($path);
        $json = json_encode($xml);
        $data = json_decode($json, true);
    
        $libros = $data['libro'];
    
        // Si solo hay un libro, convertirlo en array
        if (!isset($libros[0])) {
            $libros = [$libros];
        }
    
        return view('preferencias', ['libros' => $libros]);
    }
    
    
}
