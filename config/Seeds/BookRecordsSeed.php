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
                'description' => 'Emma, fourth novel by Jane Austen, published in three volumes in 1815. Set in Highbury, England, in the early 19th century, the novel centres on Emma Woodhouse, a precocious young woman whose misplaced confidence in her matchmaking abilities occasions several romantic misadventures.',
                'image' => 'https://d3ddkgxe55ca6c.cloudfront.net/assets/t1496030107/a/ee/d5/170000-ml-1511961.jpg'
            ],
            [
                'book_id' => 3,
                'title' => 'The Tale of Peter Rabbit',
                'price_in_pence' => 540,
                'quantity_in_stock' => 1000,
                'release_date' => '1902-10-01',
                'is_fiction' => true,
                'author_id' => 6,
                'description' => 'The Tale of Peter Rabbit is a children\'s book written and illustrated by Beatrix Potter that follows mischievous and disobedient young Peter Rabbit as he gets into, and is chased around, the garden of Mr. McGregor. He escapes and returns home to his mother, who puts him to bed after offering him chamomile tea.',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/5/5a/Peter_Rabbit_first_edition_1902a.jpg'
            ],
            [
                'book_id' => 5,
                'title' => 'Nineteen Eighty-Four: A Novel',
                'price_in_pence' => 720,
                'quantity_in_stock' => 420,
                'release_date' => '1949-06-08',
                'is_fiction' => true,
                'author_id' => 11,
                'description' => 'The book is set in 1984 in Oceania, one of three perpetually warring totalitarian states (the other two are Eurasia and Eastasia). Oceania is governed by the all-controlling Party, which has brainwashed the population into unthinking obedience to its leader, Big Brother.',
                'image' => 'https://m.media-amazon.com/images/I/61ZewDE3beL._AC_UF894,1000_QL80_.jpg'
            ],
            [
                'book_id' => 6,
                'title' => 'The Handmaid\'s Tale',
                'price_in_pence' => 899,
                'quantity_in_stock' => 10,
                'release_date' => '1985-08-01',
                'is_fiction' => true,
                'author_id' => 13,
                'description' => 'The Handmaid\'s Tale (1985) by Margaret Atwood is a dystopian novel set in a version of the United States that has been overthrown by religious fundamentalists. In what was once most likely Massachusetts, under the militaristic regime of the Republic of Gilead, women no longer have civil rights or autonomy.',
                'image' => 'https://pictures.abebooks.com/isbn/9780860688662-uk.jpg'
            ],
            [
                'book_id' => 7,
                'title' => 'The War of the Worlds',
                'price_in_pence' => 225,
                'quantity_in_stock' => 17,
                'release_date' => '1897-04-01',
                'is_fiction' => true,
                'author_id' => 10,
                'description' => 'The seminal masterpiece of alien invasion, The War of the Worlds (1898) conjures a terrifying, tentacled race of Martians who devastate the Earth and feed on their human victims while their voracious vegetation, the red weed, spreads over the ruined planet.',
                'image' => 'https://www.gutenberg.org/files/36/36-h/images/cover.jpg'
            ],
            [
                'book_id' => 10,
                'title' => 'Pride and Prejudice',
                'price_in_pence' => 699,
                'quantity_in_stock' => 4,
                'release_date' => '1813-01-28',
                'is_fiction' => true,
                'author_id' => 12,
                'description' => 'Pride and Prejudice follows the turbulent relationship between Elizabeth Bennet, the daughter of a country gentleman, and Fitzwilliam Darcy, a rich aristocratic landowner. They must overcome the titular sins of pride and prejudice in order to fall in love and marry.',
                'image' => ' https://devontrevarrowflaherty.files.wordpress.com/2023/02/pride-and-prejudice.jpg'
            ],
        ];

        $table = $this->table('book_records');
        $table->insert($data)->save();
    }
}
