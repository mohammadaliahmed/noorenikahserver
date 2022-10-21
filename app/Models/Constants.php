<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kreait\Firebase\Factory;

class Constants extends Model
{
    use HasFactory;

    public static function DatabaseReference(): \Kreait\Firebase\Contract\Database
    {
        return (new Factory)
            ->withServiceAccount(__DIR__ . '/Firebase.json')
            ->withDatabaseUri('https://noorenikah-default-rtdb.firebaseio.com')->createDatabase();

    }

    public static function getUserShareId(string $phone)
    {
        $abc = "N,Q,ex,R,V,wU,T,kxw,R,,P,T,N,M,L,K,J,I,H,G,F,Z,e,C,B,A";
        $abcArr = explode(",", $abc);
        $foneArr = str_split( $phone);

        $newProfileId = "";
        for ($i = 0; $i < sizeof($foneArr); $i++) {
            $newProfileId = $newProfileId . $foneArr[$i] . $abcArr[$i];
        }
        return $newProfileId;
    }

    public static function cleanUserId($UserId): array|string|null
    {
        return preg_replace('~\D~', '', $UserId);

    }

}
