<template>
    <div>
        <MainLayout class="flex flex-column">

            <div class="font-poppin font-bold my-6">
                Date: 11th March 2023
            </div>

            <div>
                <div>Welcome {{ name }} to our Creed Wedding</div>
                <div>We hope you can make it!</div>
                <div>Love from Jen and Stuart xx</div>
            </div>

            <div class="text-white my-8 flex justify-center items-center">
                <inertia-link
                    :href="route('rsvp')"
                    class="bg-yellow-300 text-black p-6 rounded-full font-poppin hover:bg-green-700 hover:text-white"
                >
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
        components: {MainLayout, CountDown},
        data() {
            return {
                name: this.$page.props.user.name
            }
        }
    }
</script>
