<template>
    <div class="top-0 right-0 px-6 py-4 sm:block opacity-40 bg-blue-800 bg-blue-800 text-white w-full">
        <inertia-link href="/home" class="hover:text-black mr-4">
            home
        </inertia-link>
        <inertia-link href="/rsvp" class="hover:text-black mr-4">
            rsvp
        </inertia-link>
        <inertia-link href="/venue" class="hover:text-black mr-4">
            venue
        </inertia-link>
        <inertia-link href="/accommodation" class="hover:text-black mr-4">
            accommodation
        </inertia-link>
        <inertia-link href="/on-the-day" class="hover:text-black mr-4">
            on the day
        </inertia-link>
        <inertia-link href="/seating-plan" class="hover:text-black mr-4">
            seating plan
        </inertia-link>
        <inertia-link href="/food-and-drinks" class="hover:text-black mr-4">
            food and drinks
        </inertia-link>
        <inertia-link href="/music" class="hover:text-black mr-4">
            music
        </inertia-link>
        <inertia-link href="/upload-your-photos" class="hover:text-black mr-4">
            upload your photos
        </inertia-link>
        <!--                <inertia-link :href="route('profile.show')" class="text-md text-gray-700 mr-4">-->
        <!--                    Profile-->
        <!--                </inertia-link>-->
        <inertia-link href="/logout" method="post" as="button" type="button" class="hover:text-black mr-4 focus:outline-none">
            logout
        </inertia-link>
    </div>
</template>

<script>
export default {
    name: "Nav.vue",
}
</script>

<style scoped>

</style>
