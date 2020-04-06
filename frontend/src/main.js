import Vue from 'vue';
import VueRouter from 'vue-router';
import App from './App.vue';

import CadastrarUser from './components/CadastrarUser.vue';
import Login from './components/Login.vue';
import Profile from './components/Profile.vue';
import RecuperarSenha from './components/RecuperarSenha.vue';
import EditDataUser from './components/EditDataUser.vue';
import CadastrarImovel from './components/CadastrarImovel.vue';
import CadastrarAluguel from './components/CadastrarAluguel.vue';


Vue.use(VueRouter);

const router = new VueRouter({
  routes : [
    {
      path: '/cadastro',
      name: 'cadastro',
      component: CadastrarUser 
    },
    {
      path: '/login',
      name: 'login',
      component: Login 
    },    
    {
      path: '/profile',
      name: 'profile',
      component: Profile 
    },
    {
      path: '/recuperarSenha',
      name: 'recuperarSenha',
      component: RecuperarSenha 
    },
    {
      path: '/profile/alugarImovel',
      name: 'alugarImovel',
      component: CadastrarAluguel 
    },
    {
      path: '/profile/cadastrarImovel',
      name: 'cadastrarImovel',
      component: CadastrarImovel
    },
    {
      path: '/profile/edit',
      name: 'edit',
      component: EditDataUser
    },
  ]
})
Vue.config.productionTip = false
new Vue({
  router,
  render: h => h(App),
}).$mount('#app')
