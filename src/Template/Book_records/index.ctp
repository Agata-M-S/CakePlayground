
<!-- index.ctp is a template used to display a list of records. -->
<nav class='nav'>
  <div>
      <?php  if($this->Identity->isLoggedIn()): ?>
      Welcome, <?= $this->Identity->get('username')?>! <a href="<?= $this->Url->build(['controller'=>'Users', 'action' => 'logout']) ?>">Logout</a>
      <?php else: ?>
          Please <a href="<?= $this->Url->build(['controller' => 'Users', 'action' => 'login']) ?>">Log in</a>
      <?php endif; ?>
  </div>
</nav>
<h1> Books</h1>
<div class='table-div'>
  <table>
    <tr>
      <th>Title</th>
      <th>Author</th>
      <th>Genre</th>
      <th>Price</th>
      <th>Quantity in stock</th>

    </tr>
    <?php foreach ($book_records as $book_record): ?>
      <tr>
        <td>
          <?= $this->Html->link($book_record->title, ['action' => 'view', $book_record->title]) ?>
        </td>
        <td>
          <?= $this->Html->link($book_record->author->author_name, ['action' => 'author', $book_record->author->author_name]) ?>
        </td>
        <td>
          <?php foreach ($book_record->genres as $genre) { ?>
            <?= h($genre->genre) ?><br>
          <?php } ?>
        </td>
        <td>
          £
          <?= number_format($book_record->price_in_pence / 100, 2) ?>
        </td>
        <td>
          <?= $book_record->quantity_in_stock ?>
        </td>
      </tr>
    <?php endforeach; ?>
  </table>
</div>
<p>
  <?php
  if($this->Identity->isLoggedIn()): ?>

   <?=   $this->Html->link('Add Book', ['action' => 'addBook']);
?>
  <?php endif; ?>
</p>
