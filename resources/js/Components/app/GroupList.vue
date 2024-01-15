<script setup>
import GroupItem from "@/Components/app/GroupItem.vue";
import TextInput from "@/Components/TextInput.vue";
import { ref } from "vue";

const searchKeyword = ref("");

</script>
<template>
    <div class="px-3">
        <h1 class="text-2xl font-bold px-3">My Group</h1>
        <TextInput :model-value="searchKeyword" placeholder="Cari apa saja"/>
        <div class="py-8">
            <div v-if="false" class="text-gray-400 flex text-center">
                ko blm join
            </div>
            <div v-else>
                <GroupItem
                    image="https://picsum.photos/100"
                    title="My Group"
                    description="My Group Description"
                />
                <GroupItem
                    image="https://picsum.photos/100"
                    title="My Group"
                    description="My Group Description"
                />
            </div>
        </div>
    </div>
</template>
