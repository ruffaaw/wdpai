const search = document.querySelector('input[placeholder="search"]');
const productContainer = document.querySelector(".products");

search.addEventListener("keyup", function (event) {
    if(event.key === "Enter") {
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
        }).then(function(products) {
            productContainer.innerHTML = "";
            loadProducts(products)
        }).catch(function(error) {
            console.error('Error:', error);
            console.log('Response:', error.response);

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

    const image = clone.querySelector("img");
    image.src = `/public/uploads/${product.image}`;
    const title = clone.querySelector("h1");
    title.innerHTML = product.title;
    const price = clone.querySelector("p");
    price.innerHTML = product.price;
    const button = clone.querySelector("a");
    button.innerText = product.button;

    productContainer.appendChild(clone);
}