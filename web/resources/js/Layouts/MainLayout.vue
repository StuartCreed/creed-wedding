<template>
    <div class="flex flex-col text-center" style="font-size: 30px">
        <Nav></Nav>
        <div class="mt-16 p-6">
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
