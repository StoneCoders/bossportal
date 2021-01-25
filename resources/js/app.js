// It is necessary to include it
require('./bootstrap');


/**
 * Laravel Echo Here
 */
Echo.channel('test').listen('TestEvent', (e) => {
    console.log('Test Event:', e);
});