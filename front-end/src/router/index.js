import { createRouter, createWebHashHistory } from 'vue-router'
import HomeView from '../views/HomeView.vue'

const routes = [
  {
    path: '/',
    name: 'Início',
    component: HomeView
  },
  {
    path: '/about',
    name: 'Sobre',
    component: () => import('../views/AboutView.vue')
  },
  {
    path: '/cart',
    name: 'Carrinho de Compras',
    component: () => import('../views/CartView.vue')
  },
  {
    path: '/detail/:id',
    name: 'Detalhe do Produto',
    component: () => import('../views/DetailView.vue')
  },
  {
    path: '/admin/appliance',
    name: 'Admin',
    component: () => import('../views/admin/ApplianceView.vue')
  },
  {
    path: '/admin/appliance/new',
    name: 'Adicionar Produto',
    component: () => import('../views/admin/ApplianceNewView.vue')
  },
  {
    path: '/admin/appliance/edit/:id',
    name: 'Editar Produto',
    component: () => import('../views/admin/ApplianceEditView.vue')
  }
]

const router = createRouter({
  history: createWebHashHistory(),
  routes
})

export default router
