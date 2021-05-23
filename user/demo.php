<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script type="text/javascript">
		$('input[name=\'quantity\']').on('change keyup click', function() {
	var price = $('.price').text().substr(1);
  var quantity =  $('.quantity').val();
  
  $('.total').text(price * quantity);
  
  });
	</script>
</head>
<body>

Total : <span class="total">$50.00</span></br>
Price : <span class="price">$50.00</span></br>
<input name="quantity" class="quantity" value="1" />
</body>
</html>