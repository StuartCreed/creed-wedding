<template>
    <button
        class="bg-yellow-300 py-2 px-4 m-2 rounded-full focus:outline-none hover:bg-green-700 hover:text-white"
        @click="$emit('click')"
    >
        <slot></slot>
    </button>
</template>

<script>
export default {
    name: "SubmitButton"
}
</script>

