function getProductList() {
  return new Promise((resolve) => {
    fetch('http://localhost:8080/apis/productos.php').then((resp) => {
      resp.json().then(function(data) {
        resolve(data);
      });
    })
  });
}
function getProduct(id) {
  return new Promise((resolve) => {
    fetch('http://localhost:8080/apis/productos.php?id=' + id).then((resp) => {
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
