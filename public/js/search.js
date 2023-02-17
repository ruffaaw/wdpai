const search = document.querySelector('input[placeholder="search"]');
const productContainer = document.querySelector(".products");

search.addEventListener("keyup", function (event) {
    if(event.key === "Enter") {
        event.preventDefault();

        const data = {search: this.value};

        fetch("/search", {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
            },
            body: JSON.stringify(data),
        })
            .then(function (response) {
                console.log(response);
                return response.text();
            })
            .then(function (responseText) {
                console.log(responseText);
                const products = JSON.parse(responseText);
                productContainer.innerHTML = "";
                loadProducts(products);
            })
            .catch(function (error) {
                console.error("Error:", error);
                console.log("Response:", error.response);
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
        const name = clone.querySelector("h1");
        name.innerHTML = product.name;
        const price = clone.querySelector("p");
        price.innerHTML = product.price;
        const hidden = clone.querySelector("input");
        hidden.innerHTML = product.hidden;
        const button = clone.querySelector("button");
        button.innerText = product.button;

        productContainer.appendChild(clone);
}