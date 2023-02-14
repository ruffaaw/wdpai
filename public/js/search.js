const searchProducts = document.querySelector('input[placeholder="search..."]');
const productContainer = document.querySelector(".products");

searchProducts.addEventListener("keyup", function (event) {
    if (event.key === "Enter") {
        event.preventDefault();

        const data = {search: this.value};

        fetch("/search", {
            method: "POST",
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify(data)
        }).then(function(response) {
            return response.json();
        }).then(function(products){
           productContainer.innerHTML = "";
            loadProducts(products)
        });
    }
});

function loadProducts(products) {
    products.forEach(product => {
        console.log(product);
        createProduct(product);
    });
}

function createProduct(product) {
    const template = document.querySelector("#product-template");

    const clone = template.content.cloneNode(true);
    const div = clone.querySelector("div");
    div.id = product.id;
    const image = clone.querySelector("img");
    image.src = `/public/upload/${product.image}`;
    const name = clone.querySelector("h1");
    name.innerHTML = product.name;
    const price = clone.querySelector("p");
    price.innerHTML = product.price;


    productContainer.appendChild(clone);
}
