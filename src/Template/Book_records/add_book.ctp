<form id='add-book' action=<?= $this->Url->build(['controller' => 'Book_records', 'action' => 'addBook']) ?> >
  <div class='input-div'>
    <h3>Add a new book</h3>
    <label for='title'>Book title:</label>
    <input type="text" id='title' name='title'>

    <label for='author_name'>Book author:</label>
    <input type="text" id='author_name' name='author_name'>

    <label for="description">Book: description</label>
    <textarea form='add-book' id='description' name='description' rows='6'></textarea>

    <label for='image'> Book image:</label>
    <input type="text" id='image' name="image">

    <label for='release_date'> Book release date:</label>
    <input type="date" id='release_date' name="release_date">

    <label for='is_fiction'> Is fiction:</label>
    <select id='is_fiction' name='is_fiction'>
      <option value='1'>true</option>
      <option value='0'>false</option>
    </select>

    <label for='price_in_pence'> Book price in pence:</label>
    <input type="number" id='price_in_pence' name='price_in_pence'>

    <label for='quantity_in_stock'> Book quantity in stock:</label>
    <input type="number" id='quantity_in_stock' name="quantity_in_stock">

    <label>Genre:</label>
    <div class='checkbox-div'>
      <?php foreach ($genres as $genre): ?>
        <input id='<?= h($genre->genre) ?>' type='checkbox' name='genre' value="<?= h($genre->genre_id) ?>" />
        <label for='<?= h($genre->genre) ?>'>
          <?= h($genre->genre) ?>
        </label>
      <?php endforeach ?>
    </div>

    <button class='button' type='submit' formaction="post">Add</button>
  </div>
</form>
