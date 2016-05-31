<?php

namespace App\Http\Controllers;

use App\Note;

use App\Card;

use DB;

use Illuminate\Http\Request;

use App\Http\Requests;


class CardsController extends Controller
{
    public function index ()
    {

    	$cards = Card::all();

    	return view('cards.index')->with('cards', $cards);
    }

    public function show(Card $card)
    {
    
    	return view('cards.show')->with('card', $card);
    }

    public function delete($id)
    {
        $card = Card::find($id)->delete();
        $notes = Note::where('card_id', 1)->delete();
    }
}
