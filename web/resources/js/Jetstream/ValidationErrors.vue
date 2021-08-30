<template>
    <div v-if="hasErrors" style="font-size: 35px">
        <div class="font-medium text-red-600">the passcode you have entered </div>
        <div class="font-medium text-red-600">is not valid. </div>
    </div>
</template>

<script>
    export default {
        computed: {
            errors() {
                return this.$page.props.errors
            },

            hasErrors() {
                return Object.keys(this.errors).length > 0;
            },
        }
    }
</script>
