import VueRouter from 'vue-router'

import AdminHome from './components/admin/AdminHome.vue'
import CategoryList from './components/admin/category/List.vue'
import AddCategory from './components/admin/category/New.vue'
import EditCategory from './components/admin/category/Edit.vue'

// FrontEnd Component
import PublicHome from './components/public/PublicHome.vue'
import BlogPost from './components/public/blog/BlogPost.vue'
import SinglePost from './components/public/blog/SingleBlog.vue'

// Post
import PostList from './components/admin/post/List.vue'
import AddPost from './components/admin/post/New.vue'
import EditPost from './components/admin/post/Edit.vue'
let routes = [
    {
        path:'/dashboard',
        component:AdminHome
    },
    {
        path:'/category-list',
        component:CategoryList
    },
    {
        path:'/add-category',
        component:AddCategory
    },
    {
        path:'/edit-category/:categoryid',
        component:EditCategory
    },
    // Post
    {
        path:'/post-list',
        component:PostList
    },
    {
        path:'/add-post',
        component:AddPost
    },
    {
        path:'/edit-post/:postid',
        component:EditPost
    },

    // Frontend Route
    {
        path:'/',
        component:PublicHome
    },
    {
        path:'/blog',
        component:BlogPost
    },
    {
        path:'/blog/:id',
        component:SinglePost
    },
    {
        path:'/categories/:id',
        component:BlogPost
    },

];


const router = new VueRouter({
	routes,
    linkActiveClass: 'active',
    mode: 'history'
});

router.beforeEach((to, from, next) => {

    // if (to.matched.some(m => m.meta.requiresAuth)){
    //     return helper.check().then(response => {
    //         if(!response){
    //             return next({ path : '/login'})
    //         }

    //         return next()
    //     })
    // }

    // if (to.matched.some(m => m.meta.requiresGuest)){
    //     return helper.check().then(response => {
    //         if(response){
    //             return next({ path : '/'})
    //         }

    //         return next()
    //     })
    // }

    return next()
});

export default router;
