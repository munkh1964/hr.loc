<script setup>
import { ref } from "vue";
import Sidebar from "@/Components/Sidebar/Sidebar.vue"

// const defaultValue = "Home";
const openSidebar = ref(true);

</script>

<template>
  <div class="relative flex min-h-screen">
    <!-- Sidebar -->
    <Sidebar />
    <!-- Main Content -->
    <div class="flex-1 py-7 ml-4">
      <div class="text-2xl">
        Header
      </div>
      <!-- Page Content -->
      <main>
        <slot />
      </main>
    </div>
  </div>
</template>

<!--  https://www.youtube.com/watch?v=MszSqhEw__8&t=374s    Sidebar Navigation Menu using Tailwind CSS -->
<!--  https://www.youtube.com/watch?v=Yr4ak4gf3oc&t=45s     How to Create Tailwind CSS Responsive Sidebar with Vue js 3 -->
