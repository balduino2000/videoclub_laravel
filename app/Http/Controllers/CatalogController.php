<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CatalogController extends Controller
{
    public function getIndex(){
        return view('catalog.index');
    }
    public function getShow($id)
    {
        return view('catalog.show', array('id'=>$id));
    }
    public function getCreate(){
        return view('catalog.create');
    }
    public function getEdit($id)
    {
        return view('catalog.edit', array('id'=>$id));
    }
}