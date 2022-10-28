<?php

namespace App\Http\Controllers;

use App\Models\Constants;
use App\Models\Profiles;
use App\Models\Proposals;
use Illuminate\Http\Request;
use JetBrains\PhpStorm\NoReturn;
use Kreait\Firebase\Factory;

class FirebaseController extends Controller
{
    //

    public function GetAllPosts()
    {
        $posts = [];
//
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

    function Submit()
    {
        $proposals = new Proposals();
        $proposals = $proposals->GetAllProposals();
        return view('pages.submit', ['proposals' => $proposals]);
    }

    public function ViewComments($id)
    {
        $database = Constants::DatabaseReference();
        $comments = $database->getReference('PostComments')->getChild($id)
            ->getSnapshot()->getValue();

        $post = $database->getReference('Posts')->getChild($id)
            ->getSnapshot()->getValue();


        return view('pages.comments', ['comments' => $comments, 'post' => $post]);

    }

    public function ViewLikes($id)
    {
        $database = Constants::DatabaseReference();
        $likes = $database->getReference('PostLikes')->getChild($id)
            ->getSnapshot()->getValue();

        $post = $database->getReference('Posts')->getChild($id)
            ->getSnapshot()->getValue();


        return view('pages.likes', ['likes' => $likes, 'post' => $post]);
    }

    public function SubmitProfile(Request $request, $id)
    {
        if ($request->isMethod('post')) {
            $Profile = new Profiles();
            $Profile->name = $request->name;
            $Profile->phone = $request->phone;
            $Profile->age = $request->age;
            $Profile->gender = $request->gender;
            $Profile->education = $request->education;
            $Profile->city = $request->city;
            $Profile->cast = $request->cast;
            $Profile->religion = $request->religion;
            $Profile->marital_status = $request->marital_status;
            $Profile->about = $request->about;
            $Profile->proposal_id = $id;
            $Profile->save();
            return redirect('/');


        } else {
            $proposal = new Proposals();
            $proposal = $proposal->GetProposal($id);
            return view('pages.submitProfile', ['proposal' => $proposal]);

        }
    }

    public function AddProposal(Request $request)
    {
        if ($request->isMethod('post')) {
            $Proposal = new Proposals();
            $Proposal->name = $request->name;
            $Proposal->phone = $request->phone;
            $Proposal->age = $request->age;
            $Proposal->education = $request->education;
            $Proposal->gender = $request->gender;
            $Proposal->city = $request->city;
            $Proposal->cast = $request->cast;
            $Proposal->religion = $request->religion;
            $Proposal->marital_status = $request->marital_status;
            $Proposal->about = $request->about;
            $Proposal->save();
            return redirect('/');


        } else {
            return view('pages.addProposal');

        }
    }

    public function ListProposals()
    {

        $proposal = new Proposals();
        $proposals = $proposal->GetAllProposals();
        return view('pages.proposalList', ['proposals' => $proposals]);
    }

    public function ViewProposal($Id)
    {

        $proposal = new Proposals();
        $proposal = $proposal->GetProposal($Id);
        $profileModel = new Profiles();
        $profiles = $profileModel->GetAllProfilesWithProposalId($Id);

        $relatedProfiles = $profileModel->GetRelatedProfiles($proposal);

        return view('pages.viewProposal', ['proposal' => $proposal, 'profiles' => $profiles,
            'relatedProfiles' => $relatedProfiles]);

    }

    public function ViewSubmittedProfile($Id)
    {

        $profile = new Profiles();
        $profile = $profile->GetProfile($Id);


        return view('pages.viewSubmittedProfile', ['profile' => $profile]);

    }
}
