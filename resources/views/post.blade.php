    @extends('layouts.home')
    <body>
        
            
        <section class="content">
            @yield('conteudo')
        </section>

        <section class="altor">
            <h2 class="Name">@yield('h2:altor')</h2> 
            <p class="Descricao">@yield('desc_altor')</p>
        </section>
    </body>
