<html>
    <head>
        <link href="/css/app.css" rel="stylesheet">
        <link href="/css/custom.css" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <title>Pessoas</title>
    </head>
    
    <body>
        <div class="container">
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="/">
                        Gerenciamento de Pessoas
                    </a>
                </div>
                <ul class="nav navbar-nav navbar-right">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="{{route('listagem')}}">Listagem</a></li>
                        <li><a href="{{route('novo')}}">Novo</a></li>
                    </ul>                        
                </ul>
                </div>
            </nav>
            @yield('conteudo')
            <footer class="footer">
                <p>Desenvolvido por Felipe Silva Ganho.</p>
            </footer>
        </div>
    </body>
</html>
