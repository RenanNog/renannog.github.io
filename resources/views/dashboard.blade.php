

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Painel</title>
</head>
<body>
    <x-app-layout>
        
            <x-slot name="header" style="display:flex;">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    {{ __('Pinel do Usuario') }}
                </h2>
                <div>
                    Bem vindo {{Auth::User()->name}} !
                </div>
            </x-slot>

            <div class="py-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    </div>
                </div>
            </div>
    </x-app-layout>
</body>
</html>

