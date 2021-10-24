<template>
    <div class="top-0 right-0 px-6 py-4 sm:block opacity-50 bg-blue-800 text-white w-full">
        <nav-link routeName="home">home</nav-link>
        <nav-link routeName="rsvp">rsvp</nav-link>
        <nav-link routeName="venue">venue</nav-link>
        <nav-link routeName="accommodation">accommodation</nav-link>
        <nav-link routeName="on-the-day">on the day</nav-link>
        <nav-link routeName="seating-plan">seating plan</nav-link>
        <nav-link routeName="food-and-drinks">food and drinks</nav-link>
        <nav-link routeName="band">band</nav-link>
        <nav-link routeName="upload-your-photos">upload photos</nav-link>
        <!--                <inertia-link :href="route('profile.show')" class="text-md text-gray-700 mr-4">-->
        <!--                    Profile-->
        <!--                </inertia-link>-->
        <inertia-link
            :href="route('logout')" method="post" as="button" type="button"
            class="bg-red-600 focus:outline-none mx-1 py-1 px-4 rounded-full text-navlink hover:text-black hover:border-black"
            style="line-height: 1.2"
        >
            logout
        </inertia-link>
    </div>
</template>

<script>
import NavLink from "./NavLink";
export default {
    components: {
        NavLink
    }
}
</script>
