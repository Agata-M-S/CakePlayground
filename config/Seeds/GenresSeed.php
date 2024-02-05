<?php
use Migrations\AbstractSeed;

/**
 * Genres seed.
 */
class GenresSeed extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeds is available here:
     * https://book.cakephp.org/phinx/0/en/seeding.html
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'genre_id' => 1,
                'genre' => 'science fiction',
            ],
            [
                'genre_id' => 2,
                'genre' => 'children\'s',
            ],
            [
                'genre_id' => 3,
                'genre' => 'romance',
            ],
            [
                'genre_id' => 4,
                'genre' => 'fantasy',
            ],
            [
                'genre_id' => 5,
                'genre' => 'dystopian',
            ],
            [
                'genre_id' => 6,
                'genre' => 'science',
            ],
            [
                'genre_id' => 7,
                'genre' => 'adventure',
            ],
            [
                'genre_id' => 8,
                'genre' => 'classics',
            ],
        ];

        $table = $this->table('genres');
        $table->insert($data)->save();
    }
}
