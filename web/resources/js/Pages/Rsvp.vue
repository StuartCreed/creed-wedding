<template>
    <MainLayout>
        <div class="mb-4">please rsvp below:</div>
        <form class="flex flex-col">
            <div>
                <label for="coming">I am coming</label>
                <input id="coming" value="true" name="rspv" type="radio" class="p-2 m-2 rounded border border-black focus:outline-none hover:bg-green-500"/>

                <label for="not-coming">I am not able to come</label>
                <input checked="checked" id="not-coming" value="false" name="rspv" type="radio" class="p-2 m-2 border border-black rounded focus:outline-none hover:bg-red-500"/>
            </div>

            <div>
                <label for="song">What song would get you on the dancefloor?</label>
                <input id="song" class="p-2 m-4 rounded w-64" type="text"/>
            </div>

            <div>
                <label for="dietary-requirements">Do you have any dietary requirements?</label>
                <input id="dietary-requirements" class="p-2 m-4 rounded w-64" type="text"/>
            </div>

            <div>
                <button class="bg-gray-800 px-4 pt-4 pb-2 m-2 rounded focus:outline-none hover:bg-black text-white">
                    Submit
                </button>
            </div>

        </form>
    </MainLayout>
</template>

<script>
import MainLayout from "@/Layouts/MainLayout";
import Checkbox from "../Jetstream/Checkbox";
import Label from "../Jetstream/Label";
export default {
    name: "SeatingPlan",
    components: {Label, Checkbox, MainLayout},
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
