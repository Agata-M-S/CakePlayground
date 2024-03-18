<?php
use Migrations\AbstractMigration;

class AddPasswordToUsers extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     * @return void
     */
    public function change(): void
    {
        $table = $this->table('users');
        $table->addColumn('password', 'string', [
            'default' => 'Password',
            'limit' => 20,
            'null'=> false
         ]);
        $table->update();
    }
}
