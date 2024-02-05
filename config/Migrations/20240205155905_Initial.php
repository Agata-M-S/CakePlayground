<?php
use Migrations\AbstractMigration;

class Initial extends AbstractMigration
{
    public function up()
    {
      if (!$this->hasTable('authors')) {
        $this->table('authors', ['id' => false, 'primary_key' => ['author_id']])
            ->addColumn('author_id', 'integer', [
                'autoIncrement' => true,
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('author_name', 'string', [
                'default' => null,
                'limit' => 50,
                'null' => false,
            ])
            ->addColumn('author_fun_fact', 'string', [
                'default' => null,
                'limit' => 250,
                'null' => true,
            ])
            ->create();
      };

      if (!$this->hasTable('book_records')) {
        $this->table('book_records', ['id' => false, 'primary_key' => ['book_id']])
            ->addColumn('book_id', 'integer', [
                'autoIncrement' => true,
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('title', 'string', [
                'default' => null,
                'limit' => 50,
                'null' => false,
            ])
            ->addColumn('price_in_pence', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('quantity_in_stock', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('release_date', 'date', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('is_fiction', 'boolean', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('author_id', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->addIndex(
                [
                    'author_id',
                ]
            )
            ->create();
      }         

      if (!$this->hasTable('book_reviews')) {
        $this->table('book_reviews', ['id' => false])
            ->addColumn('book_id', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('review_id', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('user_id', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->addIndex(
                [
                    'book_id',
                ]
            )
            ->addIndex(
                [
                    'review_id',
                ]
            )
            ->addIndex(
                [
                    'user_id',
                ]
            )
            ->create();
      }  
      
      if (!$this->hasTable('books_genres')) {
        $this->table('books_genres', ['id' => false])
            ->addColumn('book_id', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('genre_id', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->addIndex(
                [
                    'book_id',
                ]
            )
            ->addIndex(
                [
                    'genre_id',
                ]
            )
            ->create();
      }
      
      if (!$this->hasTable('genres')) {
        $this->table('genres', ['id' => false, 'primary_key' => ['genre_id']])
            ->addColumn('genre_id', 'integer', [
                'autoIncrement' => true,
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('genre', 'string', [
                'default' => null,
                'limit' => 15,
                'null' => false,
            ])
            ->create();
      }
      
      if (!$this->hasTable('reviews')) {
        $this->table('reviews', ['id' => false, 'primary_key' => ['review_id']])
            ->addColumn('review_id', 'integer', [
                'autoIncrement' => true,
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('review_score', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('review', 'string', [
                'default' => null,
                'limit' => 1000,
                'null' => true,
            ])
            ->addColumn('review_date', 'date', [
                'default' => 'CURRENT_DATE',
                'limit' => null,
                'null' => true,
            ])
            ->create();
      }

      if (!$this->hasTable('users')) {
        $this->table('users', ['id' => false, 'primary_key' => ['user_id']])
            ->addColumn('user_id', 'integer', [
                'autoIncrement' => true,
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('user_first_name', 'string', [
                'default' => null,
                'limit' => 20,
                'null' => false,
            ])
            ->addColumn('user_last_name', 'string', [
                'default' => null,
                'limit' => 20,
                'null' => true,
            ])
            ->addColumn('user_date_created', 'date', [
                'default' => 'CURRENT_DATE',
                'limit' => null,
                'null' => true,
            ])
            ->create();
      }

      // if (!$this->hasForeignKey('book_records', 'book_records_author_id_fkey')) {
      //   $this->table('book_records')
      //       ->addForeignKey(
      //           'author_id',
      //           'authors',
      //           'author_id',
      //           [
      //               'update' => 'NO_ACTION',
      //               'delete' => 'NO_ACTION'
      //           ]
      //       )
      //       ->update();
      // }

      // if (!$this->hasForeignKey('book_reviews', 'book_reviews_book_id_fkey')) {
      //   $this->table('book_reviews')
      //       ->addForeignKey(
      //           'book_id',
      //           'book_records',
      //           'book_id',
      //           [
      //               'update' => 'NO_ACTION',
      //               'delete' => 'NO_ACTION'
      //           ]
      //       )
      //       ->addForeignKey(
      //           'review_id',
      //           'reviews',
      //           'review_id',
      //           [
      //               'update' => 'NO_ACTION',
      //               'delete' => 'NO_ACTION'
      //           ]
      //       )
      //       ->addForeignKey(
      //           'user_id',
      //           'users',
      //           'user_id',
      //           [
      //               'update' => 'NO_ACTION',
      //               'delete' => 'NO_ACTION'
      //           ]
      //       )
      //       ->update();
      // }
      
      // if (!$this->hasForeignKey('books_genres', 'books_genres_book_id_fkey')) {
      //   $this->table('books_genres')
      //       ->addForeignKey(
      //           'book_id',
      //           'book_records',
      //           'book_id',
      //           [
      //               'update' => 'NO_ACTION',
      //               'delete' => 'NO_ACTION'
      //           ]
      //       )
      //       -> update();
      // }

      // if (!$this->hasForeignKey('books_genres', 'books_genres_genre_id_fkey')) {
      //   $this->table('books_genres')
      //       ->addForeignKey(
      //           'genre_id',
      //           'genres',
      //           'genre_id',
      //           [
      //               'update' => 'NO_ACTION',
      //               'delete' => 'NO_ACTION'
      //           ]
      //       )
      //       ->update();
      // }
      
    }

    public function down()
    {
        $this->table('book_records')
            ->dropForeignKey(
                'author_id'
            )->save();

        $this->table('book_reviews')
            ->dropForeignKey(
                'book_id'
            )
            ->dropForeignKey(
                'review_id'
            )
            ->dropForeignKey(
                'user_id'
            )->save();

        $this->table('books_genres')
            ->dropForeignKey(
                'book_id'
            )
            ->dropForeignKey(
                'genre_id'
            )->save();

        $this->table('authors')->drop()->save();
        $this->table('book_records')->drop()->save();
        $this->table('book_reviews')->drop()->save();
        $this->table('books_genres')->drop()->save();
        $this->table('genres')->drop()->save();
        $this->table('panels')->drop()->save();
        $this->table('requests')->drop()->save();
        $this->table('reviews')->drop()->save();
        $this->table('users')->drop()->save();
    }
}
