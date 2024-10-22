<script setup>
import { ref, nextTick } from "vue";
import { Link } from "@inertiajs/vue3";
import { ChevronDownIcon } from "@heroicons/vue/24/outline";

const props = defineProps({
  openSidebar: Boolean,
  href: String,
  data: Array,
  label: String,
  icon: Function,
  depth: Number,
});

defineOptions({
  name: "MenuItem",
});

const showChildren = ref(false);
const expanded = ref(false);
const containerHeight = ref(0);

const toggleMenu = () => {
  expanded.value = !expanded.value;
  if (!showChildren.value) {
    showChildren.value = true;
    // nextTick(() => {
    //   containerHeight = ref["container"].scrollHeight + "px";
    //   setTimeout(() => {
    //     containerHeight = "fit-content";
    //     // if(navigator.userAgent.indexOf("Firefox") != -1)
    //     //   this.containerHeight = "-moz-max-content"
    //     // this.$refs["container"].style.overflow = "visible";
    //   }, 300);
    // });
  } else {
    showChildren.value = false;
  }
};

// console.log(props.data);
</script>

<template>
  <div>
    <div
      class="text-gray-300 text-sm flex items-center gap-x-4 place-content-between cursor-pointer p-2 hover:bg-light-white rounded-md mt-2"
    >
      <Link class="flex gap-x-4" :href="route(href)">
        <component
          :class="['w-6 h-6 text-2xl block float-left']"
          :is="icon"
          v-if="icon"
        />
        <span
          class="text-base font-medium duration-200"
          :class="[!openSidebar && 'hidden']"
          :style="{ paddingLeft: depth * 20 + 'px' }"
        >
          {{ label }}
        </span>
      </Link>
      <ChevronDownIcon
        v-if="data.length"
        class="w-6 h-6 duration-300"
        :class="[!openSidebar && 'hidden', showChildren && 'rotate-180']"
        @click="toggleMenu()"
      ></ChevronDownIcon>
    </div>
    <div v-show="showChildren" ref="container">
      <MenuItem
        v-for="(item, index) in data"
        :openSidebar="openSidebar"
        :key="index"
        :href="item.href"
        :data="item.children"
        :label="item.label"
        :icon="item.icon"
        :depth="depth + 1"
      />
    </div>
  </div>
</template>
<!--
<style lang="">

</style> -->

<!-- {{ item.label }} -->

<!--
<div>
  <div>
    <Link
      class="text-gray-300 text-sm flex items-center gap-x-4 cursor-pointer p-2 hover:bg-light-white rounded-md mt-2"
      :href="href"
    >
      <component
        :class="['w-6 h-6 text-2xl block float-left']"
        :is="icon"
        v-if="icon"
      />
      <span
        class="text-base font-medium flex-1 duration-200"
        :class="[!openSidebar && 'hidden']"
        :style="{ paddingLeft: depth * 20 + 'px' }"
      >
        {{ label }}
      </span>
      <ChevronDownIcon
        v-if="data.length"
        class="w-6 h-6 shrink-0"
        :class="[!openSidebar && 'hidden']"
        @click="toggleMenu()"
      ></ChevronDownIcon>
    </Link>
  </div>
  <div v-show="showChildren" ref="container">
    <MenuItem
      v-for="(item, index) in data"
      :openSidebar="openSidebar"
      :key="index"
      :href="item.href"
      :data="item.children"
      :label="item.label"
      :icon="item.icon"
      :depth="depth + 1"
    />
  </div> -->
