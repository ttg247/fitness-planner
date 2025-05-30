export const routes = [
  {
        path: '/',
        redirect: '/dashboard',
  },
  {
        path: '/',
        component: () => import('@/layouts/DefaultLayout.vue'),
        children: [
            {
                path: 'daily-workout',
                name: 'DailyWorkout',
                component: () => import('@/pages/DailyWorkout.vue'),
                meta: {
                    requiresAuth: true,
                    showInSidebar: true,
                    title: 'Daily Workout',
                    icon: 'ik ik-calendar',
                    order: 0,
                }
            },
            {
                path: 'workout',
                name: 'Workout',
                component: () => import('@/pages/WorkoutGenerator.vue'),
                meta: {
                    requiresAuth: true,
                    showInSidebar: true,
                    title: 'Workout Plan',
                    icon: 'ik ik-calendar',
                    order: 1,
                },
            },
            {
                path: 'library',
                name: 'library',
                component: () => import('@/pages/ExerciseLibrary.vue'),
                meta: {
                requiresAuth: true,
                showInSidebar: true,
                title: 'Exercises',
                icon: 'ik ik-book-open',
                order: 2,
                },
            },
            {
                path: 'programs',
                name: 'program',
                component: () => import('@/pages/Programs.vue'),
                meta: {
                requiresAuth: true,
                showInSidebar: true,
                title: 'Programs',
                icon: 'ik ik-book-closed',
                order: 2,
                },
            },
            {
                path: 'programs/:id',
                name: 'programDetails',
                component: () => import('@/pages/ProgramDetails.vue'),
                meta: {
                requiresAuth: true,
                showInSidebar: true,
                title: 'Program Details',
                icon: 'ik ik-book-closed',
                },
            },
            {
                path: 'progress',
                name: 'progress',
                component: () => import('@/pages/Progress.vue'),
                meta: {
                requiresAuth: true,
                showInSidebar: true,
                title: 'Progress',
                icon: 'ik ik-trending-up',
                order: 3,
                },
            },
            {
                path: 'profile',
                name: 'profile',
                component: () => import('@/pages/Profile.vue'),
                meta: {
                requiresAuth: true,
                showInSidebar: true,
                title: 'Profile',
                icon: 'ik ik-user',
                order: 4,
                },
            },
        ],
  },
  {
        path: '/',
        // component: () => import('@/Layouts/blank.vue'),
        children: [
            {
                path: 'login',
                name: 'login',
                // component: () => import('@/pages/Login.vue'),
            },
            {
                path: 'register',
                name: 'register',
                // component: () => import('@/pages/Register.vue'),
            },
            {
                path: 'logout',
                name: 'logout',
                // component: () => import('@/pages/Logout.vue'),
            },
            {
                path: '/:pathMatch(.*)*',
                name: 'notfound',
                component: () => import('@/pages/NotFound.vue'),
            },
        ],
  },
]
