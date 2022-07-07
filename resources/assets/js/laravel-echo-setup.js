import Echo from 'laravel-echo';
 
window.Echo = new Echo({
    broadcaster: 'socket.io',
    // host: 'http://127.0.0.1:6001',
    host: window.location.hostname + ":" + window.laravel_echo_port
});
