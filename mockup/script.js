document.addEventListener('DOMContentLoaded', () => {
    const slides = document.querySelectorAll('.slide');
    let current = 0;

    function showSlide(index) {
        slides.forEach((slide, i) => {
            slide.classList.toggle('active', i === index);
        });
    }

    function nextSlide() {
        current = (current + 1) % slides.length;
        showSlide(current);
    }

    setInterval(nextSlide, 4000);

    const products = [
        { name: 'Televisor 50" 4K', price: '399€', img: 'https://via.placeholder.com/200' },
        { name: 'Portátil gaming', price: '999€', img: 'https://via.placeholder.com/200' },
        { name: 'Auriculares Bluetooth', price: '59€', img: 'https://via.placeholder.com/200' },
        { name: 'Smartphone 5G', price: '699€', img: 'https://via.placeholder.com/200' },
        { name: 'Barra de sonido', price: '199€', img: 'https://via.placeholder.com/200' },
        { name: 'Frigorífico combi', price: '549€', img: 'https://via.placeholder.com/200' },
        { name: 'Robot aspirador', price: '249€', img: 'https://via.placeholder.com/200' },
        { name: 'Monitor 27"', price: '229€', img: 'https://via.placeholder.com/200' }
    ];

    const grid = document.getElementById('product-grid');

    products.forEach(p => {
        const card = document.createElement('div');
        card.className = 'product-card';
        card.innerHTML = `
            <img src="${p.img}" alt="${p.name}">
            <h3>${p.name}</h3>
            <p class="price">${p.price}</p>
            <button>Añadir al carrito</button>
        `;
        grid.appendChild(card);
    });
});
