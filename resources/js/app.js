import './bootstrap';

Echo.channel('hello', (e) => {
    console.log(e)
})