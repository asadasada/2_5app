import Vue from 'vue'
import Router from 'vue-router'
import Home from './Views/Home.vue'
import Login from './Views/Login.vue'
import Register from './Views/Register.vue'
import Dashbd from './Views/Dashbd.vue'

Vue.use(Router);

const routes = [
    {
        path: "/",
        name: "Home",
        component: Home
    },
    {
        path: "/login",
        name: "Login",
        component: Login,
        meta: { guestOnly:true }
    },
    {
        path: "/register",
        name: "Register",
        component: Register,
        meta: { guestOnly:true }
    },
    {
        path: "/Dashbd",
        name: "Dashbd",
        component: Dashbd,
        meta: { authOnly:true }
    },
]
//access laravel's var of env
const router = new Router({
    mode:"history",
    base: process.env.BASE_URL,
    routes
   });

function isLoggedIn(){
    return localStorage.getItem("auth");
}

router.beforeEach((to, from, next) => {
  if (to.matched.some(record => record.meta.authOnly)) {
    // このルートはログインされているかどうか認証が必要です。
    // もしされていないならば、ログインページにリダイレクトします。
    if (isLoggedIn() !== "true") {
      next({
        path: '/login',
        query: { redirect: to.fullPath }
    })
  } else {
      next()
  }
} else if (to.matched.some(record => record.meta.authOnly)) {
    if (isLoggedIn() === "true") {
      next({
        path: '/Home',
        query: { redirect: to.fullPath }
    })
  } else {
      next()
  }
} else {
    next() // next() を常に呼び出すようにしてください!
}
})

export default router;
