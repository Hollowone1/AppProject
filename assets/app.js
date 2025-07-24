import './bootstrap.js';

import './styles/app.css';

import { registerVueControllerComponents } from '@symfony/ux-vue';

registerVueControllerComponents(require.context('./vue/controllers', true, /\.vue$/));

document.addEventListener('vue:before-mount', (event) => {
    const {
        app,
        router: VueRouter
    } = event.detail;


    const vueRouter = VueRouter.createRouter({
        history: VueRouter.createWebHashHistory(),
        routes: [
            {path: '/home',
             component: () => import('./vue/Home.vue')
            },
            {
                path: '/about',
                component: () => import('./vue/About.vue')
            },
            {
                path: '/contact',
                component: () => import('./vue/Contact.vue')
            },
        ],
    });

    app.use(vueRouter);
});

