<template>
    <MainLayout>
        <div class="mb-4">please rsvp below:</div>
        <form>
            <div>
                <label>What song would get you on the dancefloor?</label>
                <input class="p-2 m-4 rounded" type="text"/>
            </div>
            <button type="submit" class="bg-green-400 p-2 m-2 rounded focus:outline-none hover:bg-black text-white">I am coming</button>
            <button type="submit" class="bg-red-400 p-2 m-2 rounded focus:outline-none hover:bg-black text-white">I am not able to come</button>
        </form>
    </MainLayout>
</template>

<script>
import MainLayout from "@/Layouts/MainLayout";
import Button from "../Jetstream/Button";
export default {
    name: "SeatingPlan",
    components: {Button, MainLayout}
}
</script>

<style scoped>

</style>
