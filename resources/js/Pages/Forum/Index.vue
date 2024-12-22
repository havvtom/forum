<script setup>
import InputLabel from '@/Components/InputLabel.vue';
import Select from '@/Components/Select.vue';
import ForumLayout from '@/Layouts/ForumLayout.vue';
import { Head } from '@inertiajs/vue3';

</script>

<template>
    <Head title="Forum" />

    <ForumLayout>  
        
        <div
            class="overflow-hidden bg-white shadow-sm sm:rounded-lg"
        >
            <div class="p-6 text-gray-900">
                <div>
                    <InputLabel for="topic" value="Topic" class="sr-only"/>
                    <Select>
                        <option value="" >All topics</option>
                        <option v-for="topic in $page.props.topics" :key="topic.id" :value="topic.slug" >
                            {{topic.name}}</option>
                    </Select>
                </div>
            </div>
        </div>
        

        <template #side >
            <div
                class="overflow-hidden bg-white shadow-sm sm:rounded-lg"
            >
                <div class="p-6 text-gray-900">
                    Side
                </div>
            </div>
        </template>
        
    </ForumLayout>
</template>
