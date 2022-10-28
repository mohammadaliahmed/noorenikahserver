<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profiles extends Model
{
    use HasFactory;

    protected $table = 'profiles';


    function GetProfile($id)
    {
        return $this->find($id);
    }

    function GetAllProfilesWithProposalId($id)
    {
        return $this->where('proposal_id', $id)->get();
    }

}
