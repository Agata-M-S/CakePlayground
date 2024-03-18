<?php

use Migrations\AbstractMigration;

class AlterUserTable extends AbstractMigration
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
        $table
            ->changeColumn('username', 'string', [
                'default' => null,
                'limit' => 30,
                'null' => false])
            ->changeColumn('email', 'string', [
                'default' => null,
                'null' => false,
                'limit' => 100]);
        $table->update();
    }
}
