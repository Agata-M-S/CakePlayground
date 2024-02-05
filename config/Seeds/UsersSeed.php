<?php
use Migrations\AbstractSeed;

/**
 * Users seed.
 */
class UsersSeed extends AbstractSeed
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
                'user_id' => 1,
                'user_first_name' => 'Jane',
                'user_last_name' => 'Doe',
                'user_date_created' => '2023-11-12',
            ],
            [
                'user_id' => 2,
                'user_first_name' => 'John',
                'user_last_name' => 'Smith',
                'user_date_created' => '2023-11-12',
            ],
            [
                'user_id' => 3,
                'user_first_name' => 'David',
                'user_last_name' => 'Jones',
                'user_date_created' => '2023-11-12',
            ],
        ];

        $table = $this->table('users');
        $table->insert($data)->save();
    }
}
