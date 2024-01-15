<script setup>
import TextInput from "@/Components/TextInput.vue";
import { ref } from "vue";
import FollowingItem from "@/Components/app/FollowingItem.vue";

const searchKeyword = ref("");
</script>
<template>
    <div class="px-3">
        <h1 class="text-2xl font-bold px-3">My Following</h1>
        <TextInput :model-value="searchKeyword" placeholder="Cari apa saja" />
        <div class="py-8">
            <div v-if="false" class="text-gray-400 flex text-center">
                ko blm join
            </div>
            <div v-else>
                <FollowingItem
                    image="https://picsum.photos/100"
                    title="My Friend"
                />
                <FollowingItem
                    image="https://picsum.photos/100"
                    title="My Friend"
                />
            </div>
        </div>
    </div>
</template>
