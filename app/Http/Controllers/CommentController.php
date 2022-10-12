<?php
namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Comment;


use Illuminate\Http\Request;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $client = Client::find($id);

        return view('comments.form', compact('client', 'id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        $comment = new Comment([
            'client_id' => $id,
            'text' => $request->input('komentarz'),
        ]);

        try {    
            $comment->save();

            return redirect()->route('clients.show', $id)->with('success', __('Pomyślnie dodano komentarz'));
        } catch (\Illuminate\Database\QueryException $e) {
            \Log::error($e);
            
            switch ($e->getCode()) {
                case '23000':
                    return redirect()->route('clients.show', $id)->with('error', __('Błąd podczas dodawania, zduplikowane dane!'));
                    break;
                default:
                    return redirect()->route('clients.show', $id)->with('error', __('Błąd podczas dodawania komentarza!'));
            }
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
        $clients = Client::all();
        $comment = Comment::findOrFail($id);
        $edit = true;

        return view('comments.form', compact('comment','clients', 'edit'));
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
        $comment = Comment::findOrFail($id);

        $comment->$id;
        $comment->text = $request->input('komentarz');

        $comment->save();

        $idClient = $comment->client->id;

        try {
            return redirect()->route('clients.show', $idClient)->with('success', __("Pomyślnie zaaktualizowano komentarz" ));
             } catch (\Illuminate\Database\QueryException $e) {
                \Log::error($e);
    
                switch ($e->getCode()) {
                     case '23000':
                         return redirect()->route('clients.index')->with('error', __('Błąd powtórzonych danych!'));
                         break;
                     default:
                        return redirect()->route('clients.index')->with('error', __('Błąd podczas edytowania komentarza!'));
                 }
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
        $comment = Comment::findOrFail($id);
        $client = $comment->client_id;

        $comment->delete();

        return redirect()->route('clients.show', $client)->with('success', __('Pomyślnie usunięto komentarz'));
    }
}
