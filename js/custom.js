// Get the window width
var windowWidth;

var getWindowWidth = function () {
    windowWidth = window.innerWidth;
}

// Menu functions
var menuCollapsed;
var primaryMenu = document.querySelector('#menu-primary');
var secondaryMenu = document.querySelector('#menu-secondary');
var secondaryMenuItems = secondaryMenu.querySelectorAll('#menu-secondary>*');

// Wrap the last menu item text with a button element
var lastItem = secondaryMenuItems[secondaryMenuItems.length-1];
var newButton = document.createElement('button');
newButton.classList.add('btn', 'btn-gofish-outline-dark', 'btn-oval');
newButton.innerText = lastItem.innerText;
secondaryMenu.replaceChild(newButton, lastItem);

// Update the secondaryMenuItem Nodelist with the replaced final element
secondaryMenuItems = secondaryMenu.querySelectorAll('#menu-secondary>*');

// Function to move the secondary menu items into the primary during menu collapse & back again on resize
var shiftMenu = function () {
    var collapseMenu = function () {
        menuCollapsed = true;
        secondaryMenuItems.forEach( function( element ) {
            primaryMenu.insertAdjacentElement( 'beforeend', element );
        });
        secondaryMenu.classList.add( 'd-none' );
    }

    var revertMenu = function () {
        menuCollapsed = false;
        secondaryMenuItems.forEach( function ( element ) {
            secondaryMenu.insertAdjacentElement( 'beforeend', element );
        });
        secondaryMenu.classList.remove( 'd-none' );
    }

    if ( windowWidth <= 991 && menuCollapsed ) {
        return;
    }
    if ( windowWidth <= 991 && !menuCollapsed ) {
        collapseMenu();
    }
    if ( windowWidth > 991 && menuCollapsed ) {
        revertMenu();
    }
}

// Services section border class assignment loop
var services = document.querySelectorAll( '.service' );
var serviceClassesApplied;
var applyServiceClasses = function () {
    
    if ( windowWidth >= 768 && serviceClassesApplied ) {
        return;
    }

    if ( windowWidth >= 768 && !serviceClassesApplied ) {
        services.forEach( function ( element, index, services ) {
            switch ( index ) {
                case 0:
                    element.classList.add( 'service-first' );
                    break;
                case 1:
                    element.classList.add( 'service-top' );
                    break;
                case 2:
                    element.classList.add( 'service-top' );
                    break;
                case 3:
                    element.classList.add( 'service-top-last' );
                    break;
                case 4:
                    element.classList.add( 'service-bottom-first' );
                    break;
                case 5:
                    element.classList.add( 'service-bottom' );
                    break;
                case 6:
                    element.classList.add( 'service-bottom' );
                    break;
                case 7:
                    element.classList.add( 'service-last' );
                default:
                    break;
            }
        });
        serviceClassesApplied = true;
    }

    if ( windowWidth < 768 && !serviceClassesApplied ) {
        return;
    }

    if ( windowWidth <768 && serviceClassesApplied ) {
        services.forEach( function ( element, index, services ) {
            switch ( index ) {
                case 0:
                    element.classList.remove( 'service-first' );
                    break;
                case 1:
                    element.classList.remove( 'service-top' );
                    break;
                case 2:
                    element.classList.remove( 'service-top' );
                    break;
                case 3:
                    element.classList.remove( 'service-top-last' );
                    break;
                case 4:
                    element.classList.remove( 'service-bottom-first' );
                    break;
                case 5:
                    element.classList.remove( 'service-bottom' );
                    break;
                case 6:
                    element.classList.remove( 'service-bottom' );
                    break;
                case 7:
                    element.classList.remove( 'service-last' );
                default:
                    break;
            }
        });
        serviceClassesApplied = false;
    }
}

// Gather previous functions into one
var resizeFunction = function () {
    getWindowWidth();
    shiftMenu();
    applyServiceClasses();
}

// Run functions on startup to set appropriate menu location
window.onload = resizeFunction;
// Run shiftMenu on resize to respond to window changes
window.onresize = resizeFunction;