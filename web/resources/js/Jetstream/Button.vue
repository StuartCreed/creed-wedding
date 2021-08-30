<template>
    <button :type="type" class="inline-flex items-center px-4 py-2 bg-yellow-300 border border-transparent rounded-md text-xl tracking-widest hover:bg-white focus:outline-none transition ease-in-out duration-150">
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
