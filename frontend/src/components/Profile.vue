<template>
<div id="container">
    <ul class="nav nav-tabs">
        <li class="nav-item">
            <a class="nav-link active" href="#">Alugar Imovel</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" href="#">Cadastar Imovel</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" href="#">Editar Perfil</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" href="#">Alugado(s)</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" href="#">Alugueis</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" href="#">Imoveis</a>
        </li>
        <li class="nav-item">
            <a class="nav-link disabled" href="#">Sair</a>
        </li>
    </ul>
</div>
</template>

<script>
export default {
  name: 'Profile',
  props: {
    msg: String
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
    #container {
        max-width: 1120px;
        height: 100vh;
        margin: auto;
        align-items: center;
        border: 1px solid;
        justify-content: center;
        border-radius: 10px;
        background-color: #FAF0E6;
    }
    #logon-container form {
        width: 100%;
        max-width: 350px;
        margin: auto;
    }
    
    form {
        margin-top: 10px;
    }
    label {
        margin: 10px;
    }
    a {
        text-decoration: none;
        margin: 10px;
    }
    #submit {
        background-color: tan;
    }
    h2 {
        font-size: 32px;
        margin-bottom: 32px;
    }
</style>
