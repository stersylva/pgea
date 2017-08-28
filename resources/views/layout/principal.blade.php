<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/custom.css">
    <title>PGEA</title>
</head>
<body>
    <div class="container">
        <nav class="navbar navbar-default">
            <div class="container-fluid">

                <div class="navbar-header">
                    <a class="navbar-brand" href="/extensoes">PGEA</a>
                </div>

                <ul class="nav navbar-nav navbar-right">
                    <li><a href="/produtos">Listagem</a></li>
                </ul>

            </div>
        </nav>
    @yield('conteudo')
        <footer class="footer">
            <p>PGEA - Plataforma de Gestão de Eventos Acadêmicos</p>
        </footer>
    </div>
</body>
</html>