<script setup>
import Discussion from '@/Components/Forum/Discussion.vue';
import InputLabel from '@/Components/InputLabel.vue';
import Pagination from '@/Components/Pagination.vue';
import Select from '@/Components/Select.vue';
import ForumLayout from '@/Layouts/ForumLayout.vue';
import { Head } from '@inertiajs/vue3';


const props = defineProps({
    discussions: Object
})

</script>

<template>
    <Head title="Forum" />

    <ForumLayout>  
        
        <div class="space-y-6" >
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
        <div class="space-y-3" >
            <template v-if="discussions.data.length" >
                <Discussion
                v-for="discussion in discussions.data"
                :key="discussion.id"
                :discussion="discussion"
                />
                <Pagination :pagination="discussions.meta"/>
            </template>
            
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
