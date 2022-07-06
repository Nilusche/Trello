<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Board;
use App\Models\CardList;
use App\Models\Card;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         \App\Models\User::factory(10)->create();

         $board1 = Board::create([
            'title' => 'Board 1',
            'color' => 'teal',
            'owner_id' => 1,
         ]);
         $board2 = Board::create([
            'title' => 'Board 2',
            'color' => 'blue',
            'owner_id' => 2,
         ]);

         $board3 = Board::create([
            'title' => 'Board 3',
            'color' => 'green',
            'owner_id' => 1,
         ]);
         collect([$board1, $board2, $board3])->each(function(Board $board) {
            $list1 = CardList::create([
                'title' => 'List 1',
                'board_id' => $board->id,
            ]);
            $list2 = CardList::create([
                'title' => 'List 2',
                'board_id' => $board->id,
            ]);
            $list3 = CardList::create([
                'title' => 'List 3',
                'board_id' => $board->id,
            ]);

            collect([$list1, $list2, $list3])->each(function(CardList $list) use ($board) {
                $order = 1;
                collect([
                    'Card 1',
                    'Card 2',
                    'Card 3',
                    'Card 4',
                    'Card 5',
                    'Card 6',
                    'Card 7',
                    'Card 8',
                    'Card 9',
                    'Card 10',
                ])->random(random_int(2,5))->each(function($title) use ($list, $board, $order) {
                    $list->cards()->save(
                        Card::make([
                            'title' => $title,
                            'order' => $order++,
                            'owner_id' => $board->owner_id,
                        ])
                    );
                    
                });
            });


        });
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
