<?php
use Migrations\AbstractMigration;

class AlterPasswordLength extends AbstractMigration
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
        $table -> changeColumn('password', 'string', [
            'default' => null,
            'limit' => 300
        ]);
        $table->update();
    }
}
