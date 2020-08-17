// Menu functions
var menuCollapsed;
var primaryMenu = document.querySelector('#menu-primary');
var secondaryMenu = document.querySelector('#menu-secondary');
var secondaryMenuItems = secondaryMenu.querySelectorAll('#menu-secondary>*');

// Wrap the last menu item text with a button element
var lastItem = secondaryMenuItems[secondaryMenuItems.length-1];
var newButton = document.createElement('button');
newButton.classList.add('btn', 'btn-outline-secondary', 'btn-oval');
newButton.innerText = lastItem.innerText;
secondaryMenu.replaceChild(newButton, lastItem);

// Update the secondaryMenuItem Nodelist with the replaced final element
secondaryMenuItems = secondaryMenu.querySelectorAll('#menu-secondary>*');


// Function to move the secondary menu items into the primary during menu collapse & back again on resize
var shiftMenu = function () {
    var windowWidth = window.innerWidth;    
    
    var collapseMenu = function () {
        menuCollapsed = true;
        for (var i=0; i<secondaryMenuItems.length; i++) {
            primaryMenu.insertAdjacentElement( 'beforeend', secondaryMenuItems[i] );
        }
        secondaryMenu.classList.add('d-none');
    }

    var revertMenu = function () {
        menuCollapsed = false;
        for (var i=0; i<secondaryMenuItems.length; i++) {
            secondaryMenu.insertAdjacentElement('beforeend',secondaryMenuItems[i]);
        }
        secondaryMenu.classList.remove('d-none');
    }

    if (windowWidth <= 991 && menuCollapsed) {
        return;
    }
    if (windowWidth <= 991 && !menuCollapsed) {
        collapseMenu();
    }
    if (windowWidth > 991 && menuCollapsed) {
        revertMenu();
    }
}

// Run shiftMenu on startup to set appropriate menu location
window.onload = shiftMenu;

// Run shiftMenu on resize to respond to window changes
window.onresize = shiftMenu;