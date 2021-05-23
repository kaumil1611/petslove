
<style type="text/css"></style>
<?php
$s_id="SELECT SELLER_ID FROM PETS WHERE PET_ID IN(SELECT PET_ID FROM CART WHERE PET_ID=4)";
					$s_id1=mysqli_query($con,$s_id);
					$s_id2=mysqli_fetch_array($s_id1);
					$s_id3=$s_id2['SELLER_ID'];
					echo $s_id3;

					$s_id4="SELECT SELLER_ID FROM PRODUCTS WHERE PRODUCT_ID IN(SELECT PRODUCT_ID FROM CART)";
					$s_id5=mysqli_query($con,$s_id4);
					$s_id6=mysqli_fetch_array($s_id5);
					$s_id7=$s_id6['SELLER_ID'];
					echo $s_id7;
					
				if (isset($_POST['order'])) {
					$login=$_SESSION['Name'];

					$name1=$_POST['name1'];
					//echo $name1;
					$hnum=$_POST['hnum'];
					$sname=$_POST['sname'];
					$street=$_POST['street'];
					$landmark=$_POST['landmark'];
					$city_option=$_POST['city_option'];
					$State_option=$_POST['State_option'];
					$pincode=$_POST['pincode'];


					$update="UPDATE `BUYER` SET `NAME`='$name1',`HOUSE_NO`='$hnum',`SOC_NAME`='$sname',`STREET_NAME`='$street',`LANDMARK`='$landmark',`CITY_NAME`='$city_option',`STATE`='$State_option',`PINCODE`='$pincode' WHERE LOGIN_ID='$login_id'";
					$u=mysqli_query($con,$update);
					if ($u) {
					    echo "Record updated successfully" . mysqli_error($con);
					} else {
					    echo "Error updating record: " . mysqli_error($con);
					}


					$s_id="SELECT SELLER_ID FROM PRODUCTS WHERE PRODUCT_ID IN(SELECT PRODUCT_ID FROM CART)";
					$s_id1=mysqli_query($con,$s_id);
					$s_id2=$s_id1['SELLER_ID'];
					echo $s_id2;
					

					$order_insert1="INSERT INTO `order_details`(`ORDER_ID`, `SELLER_ID`, `CART_ID`, `BUYER_ID`, `PRODUCT_ID`, `PET_ID`, `MEDICINE_ID`, `DATE`, `QUANTITY`, `PAYMENT_PRICE`, `PAYMENT_METHOD`, `SHIPMENT_STATUS`) VALUES ('','$s_id2','','','','','','','','','','') WHERE CART_ID=''";

				}





?>