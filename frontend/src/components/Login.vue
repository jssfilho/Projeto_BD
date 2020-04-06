<template>
<div>       
    <div id="logon-container" class="container">
             
    
		<h2>Acesso</h2>
                        
        <form method="post">
            <div class="form-group col-xs-4">
                <label for="login" class="form-control-label">Login:</label>
                <input type="email" class="form-control" name="login" id="login_value" placeholder="Email" tabindex="1" value="" />
            </div>
            
            <div class="form-group col-xs-4">
                <label for="password" class="form-control-label">Senha:</label>
                <input type="password" class="form-control" name="password" id="password" placeholder="Senha" value="" tabindex="2" />
            </div>
            
            
            
            <div class="form-group col-xs-4">				
                <div class="row">
                    <a class="col" href="#/cadastro">Não possui cadastro?</a>
                    <a class="col" href="#/recuperarSenha">Esqueceu a senha?</a> 
                </div>
                <button type="submit" id="submit" tabindex="5" class="btn btn-primary row">Entrar</button>
            </div>

            <div class="form-group col-xs-4">
                <label class="form-check-label" for="remember_me">
                    <input type="checkbox" id="remember_me" value="1" class="form-check-input" tabindex="3" /> Lembrar de mim
                </label>
            </div>
        </form>			
		
    </div>
</div>
</template>

<script>
export default {
  name: 'Login',
  props: {
    msg: String
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
    #logon-container {
        width: 100%;
        max-width: 1120px;
        height: 100vh;
        margin: 0 auto;
        align-items: center;
        justify-content: space-between;
        color: #ffffa4;
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
        color: whitesmoke;
    }
    #submit {
        background-color: tan;
    }
    h2 {
        font-size: 32px;
        margin-bottom: 32px;
    }
</style>
