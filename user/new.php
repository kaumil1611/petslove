<!-- <!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <table>
                        <caption>Checkout Time!</caption>
                    <thead>
                        <tr>
                            <th>Item</th>
                            <th>Price</th>
                            <th>Quantity</th>                           
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <td colspan="4" align="right"><input type="button" value="Checkout!"/></td>
                        </tr>
                    </tfoot>            
                    <tbody>
                        <tr>
                            <td class="description">Folger's Gourmet Instant Coffee 24 count box.</td>                          
                            <td id="price">12</td>
                            <td><input type="text" id="quantity" value="1" name="quantity" /></td>                           
                            <td id="total"></td>
                        </tr>
                    </tbody>
                </table>
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
                <script>
                    alert("dgh");
                    $("#quantity").on('keyup', function(){
                var price= $('#price').text().substr(1);
                alert(price.value);
                var q= $('#quality').val();
                $('#total').text(price*q);
                });
                </script>
</body>
</html> -->
<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <table>
                        <caption>Checkout Time!</caption>
                    <thead>
                        <tr>
                            <th>Item</th>
                            <th>Price</th>
                            <th>Quantity</th>                           
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <td colspan="4" align="right"><input type="button" value="Checkout!"/></td>
                        </tr>
                    </tfoot>            
                    <tbody>
                       <tr>
  <td>Bruschetta con Crema di Agliotoa</td>
  <td><input type="text" value="" name="QTY" id="QTY" onKeyUp="multiply(this)"/></td>
  <td><input type="text" name="PPRICE" id="PPRICE" value="8" /></td>
  <td><input type="text" name="TOTAL" id="TOTAL" /></td>
</tr>
 <tr>
  <td>Bruschetta con Crema di Agliotoa</td>
  <td><input type="text" value="" name="QTY" id="QTY" onKeyUp="multiply(this)"/></td>
  <td><input type="text" name="PPRICE" id="PPRICE" value="4" /></td>
  <td><input type="text" name="TOTAL" id="TOTAL" /></td>
</tr>
                    </tbody>
                </table>
    <!-- Total : <span class="total">$50.00</span></br>
    Price : <span class="price">$50.00</span></br>
    <input name="quantity" class="quantity" value="1" /> -->
<script type="text/javascript">
  //   $('input[name=\'quantity\']').on('change keyup click', function() {
  //   var price = $('.price').text();
  // var quantity =  $('.quantity').val();
  
  // $('.total').closest('tr').find('.total').text(price * quantity);
  
  // });
 function multiply(e) {
    e.closest('tr');
  a = Number(document.getElementById('QTY').value);
  b = Number(document.getElementById('PPRICE').value);
  c = a * b;

  document.getElementById('TOTAL').value = c;
}
</script>
</body>
</html>