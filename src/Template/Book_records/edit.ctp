<form id='edit-book' method="post"
  action="<?= $this->Url->build(['controller' => 'Book_records', 'action' => 'update', $book_record->title]) ?>">

  <div class='input-div'>
    <h3>Edit book</h3>
    <label for='title'>Title of the book:</label>
    <input id='title' type='text' name='title' value='<?= h($book_record->title) ?>'>

    <label for='author'>Author:</label>
    <input id='author' type='text' name='author' value='<?= h($book_record->author->author_name) ?>'>

    <label for='description'>Book description:</label>
    <textarea form='edit-book' id='description' type='text' name='description' maxlenght='250'
      rows='6'><?= h($book_record->description) ?></textarea>

    <label for='price'>Book price:</label>
    <input id='price' type='text' name='price_in_pence' value='<?= h($book_record->price_in_pence) ?>'>

    <label for='image'>Book image:</label>
    <input id='image' type='url' name='image'>
    <button class='button' type='submit'>Edit</button>
  </div>
</form>