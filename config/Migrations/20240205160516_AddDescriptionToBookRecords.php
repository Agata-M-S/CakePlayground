<?php
use Migrations\AbstractMigration;

class AddDescriptionToBookRecords extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     * @return void
     */
    public function up()
    {
      $table = $this->table('book_records');
      $table-> addColumn('description', 'string', [
        'default'=> 'book description',
        'limit' => 250,
        'null'=> false
      ]);
      $table-> update();
    }

    public function down() 
    {
      $table = $this->table('book_records');
      $table-> dropColumn('description');
      $table-> update();
    }
}
