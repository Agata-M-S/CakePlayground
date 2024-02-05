<?php
use Migrations\AbstractSeed;

/**
 * BookReviews seed.
 */
class BookReviewsSeed extends AbstractSeed
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
                'review_id' => 2,
                'user_id' => 1,
            ],
            [
                'book_id' => 6,
                'review_id' => 5,
                'user_id' => 1,
            ],
            [
                'book_id' => 6,
                'review_id' => 4,
                'user_id' => 2,
            ],
            [
                'book_id' => 4,
                'review_id' => 1,
                'user_id' => 3,
            ],
            [
                'book_id' => 4,
                'review_id' => 3,
                'user_id' => 3,
            ],
        ];

        $table = $this->table('book_reviews');
        $table->insert($data)->save();
    }
}
