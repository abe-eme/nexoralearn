[5/12/2026 2:29 AM] Fĕří: <script setup>
import { Link } from '@inertiajs/vue3'
import {
    GraduationCap,
    Brain,
    ShieldCheck,
    ChartNoAxesCombined
} from 'lucide-vue-next'
</script>

<template>

<div class="min-h-screen bg-[#0f172a] text-white overflow-hidden">

    <!-- NAVBAR -->
    <nav class="flex items-center justify-between px-8 py-5 border-b border-white/10 backdrop-blur-lg">

        <div class="flex items-center gap-3">

            <div class="w-10 h-10 rounded-xl bg-indigo-600 flex items-center justify-center">
                <GraduationCap class="w-6 h-6"/>
            </div>

            <h1 class="text-2xl font-bold">
                NexoraLearn
            </h1>

        </div>

        <div class="flex items-center gap-8 text-sm">

            <a href="#" class="hover:text-indigo-400 transition">
                Home
            </a>

            <a href="#" class="hover:text-indigo-400 transition">
                Features
            </a>

            <a href="#" class="hover:text-indigo-400 transition">
                About
            </a>

            <Link
                href="/login"
                class="px-5 py-2 rounded-xl bg-indigo-600 hover:bg-indigo-500 transition"
            >
                Login
            </Link>

        </div>

    </nav>

    <!-- HERO -->
    <section class="relative px-8 py-24 max-w-7xl mx-auto grid lg:grid-cols-2 gap-16 items-center">

        <!-- LEFT -->
        <div>

            <div class="inline-flex items-center gap-2 bg-indigo-500/10 border border-indigo-500/20 px-4 py-2 rounded-full mb-6">

                <Brain class="w-4 h-4 text-indigo-400"/>

                <span class="text-sm text-indigo-300">
                    AI-Powered Learning Platform
                </span>

            </div>

            <h1 class="text-6xl font-black leading-tight mb-8">

                Learn Without
                <span class="text-indigo-400">
                    Limits
                </span>

            </h1>

            <p class="text-lg text-slate-300 leading-relaxed mb-10">

                NexoraLearn is a modern low-bandwidth adaptive learning platform designed for flexible asynchronous education.

            </p>

            <div class="flex items-center gap-5">

                <Link
                    href="/register"
                    class="px-8 py-4 bg-indigo-600 rounded-2xl font-semibold hover:bg-indigo-500 transition"
                >
                    Create Account
                </Link>

                <Link
                    href="/login"
                    class="px-8 py-4 border border-white/10 rounded-2xl hover:bg-white/5 transition"
                >
                    Login
                </Link>

            </div>

        </div>

        <!-- RIGHT -->
        <div class="relative">

            <div class="absolute inset-0 bg-indigo-500 blur-[120px] opacity-30"></div>

            <img
                src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f"
                class="relative rounded-3xl shadow-2xl border border-white/10"
            />

        </div>

    </section>

    <!-- FEATURES -->
    <section class="px-8 pb-24 max-w-7xl mx-auto">

        <div class="grid md:grid-cols-3 gap-8">

            <div class="p-8 rounded-3xl bg-white/5 border border-white/10">

                <ShieldCheck class="w-12 h-12 text-indigo-400 mb-6"/>

                <h3 class="text-2xl font-bold mb-4">
                    Secure Role System
                </h3>

                <p class="text-slate-300">
                    Advanced role-based authentication with approval workflows and account management.
                </p>

            </div>

            <div class="p-8 rounded-3xl bg-white/5 border border-white/10">

                <Brain class="w-12 h-12 text-indigo-400 mb-6"/>

                <h3 class="text-2xl font-bold mb-4">
                    AI Learning Assistant
                </h3>
[5/12/2026 2:29 AM] Fĕří: <p class="text-slate-300">
                    Smart educational assistance, quizzes, summaries and personalized recommendations.
                </p>

            </div>

            <div class="p-8 rounded-3xl bg-white/5 border border-white/10">

                <ChartNoAxesCombined class="w-12 h-12 text-indigo-400 mb-6"/>

                <h3 class="text-2xl font-bold mb-4">
                    Learning Analytics
                </h3>

                <p class="text-slate-300">
                    Advanced progress tracking, performance insights and engagement analytics.
                </p>

            </div>

        </div>

    </section>

</div>

</template>