const burguer = document.querySelector('.burguer');
const navList = document.querySelector('.nav-list');

burguer.addEventListener('click', () => {
    if(navList.style.display === 'block') {
        navList.style.display = 'none';
    } else {
        navList.style.display = 'block';
    }
});

// body.onresize()

window.addEventListener('resize', () => {
    if(window.innerWidth >= 765) {
        navList.style.display = 'block';
    } else {
        navList.style.display = 'none';
    }
});