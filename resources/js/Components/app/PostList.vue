<script setup>
import PostItem from "./PostItem.vue";

const post1 = {
    user: {
        id: 1,
        avatar: "https://picsum.photos/200",
        name: "John Doe",
    },
    body: `<p>lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate quae explicabo repellat voluptates numquam. Hic vel officiis, obcaecati debitis repellendus quibusdam quidem fuga cupiditate aperiam, accusantium inventore adipisci, odit nihil.</p>`,
    created_at: "2021-01-01 00:00:00",
};
</script>
<template>
    <div>
        <div>
            <PostItem :post="post1" />
        </div>
    </div>
</template>
