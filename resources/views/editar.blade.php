<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ asset('styles/formulario.css') }}">
    <script type="module" src="Axios.js"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <title>Document</title>
</head>
<body>      
    <form action="/cadastrar/update/{{ $cadastro->id }}" enctype="multipart/form-data" method="post" id="Formulario">
        @csrf
        @method('PUT')
        <article>
            <p style="text-align: center;">Voce está editando o usuário: <br/> {{ $cadastro->name }}</p>
        </article>
        <div class="Inputs">
            <input 
                type="text" 
                placeholder="nome" 
                name="name" 
                value="{{ $cadastro->name }}"/>

            <div class="Inputs-Small">
                <input 
                    type="date" 
                    placeholder="nascimento" 
                    name="nascimento" 
                    value="{{ $cadastro->nascimento }}"/>

                <span>
                    <label for="sexo">Selecione o sexo</label>
                    <select name="sexo" id="sexo">
                        <option value="H">Homem</option>
                        <option value="M">Mulher</option>
                    </select>
                </span>

            </div>

            <input 
                type="text" 
                placeholder="CEP" 
                name="cep" 
                id="CEP" 
                value="{{ $cadastro->cep }}"
                onblur="VerificaCep()"/>
            <input 
                type="text" 
                placeholder="endereco" 
                name="endereco" 
                id="endereco"
                value="{{ $cadastro->endereco }}"/>
            <input 
                type="number" 
                placeholder="numero" 
                name="numero" 
                id="numero"
                value="{{ $cadastro->numero }}"/>
            <input 
                type="text" 
                placeholder="complemento" 
                name="complemento" 
                id="complemento"
                value="{{ $cadastro->complemento }}"/>
            <input 
                type="text" 
                placeholder="bairro" 
                name="bairro" 
                id="bairro"
                value="{{ $cadastro->bairro }}"/>
            <input 
                type="text" 
                placeholder="cidade" 
                name="cidade" 
                id="cidade" 
                value="{{ $cadastro->cidade }}"/>
            <input 
                type="text" 
                placeholder="estado" 
                name="estado" 
                id="estado"
                value="{{ $cadastro->estado }}"/>
        </div>

        <button type="submit">Enviar</button>
    </form>
    <script>
        const VerificaCep = _ =>{
            let CEPfield = document.getElementById('CEP').value;

            let endereco = document.getElementById('endereco');
            let numero = document.getElementById('numero');
            let complemento = document.getElementById('complemento');
            let bairro = document.getElementById('bairro');
            let cidade = document.getElementById('cidade');
            let estado = document.getElementById('estado');

                axios.get(`https://viacep.com.br/ws/${CEPfield}/json/`).then((response) =>{
                    let data = response.data;
                    
                    if(data.bairro){
                        bairro.value = data.bairro;
                    }
                    if(data.localidade){
                        cidade.value = data.localidade;
                    }
                    if(data.complemento){
                        complemento.value = data.complemento;
                    }
                    if(data.uf){
                        estado.value = data.uf;
                    }
                    if(data.logradouro){
                        endereco.value = data.logradouro;
                    }
                    if(data.siafi){
                        numero.value = data.siafi;
                    }
                });
        }

    </script>
</body>
</html>
