<!-- view.ctp is a template used to display the details of a single record. -->

<h1><?= h($book_record->title) ?></h1>
<p>Written by: <?= h($book_record->author->author_name) ?></p>

<p><?= $this->Html->link('Edit', ['action' => 'edit', $book_record->id]) ?></p>