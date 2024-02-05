<?php
use Migrations\AbstractSeed;

/**
 * BooksGenres seed.
 */
class BooksGenresSeed extends AbstractSeed
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
                'book_id' => 4,
                'genre_id' => 3,
            ],
            [
                'book_id' => 3,
                'genre_id' => 2,
            ],
            [
                'book_id' => 3,
                'genre_id' => 4,
            ],
            [
                'book_id' => 5,
                'genre_id' => 5,
            ],
            [
                'book_id' => 5,
                'genre_id' => 1,
            ],
            [
                'book_id' => 6,
                'genre_id' => 5,
            ],
            [
                'book_id' => 7,
                'genre_id' => 1,
            ],
            [
                'book_id' => 7,
                'genre_id' => 3,
            ],
            [
                'book_id' => 10,
                'genre_id' => 3,
            ],
        ];

        $table = $this->table('books_genres');
        $table->insert($data)->save();
    }
}
