<script setup>
    const props = defineProps({
        post: Object
    })
</script>

<template>
    <div
        class="block overflow-hidden bg-white shadow-sm sm:rounded-lg p-6 text-gray-900 flex items-start space-x-3"
    >
        <div class="w-7 flex-shrink-0" >
            <img :src="post.user.avatar_url" alt="" class="w-7 h-7 rounded-full" >
        </div>
        <div class="w-full" >
            <div>
                <div>{{ post.user.username }}</div>
                <div class="text-sm text-gray-500" >Posted {{ post.created_at }}</div>
            </div>
            <div class="mt-3" >
                {{ post.body }}
            </div>
        </div>
            
    </div>
    
</template>