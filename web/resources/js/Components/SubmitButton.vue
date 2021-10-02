<template>
    <button
        class="bg-gray-800 px-4 pt-4 pb-2 m-2 rounded focus:outline-none hover:bg-black text-white"
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

