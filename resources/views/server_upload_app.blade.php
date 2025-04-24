<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <title>{{ config('app.name') }}</title>

    <link rel="stylesheet" href="{{ asset('build/assets/app-BtW0pRbl.css') }}">
    <script  src="{{ asset('build/assets/app-BOO1F6JN.js') }}" defer></script>
    
    <!-- Manually include dynamic head -->
    <script>
        document.title = 'Inertia Example'; // You can change this dynamically
    </script>
  </head>
  <body>
    <div id="app" data-page="{{ json_encode($page) }}"></div>

    <!-- Mounting Inertia -->
    <script>
        import { createApp, h } from 'vue';
        import { createInertiaApp } from '@inertiajs/vue3';

        createInertiaApp({
            resolve: name => import(`./Pages/${name}.vue`),
            setup({ el, App, props }) {
                createApp({ render: () => h(App, props) })
                    .mount(el);
            },
        });
    </script>
  </body>
</html>
