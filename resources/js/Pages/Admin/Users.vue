<script>
  import AdminLayout from "@/Layouts/AdminLayout.vue";
  export default {
    layout: AdminLayout
  }
</script>

<script setup>
import { Head } from "@inertiajs/vue3";
import { Button } from "@/Components/ui/button";

</script>

<template>
  <Head title="User component" />

    <div class="py-12">
      <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div
          class="overflow-hidden bg-white shadow-sm sm:rounded-lg dark:bg-gray-800"
        >
          <div class="p-6 text-gray-900 dark:text-gray-100">
            User component!
            <div class="my-8">
              <Button>Click me</Button>
            </div>
          </div>
        </div>
      </div>
    </div>
</template>
