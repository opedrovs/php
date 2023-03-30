(function() {
    const burguer = document.querySelector('.burguer');
    const navbar = document.querySelector('.navbar');
    
    burguer.addEventListener('click', () => {
        if(navbar.style.display === 'block') {
            navbar.style.display = 'none';
        } else {
            navbar.style.display = 'block';
        }
    });
    
    window.addEventListener('resize', () => {
        if(window.innerWidth >= 765) {
            navbar.style.display = 'block';
        } else {
            navbar.style.display = 'none';
        }
    });
})();