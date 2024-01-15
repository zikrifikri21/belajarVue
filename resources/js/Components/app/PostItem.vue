<script setup>
defineProps({
    post: Object,
});
</script>
<template>
    <div>
        <img :src="post.user.avatar" alt="" />
        <h4 class="font-bold">{{ post.user.name }}</h4>
    </div>
    <div v-html="post.body"></div>
</template>
