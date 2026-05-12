 <script setup>

import { Head, Link, useForm } from '@inertiajs/vue3'

import {
    GraduationCap,
    Mail,
    Lock,
    ArrowRight
} from 'lucide-vue-next'

defineProps({
    status: String
})

const form = useForm({
    email: '',
    password: '',
    remember: false,
})

const submit = () => {

    form.post('/login')

}

</script>

<template>

<Head title="Login" />

<div class="min-h-screen grid lg:grid-cols-2 bg-[#020617]">

    <!-- LEFT -->

    <div class="relative hidden lg:flex items-center justify-center overflow-hidden">

        <!-- IMAGE -->

        <img
            src="https://images.unsplash.com/photo-1523240795612-9a054b0db644?q=80&w=2070&auto=format&fit=crop"
            class="absolute inset-0 w-full h-full object-cover"
        />

        <!-- OVERLAY -->

        <div class="absolute inset-0 bg-black/70"></div>

        <div class="absolute inset-0 bg-gradient-to-br from-indigo-600/40 to-purple-600/30"></div>

        <!-- CONTENT -->

        <div class="relative z-10 max-w-lg px-10 text-white">

            <div class="w-20 h-20 rounded-3xl bg-indigo-600 flex items-center justify-center shadow-2xl shadow-indigo-500/30 mb-8">

                <GraduationCap class="w-10 h-10"/>

            </div>

            <h1 class="text-6xl font-black leading-tight">

                Welcome
                <br>

                Back

            </h1>

            <p class="mt-8 text-lg text-slate-200 leading-relaxed">

                Continue your intelligent learning journey with NexoraLearn.

            </p>

        </div>

    </div>

    <!-- RIGHT -->

    <div class="flex items-center justify-center p-8">

        <div class="w-full max-w-md">

            <!-- MOBILE LOGO -->

            <div class="lg:hidden flex justify-center mb-10">

                <div class="w-20 h-20 rounded-3xl bg-indigo-600 flex items-center justify-center shadow-2xl shadow-indigo-500/30">

                    <GraduationCap class="w-10 h-10 text-white"/>

                </div>

            </div>

            <!-- CARD -->

            <div class="bg-white/10 border border-white/10 backdrop-blur-2xl rounded-[32px] p-10 shadow-2xl">

                <h2 class="text-4xl font-black text-white">
                    Login
                </h2>

                <p class="text-slate-300 mt-3">
                    Access your NexoraLearn dashboard.
                </p>

                <!-- STATUS -->

                <div
                    v-if="status"
                    class="mt-6 text-green-400"
                >
                    {{ status }}
                </div>

                <!-- FORM -->

                <form
                    @submit.prevent="submit"
                    class="mt-8 space-y-6"
                >

                    <!-- EMAIL -->

                    <div>

                        <label class="text-sm text-slate-300">
                            Email Address
                        </label>

                        <div class="mt-2 relative">

                            <Mail class="w-5 h-5 text-slate-400 absolute left-4 top-4"/>

                            <input
                                v-model="form.email"
                                type="email"
                                class="w-full bg-white/10 border border-white/10 rounded-2xl py-4 pl-12 pr-4 text-white placeholder:text-slate-400 focus:outline-none focus:ring-2 focus:ring-indigo-500"
                                placeholder="Enter your email"
                            />

                        </div>

                    </div>

                    <!-- PASSWORD -->

                    <div>

                        <label class="text-sm text-slate-300">
                            Password
                        </label>

                        <div class="mt-2 relative">

                            <Lock class="w-5 h-5 text-slate-400 absolute left-4 top-4"/>
 <input
                                v-model="form.password"
                                type="password"
                                class="w-full bg-white/10 border border-white/10 rounded-2xl py-4 pl-12 pr-4 text-white placeholder:text-slate-400 focus:outline-none focus:ring-2 focus:ring-indigo-500"
                                placeholder="Enter your password"
                            />

                        </div>

                    </div>

                    <!-- REMEMBER -->

                    <div class="flex items-center justify-between text-sm">

                        <label class="flex items-center gap-3 text-slate-300">

                            <input
                                v-model="form.remember"
                                type="checkbox"
                                class="rounded border-white/20 bg-white/10"
                            />

                            Remember me

                        </label>

                        <Link
                            href="/forgot-password"
                            class="text-indigo-300 hover:underline"
                        >
                            Forgot password?
                        </Link>

                    </div>

                    <!-- BUTTON -->

                    <button
                        class="w-full bg-indigo-600 hover:bg-indigo-500 transition py-4 rounded-2xl font-bold text-white flex items-center justify-center gap-3 shadow-2xl shadow-indigo-500/30"
                    >

                        Login

                        <ArrowRight class="w-5 h-5"/>

                    </button>

                </form>

                <!-- REGISTER -->

                <p class="text-slate-300 text-center mt-8">

                    Don’t have an account?

                    <Link
                        href="/register"
                        class="text-indigo-300 hover:underline"
                    >
                        Create account
                    </Link>

                </p>

            </div>

        </div>

    </div>

</div>

</template>