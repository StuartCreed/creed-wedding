<template>
    <AdminLayout class="flex flex-column">

        <div class="p-2 m-2 border-2 rounded">
            <div @click="guestFormHiddenToggle">
                <span class="bg-black text-white rounded p-2" v-if="guestFormHidden">Add a guest</span>
                <span class="bg-black text-white rounded p-2" v-else>Hide Me</span>
            </div>
            <form class="p-2 flex flex-col" v-show="!guestFormHidden">

                <label class="p-2" for="first_name">
                    First Name:
                    <input id="first_name" name="first_name" v-model="form.first_name"/>
                </label>

                <label class="p-2" for="second_name">
                    Second Name:
                    <input id="second_name" name="second_name" v-model="form.second_name"/>
                </label>

                <label class="p-2 hidden" for="password">
                    Password:
                    <input id="password" name="password"/>
                </label>

                <div>
                    <submit-button class="p-2 bg-black text-white" @click="addGuest">Submit</submit-button>
                </div>

            </form>
        </div>
        <div class="p-2 border-2 mt-6">
            <div class="font-bold">Guests</div>
            <div>
                <ul>
                    <li v-for="guest in guests">{{ guest.name }} </li>
                </ul>
            </div>
        </div>


    </AdminLayout>
</template>

<script>
import AdminLayout from "@/Layouts/AdminLayout";
import Input from "@/Jetstream/Input";
import Button from "@/Jetstream/Button";
import SubmitButton from "@/Components/SubmitButton";
import Label from "@/Jetstream/Label";
import FormInput from "@/Components/FormInput";
import { Inertia } from '@inertiajs/inertia'
export default {
    components: {Label, Button, Input, AdminLayout, SubmitButton, FormInput},
    props: {
        guests: Array
    },
    data() {
      return {
          form: this.$inertia.form({
              first_name: '',
              second_name: '',
          }),
          guestFormHidden: true
      }
    },
    methods: {
        addGuest() {
            if (this.form.first_name && this.form.second_name) {
                this.form.transform(data => ({
                    ... data,
                    name: this.form.first_name + ' ' + this.form.second_name,
                    password: this.form.first_name.toLowerCase() + this.form.second_name.toLowerCase(),
                    email: this.form.first_name.toLowerCase() + this.form.second_name.toLowerCase()
                })).post(route('guests.store'))
            }
        },
        guestFormHiddenToggle() {
            this.guestFormHidden = !this.guestFormHidden
        }
    }
}
</script>
