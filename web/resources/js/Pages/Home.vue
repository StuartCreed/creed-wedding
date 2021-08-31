<template>
    <div>
        <MainLayout class="flex flex-column">

            <div>
                <div>Welcome to our Creed Wedding</div>
                <div>We hope you can make it!</div>
                <div>Love from Jen and Stuart xx</div>
            </div>

            <div class="text-white m-6 flex justify-center items-center">
                <inertia-link href="/rsvp" class="bg-gray-800 p-6 rounded ">
                    rsvp here
                </inertia-link>
            </div>

            <div class="mt-8">
                <div class="text-center">Countdown</div>
                <count-down id='flipdown' deadline="2023-03-11 11:00:00"></count-down>
            </div>
        </MainLayout>
    </div>
</template>

<style scoped>
    b {
        color: white !important;
    }
</style>

<script>
    import MainLayout from "@/Layouts/MainLayout";
    import CountDown from '@/Components/Countdown';
    export default {
        name: "Home",
        components: {MainLayout, CountDown}
    }
</script>
