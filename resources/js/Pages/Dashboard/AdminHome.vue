<template>
    <AdminLayout>
        <!-- <Tiptap /> -->

        <QuillEditor toolbar="full" />
    </AdminLayout>
</template>

<script>
import AdminLayout from "@/Layouts/AdminLayout.vue";
import { QuillEditor } from "@vueup/vue-quill";
import "@vueup/vue-quill/dist/vue-quill.snow.css";

export default {
    components: {
        AdminLayout,
        QuillEditor,
    },
};
</script>
