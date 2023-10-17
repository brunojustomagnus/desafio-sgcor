<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/5.0.6/jquery.inputmask.min.js"></script>
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-gray-900 antialiased">
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100 dark:bg-gray-900">
            <div>
                <a href="/">
                    <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
                </a>
            </div>

            <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white dark:bg-gray-800 shadow-md overflow-hidden sm:rounded-lg">
                {{ $slot }}
            </div>
        </div>
    </body>
</html>
<script>
$(document).ready(function() {
    $('#telefone').inputmask("99 (99) 9999-9999", {
        onBeforeMask: function(value, opts) {
            
            return value.replace(/\D/g, '');
        },
        showMaskOnFocus: false,  
        showMaskOnHover: false,  
    });

    $('#telefone').on('input', function() {
        var telefone = this.value.replace(/\D/g, ''); 
        var novaMascara;

        if (telefone.length === 8) {
            novaMascara = "99 (99) 9999-9999";
        } else if (telefone.length === 9) {
            novaMascara = "99 (99) 99999-9999";
        }

        // Aplique a máscara atualizada
        if (novaMascara) {
            $('#telefone').inputmask(novaMascara, {
                showMaskOnFocus: false,
                showMaskOnHover: false,
            });
        }
    });
});
</script>