(function() {
    const percentual = document.querySelector('.percentual');
    const reajuste = document.querySelector('#reajuste');
    
    reajuste.addEventListener('click', () => {
        percentual.innerHTML = reajuste.value;
    });
    
    reajuste.addEventListener('mousemove', () => {
        percentual.innerHTML = reajuste.value;
    });
})();
