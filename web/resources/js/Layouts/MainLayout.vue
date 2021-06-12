<template>
    <div>
        <Nav></Nav>
        <div class="mt-10">
            <slot></slot>
        </div>
    </div>
</template>

<script>
import Nav from "@/Components/Nav";
export default {
    components: {Nav},
    name: "MainLayout"
}
</script>

<style scoped>

</style>
