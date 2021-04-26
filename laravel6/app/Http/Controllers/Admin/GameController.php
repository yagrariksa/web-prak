<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Game;
use App\Models\GamePublisher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class GameController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $game = Game::get();

        return view('admin.game.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $publisher = GamePublisher::all();
        if (count($publisher) < 1) {
            session()->flash('warning','Harap Tambahkan Publisher terlebih dahulu sebelum menambahkan game');
            return redirect()->route('game.publisher.create');
        }
        return view('admin.game.create',[
            'publisher' => $publisher,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        $validator = Validator::make($request->all(),[
            'name'      => 'required',
            'publisher' => 'required',
            'desc'      => 'required',
            'price'     => 'required|integer',
            'img'       => '',
        ]);

        if ($validator->fails()) {
            session()->flash('warning','Cek kembali form anda');
            return redirect()->back()->withErrors($validator)->withInput();
        }

        dd($request);

        // TODO : store image

        // TODO : store data

        return redirect()->route('game.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $publisher = GamePublisher::all();
        if (count($publisher) < 1) {
            session()->flash('warning','Harap Tambahkan Publisher terlebih dahulu sebelum menambahkan game');
            return redirect()->route('game.publisher.create');
        }

        // $data = Game::find($id);
        $data = Game::first();

        if (!$data) {
            session()->flash('error','Data tidak ditemukan untk mengedit');
        }else{
            session()->flash('edit',true);
        }

        return view('admin.game.create',[
            'publisher' => $publisher,
            'data'      => $data,
        ]);
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
