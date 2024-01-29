<h1><?= h($book_record->title) ?></h1>
<p><?= h($book_record->author) ?></p>
<p><small>Author: <?= $book_record->created->format(DATE_RFC850) ?></small></p>
<p><?= $this->Html->link('Edit', ['action' => 'edit', $book_record->slug]) ?></p>