<template>
    <inertia-link
        :href="route(routeName)"
        class="hover:bg-green-600 py-1 px-4 rounded-full hover:text-black hover:font-bold whitespace-nowrap text-navlink"
        :class="{'bg-yellow-500 text-black': isCurrentPage}"
    >
        <slot></slot>
    </inertia-link>
</template>

<script>
export default {
    name: "NavLink",
    props: {
        routeName: String
    },
    computed: {
        isCurrentPage() {
            return route().current() === this.routeName
        }
    }
}
</script>
