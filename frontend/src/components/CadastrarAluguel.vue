<template>
  <div id="container" class="col-md-4">
      <h3>Cadastro de Aluguel</h3>
    <form method="post">
      <div class="form-group col-xs-4">
          <label class="form-control-label">Data de Termino do contrato:</label>
          <input type="date" class="form-control" name="login" id="data_fim"   />
      </div>
      <div class="form-group col-xs-4">
          <label class="form-control-label">Valor do Condominio:</label>
          <input type="number" class="form-control" name="login" id="valor_condominio" min="0" />
      </div>
      <div class="form-group col-xs-4">
          <label class="form-control-label">Valor do Alugel:</label>
          <input type="number" class="form-control" name="login" id="valor_aluguel" min="0"/>
      </div>
      <div class="row">
        <div class="form-group col">
            <label for="login" class="form-control-label">Login do Locador:</label>
            <input type="email" class="form-control" name="login" id="email"   />
        </div>
        <div class="form-group col">
            <label for="password" class="form-control-label">Senha do Locador:</label>
            <input type="password" class="form-control" name="password" id="password"    />
        </div>
      </div>
      
      <div class="form-group col-xs-4">				
          <button type="submit" id="submit"  class="btn btn-primary">Criar Contrato</button>
      </div>
    </form>		  
  </div>
</template>

<script>
export default {
  name: 'CadastrarAluguel',
  props: {
    msg: String
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
    #container {
        width: 100%;
        max-width: 1120px;
        height: 100vh;
        margin: auto;
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
