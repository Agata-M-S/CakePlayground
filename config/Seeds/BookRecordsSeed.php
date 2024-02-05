<?php
use Migrations\AbstractSeed;

/**
 * BookRecords seed.
 */
class BookRecordsSeed extends AbstractSeed
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
                'title' => 'Emma',
                'price_in_pence' => 470,
                'quantity_in_stock' => 390,
                'release_date' => '1815-12-23',
                'is_fiction' => true,
                'author_id' => 12,
            ],
            [
                'book_id' => 3,
                'title' => 'The Tale of Peter Rabbit',
                'price_in_pence' => 540,
                'quantity_in_stock' => 1000,
                'release_date' => '1902-10-01',
                'is_fiction' => true,
                'author_id' => 6,
            ],
            [
                'book_id' => 5,
                'title' => 'Nineteen Eighty-Four: A Novel',
                'price_in_pence' => 720,
                'quantity_in_stock' => 420,
                'release_date' => '1949-06-08',
                'is_fiction' => true,
                'author_id' => 11,
            ],
            [
                'book_id' => 6,
                'title' => 'The Handmaid\'s Tale',
                'price_in_pence' => 899,
                'quantity_in_stock' => 10,
                'release_date' => '1985-08-01',
                'is_fiction' => true,
                'author_id' => 13,
            ],
            [
                'book_id' => 7,
                'title' => 'The War of the Worlds',
                'price_in_pence' => 225,
                'quantity_in_stock' => 17,
                'release_date' => '1897-04-01',
                'is_fiction' => true,
                'author_id' => 10,
            ],
            [
                'book_id' => 10,
                'title' => 'Pride and Prejudice',
                'price_in_pence' => 699,
                'quantity_in_stock' => 4,
                'release_date' => '1813-01-28',
                'is_fiction' => true,
                'author_id' => 12,
            ],
        ];

        $table = $this->table('book_records');
        $table->insert($data)->save();
    }
}
