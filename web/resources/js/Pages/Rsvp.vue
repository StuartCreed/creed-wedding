<template>
    <MainLayout>
        <div class="mb-4 font-poppin">Please RSVP below:</div>
        <form class="grid grid-cols-1 gap-2" @submit.prevent="submit">
            <div class="py-2">
                <label for="coming">I am coming</label>
                <input id="coming" :value="1" name="rspv" type="radio" v-model="form.coming" class="p-2 m-2 rounded border border-black focus:outline-none hover:bg-green-500"/>
            </div>

            <div class="py-2">
                <label for="not-coming">I am not able to come</label>
                <input id="not-coming" :value="0" name="rspv" v-model="form.coming" type="radio" class="p-2 m-2 border border-black rounded focus:outline-none hover:bg-red-500"/>
            </div>

            <div class="flex items-center justify-center" v-if="form.coming">
                <label for="song">What song would get you on the dancefloor?</label>
                <input id="song" class="p-2 m-4 rounded w-64" type="text" v-model="form.song"/>
            </div>

            <div class="flex items-center justify-center" v-if="form.coming">
                <label for="dietary-requirements">Do you have any dietary requirements?</label>
                <input id="dietary-requirements" class="p-2 m-4 rounded w-64" type="text" v-model="form.dietary"/>
            </div>

            <confetti-button />

        </form>
    </MainLayout>
</template>

<script>
import MainLayout from "@/Layouts/MainLayout";
import Checkbox from "../Jetstream/Checkbox";
import Label from "../Jetstream/Label";
import ConfettiButton from "@/Components/ConfettiButton";
export default {
    props: {
        existingRspv: Object
    },
    components: {ConfettiButton, Label, Checkbox, MainLayout},
    data() {
        return {
            form: this.$inertia.form({
                coming: this.existingRspv ? this.existingRspv.coming : false,
                song: this.existingRspv ? this.existingRspv.song : '',
                dietary: this.existingRspv ? this.existingRspv.dietary : ''
            })
        }
    },
    methods: {
        submit() {
            this.$inertia.post(route('rsvp.store'), this.form)
        }
    }
}
</script>

<style scoped>

</style>
