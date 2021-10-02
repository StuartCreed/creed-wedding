<template>
    <jet-authentication-card class="font-roboto">

        <jet-validation-errors class="mb-4" />

        <form @submit.prevent="submit">
            <div>
                <jet-input id="email" type="email" class="mt-1 block w-full hidden" v-model="form.email" required autofocus />
            </div>

            <div class="mt-4">
                <jet-input id="password" autofocus style="font-size: 70px" class="mt-1 block w-full p-3 outline-none opacity-50 bg-blue-800 text-white" v-model="form.password" autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label class="flex items-center hidden">
                    <jet-checkbox name="remember" v-model="form.remember" />
                    <span class="ml-2 text-sm text-white">Remember me</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                <jet-button class="ml-4" :class="{ 'opacity-40': form.processing }" :disabled="form.processing">
                    login
                </jet-button>
            </div>
        </form>
    </jet-authentication-card>
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
                    email: 'creedwedding@gmail.com', // initial email state
                    password: '',
                    remember: true
                })
            }
        },

        methods: {
            submit() {
                const form = this.form.transform(data => ({
                        ... data,
                        email: this.form.password + '@gmail.com',
                        remember: this.form.remember ? 'on' : ''
                    }))
                form.post(this.route('login'), {
                        onFinish: () => this.form.reset('password'),
                    })
            }
        }
    }
</script>
