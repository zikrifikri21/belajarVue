<script setup>
import PostItem from "./PostItem.vue";

const post1 = {
    user: {
        id: 1,
        avatar: "https://randomuser.me/api/portraits/men/64.jpg",
        name: "John Doe",
    },
    group: null,
    attachments: [
        {
            id: 1,
            url: "https://picsum.photos/1000",
            name: "image.png",
            mime: "image/png",
        },
        {
            id: 2,
            url: "https://picsum.photos/1000",
            name: "image2.png",
            mime: "image/png",
        },
        {
            id: 3,
            url: "#",
            name: "myDoc.docx",
            mime: "application/msword",
        },
    ],
    body: `<p>lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate quae explicabo repellat voluptates numquam. Hic vel officiis, obcaecati debitis repellendus quibusdam quidem fuga cupiditate aperiam, accusantium inventore adipisci, odit nihil.</p>`,
    created_at: "2021-01-01 00:00:00",
};
const post2 = {
    user: {
        id: 1,
        avatar: "https://randomuser.me/api/portraits/men/63.jpg",
        name: "John Smith",
    },
    group: {
        id: 1,
        name: "Group 1",
    },
    body: `<p>lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate quae explicabo repellat voluptates numquam. Hic vel officiis, obcaecati debitis repellendus quibusdam quidem fuga cupiditate aperiam, accusantium inventore adipisci, odit nihil.</p>`,
    created_at: "2023-01-01 00:00:00",
};
</script>
<template>
    <div class="overflow-auto">
        <PostItem :post="post1" />
        <PostItem :post="post2" />
    </div>
</template>
