<template>
    <input class="p-2 bg-blue-100" :id="id" :name="name" v-model="value"/>
</template>

<script>
export default {
    name: "FormInput",
    props: {
        id: String,
        name: String,
        value: String
    }
}
</script>
