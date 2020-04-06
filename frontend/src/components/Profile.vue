<template>
<div id="container">
    <div>
        <ul class="nav nav-tabs row">
            <li class="nav-item col">
                <a class="nav-link active" href="#/profile">HOME</a>
            </li>
            <li class="nav-item col">
                <a class="nav-link active" href="#/profile/cadastrarImovel">Cadastar Imovel</a>
            </li>
            <li class="nav-item col">
                <a class="nav-link active" href="#/profile/edit">Editar Perfil</a>
            </li>
            <li class="nav-item col">
                <a class="nav-link active" href="#/logoff">Sair</a>
            </li>
        </ul>
    </div>
    <div id="profile-container">
        <ul id="lista">        
            <li >
                <strong>Imovel:</strong>
                <strong>DESCRIÇÃO:</strong>
                <p>{incident.description}</p>
                <strong>Cidade:</strong>
                <p>{campina}</p>
                <strong>Rua:</strong>
                <p>{Padre Luis}</p>
                <strong>Numero</strong>
                <p>{nume}</p>
                <strong>Complemento:</strong>
                <p>{10.00}</p>

                <a id="btn-id" href="#/profile/alugarImovel" class="btn btn-primary" >
                    Alugar
                </a>
                
                <button type="button" id="btn-id" class="btn btn-primary" >
                    Deletar
                </button>
            </li>
            <li >
                <strong>Aluguel:</strong>
                <strong>DESCRIÇÃO DO IMOVEL:</strong>
                <p>{incident.description}</p>
                <strong>Cidade:</strong>
                <p>{campina}</p>
                <strong>Nome do Locador:</strong>
                <p>{Padre Luis}</p>
                <strong>Valor do Aluguel</strong>
                <p>{nume}</p>
                <strong>Atrasado?</strong>
                <p>{Não}</p>

                <button type="button" id="btn-id" class="btn btn-primary">
                    Deletar Aluguel
                </button>
            </li>
        </ul>
    </div>
</div>
</template>

<script>
export default {
  name: 'Profile',
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
    #container {
        /*max-width: 1120px;*/
        height: 100vh;
        margin: auto;
        align-items: center;
        border: 1px solid;
        justify-content: center;
        border-radius: 10px;
        /*background-color: #FAF0E6;*/
    }
    #profile-container form {
        width: 100%;
        max-width: 350px;
        margin-top: 50px;
    }
    
    a {
        text-decoration: none;
        margin: 10px;
        color: #737380;
    }
  
    h2 {
        font-size: 32px;
        margin-bottom: 32px;
    }
    #lista {
        display: grid;
        grid-template-columns: repeat(2,1fr);
        grid-gap: 24px;
        list-style: none;
        margin: 60px;
    }
    #btn-id {
        background-color: tan;
        margin: 30px;
    }
    #lista li {
        background: #fff;
        padding: 15px;
        border-radius: 8px;
        position: relative;
    }
    strong {
        display: block;
        margin-bottom: 16px;
        color: #41414d;
    }
    p + strong {
        margin-top: 32px;
    }
    #lista li p {
        color: #737380;
        line-height: 21px;
        font-size: 16px;
    }
</style>
