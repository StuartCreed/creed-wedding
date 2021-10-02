<template>
    <div>
        <submit-button @click="submitform">Submit</submit-button>
    </div>
</template>

<script>
import SubmitButton from "@/Components/SubmitButton";

export default {
    name: "ConfettiButton",
    components: {SubmitButton},
    methods: {
        submitform() {

        },
    }
}
</script>
