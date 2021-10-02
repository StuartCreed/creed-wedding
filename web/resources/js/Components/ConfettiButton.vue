<template>
    <div>
        <submit-button @click="submitform">Submit</submit-button>
    </div>
</template>

<script>
import SubmitButton from "@/Components/SubmitButton";
import confetti from "canvas-confetti";

export default {
    name: "ConfettiButton",
    components: {SubmitButton},
    methods: {
        submitform() {
            confetti()
        },
    }
}
</script>
