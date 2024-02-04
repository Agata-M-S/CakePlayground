<!-- index.ctp is a template used to display a list of records. -->

<h1> Books</h1>
<table>
  <tr>
    <th>Title</th>
    <th>Author</th>
    <th>Genre</th>
    <th>Price</th>
    <th>Quantity in stock</th>

  </tr>
  <?php foreach ($book_records as $book_record) : ?>
    <tr> 
      <td>
        <?= $this -> Html -> link($book_record -> title, ['action'=> 'view', $book_record-> title]) ?>
      </td>
      <td>
        <?= $this->Html->link($book_record -> author -> author_name, ['action'=> 'author', $book_record-> author -> author_name]) ?>
      </td>
      <td>
        <?php foreach ($book_record->genres as $genre) { ?>
          <?= h($genre->genre) ?><br>
        <?php } ?>
      </td>
      <td>
        £ <?=number_format($book_record -> price_in_pence / 100, 2) ?>
      </td>
      <td>
        <?= $book_record -> quantity_in_stock ?>
      </td>
    </tr>
    <?php endforeach; ?>
</table>