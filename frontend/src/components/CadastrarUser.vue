<template>
     <div id="container" class="col-md-4">
        <h3>Cadastro de Usuario</h3>
        <a href="#/login">Voltar ao Login</a> 
        <h3>{{user.uf }}</h3>
        <form @submit.prevent="salvar" >
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input v-model="user.name" type="text" class="form-control" name="tnome" id="name" size="15" maxlength="50" required/>
            </div>
            
            <div class="form-group">
                <label for="data">Data de Nascimento:</label>
                <input v-model="user.data_nascimento" type="date" class="form-control" name="tdata" id="data_nascimento" size="6" maxlength="6" required/>
            </div>
            
            <div class="form-group">
                <label for="cpf">CPF:</label>
                <input  v-model="user.cpf" type="text" class="form-control" name="tcpf" id="cpf" size="11" maxlength="11" placeholder="CPF" required/>
            </div>
            <div class="form-group">
                <label for="email" class="control-label">Email:</label>
                <input v-model="user.email" type="email" class="form-control" name="temail" id="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required/>
            </div>
            
            <div class="form-group">
                <label for="numero" class="control-label">Telefone de Contado:</label>
                <input v-model="user.phone" pattern="[0-9]{2}[0-9]{4,6}[0-9]{3,4}$" class="form-control" name="tnumero" id="phone" required/>
            </div>
            
            <div class="row">
                <div class="form-group col">
                    <label for="email" class="control-label">Cidade:</label>
                    <input v-model="user.cidade" type="text" class="form-control" name="tcidade" id="cidade"  required/>
                </div>
                <div class="form-group col">
                    <label for="email" class="control-label">UF:</label>
                    <input v-model="user.uf" type="text" class="form-control" maxlength="11" id="uf"  size="2" required/>
                </div>
            </div>
            <div class="row">
                <div class="form-group col">
                    <label for="numero" class="control-label">CEP:</label>
                    <input v-model="user.cep" type="text" class="form-control" name="tcep" id="cep"  required/>
                </div>
                <div class="form-group col">
                    <label for="email" class="control-label">Bairro:</label>
                    <input v-model="user.bairro" type="text" class="form-control" name="tbairro" id="bairro"  required/>
                </div>
            </div>
            <div class="row">
                <div class="form-group col">
                    <label for="email" class="control-label">Rua:</label>
                    <input v-model="user.rua" type="text" class="form-control" name="trua" id="rua"  required/>
                </div>
                <div class="form-group col">
                    <label for="number" class="control-label">Numero:</label>
                    <input v-model="user.numero" type="number" class="form-control" name="tnum" id="numero"  required/>
                </div>
            </div>
            <div class="form-group">
                <label for="nome">Complemento:</label>
                <input v-model="user.complemento" type="text" class="form-control" name="tnome" id="complemento" size="15" maxlength="100" required/>
            </div>
            
            <div class="form-group">
                <label for="pwd" class="control-label">Senha:</label>
                <input v-model="user.password" type="password" pattern="(?=.*[0-9a-zA-Z]).{4,}" class="form-control" id="password" name="tsenha" size="8" maxlength="8" placeholder="Senha" required/>
            </div>
            <div class="form-group">
                <label for="pwd" class="control-label">Confirmar Senha:</label>
                <input type="password" pattern="(?=.*[0-9a-zA-Z]).{4,}" class="form-control" id="cpwd" name="tsenha2" size="8" maxlength="8" placeholder="Confima Senha" required/>
            </div>
            
            <div class="checkbox">
                <label class="control-label" for="remember_me">
                    <input type="checkbox" name="remember_me" id="remember_me" value="1" class="" tabindex="3" /> Aceito os Termos
                </label>
            </div>
            
            <div class="form-group col-xs-4">				
                <button type="submit" id="submit" class="btn btn-primary">Cadastrar</button>   
            </div>
        </form>

    </div>
</template>

<script>
import User from '../services/users'
export default {
  name: 'CadastrarUser',
  data(){
      return {
          user: {
            name: '',
            email: '',
            phone: '',
            password: '',
            data_nascimento: '',
            cpf: '',
            cidade: '',
            uf: '',
            cep: '',
            bairro: '',
            rua: '',
            numero: '',
            complemento: ''
          }
      }
  },

  methods:{
      salvar(){
          User.salvar(this.user).then(resposta => {
              console.log(resposta)
          })
      }
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
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
