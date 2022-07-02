<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class HolaController extends Controller
{
    public function index(){
        $hola = "Bienvenida Vanessa Mendoza Inoñan 144995!!";
        return view("welcome",compact("hola"));
    }
}
