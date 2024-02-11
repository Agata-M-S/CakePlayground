<form id='add-book' action=<?=$this->Url->build(['controller' => 'Book_records', 'action' => 'addBook']) ?> method="post">
  <div class='input-div'>
  <h3>Add a new book</h3>
      <label for='title'>Book title:</label>
      <input type="text" id='title' name='title' >
  
      <label for='author_name'>Book author:</label>
      <input type="text" id='author_name' name='author_name' >
  
      <label>Book: description</label>
      <textarea form='add-book' id='description' type='text' name='description' maxlenght='250' rows='6'></textarea>
  
      <label for='image'> Book image:</label>
      <input type="text" id='image' name="image" >
  
      <label for='release_date'> Book release date:</label>
      <input type="date" id='release_date' name="release_date" >
  
      <label for='is_fiction'> Is fiction:</label>
      <select type='boolean' id='is_fiction' name='is_fiction'>
        <option value='1'>true</option>
        <option value='0'>false</option>
    </select>
  
  
      <label for='price_in_pence'> Book price in pence:</label>
      <input type="number" id='price_in_pence' name='price_in_pence' >
  
      <label for='quantity_in_stock'> Book quantity in stock:</label>
      <input type="number" id='quantity_in_stock' name="quantity_in_stock" >
  
      <button class='button' type='submit'>Add</button>
</div>
    </form>