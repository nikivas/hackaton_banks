<?php

namespace App\Http\Controllers;

use App\Models\Card;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
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
        if (is_null($sourceCard)) {
            return redirect('/home');
        }
        if ($sourceCard['is_voice']) {
            return view('voiceProcess', [
                'user' => $user,
                'money'=>$fields['money'],
                'source_id'=>$fields['source_id'],
                'target_number'=>$fields['target_number'],
            ]);

        } else {
            return $this->saveToDB($request);
        }
    }

    public function saveToDB(Request $request)
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
        if (is_null($sourceCard)) {
            return redirect('/home');
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

    public function dangerStatus($id)
    {
        $transaction = Transaction::findOrFail($id);
        $transaction['status'] = 'danger';
        $transaction->save();
        return redirect('/home');
    }

    public function checkAudio(Request $request)
    {
        return response(null, 200);
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
