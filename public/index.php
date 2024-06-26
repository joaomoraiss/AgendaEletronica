<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Agenda Eletrônica - Hello World</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1 class="mt-5">Hello, World!</h1>
        <p>Olá.</p>
        <button id="helloButton" class="btn btn-primary">Clique-me</button>
    </div>
    <script src="/js/jquery-3.7.1.min.js"></script>
    <script src="/js/bootstrap.bundle.min.js"></script>
    <script>
        $(document).ready(function(){
            $('#helloButton').click(function(){
                alert('Olá, Mundo!');
            });
        });
    </script>
</body>
</html>
