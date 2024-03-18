<?php
use Migrations\AbstractMigration;

class AddUsernameToUsers extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
        $table = $this->table('users');
        $datetime = 'datetime';
        $table
            ->addColumn('username', 'string', [
            'default' => 'user122',
            'limit' => 30,
            'null'=> true])
            ->addColumn('email', 'string', [
                'default' =>'user@example.com',
                'null' => true,
                'limit' => 100]);
        $table->update();
    }
}
