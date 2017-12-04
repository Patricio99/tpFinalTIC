<?php
include './masterpage.php';

function render() {
  ?>
  <div id="cardDeck" class="card-deck">

  </div>
  <div class="card-generic" id="genericItemCardDeck">
    <img class="card-img-top" src="pages/mayonesa.jpg" alt="Card image cap">
    <div class="card-block">
      <h4 class="card-title"></h4>
      <p class="card-text"></p>
    </div>
    <div class="card-footer">
      <small class="text-muted precio"></small>
      <a class="view-detail">Ver</a>
    </div>
  </div>
  <script>

    getProductList().then((products) => {
      let container = $('#cardDeck');
      let genericItem = $('#genericItemCardDeck');
      for (var i = 0; i < products.length; i++) {

        let newContainer = genericItem.clone();
        newContainer.find('.card-title').text(products[i].Nombre);
        newContainer.find('.card-text').text(products[i].Descripcion);
        newContainer.find('.text-muted.precio').text('$' + products[i].Precio);

        newContainer.find('.view-detail')[0].setAttribute('href', '/productos-detalle.php?idproducto=' + products[i].id);

    console.log('cloning...', products[i]);
        newContainer.appendTo(container);
      }
    });
  </script>

  <?php

}

?>
