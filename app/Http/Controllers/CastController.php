<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Cast;

class CastController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // query builder
        // $posts = DB::table('casts')->get();

        //eloquent ORM
        $casts = Cast::all();

        return view('cast/index', compact('casts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cast.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $request -> validate([
            "name" => 'required',
            "age" => 'required',
            "bio" => 'required'
        ]);

        //query builder
        // $query = DB::table('casts')->insert([
        //     "name" => $request["name"],
        //     "age" => $request["age"],
        //     "bio" => $request["bio"]
        // ]);

        //eloquent ORM
        // $cast = new Cast;
        // $cast->name = $request["name"];
        // $cast->age = $request["age"];
        // $cast->bio = $request["bio"];
        // $cast->save();

        $cast = Cast::create([
            "name" => $request["name"],
            "age" => $request["age"],
            "bio" => $request["bio"]
        ]);

        return redirect('/cast')->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // query builder
        // $post = DB::table('casts')->where('id', $id)->first();

        //eloquent ORM
        $cast = Cast::find($id);
        
        return view('cast.show', compact('cast'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // quey builder
        // $post = DB::table('casts')->where('id', $id)->first();

        // eloquent ORM
        $cast = Cast::find($id);

        return view('cast.edit', compact('cast'));
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
        // query builder
        // $query = DB::table('casts') 
        //             ->where('id', $id)
        //             ->update([
        //                 'name' => $request['name'],
        //                 'age' => $request['age'],
        //                 'bio' => $request['bio']
        //             ]);

        // eloquent ORM
        $update = Cast::where('id', $id)->update([
            'name' => $request['name'],
            'age' => $request['age'],
            'bio' => $request['bio']
        ]);

        return redirect('/cast')->with('success', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // query builder
        // $query = DB::table('casts')->where('id', $id)->delete();

        // eloquent ORM
        Cast::destroy($id);

        return redirect('/cast')->with('success', 'Data berhasil dihapus');
    }
}
