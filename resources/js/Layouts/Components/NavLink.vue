<script setup>

defineProps({

    routeName: String,
    activeUrl: String
})


</script>

<template>

    <li>
        <Link class="text-white transition hover:text-blue-800 px-2 py-1 rounded-md" :href="route(routeName)"
            :class="{ 'bg-slate-200 text-slate-900': $page.url === activeUrl }">
        <slot />
        </Link>
    </li>
</template>