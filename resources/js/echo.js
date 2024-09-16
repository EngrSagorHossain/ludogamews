import Echo from 'laravel-echo';
import Pusher from 'pusher-js'; // Remove this if you're using Laravel Reverb

window.Echo = new Echo({
    broadcaster: 'reverb',  // Make sure this is Reverb and not Pusher
    key: import.meta.env.VITE_REVERB_APP_KEY,
    wsHost: import.meta.env.VITE_REVERB_HOST,
    wsPort: import.meta.env.VITE_REVERB_PORT ?? 80,
    wssPort: import.meta.env.VITE_REVERB_PORT ?? 443,
    forceTLS: (import.meta.env.VITE_REVERB_SCHEME ?? 'https') === 'https',
    enabledTransports: ['ws', 'wss'],
});
