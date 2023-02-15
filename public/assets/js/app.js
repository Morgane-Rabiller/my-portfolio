document.addEventListener("DOMContentLoaded", function(event) { 
    const windows = document.getElementById('windows');
    const menu = document.getElementById('little_main');

    windows.addEventListener('click', handleClickWindows);
    
    function handleClickWindows() {
        console.log('bouton cliqué');

        if (menu.style.display === 'flex') {menu.style.display = 'none'}
        else {menu.style.display = 'flex'};

        /* menu.style.display = menu.style.display === 'none' ? 'flex' : 'none'; */
    }
  });