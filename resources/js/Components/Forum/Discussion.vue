<script setup>
import { Link } from '@inertiajs/vue3';

    const props = defineProps({
        discussion: {
            required: true,
            type: Object
        }
    })
</script>

<template>
    <Link
    :href="route('discussion.show', discussion)"
        class="block overflow-hidden bg-white shadow-sm sm:rounded-lg"
    >
        <div class="p-6 text-gray-900 flex items-center space-x-6">
            <div class="flex-grow" >
                <div class="flex items-center space-x-3" >
                    <span class="inline-flex items-center rounded-lg bg-gray-100 px-3 py-0.5 text-sm text-gray-600" >
                        {{discussion.topic.name}}
                    </span>
                    
                    <h1 class="text-lg font-medium" >
                        <template v-if="discussion.is_pinned" >
                            [Pinned]
                        </template>
                        {{discussion.title}}
                    </h1>
                </div>
                
            </div>
            <div>
                avatars
            </div>
            
        </div>
    </Link>
</template>