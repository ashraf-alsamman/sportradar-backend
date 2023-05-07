<?php
namespace App\Repositories;

interface TournamentRepositoryInterface
{
    public function getTournaments(): array;
    public function getTournamentById(int $tournamentId);
    public function generateRandomResults(int $tournamentId): array;
}
