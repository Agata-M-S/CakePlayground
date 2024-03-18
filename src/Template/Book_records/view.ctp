<!-- view.ctp is a template used to display the details of a single record. -->

<div class='book-div'>
  <div class='img-div'>
    <img src='<?= h($book_record->image) ?>' />
  </div>
  <h1>
    <?= h($book_record->title) ?>
  </h1>
  <div>
    <p class='author'>
      Written by:
      <?= $this->Html->link($book_record->author->author_name, ['action' => 'author', $book_record->author->author_name]) ?>
    </p>
    <p class='genres'>genres:
      <?php foreach ($book_record->genres as $genre): ?>
        <span>
          <?= h($genre->genre) ?>
        </span>
      <?php endforeach ?>
    </p>
  </div>
  <h5>
    Book description:
  </h5>
  <p>
    <?= $book_record->description ?>
  </p>
  <p>
      <?php
      if($this->Identity->isLoggedIn()): ?>

      <?= $this->Html->link('Edit this book', ['controller' => 'Book_records', 'action' => 'edit', $book_record->title]) ?>
      <?php endif; ?>
  </p>
</div>

<h5>
  Book reviews:
</h5>
<ul>
  <?php foreach ($book_record->reviews as $review): ?>
    <div class='review-div'>
      <li>
        <span>
          Posted on
          <?= h($review->review_date) ?>
          by
          <?php foreach ($review->users as $user): ?>
            <?=
              h($user->user_first_name) . "\n",
              h($user->user_last_name)[0];
            echo '.' ?>
          <?php endforeach ?>
        </span>
        <p>
          <?= h($review->review) ?>
        </p>
      </li>
    </div>
  <?php endforeach ?>
</ul>
