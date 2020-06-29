<template>
  <div id="container" class="container">
             
    
		<h2>Editar Dados</h2>
        <a href="#/profile">Voltar a Home</a>
        <form method="post">
            <div class="form-group col-xs-4">
                <label for="login" class="form-control-label">Novo Email:</label>
                <input v-model="user.email" type="email" class="form-control" name="login" id="login_value" placeholder="Email" tabindex="1" value="" />
            </div>
            
            <div class="form-group col-xs-4">
                <label for="password" class="form-control-label">Nova Senha:</label>
                <input v-model="user.password" type="password" class="form-control" name="password" id="password" placeholder="Senha" value="" tabindex="2" />
            </div>
            
            <div class="form-group col-xs-4">
                <label for="password" class="form-control-label">Confime Nova Senha:</label>
                <input type="password" class="form-control" name="password" id="password" placeholder="Senha" value="" tabindex="2" />
            </div>
            
            <div class="form-group col-xs-4">
                <button type="submit" id="submit" tabindex="5" class="btn btn-primary">Entrar</button>
            </div>
        </form>
  </div>
</template>

<script>
export default {
  name: 'EditDataUser',

}
</script>


<style scoped>
  #container {
        width: 100%;
        max-width: 1120px;
        height: 100vh;
        margin: 0 auto;
        align-items: center;
        justify-content: space-between;
        color: #ffffa4;
    }
    #container form {
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
        color: whitesmoke;
    }
    #submit {
        background-color: tan;
    }
    h3 {
        font-size: 32px;
        margin-bottom: 32px;
    }
</style>
