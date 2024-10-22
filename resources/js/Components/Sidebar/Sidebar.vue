<script setup>
import { ref } from "vue";
import {
  ArrowLeftIcon,
} from "@heroicons/vue/24/outline";
import Menu from "@/Components/Sidebar/Menu.vue";
import Logo from "@/Components/Sidebar/Logo.vue"

  const openSidebar = ref(true);
</script>

<template lang="">
  <div class="relative flex min-h-screen">
    <div
      class="bg-dark-purple h-screen p-5 pt-8 duration-300 relative"
      :class="[openSidebar ? 'w-72' : 'w-20']"
    >
      <ArrowLeftIcon
        class="size-6 bg-white text-dark-purple text-3xl rounded-full absolute -right-2.5 top-8 border border-dark-purple cursor-pointer"
        :class="[!openSidebar && 'rotate-180']"
        @click="openSidebar = !openSidebar"
      />
      <!-- Logo -->
      <Logo :openSidebar="openSidebar" />
      <nav class="pt-1">
        <Menu :openSidebar="openSidebar" />
      </nav>
    </div>
  </div>
</template>

<style lang="">

</style>
