<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Categorias;
use App\Productos;
use Auth;

class ProductosController extends Controller
{

	public function listar()
	{
		$productos = Productos::all();
		return response()->json(
				$productos->toArray()
			);
	}

    public function index()
    {
    	$pro = Productos::all();
    	$cate = Categorias::all();
    	return view('productos.index',['pro'=>$pro, 'cate'=>$cate]);
    }

    public function create()
    {
    	if(Auth::check())
    	{
    		$cat = Categorias::all();
    		return view('productos.create',['cat'=>$cat]);
    	}

    	return view('home');
    }

    public function store(Request $request)
    {
    	if($request->ajax())
    	{
    		Productos::create($request->all());

    		return response()->json([
    			'mensaje'=>'creado',
    			]);
    	}
    }

    public function edit($id)
    {
    	if(Auth::check())
    	{
    		$productos = Productos::find($id);
    		return response()->json(
    				$productos->toArray()
    			);
    	}

    	return view('home');
    }

    public function update(Request $request, $id)
    {
    	$productos = Productos::find($id);
    	$productos->fill($request->all());
    	$productos->save();

    	return response()->json([
    			'mensaje'=>'correcto'
    		]);
    }

    public function destroy($id)
    {
    	$productos = Productos::find($id);
    	$productos->delete();
    	return response()->json(['mensaje'=>'borrado']);
    }
}
