<?php

namespace App\Http\Controllers;

use App\Services\TournamentService;
use Illuminate\Http\Request;

class ResultController extends Controller
{
    public function __construct(private readonly TournamentService $tournamentService)
    {
    }

    public function getResult($tournamentId)
    {
        $result = $this->tournamentService->getResult($tournamentId);

        if (isset($result['error'])) {
            return response()->json(['error' => $result['error']], 400);
        }

        return response()->json($result);
    }
}
