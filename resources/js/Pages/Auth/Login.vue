<script setup>
import BreezeCheckbox from '@/Components/Checkbox.vue';
import BreezeGuestLayout from '@/Layouts/Guest.vue';
import BreezeInputError from '@/Components/InputError.vue';
import BreezeLabel from '@/Components/Label.vue';
import {Head, Link, useForm} from '@inertiajs/inertia-vue3';

defineProps({
    canResetPassword: Boolean,
    status: String,
});

const form = useForm({
    email: '',
    password: '',
    remember: false
});

const submit = () => {
    form.post(route('login'), {
        onFinish: () => form.reset('password'),
    });
};
</script>

<template>
    <BreezeGuestLayout>
        <div class="d-flex col-lg-4 align-items-center auth-bg px-2 p-lg-5">
            <div class="col-12 col-sm-8 col-md-6 col-lg-12 px-xl-2 mx-auto">
                <h2 class="card-title fw-bold mb-1">
                    Welcome to Treble Clef Academy 👋
                </h2>
                <p class="card-text mb-2">Please sign-in to your account and start the adventure</p>

                <div v-if="status" class="mb-4 font-medium text-sm text-green-600">
                    {{ status }}
                </div>

                <form @submit.prevent="submit" class="auth-login-form mt-2">

                    <div>
                        <label class="form-label" for="login-email">Email</label>
                        <input id="email" type="email" class="form-control" v-model="form.email" required autofocus
                               autocomplete="username"/>
                        <BreezeInputError class="mt-2" :message="form.errors.email"/>
                    </div>

                    <div class="mt-4">
                        <BreezeLabel for="password" value="Password"/>
                        <input id="password" type="password" class="form-control" v-model="form.password" required
                               autocomplete="current-password"/>
                        <BreezeInputError class="mt-2" :message="form.errors.password"/>
                    </div>

                    <div class="block mt-4">
                        <label class="flex items-center">
                            <BreezeCheckbox name="remember" v-model:checked="form.remember"/>
                            <span class="ml-2 text-sm text-gray-600">Remember me</span>
                        </label>
                    </div>

                    <div class="flex items-center justify-end mt-4">
                        <Link v-if="canResetPassword" :href="route('password.request')"
                              class="underline text-sm text-gray-600 hover:text-gray-900">
                            Forgot your password?
                        </Link>

                        <button class="btn btn-primary w-100" :class="{ 'opacity-25': form.processing }"
                                :disabled="form.processing">
                            Log in
                        </button>
                    </div>
                </form>

                <p class="text-center mt-2">
                    <span>New on our platform?</span>
                    <a href="{{ route('register') }}">
                        <span>&nbsp;Create an account</span>
                    </a>
                </p>


            </div>
        </div>
    </BreezeGuestLayout>
</template>


