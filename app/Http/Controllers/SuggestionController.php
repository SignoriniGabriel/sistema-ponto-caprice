<?php

namespace App\Http\Controllers;

use App\Models\Suggestion;
use Illuminate\Http\Request;

class SuggestionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $suggestions = Suggestion::paginate(5);
        return view('suggestion.index', compact('suggestions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('suggestion.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $data = $request->validate([
                'name' => 'required',
                'description' => 'required',
            ]);
            //$suggestion = $request->user()->suggestion()->create($data);
            //Suggestion::create($data);
            Suggestion::create(array_merge($data, ['user_id' => Auth()->id()]));
            return redirect('/');
        }catch (Exception $e){
            return redirect('/');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $suggestions = Suggestion::all();
        $suggestion = $suggestions->find($id);
        return view('suggestion.show', compact('suggestion'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        try {
            $data = $request->validate([
                'name' => 'required',
                'description' => 'required'
            ]);
            Suggestion::whereId($id)->update($data);
            return redirect()->action([SuggestionController::class, 'index'])->with('sucesso', "Registro salvo!");
        }catch (Exception $e){
            return redirect()->action([SuggestionController::class, 'index'])->with('erro', "Erro ao salvar registro!");
        }
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
