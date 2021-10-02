<template>
    <inertia-link :href="href" class="hover:text-yellow-500 mr-4 whitespace-nowrap">
        <slot></slot>
    </inertia-link>
</template>

<script>
export default {
    name: "NavLink",
    props: {
        href: String
    }
}
</script>
