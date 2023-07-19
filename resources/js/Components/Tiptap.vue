<template>
    <editor-content :editor="editor" />
</template>

<script>
import { useEditor, EditorContent } from "@tiptap/vue-3";
import StarterKit from "@tiptap/starter-kit";

export default {
    components: {
        EditorContent,
    },

    setup() {
        const editor = useEditor({
            content: "<p>I’m running Tiptap with Vue.js. 🎉</p>",
            extensions: [StarterKit],
        });

        return { editor };
    },
};
</script>

π<style>
.ProseMirror{
    background-color: aqua;
    min-height: 100vh;
    width:'200px';
    margin: 0 auto;
}
</style>
