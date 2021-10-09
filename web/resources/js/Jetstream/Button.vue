<template>
    <button :type="type" style="font-size: 40px" @click="$emit('submit')" class="inline-flex items-center px-4 py-2 border border-transparent rounded-md tracking-widest hover:bg-white hover:text-yellow-300 focus:outline-none transition ease-in-out duration-150">
        <slot></slot>
    </button>
</template>

<script>
    export default {
        props: {
            type: {
                type: String,
                default: 'submit',
            },
        }
    }
</script>
