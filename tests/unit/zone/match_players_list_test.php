<?php

namespace eru\nczone\tests\zone;

use eru\nczone\zone\entity\match_player;
use eru\nczone\zone\entity\match_players_list;
use PHPUnit\Framework\TestCase;

class match_players_list_test extends TestCase
{

    /**
     * @dataProvider get_max_rating_data_provider
     */
    public function test_get_max_rating(array $player_lists, int $expected): void
    {
        $list = new match_players_list;
        foreach ($player_lists as $player) {
            $list->add($player);
        }

        $this->assertSame($expected, $list->get_max_rating());
    }

    /**
     * @dataProvider get_min_rating_data_provider
     */
    public function test_get_min_rating(array $player_lists, int $expected): void
    {
        $list = new match_players_list;
        foreach ($player_lists as $player) {
            $list->add($player);
        }

        $this->assertSame($expected, $list->get_min_rating());
    }

    public function get_max_rating_data_provider(): array
    {
        return [
            [
                $player_lists = [
                    new match_player(6, 59),
                    new match_player(7, 45),
                    new match_player(8, 8000),
                    new match_player(9, 501),
                    new match_player(10, 2300),
                ],
                $expected = 8000,
            ],
            [
                $player_lists = [
                ],
                $expected = 0,
            ],
        ];
    }

    public function get_min_rating_data_provider(): array
    {
        return [
            [
                $player_lists = [
                    new match_player(6, 59),
                    new match_player(7, 45),
                    new match_player(8, 8000),
                    new match_player(9, 501),
                    new match_player(10, 2300),
                ],
                $expected = 45,
            ],
            [
                $player_lists = [
                    new match_player(1, 999),
                    new match_player(2, 1000),
                    new match_player(3, 8000),
                    new match_player(4, 501),
                    new match_player(5, 2300),
                ],
                $expected = 501,
            ],
            [
                $player_lists = [
                ],
                $expected = 0,
            ],
        ];
    }

}
