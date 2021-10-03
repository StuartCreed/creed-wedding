<template>
    <div class="top-0 right-0 px-6 py-4 sm:block opacity-50 bg-red-800 text-white w-full flex">
        <nav-link routeName="admin">Admin Home</nav-link>
        <inertia-link
            :href="route('logout')" method="post" as="button" type="button"
            class="bg-red-600 focus:outline-none py-1 px-4 rounded-full text-navlink hover:text-black hover:border-black"
            style="line-height: 1.2"
        >
            logout
        </inertia-link>
    </div>
</template>

<script>
import NavLink from "@/Components/NavLink";
import CountDown from "@/Components/Countdown";
export default {
    components: {
        NavLink,
        CountDown
    }
}
</script>

<style scoped>

</style>
