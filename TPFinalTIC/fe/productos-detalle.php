<?php
include './masterpage.php';
function render() {
 ?>
 <div id="productId"></div>
 <script>
 const quertString = {};
  window.location.search
    .split('&')
    .map((item) => {
      let key = item.split('=')[0].replace('?', '');
      let value = item.split('=')[1];
      quertString[key] = value;
    });
    console.log(quertString);
  document.getElementById('productId').innerHTML = 'Hola ' + quertString.idproducto;
  getProduct(quertString.idproducto);
 </script>
 <?php
}
?>
