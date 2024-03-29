<?php
use Migrations\AbstractMigration;

class AddImageToBookRecords extends AbstractMigration
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
        $table = $this->table('book_records');
        $table-> addColumn('image', 'string', [
          'null'=> true]);
        $table->update();
    }
}
