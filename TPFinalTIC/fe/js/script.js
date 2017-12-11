function getProductList(idCategoria = 0) {
  return new Promise((resolve) => {
    fetch('http://localhost/tpFinalTIC/tpfinaltic/be/apis/productos.php?idCategoria=' + idCategoria).then((resp) => {
      resp.json().then(function(data) {
        resolve(data);
      });
    })
  });
}
function getProductListForHome() {
  return new Promise((resolve) => {
    fetch('http://localhost/tpFinalTIC/tpfinaltic/be/apis/productos.php?destacados=1').then((resp) => {
      resp.json().then(function(data) {
        resolve(data);
      });
    })
  });
}
function getProduct(id) {
  return new Promise((resolve) => {
    fetch('http://localhost/tpFinalTIC/tpfinaltic/be/apis/categorias.php?id=' + id).then((resp) => {
      resp.json().then(function(data) {
        resolve(data);
      });
    })
  });
}
function postProduct() {

}
function deleteProduct() {

}
function updateProduct() {

}
function getCategoryList(){
  return new Promise((resolve) => {
    fetch('http://localhost/tpFinalTIC/tpfinaltic/be/apis/categorias.php').then((resp) => {
      resp.json().then(function(data) {
        resolve(data);
      });
    })
  });
}
