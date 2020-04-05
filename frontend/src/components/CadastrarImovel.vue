<template>
    <div id="container" class="col-md-4">
        <h3>Cadastro de Imovel</h3>
        <form  method="post">
        
        <div class="row col-xs-4">
            <div class="form-group col">
                <label for="email" class="control-label">Cidade:</label>
                <input type="text" class="form-control" name="tcidade" id="cidade" required/>
            </div>
            <div class="form-group col">
                <label for="email" class="control-label">UF:</label>
                <input type="text" class="form-control" maxlength="2" id="uf"  size="2" required/>
            </div>
        </div>
        <div class="row col-xs-4">
            <div class="form-group col">
                <label for="numero" class="control-label">CEP:</label>
                <input type="text" class="form-control" name="tcep" id="cep"  required/>
            </div>
            <div class="form-group col">
                <label for="email" class="control-label">Bairro:</label>
                <input type="text" class="form-control" name="tbairro" id="bairro" required/>
            </div>
        </div>
        <div class="row col-xs-4">
            <div class="form-group col">
                <label for="email" class="control-label">Rua:</label>
                <input type="text" class="form-control" name="trua" id="rua" required/>
            </div>
            <div class="form-group col">
                <label for="number" class="control-label">Numero:</label>
                <input type="tel" class="form-control" name="tnum" id="numero"  required/>
            </div>
        </div>
        <div class="row col-xs-4">
            <div class="form-group col">
                <label class="control-label">Complemento:</label>
                <input type="text" class="form-control" name="tnum" id="complemento" required/>
            </div>
            <div class="form-group col">
                <label class="form-control-label">Descreva seu Imovel:</label>
                <textarea placeholder="Descrição" id="descricao"/>
            </div>
        </div>
        <div class="form-group col-xs-4">
            <button type="submit" id="submit" class="btn btn-primary">Cadastrar Imovel</button>
        </div>
        </form>
    </div>
</template>

<script>
export default {
  name: 'CadastrarImovel',
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
