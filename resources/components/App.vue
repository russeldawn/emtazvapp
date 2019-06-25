<template>
    <!-- <div> -->
        <!-- <div>
            <custom-header></custom-header>
            <div><p>this is the app.vue file</p></div>
            <ul>
                <li>
                    <router-link :to="{name:'home'}">Home</router-link>
                </li>

                <li>
                    <router-link :to="{name:'login'}">Login</router-link>
                </li>
                <li>
                    <router-link :to="{name:'signup'}">signup</router-link>
                </li>
                <li>
                    <router-link :to="{name:'main'}">Main Page</router-link>
                </li>
                <li>
                    <router-link to="/example">Example</router-link>
                </li>
                <li>
                    <router-link :to="{name: 'sidemenu'}">SideMenu</router-link>
                </li>
                <li>
                    <router-link to="/authorizedClients">authorizedClients</router-link>
                </li>
                <li>
                    <router-link to="/personalAccessTokens">personalAccessTokens</router-link>
                </li>
                <li>
                    <router-link to="/clients">clients</router-link>
                </li>
            </ul>
        </div> -->
        <router-view></router-view>
        <!-- <login-page></login-page>
        <main-page></main-page>
        <sign-up></sign-up> -->
        <!-- <custom-footer></custom-footer> -->
    <!-- </div> -->
</template>

<script>
import mixins from "../js/mixin";
// import CustomHeader from "./CustomHeader";
// import CustomFooter from "./CustomFooter";
// import LoginPage from "./LoginPage";
// import MainPage from "./MainPage";
// import SignUp from "./SignUp";

export default {
    mixins: [mixins],
    components: {
        // CustomHeader,
        // CustomFooter,
        // LoginPage,
        // MainPage,
        // SignUp,
    },
    data() {
        return {

        }
    },
    methods: {

    }
}
</script>
