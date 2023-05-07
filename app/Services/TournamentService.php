<?php
namespace App\Services;

use App\Repositories\TournamentRepository;

class TournamentService
{
    public function __construct(private readonly TournamentRepository $tournamentRepository)
    {
    }

    public function getResult(int $tournamentId): array
    {
        $tournament = $this->tournamentRepository->getTournamentById($tournamentId);

        if (!$tournament) {
            return ['error' => 'Invalid tournament id'];
        }

        $data = $this->tournamentRepository->generateRandomResults($tournamentId);

        return [
            'name' => $tournament,
            'data' => $data,
        ];
    }
}

