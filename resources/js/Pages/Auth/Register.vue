 <script setup>

import { Head, Link, useForm } from '@inertiajs/vue3'

import {
    GraduationCap,
    User,
    Mail,
    Lock,
    ArrowRight
} from 'lucide-vue-next'

const form = useForm({
    name: '',
    email: '',
    password: '',
    password_confirmation: '',
})

const submit = () => {

    form.post('/register')

}

</script>

<template>

<Head title="Register" />

<div class="min-h-screen grid lg:grid-cols-2 bg-[#020617]">

    <!-- LEFT -->

    <div class="relative hidden lg:flex items-center justify-center overflow-hidden">

        <img
            src="https://images.unsplash.com/photo-1497633762265-9d179a990aa6?q=80&w=2070&auto=format&fit=crop"
            class="absolute inset-0 w-full h-full object-cover"
        />

        <div class="absolute inset-0 bg-black/70"></div>

        <div class="absolute inset-0 bg-gradient-to-br from-indigo-600/40 to-purple-600/30"></div>

        <div class="relative z-10 max-w-lg px-10 text-white">

            <div class="w-20 h-20 rounded-3xl bg-indigo-600 flex items-center justify-center shadow-2xl shadow-indigo-500/30 mb-8">

                <GraduationCap class="w-10 h-10"/>

            </div>

            <h1 class="text-6xl font-black leading-tight">

                Create
                <br>

                Account

            </h1>

            <p class="mt-8 text-lg text-slate-200 leading-relaxed">

                Join NexoraLearn and experience modern intelligent education.

            </p>

        </div>

    </div>

    <!-- RIGHT -->

    <div class="flex items-center justify-center p-8">

        <div class="w-full max-w-md">

            <!-- CARD -->

            <div class="bg-white/10 border border-white/10 backdrop-blur-2xl rounded-[32px] p-10 shadow-2xl">

                <h2 class="text-4xl font-black text-white">
                    Register
                </h2>

                <p class="text-slate-300 mt-3">
                    Create your student account.
                </p>

                <!-- FORM -->

                <form
                    @submit.prevent="submit"
                    class="mt-8 space-y-6"
                >

                    <!-- NAME -->

                    <div>

                        <label class="text-sm text-slate-300">
                            Full Name
                        </label>

                        <div class="mt-2 relative">

                            <User class="w-5 h-5 text-slate-400 absolute left-4 top-4"/>

                            <input
                                v-model="form.name"
                                type="text"
                                class="w-full bg-white/10 border border-white/10 rounded-2xl py-4 pl-12 pr-4 text-white placeholder:text-slate-400 focus:outline-none focus:ring-2 focus:ring-indigo-500"
                                placeholder="Enter your full name"
                            />

                        </div>

                    </div>

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
                                placeholder="Create password"
                            />

                        </div>

                    </div>

                    <!-- CONFIRM -->

                    <div>

                        <label class="text-sm text-slate-300">
                            Confirm Password
                        </label>

                        <div class="mt-2 relative">

                            <Lock class="w-5 h-5 text-slate-400 absolute left-4 top-4"/>

                            <input
                                v-model="form.password_confirmation"
                                type="password"
                                class="w-full bg-white/10 border border-white/10 rounded-2xl py-4 pl-12 pr-4 text-white placeholder:text-slate-400 focus:outline-none focus:ring-2 focus:ring-indigo-500"
                                placeholder="Confirm password"
                            />

                        </div>

                    </div>

                    <!-- BUTTON -->

                    <button
                        class="w-full bg-indigo-600 hover:bg-indigo-500 transition py-4 rounded-2xl font-bold text-white flex items-center justify-center gap-3 shadow-2xl shadow-indigo-500/30"
                    >

                        Create Account

                        <ArrowRight class="w-5 h-5"/>

                    </button>

                </form>

                <!-- LOGIN -->

                <p class="text-slate-300 text-center mt-8">

                    Already have an account?

                    <Link
                        href="/login"
                        class="text-indigo-300 hover:underline"
                    >
                        Login here
                    </Link>

                </p>

            </div>

        </div>

    </div>

</div>

</template>