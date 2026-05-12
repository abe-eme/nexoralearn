
<script setup>
import { Link } from '@inertiajs/vue3'

import {
  BookOpen,
  Brain,
  Users,
  Sparkles,
  GraduationCap,
  Globe,
  ShieldCheck,
  BarChart3,
  ArrowRight
} from 'lucide-vue-next'

import { onMounted } from 'vue'

onMounted(() => {

  const elements = document.querySelectorAll('.reveal')

  const observer = new IntersectionObserver(
    (entries) => {

      entries.forEach((entry) => {

        if (entry.isIntersecting) {
          entry.target.classList.add('active')
        }

      })

    },
    {
      threshold: 0.1
    }
  )

  elements.forEach((el) => observer.observe(el))

})

</script>

<template>

<div class="bg-[#020617] overflow-x-hidden">

  <!-- HERO -->

  <section class="relative min-h-screen overflow-hidden">

    <!-- BACKGROUND IMAGE -->

    <div class="absolute inset-0">

      <img
        src="https://images.unsplash.com/photo-1509062522246-3755977927d7?q=80&w=1974&auto=format&fit=crop"
        class="w-full h-full object-cover"
      />

      <!-- DARK OVERLAY -->

      <div class="absolute inset-0 bg-black/70"></div>

      <!-- GRADIENT -->

      <div class="absolute inset-0 bg-gradient-to-r from-[#020617] via-[#020617]/70 to-transparent"></div>

    </div>

    <!-- NAVBAR -->

    <nav class="relative z-50">

      <div class="max-w-7xl mx-auto px-8 py-6 flex justify-between items-center text-white">

        <!-- LOGO -->

        <div class="flex items-center gap-4">

          <div class="w-14 h-14 rounded-2xl bg-indigo-600 flex items-center justify-center shadow-2xl shadow-indigo-500/30">

            <GraduationCap class="w-7 h-7"/>

          </div>

          <div>

            <h1 class="text-3xl font-black tracking-wide">
              NexoraLearn
            </h1>

            <p class="text-sm text-slate-300">
              Learn Beyond Limits
            </p>

          </div>

        </div>

        <!-- MENU -->

        <div class="hidden md:flex items-center gap-8 text-white">

          <a
            href="#features"
            class="hover:text-indigo-300 transition"
          >
            Features
          </a>

          <a
            href="#how"
            class="hover:text-indigo-300 transition"
          >
            How It Works
          </a>

          <a
            href="#about"
            class="hover:text-indigo-300 transition"
          >
            About
          </a>

        </div>

        <!-- BUTTONS -->

        <div class="flex items-center gap-4">

          <Link
            href="/login"
            class="px-5 py-2.5 rounded-xl border border-white/20 hover:bg-white hover:text-black transition"
          >
            Login
          </Link>

          <Link
            href="/register"
            class="px-5 py-2.5 rounded-xl bg-indigo-600 hover:bg-indigo-500 transition shadow-xl shadow-indigo-500/30"
          >
            Create Account
          </Link>

        </div>

      </div>

    </nav>

    <!-- HERO CONTENT -->

    <div class="relative z-10 w-full">

      <div class="max-w-7xl mx-auto px-8 min-h-screen flex items-center">

        <div class="grid lg:grid-cols-2 gap-20 items-center w-full">

          <!-- LEFT -->

          <div class="text-white reveal">

            <!-- BADGE -->

            <div class="inline-flex items-center gap-3 bg-white/10 backdrop-blur-xl border border-white/10 px-5 py-2 rounded-full mb-8">

              <Sparkles class="w-4 h-4 text-indigo-300"/>

              <span class="text-sm text-slate-200">
                AI Powered Learning Platform
              </span>

            </div>

            <!-- TITLE -->

            <h1 class="text-5xl md:text-7xl font-black leading-tight max-w-2xl">

              Learn
              <span class="text-indigo-400">
                Without
              </span>

              Limits

            </h1>

            <!-- DESCRIPTION -->

            <p class="text-lg text-slate-300 leading-relaxed mt-8 max-w-xl">
 Flexible digital education platform designed for modern learning experiences and low-bandwidth environments.

            </p>

            <!-- BUTTONS -->

            <div class="mt-10 flex flex-wrap gap-5">

              <Link
                href="/register"
                class="bg-indigo-600 hover:bg-indigo-500 px-8 py-4 rounded-2xl font-semibold transition shadow-2xl shadow-indigo-500/30 flex items-center gap-3"
              >

                Create Account

                <ArrowRight class="w-5 h-5"/>

              </Link>

              <Link
                href="/login"
                class="border border-white/20 px-8 py-4 rounded-2xl hover:bg-white hover:text-black transition"
              >

                Login

              </Link>

            </div>

            <!-- LOGIN TEXT -->

            <p class="mt-8 text-slate-300">

              Already have an account?

              <Link
                href="/login"
                class="text-indigo-300 hover:underline"
              >
                Login here
              </Link>

            </p>

          </div>

          <!-- RIGHT -->

          <div class="hidden lg:flex justify-end reveal">

            <div class="relative">

              <!-- CARD -->

              <div class="w-[420px] rounded-[40px] overflow-hidden border border-white/10 bg-white/10 backdrop-blur-2xl shadow-2xl">

                <img
                  src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?q=80&w=1974&auto=format&fit=crop"
                  class="w-full h-[260px] object-cover"
                />

                <div class="p-8 text-white">

                  <div class="flex items-center justify-between">

                    <div>

                      <h3 class="text-2xl font-black">
                        NexoraLearn
                      </h3>

                      <p class="text-slate-300 mt-1">
                        Smart Learning Ecosystem
                      </p>

                    </div>

                    <div class="w-14 h-14 rounded-2xl bg-indigo-600 flex items-center justify-center">

                      <GraduationCap class="w-7 h-7"/>

                    </div>

                  </div>

                  <!-- FEATURES -->

                  <div class="grid grid-cols-2 gap-4 mt-8">

                    <div class="bg-white/10 rounded-2xl p-4">

                      <Brain class="w-8 h-8 text-indigo-300 mb-3"/>

                      <p class="text-sm">
                        AI Learning
                      </p>

                    </div>

                    <div class="bg-white/10 rounded-2xl p-4">

                      <BookOpen class="w-8 h-8 text-indigo-300 mb-3"/>

                      <p class="text-sm">
                        Smart Courses
                      </p>

                    </div>

                    <div class="bg-white/10 rounded-2xl p-4">

                      <Users class="w-8 h-8 text-indigo-300 mb-3"/>

                      <p class="text-sm">
                        Multi Roles
                      </p>

                    </div>

                    <div class="bg-white/10 rounded-2xl p-4">

                      <BarChart3 class="w-8 h-8 text-indigo-300 mb-3"/>

                      <p class="text-sm">
                        Progress Tracking
                      </p>

                    </div>

                  </div>

                </div>

              </div>

            </div>

          </div>

        </div>

      </div>

    </div>

  </section>

  <!-- FEATURES -->

  <section
    id="features"
    class="py-24 bg-white reveal"
  >

    <div class="max-w-7xl mx-auto px-8">

      <div class="text-center mb-16">

        <h2 class="text-5xl font-black text-gray-900">
          Powerful Features
        </h2>

        <p class="text-gray-600 mt-5 text-lg">
          Everything needed for modern digital education.
        </p>

      </div>

      <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
