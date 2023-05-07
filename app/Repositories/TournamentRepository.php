<?php
namespace App\Repositories;

class TournamentRepository implements TournamentRepositoryInterface
{
    private const TOURNAMENTS = [
        1 => 'FIFA World Cup',
        2 => 'Davis Cup',
        3 => 'Copa del Rey',
    ];

    public function getTournaments(): array
    {
        return self::TOURNAMENTS;
    }

    public function getTournamentById(int $tournamentId): ?string
    {
        return self::TOURNAMENTS[$tournamentId] ?? null;
    }

    public function generateRandomResults(int $tournamentId): array
    {
        $data = [];
        $matches = rand(3, 6);

        for ($i = 0; $i < $matches; $i++) {
            $data[] = [
                'homeTeam' => sprintf('Team %s', chr(65 + $i)),
                'awayTeam' => sprintf('Team %s', chr(65 + $i + 1)),
                'homeScore' => rand(0, 5),
                'awayScore' => rand(0, 5),
            ];
        }

        return $data;
    }
}

