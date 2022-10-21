<?php

namespace App\Http\Controllers;

use App\Models\Constants;
use Illuminate\Http\Request;
use Kreait\Firebase\Factory;

class FirebaseController extends Controller
{
    //

    public function GetAllPosts()
    {
        $posts = [];

        $database = Constants::DatabaseReference();
        $posts = $database->getReference('Posts')
            ->getSnapshot()->getValue();
        $posts = array_reverse($posts);
        return view('pages.home', ['posts' => $posts]);

    }


    public function ViewProfile($id)
    {
        $id = Constants::cleanUserId($id);
        $database = Constants::DatabaseReference();
        $user = $database->getReference('Users')->getChild($id)
            ->getSnapshot()->getValue();
        return view('pages.profile', ['user' => $user]);
    }

    public function ViewComments($id)
    {
        $database = Constants::DatabaseReference();
        $comments = $database->getReference('PostComments')->getChild($id)
            ->getSnapshot()->getValue();

        $post = $database->getReference('Posts')->getChild($id)
            ->getSnapshot()->getValue();


        return view('pages.comments', ['comments' => $comments,'post'=>$post]);

    }

    public function ViewLikes($id)
    {
        $database = Constants::DatabaseReference();
        $likes = $database->getReference('PostLikes')->getChild($id)
            ->getSnapshot()->getValue();

        $post = $database->getReference('Posts')->getChild($id)
            ->getSnapshot()->getValue();


        return view('pages.likes', ['likes' => $likes,'post'=>$post]);
    }
}