<div class="bg-gray-50 p-8 rounded-[32px] hover:shadow-2xl transition">

          <Brain class="w-12 h-12 text-indigo-500 mb-6"/>

          <h3 class="text-2xl font-black mb-4 text-gray-900">
            AI Learning
          </h3>

          <p class="text-gray-600">
            Smart personalized learning experiences powered by AI.
          </p>

        </div>

        <div class="bg-gray-50 p-8 rounded-[32px] hover:shadow-2xl transition">

          <BookOpen class="w-12 h-12 text-indigo-500 mb-6"/>

          <h3 class="text-2xl font-black mb-4 text-gray-900">
            Smart Courses
          </h3>

          <p class="text-gray-600">
            Lessons, assignments, certificates and quizzes.
          </p>

        </div>

        <div class="bg-gray-50 p-8 rounded-[32px] hover:shadow-2xl transition">

          <Users class="w-12 h-12 text-indigo-500 mb-6"/>

          <h3 class="text-2xl font-black mb-4 text-gray-900">
            Multi Roles
          </h3>

          <p class="text-gray-600">
            Admin, teacher and student dashboards with permissions.
          </p>

        </div>

        <div class="bg-gray-50 p-8 rounded-[32px] hover:shadow-2xl transition">

          <ShieldCheck class="w-12 h-12 text-indigo-500 mb-6"/>

          <h3 class="text-2xl font-black mb-4 text-gray-900">
            Secure System
          </h3>

          <p class="text-gray-600">
            Account approval and suspension management system.
          </p>

        </div>

      </div>

    </div>

  </section>

  <!-- HOW -->

  <section
    id="how"
    class="py-24 bg-gray-50 reveal"
  >

    <div class="max-w-7xl mx-auto px-8">

      <div class="text-center mb-16">

        <h2 class="text-5xl font-black text-gray-900">
          How It Works
        </h2>

      </div>

      <div class="grid md:grid-cols-3 gap-8">

        <div class="bg-white p-8 rounded-[32px]">

          <GraduationCap class="w-12 h-12 text-indigo-500 mb-6"/>

          <h3 class="text-2xl font-black mb-4 text-gray-900">
            Create Account
          </h3>

          <p class="text-gray-600">
            Students register and wait for admin approval.
          </p>

        </div>

        <div class="bg-white p-8 rounded-[32px]">

          <Globe class="w-12 h-12 text-indigo-500 mb-6"/>

          <h3 class="text-2xl font-black mb-4 text-gray-900">
            Join Courses
          </h3>

          <p class="text-gray-600">
            Learn from flexible self-paced digital courses.
          </p>

        </div>

        <div class="bg-white p-8 rounded-[32px]">

          <BarChart3 class="w-12 h-12 text-indigo-500 mb-6"/>

          <h3 class="text-2xl font-black mb-4 text-gray-900">
            Track Progress
          </h3>

          <p class="text-gray-600">
            Monitor assignments, certificates and learning progress.
          </p>

        </div>

      </div>

    </div>

  </section>

  <!-- ABOUT -->

  <section
    id="about"
    class="py-24 bg-indigo-600 text-white reveal"
  >

    <div class="max-w-5xl mx-auto px-8 text-center">

      <ShieldCheck class="w-16 h-16 mx-auto mb-8"/>

      <h2 class="text-5xl font-black leading-tight">
        Built For Modern Education
      </h2>

      <p class="text-indigo-100 text-lg mt-8 leading-relaxed">

        NexoraLearn is designed for intelligent digital education,
        flexible learning schedules,
        low-bandwidth environments,
        and immersive modern classroom experiences.

      </p>

      <div class="mt-10">

        <Link
          href="/register"
          class="bg-white text-indigo-600 px-10 py-4 rounded-2xl font-bold hover:scale-105 transition inline-block"
        >
          Create Free Account
        </Link>

      </div>

    </div>

  </section>

  <!-- FOOTER -->

  <footer class="bg-black text-gray-400 py-12">

    <div class="max-w-7xl mx-auto px-8 flex flex-col md:flex-row justify-between gap-10">

      <div>

        <h2 class="text-3xl font-black text-white">
          NexoraLearn
        </h2>
 <p class="mt-4 max-w-md">
          AI-powered smart learning ecosystem for modern education systems.
        </p>

      </div>

      <div>

        <h3 class="text-white font-bold mb-4">
          Quick Links
        </h3>

        <div class="space-y-3">

          <Link href="/" class="block hover:text-white">
            Home
          </Link>

          <Link href="/login" class="block hover:text-white">
            Login
          </Link>

          <Link href="/register" class="block hover:text-white">
            Register
          </Link>

        </div>

      </div>

    </div>

    <div class="text-center mt-10 text-sm text-gray-500">
      © 2026 NexoraLearn. All rights reserved.
    </div>

  </footer>

</div>

</template>

<style scoped>

.reveal {
  opacity: 0;
  transform: translateY(40px);
  transition: all 0.8s ease;
}

.reveal.active {
  opacity: 1;
  transform: translateY(0);
}

html {
  scroll-behavior: smooth;
}

</style>