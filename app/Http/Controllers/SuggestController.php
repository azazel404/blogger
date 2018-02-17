<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Suggest;

class SuggestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $suggests = Suggest::paginate(5);

        return view('suggests.index',['suggests' => $suggests]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('suggests.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $suggests = Suggest::create($request->all());
     	return redirect()->to('suggests');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $suggests = Suggest::find($id);

        if (!$suggests) {
          abort('404');
        }

        return view('suggests.section',['suggests' => $suggests]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $suggests = Suggest::find($id);

      return view('suggests.edit',['suggests' => $suggests]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      	$suggests = Suggest::find($id)->update($request->all());
		// kalau menggunakan route( harus pake name route bisa di cek ( php artisan route:list )
        return redirect()->route('suggests.index');
      //   // return redirect()->to('suggests')->with(compact('suggests'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $suggests = Suggest::destroy($id);
          return redirect()->to('suggests');
    }
}
