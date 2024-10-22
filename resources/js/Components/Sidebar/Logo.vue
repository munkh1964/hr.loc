<script setup>
import { Link } from "@inertiajs/vue3";
import { UserGroupIcon } from "@heroicons/vue/24/outline";

const props = defineProps({
  openSidebar: Boolean,
});
</script>

<template>
  <Link :href="route('admin.index')">
    <div class="inline-flex items-center">
      <UserGroupIcon
        class="bg-amber-300 size-6 rounded block float-left mr-2 duration-300"
        :class="[openSidebar && 'rotate-[360deg]']"
      />
      <h1
        class="text-white origin-left font-medium text-2xl duration-200"
        :class="[!openSidebar && 'hidden']"
      >
        Human Resource
      </h1>
    </div>
  </Link>
</template>
