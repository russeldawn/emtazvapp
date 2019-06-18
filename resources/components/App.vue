<template>
    <div>
        <div>
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
                    <router-link to="/example">Example</router-link>
                </li>
                <!-- <router-link to="/home">Go to Home</router-link>
                <router-link to="/login">Go to login</router-link> -->
            </ul>
        </div>
        <router-view></router-view>
        <!-- <login-page></login-page> -->
        <custom-footer></custom-footer>
    </div>
</template>

<script>
import CustomHeader from "./CustomHeader";
import CustomFooter from "./CustomFooter";
// import LoginPage from "./LoginPage";

export default {
    components: {
        CustomHeader,
        CustomFooter,
        // LoginPage,
    },
    data() {
        return {

        }
    },
    methods: {

    }
}
</script>
