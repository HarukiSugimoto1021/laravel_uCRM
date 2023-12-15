<script setup>
import { ref } from 'vue' // リアクティブ
import { Link } from '@inertiajs/inertia-vue3';
const newTitle = ref('')
const newContent = ref('')
</script>

<template>
    Inertiaテストです。<br>
    <a href="/">aタグ経由です</a><br>
    <Link href="/">Link経由です</Link><br>
    <Link :href="route('inertia.index')">Indexへ</Link><br>
    <Link :href="route('inertia.show', {id: 1})">ルートパラメータテストです</Link>
    <div class="mb-8"></div>
    <input type="text" name="newTitle" v-model="newTitle">{{ newTitle }}<br>
    <input type="text" name="newContent" v-model="newContent">{{ newContent }}<br>

    <Link as="button" method="post" :href="route('inertia.store')" :data="{ title:newTitle, content: newContent}">保存テスト</Link>
</template>