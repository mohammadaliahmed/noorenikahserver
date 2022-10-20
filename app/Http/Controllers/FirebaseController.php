<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kreait\Firebase\Factory;

class FirebaseController extends Controller
{
    //

    public function GetAllPosts()
    {
        $factory = (new Factory)
            ->withServiceAccount(__DIR__ . '/Firebase.json')
            ->withDatabaseUri('https://noorenikah-default-rtdb.firebaseio.com');
        $database = $factory->createDatabase();
        $posts = $database->getReference('Posts')
            ->getSnapshot()->getValue();
        $posts=array_reverse($posts);
        return view('posts', ['posts' => $posts]);

    }
}
