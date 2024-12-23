<script setup>
    const props = defineProps({
        post: Object
    })
</script>

<template>
    <div
        class="block overflow-hidden bg-white shadow-sm sm:rounded-lg"
    >
        {{ post.body }}
    </div>
</template>