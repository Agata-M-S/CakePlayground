<h1> Books</h1>
<table>
  <tr>
    <th>Title</th>
    <th>Price</th>
    <th>Quantity in stock</th>

  </tr>
  <?php foreach ($book_records as $book_record) : ?>
    <tr> 
      <td>
        <?= $this -> Html -> link($book_record -> title, ['action'=> 'view', $book_record-> slug]) ?>
      </td>
      <td>
        <?= $this -> Html -> link($book_record -> price_in_pence, ['action'=> 'view', $book_record-> slug]) ?>
      </td>
      <td>
        <?= $this->Html->link($book_record -> quantity_in_stock, ['action'=> 'view', $book_record-> slug]) ?>
      </td>
    </tr>
    <?php endforeach; ?>
</table>