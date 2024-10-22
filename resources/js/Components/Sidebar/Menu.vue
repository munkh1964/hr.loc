<script setup>
  import MenuItem from "./MenuItem.vue"
  import {
    HomeIcon,
    NewspaperIcon,
    PhotoIcon,
  } from "@heroicons/vue/24/outline";

  const props = defineProps({
    openSidebar: Boolean,
  });

  const navItems = [
    { href: "profile.edit", label: "Home", children: [], icon: HomeIcon },
    {
      href: "profile.edit",
      label: "Posts",
      children: [
        { href: "profile.edit", label: "All posts", children: [], icon: null },
        { href: "profile.edit", label: "Add new", children: [], icon: null },
        { href: "profile.edit", label: "Categories", children: [], icon: null },
      ],
      icon: NewspaperIcon,
    },
    {
      href: "profile.edit",
      label: "Media",
      children: [
        { href: "profile.edit", label: "Library", children: [], icon: null },
        {
          href: "profile.edit",
          label: "Add new",
          children: [
            { href: "profile.edit", label: "Third level", children: [], icon: null },
          ],
          icon: null,
        },
      ],
      icon: PhotoIcon,
    },
  ];
</script>

<template>
  <MenuItem
    v-for="(item, index) in navItems"
    :openSidebar="openSidebar"
    :key="index"
    :href="item.href"
    :data="item.children"
    :label="item.label"
    :icon="item.icon"
    :depth="0"
  />

</template>

<style lang=""></style>


<!-- <Link
class="text-gray-300 text-sm flex items-center gap-x-4 cursor-pointer p-2 hover:bg-light-white rounded-md mt-2"
:href="item.href"
>
<component
  :class="['w-6 h-6 text-2xl block float-left']"
  :is="item.icon"
  v-if="item.icon"
/>
<span
  class="text-base font-medium flex-1 duration-200"
  :class="[!openSidebar && 'hidden']"
>
  <slot />
</span>
</Link> -->
