<template>
<div>       
    <div id="logon-container" class="container">
             
    
		<h2>Recuperar Senha</h2>
                        
        <form method="post">
            <div class="form-group col-xs-4">
                <label for="login" class="form-control-label">Email de recuperação:</label>
                <input type="email" class="form-control" name="login" id="email_recu" placeholder="Email" tabindex="1" value="" />
            </div>
            
            <div class="form-group col-xs-4">				
                <button type="submit" id="submit" tabindex="5" class="btn btn-primary">Enviar</button>
                <a class="row" href="#/login">Voltar ao Login</a>     
            </div>
        </form>			
		
    </div>
</div>
</template>

<script>
export default {
  name: 'RecuperarSenha',
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
