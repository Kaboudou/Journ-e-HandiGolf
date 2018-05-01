var frame = new Framework7({
    // App root element
    root: '#app',
    // App Name
    name: 'My App',
    // App id
    id: 'com.myapp.test',
    // Enable swipe panel
    panel: {
        swipe: 'left',
    },
    initialize: function () {
        document.addEventListener('deviceready', this.onDeviceReady.bind(this), false);

    },
    // Add default routes
    routes: [
        {
            path: '/about/',
            url: 'about.html',
        },
        {
            path: '/',
            url: 'index2.html',
        },
        {
            path: '/menu/',
            url: 'menu.html',
        },
        {
            path: '/question/',
            url: 'Question.html',
        }
    ],
    // ... other parameters
});

var $$ = Dom7;

$$(document).on('deviceready', function () {
    
});
frame.initialize();