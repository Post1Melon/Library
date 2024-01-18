
import {createWebHistory, createRouter} from "vue-router";

import Home from '../pages/Home';
import Home_librarian from '../pages/Home_librarian';
import Editing from '../pages/Editing';
import Editing_book from '../pages/Editing_book';
import Editing_user from '../pages/Editing_user';
import Editing_admin from '../pages/Editing_admin';
import Search from '../pages/Search';
import Reserve from '../pages/Reserve';
import Searchresult from '../pages/Searchresult';
import Register from '../pages/Register';
import Login from '../pages/Login';
import Dashboard from '../pages/Dashboard';
import Posts from '../components/Posts';
import EditPost from '../components/EditPost';
import AddPost from '../components/AddPost';

export const routes = [
    {
        name: 'home',
        path: '/',
        component: Home
    },
    {
        name: 'editing',
        path: '/editing',
        component: Editing
    },
    {
        name: 'editing_admin',
        path: '/editing_admin',
        component: Editing_admin
    },
    {
        name: 'editing_user',
        path: '/editing_user',
        component: Editing_user
    },
    {
        name: 'editing_book',
        path: '/editing_book',
        component: Editing_book
    },
    {
        name: 'home_librarian',
        path: '/home_librarian',
        component: Home_librarian
    },
    {
        name: 'searchresult',
        path: '/searchresult',
        component: Searchresult
    },
    {
        name: 'reserve',
        path: '/reserve',
        component: Reserve
    },
    {
        name: 'search',
        path: '/search',
        component: Search
    },
    {
        name: 'register',
        path: '/register',
        component: Register
    },
    {
        name: 'login',
        path: '/login',
        component: Login
    },
    {
        name: 'dashboard',
        path: '/dashboard',
        component: Dashboard
    },
    {
        name: 'posts',
        path: '/posts',
        component: Posts
    },
    {
        name: 'addpost',
        path: '/posts/add',
        component: AddPost
    },
    {
        name: 'editpost',
        path: '/posts/edit/:id',
        component: EditPost
    }
];

const router = createRouter({
    history: createWebHistory(),
    routes: routes,
});

export default router;