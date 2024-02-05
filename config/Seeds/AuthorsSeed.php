<?php
use Migrations\AbstractSeed;

/**
 * Authors seed.
 */
class AuthorsSeed extends AbstractSeed
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
                'author_id' => 1,
                'author_name' => 'Dan Brown',
                'author_fun_fact' => 'Favourite colour is not brown.',
            ],
            [
                'author_id' => 2,
                'author_name' => 'Antoine de Saint-Exupéry',
                'author_fun_fact' => 'He was a successful commercial pilot before World War II, working airmail routes in Europe, Africa, and South America.',
            ],
            [
                'author_id' => 4,
                'author_name' => 'Stephen Hawking',
                'author_fun_fact' => 'Doctors told him he wouldn\'t live past his early 20s.',
            ],
            [
                'author_id' => 5,
                'author_name' => 'Eric Carle',
                'author_fun_fact' => 'The Catcher in the Rye was the only novel that J.D. Salinger published during his lifetime - not bad for a first try!',
            ],
            [
                'author_id' => 6,
                'author_name' => 'Beatrix Potter',
                'author_fun_fact' => 'Between 1881 and 1897 Potter kept a journal in which she jotted down her private thoughts in a secret code . This code was so fiendishly difficult it was not cracked and translated until 1958.',
            ],
            [
                'author_id' => 7,
                'author_name' => 'C. S. Lewis',
                'author_fun_fact' => 'During World War II he passed intelligence to MI6 from Washington.',
            ],
            [
                'author_id' => 8,
                'author_name' => 'Frank Herbert',
                'author_fun_fact' => 'While conversing with fungi expert Paul Stamets, Herbert revealed that the world of Dune was influenced by the lifecycle of mushrooms, with his imagination being helped along by a more "magic" variety.',
            ],
            [
                'author_id' => 9,
                'author_name' => 'Louis de Bernières',
                'author_fun_fact' => 'De Bernières is an avid musician who plays flute, mandolin, clarinet and guitar.',
            ],
            [
                'author_id' => 10,
                'author_name' => 'H. G. Wells',
                'author_fun_fact' => 'In 1914 H.G. Wells published a novel titled The World Set Free. In this book he described a weapon that was eerily similar to the first atomic bomb unleashed on the Japanese cities of Hiroshima and Nagasaki in 1945.',
            ],
            [
                'author_id' => 11,
                'author_name' => 'George Orwell',
                'author_fun_fact' => 'Orwell intentionally got himself arrested for being "drunk and incapable".',
            ],
            [
                'author_id' => 12,
                'author_name' => 'Jane Austen',
                'author_fun_fact' => 'The author of her first novel, Sense and Sensibility, was simply "A Lady", and her later works like Pride and Prejudice were credited to "the Author of Sense and Sensibility". She wasn\'t named as the author of her novels until after her death!',
            ],
            [
                'author_id' => 13,
                'author_name' => 'Margaret Atwood',
                'author_fun_fact' => 'Atwood was the first author to contribute to The Future Library Project, which will take one writer\'s contribution each year for one hundred years to be printed in the year 2114.',
            ],
        ];

        $table = $this->table('authors');
        $table->insert($data)->save();
    }
}
