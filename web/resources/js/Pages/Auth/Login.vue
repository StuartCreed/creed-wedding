<template>
    <div style="background-image: url('photos/three-cliffs.jpeg')" class="bg-center bg-no-repeat bg-auto">
        <jet-authentication-card>

            <jet-validation-errors class="mb-4" />

            <div v-if="status" class="mb-4 font-medium text-sm text-green-600">
                {{ status }}
            </div>

            <form @submit.prevent="submit">
                <div>
                    <jet-input id="email" type="email" class="mt-1 block w-full hidden" v-model="form.email" required autofocus />

                <div class="mt-4">
                    <jet-input id="password" class="mt-1 block w-full p-3 outline-none" v-model="form.password" required autocomplete="current-password" />
                </div>

                <div class="block mt-4">
                    <label class="flex items-center hidden">
                        <jet-checkbox name="remember" v-model="form.remember" />
                        <span class="ml-2 text-sm text-white">Remember me</span>
                    </label>
                </div>

                <div class="flex items-center justify-end mt-4">
                    <inertia-link v-if="canResetPassword" :href="route('password.request')" class="underline text-sm hidden text-white hover:text-gray-900">
                        Forgot your password?
                    </inertia-link>

                    <jet-button class="ml-4" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                        Login
                    </jet-button>
                </div>
            </form>
        </jet-authentication-card>
<!--        <img src="photos/three-cliffs.jpeg" class="w-full h-full absolute left-0 top-0 z-0">-->
    </div>
</template>

<script>
    import JetAuthenticationCard from '@/Jetstream/AuthenticationCard'
    import JetAuthenticationCardLogo from '@/Jetstream/AuthenticationCardLogo'
    import JetButton from '@/Jetstream/Button'
    import JetInput from '@/Jetstream/Input'
    import JetCheckbox from '@/Jetstream/Checkbox'
    import JetLabel from '@/Jetstream/Label'
    import JetValidationErrors from '@/Jetstream/ValidationErrors'

    export default {
        components: {
            JetAuthenticationCard,
            JetAuthenticationCardLogo,
            JetButton,
            JetInput,
            JetCheckbox,
            JetLabel,
            JetValidationErrors
        },

        props: {
            canResetPassword: Boolean,
            status: String
        },

        data() {
            return {
                form: this.$inertia.form({
                    email: 'creed_wedding@gmail.com',
                    password: '',
                    remember: false
                })
            }
        },

        methods: {
            submit() {
                this.form
                    .transform(data => ({
                        ... data,
                        remember: this.form.remember ? 'on' : ''
                    }))
                    .post(this.route('login'), {
                        onFinish: () => this.form.reset('password'),
                    })
            }
        }
    }
</script>
