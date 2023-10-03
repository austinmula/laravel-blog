<template>
    <vue3-tags-input
        v-model:tags="tags"
        v-model="tag"
        :select="true"
        :select-items="alltags"
        @on-select="handleSelectedTag"
        @on-tags-changed="handleChangeTag"
        placeholder="Select the tag"
    >
        <template #item="{ tag, index }">
            {{ tag.text }}
        </template>
        <template #no-data> No Data </template>
        <template #select-item="tag">
            {{ tag.text }}
        </template>
    </vue3-tags-input>
</template>

<script>
import { defineComponent } from "vue";
import Vue3TagsInput from "vue3-tags-input";

export default defineComponent({
    name: "SlotTemplate",

    components: {
        Vue3TagsInput,
    },

    props: {
        tags: Array,
        tag: String,
        alltags: Array,
    },

    data() {
        return {
            // tags: [],
            // tag: "",
            selectItems: [{ text: "HTML" }, { text: "CSS" }, { text: "VUE" }],
        };
    },
    methods: {
        handleSelectedTag(tag) {
            this.tags.push(tag);
        },
        handleChangeTag(tags) {
            this.tags = tags;
        },
    },
});
</script>
