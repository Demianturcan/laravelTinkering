<?php

namespace App\Helpers;

class Helpers extends TestCase
{
    public function create_default_user(): void
    {
        $userData = config('videosapp.default_user');

        $team = Team::firstOrCreate(
            [
                'id' => $userData['team_id'],
            ],
            ['user_id' => $userData['team_name'],
            'name' => $userData['team_name']. '\'s Team',
             'personal_team' => true,
            ]
        );

    }


    public function create_default_professor(): void
    {


    }
}
