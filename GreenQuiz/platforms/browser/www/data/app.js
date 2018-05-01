var app2 = new Framework7({
    // App root element
    root: '#app2',
    // App Name
    name: 'My App',
    // App id
    id: 'test.green-quiz.test',
    // Enable swipe panel
    panel: {
        swipe: 'left',
    },
    
    // Add default routes
    routes: [
        {
            path: '/about/',
            url: 'about.html',
        },
        {
            path: '/',
            url: 'index.html',
        },
        {
            path: '/menu/',
            url: 'commencer.html',
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
    var networkState = navigator.connection.type;
    var states = {};
    states[Connection.UNKNOWN] = 'Unknown connection';
    states[Connection.ETHERNET] = 'Ethernet connection';
    states[Connection.WIFI] = 'WiFi connection';
    states[Connection.CELL_2G] = 'Cell 2G connection';
    states[Connection.CELL_3G] = 'Cell 3G connection';
    states[Connection.CELL_4G] = 'Cell 4G connection';
    states[Connection.CELL] = 'Cell generic connection';
    states[Connection.NONE] = 'No network connection';
    document.getElementById("Connectiontype").innerHTML = states[networkState];
});
app.initialize();