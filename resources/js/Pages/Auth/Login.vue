<script setup>
import { Head, Link, useForm } from '@inertiajs/vue3'

const form = useForm({
    email: '',
    password: '',
    remember: false,
})

const submit = () => {
    form.post(route('login'))
}
</script>

<template>

<Head title="Login" />

<div class="min-h-screen relative flex items-center justify-center bg-black overflow-hidden">

    <!-- BACKGROUND -->
    <img
        src="https://images.unsplash.com/photo-1516321318423-f06f85e504b3"
        class="absolute inset-0 w-full h-full object-cover opacity-40"
    />

    <div class="absolute inset-0 bg-black/60"></div>

    <!-- CARD -->
    <div class="relative w-full max-w-md p-10 rounded-3xl backdrop-blur-xl bg-white/10 border border-white/10 shadow-2xl">

        <div class="text-center mb-10">

            <h1 class="text-4xl font-black text-white mb-3">
                NexoraLearn
            </h1>

            <p class="text-slate-300">
                Welcome back to your learning journey
            </p>

        </div>

        <form @submit.prevent="submit" class="space-y-6">

            <div>

                <label class="text-sm text-slate-300 block mb-2">
                    Email
                </label>

                <input
                    v-model="form.email"
                    type="email"
                    class="w-full px-5 py-4 rounded-2xl bg-white/10 border border-white/10 text-white outline-none focus:border-indigo-500"
                />

            </div>

            <div>

                <label class="text-sm text-slate-300 block mb-2">
                    Password
                </label>

                <input
                    v-model="form.password"
                    type="password"
                    class="w-full px-5 py-4 rounded-2xl bg-white/10 border border-white/10 text-white outline-none focus:border-indigo-500"
                />

            </div>

            <button
                class="w-full py-4 rounded-2xl bg-indigo-600 hover:bg-indigo-500 transition text-white font-bold"
            >
                Login
            </button>

        </form>

        <div class="mt-8 text-center">

            <p class="text-slate-300">

                Don't have an account?

                <Link
                    href="/register"
                    class="text-indigo-400 hover:text-indigo-300"
                >
                    Create account
                </Link>

            </p>

        </div>

    </div>

</div>

</template>