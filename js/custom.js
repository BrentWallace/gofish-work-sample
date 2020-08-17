var menuCollapsed;
var secondaryMenu = document.querySelector('#menu-secondary');
var secondaryMenuItems = secondaryMenu.querySelectorAll('#menu-secondary>*');

var shiftMenu = function () {
    var windowWidth = window.innerWidth;    
    
    var collapseMenu = function () {
        menuCollapsed = true;

        for (var i=0; i<secondaryMenuItems.length; i++) {
            secondaryMenuItems[i].classList.add('appended');
            document.querySelector('#menu-primary').insertAdjacentElement( 'beforeend', secondaryMenuItems[i] );
        }

        document.querySelector('#menu-secondary').classList.add('d-none');
    }

    var revertMenu = function () {
        menuCollapsed = false;
        var appendedMenuItems = document.querySelectorAll('.appended');
        
        for (var i=0; i<appendedMenuItems.length; i++) {
            appendedMenuItems[i].classList.remove('appended');
            document.querySelector('#menu-secondary').insertAdjacentElement('beforeend',appendedMenuItems[i]);
        }

        document.querySelector('#menu-secondary').classList.remove('d-none');
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

window.onload = shiftMenu;
window.onresize = shiftMenu;