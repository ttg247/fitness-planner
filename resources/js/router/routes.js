// src/router/routes.js
export const routes = [
    {
        path: '/',
        redirect: '/dashboard',
    },
    {
        path: '/',
        component: () => import('@/Layouts/DefaultLayout.vue'),
        children: [
            {
                path: 'dashboard',
                component: () => import('@/pages/Dashboard.vue'),
                meta: { requiresAuth: true },
            },
            {
                path: 'workout',
                component: () => import('@/pages/WorkoutGenerator.vue'),
                meta: { requiresAuth: true },
            },
            {
                path: 'library',
                component: () => import('@/pages/ExerciseLibrary.vue'),
                meta: { requiresAuth: true },
            },
            {
                path: 'progress',
                component: () => import('@/pages/Progress.vue'),
                meta: { requiresAuth: true },
            },
            {
                path: 'profile',
                //component: () => import('@/pages/Profile.vue'),
                meta: { requiresAuth: true },
            },
        ],
    },
    {
        path: '/',
        //component: () => import('@/Layouts/blank.vue'),
        children: [
        {
            path: 'login',
        // component: () => import('@/pages/Login.vue'),
        },
        {
            path: 'register',
        // component: () => import('@/pages/Register.vue'),
        },
        {
            path: 'logout',
        // component: () => import('@/pages/Logout.vue'),
        },
        {
            path: '/:pathMatch(.*)*',
            // component: () => import('@/pages/NotFound.vue'),
        },
        ],
    },
];
