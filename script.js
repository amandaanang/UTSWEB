const buyButtons = document.querySelectorAll(".buy-button");

buyButtons.forEach(function(buyButton) {
  buyButton.addEventListener("click", function() {
    // ambil informasi buku yang akan dibeli
    const book = this.parentNode;
    const title = book.querySelector("h3").innerText;
    const price = book.querySelector(".price").innerText;
    
    // tampilkan informasi pembelian
    alert("Anda telah membeli buku '" + title + "' dengan harga " + price + ".");
  });
});