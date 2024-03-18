<?php
use Migrations\AbstractMigration;

class AddPrimaryKeyIdToBooksGenres extends AbstractMigration
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
        $table = $this->table('books_genres');
        $table->addColumn('id', 'biginteger', [
          'autoIncrement' => true,
          'default' => null,
      ]);
      $table->addPrimaryKey(['id']);
        $table->update();
    }
}
