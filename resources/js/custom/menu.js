const forEach = require('lodash/forEach');

// Add Event on every Menu
const menu_items = document.querySelectorAll('#parent-menu-ul li');

forEach( menu_items, menu => {
    const a_elem =  menu.querySelectorAll('a')[0];
    a_elem.addEventListener('click', function () {
        setActive(a_elem.id);
    }, false );

    // Default nav
    setActive('menu-item-buttons-and-links');
});

// Functions for activating menu
function setActive ( menu_id ) 
{
    // Set Inactive menu
    const active_menu = document.querySelectorAll(".active");
    
    if (active_menu.length > 0) {
        active_menu[0].classList.remove('active');
    }
    
    // Set Menu Active
    document.getElementById(menu_id).classList.add( 'active' );

    // Display Content
    const visible_content = document.querySelectorAll(".visible");
  
    // Hide visible content
    visible_content[0].classList.remove('visible');
    visible_content[0].classList.add('hidden');
   
    // Display Selected Menu
    const content_id = menu_id.split('menu-item-')[1];console.log(content_id)
    if (content_id) {
        document.getElementById(content_id).classList.remove('hidden');
        document.getElementById(content_id).classList.add('visible');
    } 
}