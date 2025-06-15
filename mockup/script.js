document.addEventListener('DOMContentLoaded', () => {
    const slides = document.querySelectorAll('.slide');
    let current = 0;

    function showSlide(i) {
        slides.forEach((s, idx) => s.classList.toggle('active', idx === i));
    }

    function next() {
        current = (current + 1) % slides.length;
        showSlide(current);
    }

    setInterval(next, 5000);

    const products = [
        { name: 'OLED LG 42"', price: '779€', img: 'https://www.electroprecio.com/media/catalog/product/cache/1/small_image/200x/9df78eab33525d08d6e5fb8d27136e95/o/l/oled42c44la.png' },
        { name: 'Aspirador Ariete', price: '54€', img: 'https://www.electroprecio.com/media/catalog/product/cache/1/small_image/200x/9df78eab33525d08d6e5fb8d27136e95/2/7/2761.jpg' },
        { name: 'Smartwatch', price: '179€', img: 'https://via.placeholder.com/200' },
        { name: 'Portátil Gaming', price: '999€', img: 'https://via.placeholder.com/200' }
    ];

    const grid = document.getElementById('product-grid');

    products.forEach(p => {
        const card = document.createElement('div');
        card.className = 'product-card';
        card.innerHTML = `
            <img src="${p.img}" alt="${p.name}">
            <h3>${p.name}</h3>
            <p class="price">${p.price}</p>
            <button>Añadir</button>
        `;
        grid.appendChild(card);
    });
});
