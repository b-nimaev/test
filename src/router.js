import Vue from 'vue'
import Router from 'vue-router'

// RouterTabRoutes
import { RouterTabRoutes } from 'vue-router-tab'

// layout component
import Frame from './components/layout/Frame.vue'

// lazy load
const importPage = view => () =>
  import(/* webpackChunkName: "p-[request]" */ `./views/${view}.vue`)

Vue.use(Router)

export default new Router({
  routes: [
    {
      path: '/',
      // parent component must contain <router-tab>
      component: Frame,
      // routes that serve as tab contents
      children: [
        // integrate RouterTabRoutes to support iframe tabs
        ...RouterTabRoutes,
        {
          path: '/', // the same with parent route
          name: 'Home',
          component: importPage('Home'),
          meta: {
            title: 'Home'
          }
        },
        {
          path: '/page/:id',
          component: importPage('Page'),
          meta: {
            title: 'Page', // tab title
            icon: 'icon-user', // tab icon, optional
            tabClass: 'custom-tab', // custom class, optional
            tips: 'This is a tab', // tab tooltip, optional. defaults to `meta.title`
            key: 'path', // tab cache rule, optional
            closable: false // is tab closable, defaults to `true`
          }
        },
        {
          path: '/404',
          component: importPage('404'),
          meta: {
            title: 'Page Not Found',
            icon: 'icon-page'
          }
        }
      ]
    },
    {
      // others
      path: '*',
      redirect: '/404'
    }
  ]
})
