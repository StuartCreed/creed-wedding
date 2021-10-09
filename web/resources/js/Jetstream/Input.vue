<template>
    <input class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm" :value="password" @input="emit($event)" ref="input">
</template>

<script>
    export default {
        props: {
            'password': String
        },
        emits: ['update:password'],
        methods: {
            focus() {
                this.$refs.input.focus()
            },
            emit(e) {
                this.$emit('update:password', e.target.value)
            }
        }
    }
</script>

