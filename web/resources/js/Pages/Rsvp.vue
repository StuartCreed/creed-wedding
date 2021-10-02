<template>
    <MainLayout>
        <div class="mb-4 font-poppin">Please RSVP below:</div>
        <form class="grid grid-cols-1 gap-2">
            <div class="py-2">
                <label for="coming">I am coming</label>
                <input id="coming" value="true" name="rspv" type="radio" class="p-2 m-2 rounded border border-black focus:outline-none hover:bg-green-500"/>
            </div>

            <div class="py-2">
                <label for="not-coming">I am not able to come</label>
                <input checked="checked" id="not-coming" value="false" name="rspv" type="radio" class="p-2 m-2 border border-black rounded focus:outline-none hover:bg-red-500"/>
            </div>

            <div class="flex items-center justify-center">
                <label for="song">What song would get you on the dancefloor?</label>
                <input id="song" class="p-2 m-4 rounded w-64" type="text"/>
            </div>

            <div class="flex items-center justify-center">
                <label for="dietary-requirements">Do you have any dietary requirements?</label>
                <input id="dietary-requirements" class="p-2 m-4 rounded w-64" type="text"/>
            </div>

            <confetti-button/>

        </form>
    </MainLayout>
</template>

<script>
import MainLayout from "@/Layouts/MainLayout";
import Checkbox from "../Jetstream/Checkbox";
import Label from "../Jetstream/Label";
import ConfettiButton from "@/Components/ConfettiButton";
export default {
    name: "SeatingPlan",
    components: {ConfettiButton, Label, Checkbox, MainLayout},
    data() {
        return {
            form: this.$inertia.form({
                coming: true,
                song: ''
            })
        }
    }
}
</script>

<style scoped>

</style>
