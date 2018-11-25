<!DOCTYPE html>
<html>
<head>
    <link href="/css/app.css" rel="stylesheet">
    <link href="/css/custom.css" rel="stylesheet">
    <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">-->
    
    <title>Faturamento</title>
</head>
<body>
    <div class="container">

    <nav class="navbar navbar-default">        
        <ul class="nav nav-pills">
            <li class="active">
                <a href="/home">Faturamento</a>
            </li>
            <li class="active">
                <button type="submit" class="btn btn-info">
                    <a href="/produtos">Produto</a>
                </button>    
            </li>
            <li class="active">
                <button type="submit" class="btn btn-info">
                    <a href="/pessoas">Pessoa</a>
                </button>    
            </li>
            <li class="active">
                <button type="submit" class="btn btn-info">
                    <a href="/condpags">Condição de Pagamento</a>
                </button>    
            </li>            
            <li class="active">
                <button type="submit" class="btn btn-info">
                    <a href="/pedidos">Pedido</a>
                </button>
            </li>
           
            <li class="active">
                <a href="/home">Usuário: {{ Auth::user()->name }} - Email: {{ Auth::user()->email }}</a>
            </li>     
            <li class="active">
                <button type="submit" class="btn btn-info">
                    <a href="{{action('auth\LogoutController@logout')}}">Logout</a>
                </button>    
            </li>                     	
        </ul>


    </nav>      
        @yield('conteudo');

        <footer class="footer">
            <p>Guilherme Cesar Lamego - Versão 1.0</p>
        </footer>
    </div>
</body>
</html>