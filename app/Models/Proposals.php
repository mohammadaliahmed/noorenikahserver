<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proposals extends Model
{
    protected $table = 'proposals';

    use HasFactory;
    function GetAllProposals(): \Illuminate\Database\Eloquent\Collection
    {
        return $this::all()->sortByDesc("id");;
    }

    function GetProposal($Id){
        return $this->find($Id);
    }
}
