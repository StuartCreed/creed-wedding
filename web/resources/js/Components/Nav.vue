<template>
    <div class="fixed top-0 right-0 px-6 py-4 sm:block">
        <inertia-link href="/home" class="text-md text-gray-700 mr-4">
            Home
        </inertia-link>
        <inertia-link href="/venue" class="text-md text-gray-700 mr-4">
            Venue
        </inertia-link>
        <inertia-link href="/accommodation" class="text-md text-gray-700 mr-4">
            Accommodation
        </inertia-link>
        <inertia-link href="/on-the-day" class="text-md text-gray-700 mr-4">
            On the day
        </inertia-link>
        <inertia-link href="/seating-plan" class="text-md text-gray-700 mr-4">
            Seating plan
        </inertia-link>
        <inertia-link href="/food" class="text-md text-gray-700 mr-4">
            Food
        </inertia-link>
        <inertia-link href="/drinks" class="text-md text-gray-700 mr-4">
            Drinks
        </inertia-link>
        <inertia-link href="/music" class="text-md text-gray-700 mr-4">
            Music
        </inertia-link>
        <inertia-link href="/upload-your-photos" class="text-md text-gray-700 mr-4">
            Upload your photos
        </inertia-link>
        <!--                <inertia-link :href="route('profile.show')" class="text-md text-gray-700 mr-4">-->
        <!--                    Profile-->
        <!--                </inertia-link>-->
        <inertia-link href="/logout" method="post" as="button" type="button" class="text-md text-gray-700 mr-4 focus:outline-none">
            Logout
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
