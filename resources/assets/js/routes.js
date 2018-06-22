import VueRouter from 'vue-router'
import Home from './views/Home'
import About from './views/About'

let routes = [
    {
        path: '/',
        name: 'home',
        component: Home
    },
    {
        path: '/about',
        name: 'about',
        component: About,
    },
];

const router = new VueRouter({
	routes,
    linkActiveClass: 'active',
    mode: 'history'
});

// router.beforeEach((to, from, next) => {

//     if (to.matched.some(m => m.meta.requiresAuth)){
//         return helper.check().then(response => {
//             if(!response){
//                 return next({ path : '/login'})
//             }

//             return next()
//         })
//     }

//     if (to.matched.some(m => m.meta.requiresGuest)){
//         return helper.check().then(response => {
//             if(response){
//                 return next({ path : '/'})
//             }

//             return next()
//         })
//     }

//     return next()
// });

export default router;
