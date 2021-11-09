<template>
    <div>
        <MainLayout class="flex flex-column">

            <div class="font-poppin font-bold my-6">
                Date: 11th March 2023
            </div>

            <div>
                <div>Welcome {{ name }} to our Creed Wedding</div>
                <div v-if="!existingRspv">
                    <div>We hope you can make it!</div>
                    <div>Love from Jen and Stuart xx</div>
                </div>
            </div>

            <div class="text-white my-8 flex justify-center items-center" v-if="!existingRspv">
                <inertia-link
                    :href="route('rsvp')"
                    class="bg-yellow-300 text-black p-6 rounded-full font-poppin hover:bg-green-700 hover:text-white"
                >
                    rsvp here
                </inertia-link>
            </div>

            <div v-if="existingRspv && existingRspv.coming" class="p-4">
                <div class="py-2">You have already RSVP'd, we are glad you can come!</div>
                <div class="text-gray-500">
                    <div v-if="existingRspv.song">The song that would get you on the dancefloor: {{ existingRspv.song }}</div>
                    <div v-if="existingRspv.dietary">Your dietary requirements: {{ existingRspv.dietary }}</div>
                </div>
            </div>

            <div v-if="existingRspv && !existingRspv.coming" class="p-4">
                You have already RSVP'd, we are sorry you cannot make it.
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
        props: {
            existingRspv: Object
        },
        data() {
            return {
                name: this.$page.props.user.name
            }
        }
    }
</script>
