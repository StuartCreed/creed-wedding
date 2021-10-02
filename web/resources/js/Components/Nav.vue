<template>
    <div class="top-0 right-0 px-6 py-4 sm:block opacity-40 bg-blue-800 bg-blue-800 text-white w-full">
        <nav-link href="/home">home</nav-link>
        <nav-link href="/rsvp">rsvp</nav-link>
        <nav-link href="/venue">venue</nav-link>
        <nav-link href="/accommodation">accommodation</nav-link>
        <nav-link href="/on-the-day">on the day</nav-link>
        <nav-link href="/seating-plan">seating plan</nav-link>
        <nav-link href="/food and drinks">food and drinks</nav-link>
        <nav-link href="/music">music</nav-link>
        <nav-link href="/upload-your-photos">upload your photos</nav-link>
        <!--                <inertia-link :href="route('profile.show')" class="text-md text-gray-700 mr-4">-->
        <!--                    Profile-->
        <!--                </inertia-link>-->
        <inertia-link href="/logout" method="post" as="button" type="button" class="hover:text-red-600 mr-4 focus:outline-none">
            logout
        </inertia-link>
    </div>
</template>

<script>
import NavLink from "./NavLink";
export default {
    name: "Nav.vue",
    components: {
        NavLink
    }
}
</script>

<style scoped>

</style>
