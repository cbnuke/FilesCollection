import VueRouter from 'vue-router'
// import Hello from './views/Hello'
import Home from './views/Home'

let routes = [
    {
        path: '/',
        // name: 'home',
        component: Home
    },
    // {
    //     path: '/hello',
    //     name: 'hello',
    //     component: Hello,
    // },
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
