<?php

namespace App\Http\Controllers;

use App\Models\Card;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = User::findOrFail(Auth()->id());
        $isValid = false;
        $fields = $request->all();
        $cards = $user->cards()->get();
        $sourceCard = null;
        foreach ($cards as $card) {
            if ($card['id'] == $fields['source_id']) {
                if ($card['money'] >= $fields['money']) {
                    $isValid = true;
                    $sourceCard = $card;
                }
            }
        }

        if (isset($fields['target_id'])) {
            $targetCard = Card::findOrFail($fields['target_id']);
        } else if (isset($fields['target_number'])) {
            $targetCard = Card::where('number', '=', $fields['target_number'])->get()->first();
            if (!is_null($targetCard)) {
                $fields['target_id'] = $targetCard['id'];
            }
        }

        $sourceCard['money'] -= $fields['money'];
        if (!is_null($targetCard)) {
            $targetCard['money'] += $fields['money'];
            $targetCard->save();
        }

        $sourceCard->save();

        $fields['user_id'] = $user['id'];
        Transaction::create($fields);
        return redirect('/home');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
