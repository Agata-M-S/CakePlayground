<form method="post" action="<?= $this->Url->build(['controller' => 'Book_records', 'action' => 'update', $book_record->title]) ?>"

<label for='title'>Title of the book:</label>
<input id='title' type='text' name='title' value= '<?= h($book_record->title) ?>'>

<label for='author'>Author:</label>
<input id='author' type='text' name='author' value= '<?= h($book_record->author->author_name) ?>'>

<label for='description'>Book description:</label>
<input id='description' type='text' name='description' value= '<?= h($book_record->description) ?>'>

<label for='price'>Book price:</label>
<input id='price' type='text' name='price_in_pence' value= '<?= h($book_record->price_in_pence) ?>'>

<!-- <label for='description'>Book image:</label>
<input id='image' type='url'> -->
<button type='submit'>Edit</button>
</form>