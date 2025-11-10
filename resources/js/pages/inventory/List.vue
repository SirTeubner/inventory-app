<script setup lang="ts">
import AppLayout from '@/layouts/AppLayout.vue';
import { list } from '@/routes';
import { type BreadcrumbItem } from '@/types';
import { Head } from '@inertiajs/vue3';

const breadcrumbs: BreadcrumbItem[] = [
    {
        title: 'List',
        href: list().url,
    },
];

const props = defineProps({
    items: Object
});

console.log(props);

</script>

<template>
    <Head title="List" />

    <AppLayout :breadcrumbs="breadcrumbs">
        <div class="flex h-full flex-1 flex-col gap-4 overflow-x-auto rounded-xl p-4">

            <div>

            </div>

        </div>
    </AppLayout>
</template>
