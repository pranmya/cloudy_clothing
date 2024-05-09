const navBar = document.querySelector(".header"),
    navBtn = document.querySelector(".header__btn");
    


// initialize Scroll Reveal
const sr = ScrollReveal({ origin: "top", distance: "100px", duration: 2000, delay: 300 });



/* ============== Header ============== */

navBtn.addEventListener("click", () => document.body.classList.toggle("menu-toggled"));

function changeHeaderBg() {
    const scrollY = window.scrollY;
    if (scrollY > 100) {
        navBar.style.backgroundColor = "var(--white-100-opcty-212)";
    } else {
        navBar.style.backgroundColor = "transparent";
    }
}
/* ============== Shop Section ============== */

async function renderShopProducts() {
    const respone = await fetch(API_URL);
    const data = await respone.json();
    data.map((product) => {
        shopContent.innerHTML += ProductCard(product);
    });
    const productCards = shopContent.querySelectorAll(".product-card");
    productCards.forEach((product) => {
        product.classList.add("shop__product");
        const image = product.querySelector("img");
        product.addEventListener("mouseover", () => {
            if (product.dataset.image2 != "undefined") {
                image.src = product.dataset.image2;
            }
        });
        product.addEventListener("mouseleave", () => {
            image.src = product.dataset.image1;
        });
    });

    /* ScrollReveal JS */
    sr.reveal(".shop__product", { interval: 100 });
}

/* Shop categories */
shopCategories.forEach((category) => {
    category.addEventListener("click", () => {
        shopCategories.forEach((category) => category.classList.remove("selected"));
        category.classList.add("selected");
        let categoryType = category.dataset.category;
        const shopProducts = document.querySelectorAll(".shop__product");
        shopProducts.forEach((product) => {
            product.classList.add("hide");
            if (product.dataset.category === categoryType || categoryType === "all") {
                product.classList.remove("hide");
            }
        });
    });
});