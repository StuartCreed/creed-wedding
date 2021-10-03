<template>
    <div class="flex flex-col text-center" style="font-size: 30px">
        <AdminNav></AdminNav>
        <div class="mt-16 p-6">
            <slot></slot>
        </div>
    </div>
</template>

<script>
import AdminNav from "@/Components/AdminNav";
export default {
    components: {AdminNav},
    name: "MainLayout"
}
</script>

<style scoped>

</style>
