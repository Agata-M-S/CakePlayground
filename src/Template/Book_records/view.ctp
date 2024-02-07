<!-- view.ctp is a template used to display the details of a single record. -->

<h1>
  <?= h($book_record->title) ?>
</h1>
<p>
  Written by: 
  <?= $this->Html -> link($book_record->author->author_name, ['action'=> 'author', $book_record -> author -> author_name]) ?>
</p>
<div><img src='<?= h($book_record->image) ?>' /> </div>
<p>genres: 
  <?php foreach ($book_record->genres as $genre) : ?>
<span>
  <?= h($genre->genre) ?>
</span>
<?php endforeach ?>
</p>
Book description:
<p> <?=$book_record->description ?>
</p>
<h5>
  Book reviews:
</h5>
<ul>
  <?php foreach ($book_record->reviews as $review) : ?>
<li> 
  <span> 
    Posted on
    <?= 
    h($review->review_date)?>
    by 
    <?php foreach ($review->users as $user) : ?> 
    <?= 
    h($user->user_first_name). "\n",
    h($user->user_last_name)[0];
    echo '.' ?>
    <?php endforeach ?>
  </span>
<p>
  <?=  h($review->review) ?> 
</p>
</li>
<?php endforeach ?>
</ul>
<p>
  <?= $this->Html->link('Edit', ['controller' => 'Book_records','action' => 'edit', $book_record->title]) ?>
</p>