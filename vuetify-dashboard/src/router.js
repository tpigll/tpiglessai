import Vue from 'vue'
import Router from 'vue-router'
import HelloWorld from './components/HelloWorld.vue'
import Acceuil from './components/Acceuil.vue'
import Tableau from './components/Tableau.vue'

Vue.use(Router)

export default new Router({
  mode: 'history',
  base: process.env.BASE_URL,
  routes: [
    {
      path: '/',
      name: 'HelloWorld',
      component: HelloWorld
    },
    {
      path: '/acceuil',
      name: 'Acceuil',
      component: Acceuil
    },
    {
      path: '/tableau',
      name: 'Tableau',
      component: Tableau
    }

  ]
})