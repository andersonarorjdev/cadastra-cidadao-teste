<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastros</title>
    <link rel="stylesheet" href="{{asset('styles/home.css')}}">
</head>
<body> 
    <header id="header">
        <nav id="navbar">
            <a href="" id="Brand">
                <img src="https://img.icons8.com/ios/452/user--v1.png" alt="Logo"/>
                Cadastro nacional
            </a>
            <ul id="Menu">
                <li class="Menu-item">
                    <a class="Menu-Link" href="/cadastrar"> Fazer cadastro</a>
                </li>
            </ul>
        </nav>
    </header>

    <main id="main">
    @foreach ($cadastros as $cadastro)
        <div id="user-card">
            <div class="card-header">
                <form action="/{{ $cadastro->id }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit">
                        <img src="https://image.flaticon.com/icons/png/512/3096/3096687.png" style="width: 15px; height: auto;" alt="icone lixeira" />
                        excluir
                    </button>
                </form>
              
                <a href="/edit/{{ $cadastro->id }}">
                    <img src="https://image.flaticon.com/icons/png/512/1159/1159633.png" style="width: 15px; height: auto;" alt="Editar icon" />
                   Editar
                </a>
            </div>
            <div class="user-image">
                @if ($cadastro->sexo === 'M')
                        <img class="Perfil-feminino" src="https://image.flaticon.com/icons/png/512/53/53176.png" alt="usuario mulher"/>
                @elseif ($cadastro->sexo === 'H')
                        <img class="Perfil-masculino" src="https://image.flaticon.com/icons/png/512/53/53104.png" alt="Perfil masculino" />
                @endif
            </div>  
            <div class="Card-Body">

                <div class="user-information">
                    <span>
                        <img src="https://image.flaticon.com/icons/png/512/1828/1828413.png" alt="icone nome" />
                    </span>
                    <p class="information-text">{{ $cadastro->name }}</p>
                </div>

                <div class="user-information">
                    <span>
                        <img src="https://i.pinimg.com/originals/97/1f/f7/971ff77211766df7eaed83a6991acda9.png" alt="icone nascimento" />
                    </span>
                    <p class="information-text">{{ $cadastro->nascimento }}</p>
                </div>

                <div class="user-information">
                    <span>
                        <img src="https://image.flaticon.com/icons/png/512/1012/1012688.png" alt="sexo icon" />
                    </span>
                    <p class="information-text">{{$cadastro->sexo}}</p>
                </div>

                <div class="user-information">
                    <span>
                        <img src="https://image.winudf.com/v2/image/YnIuY29tLmVpdGxlci5jb25zdWx0YWNlcF9pY29uXzE1MTU5ODExNzBfMDky/icon.png?w=170&amp;fakeurl=1" alt="icone cep" />
                    </span>
                    <p class="information-text">{{ $cadastro->cep }}</p>
                </div>

                <div class="user-information">
                    <span>
                        <img src="https://image.flaticon.com/icons/png/512/1275/1275302.png" alt="endereço icone" />
                    </span>
                    <p class="information-text">{{ $cadastro->endereco }}</p>
                </div>

                <div class="user-information">
                    <span>
                        <img src="https://media.istockphoto.com/vectors/home-location-glyph-icon-real-estate-and-home-pin-pointer-sign-vector-vector-id935787472?k=6&m=935787472&s=170667a&w=0&h=n-b5nOLBvvoyizY3WlJkc0uWTuvxYW56o6ivhpbG3BQ=" alt="numero icon" />
                    </span>
                    <p class="information-text">{{ $cadastro->numero }}</p>
                </div>

                <div class="user-information">
                    <span>
                        <img src="https://images.vexels.com/media/users/3/128064/isolated/preview/549ff955ad5066f6841853affdf331c5-casa-no-iacute-cone-de-lupa-by-vexels.png" alt="complemento" />
                    </span>
                    <p class="information-text">{{ $cadastro->complemento }}</p>
                </div>

                <div class="user-information">
                    <span>
                        <img src="https://png.pngtree.com/png-vector/20190228/ourlarge/pngtree-vector-neighborhood-icon-png-image_711306.jpg" alt=" bairro icone" />
                    </span>
                    <p class="information-text">{{ $cadastro->bairro }}</p>
                </div>

                <div class="user-information">
                    <span>
                        <img src="https://img.icons8.com/bubbles/452/city-buildings.png" alt="icone cidade" />
                    </span>
                    <p class="information-text">{{ $cadastro->cidade }}</p>
                </div>

                <div class="user-information">
                    <span>
                        <img src="https://static.thenounproject.com/png/2320760-200.png" alt="estado icone" />
                    </span>
                    <p class="information-text">{{ $cadastro->estado }}</p>
                </div>
            </div>
        </div>
    @endforeach

    </main>

    <footer id="footer">
        <h5>Todos os direitos reservados</h5>
    </footer>
</body>
</html>