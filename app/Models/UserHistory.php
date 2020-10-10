<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserHistory extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'route',
    ];

    public static function checkUser(User $user)
    {
        $checkResult = true;
        $historyList = UserHistory::where('user_id', '=', $user['id'])->get();
        $oldHistory = null;
        $countFailedDiffs = 0;
        foreach ($historyList as $history) {
            if (is_null($oldHistory)) {
                continue;
            }
            if ($history['route'] == $oldHistory['route']) {
                continue;
            }
            if (empty($history['created_at']) || empty($oldHistory['created_at'])) {
                continue;
            }
            $from = Carbon::parse($history['created_at']);
            $to = Carbon::parse($oldHistory['created_at']);

            if ($to->diffInMilliseconds($from) < 500) {
                $countFailedDiffs++;
            }
        }
        if ($countFailedDiffs > 2) {
            $checkResult = false;
        }
        return $checkResult;
    }
}
