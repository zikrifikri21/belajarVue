<script setup>
import { Head, Link } from "@inertiajs/vue3";
import GroupList from "@/Components/app/GroupList.vue";
import FollowingList from "@/Components/app/FollowingList.vue";
import PostList from "@/Components/app/PostList.vue";
import CreatePost from "@/Components/app/CreatePost.vue";

defineProps({});
</script>

<template>
    <Head title="Laravel Sosmed" />
    <div class="grid grid-cols-12 gap-3">
        <div class="col-span-3 py-6">
            <GroupList />
        </div>
        <div class="col-span-6">
            <CreatePost />
            <PostList />
        </div>
        <div class="col-span-3 py-6">
            <FollowingList />
        </div>
    </div>
</template>
