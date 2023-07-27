<script>
import AdminLayout from "@/Layouts/AdminLayout.vue";
import SelectTag from "@/Components/SelectTag.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import { QuillEditor } from "@vueup/vue-quill";
import "@vueup/vue-quill/dist/vue-quill.snow.css";

export default {
    layout: AdminLayout,
    components: {
        SelectTag,
        PrimaryButton,
        QuillEditor,
    },
};
</script>

<template>
    <div>
        <div class="card">
            <Steps :model="items" :readonly="false" aria-label="Form Steps" />
        </div>
    </div>
    <div class="h-full pb-6 space-y-4 lg:items-center lg:space-y-0 lg:flex-row">
        <h1 class="text-2xl font-semibold whitespace-nowrap">
            Create New Blog
        </h1>

        <div class="flex justify-between items-center gap-3 py-3">
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut
                expedita architecto dolor cupiditate porro earum nobis autem,
            </p>
            <PrimaryButton>Preview</PrimaryButton>
        </div>
        <form>
            <div
                class="flex flex-col gap-5 mb-5 bg-slate-50 p-4 rounded-md shadow-md"
            >
                <h1 class="text-xl font-semibold whitespace-nowrap">
                    Blog Details
                </h1>
                <div class="form-control">
                    <label
                        class="text-sm text-gray-700 font-semibold block mb-1"
                        >Blog Title</label
                    >
                    <input
                        type="text"
                        placeholder="enter blog title"
                        class="w-full border-gray-400 rounded-md"
                    />
                </div>

                <div class="form-control">
                    <label
                        class="text-sm text-gray-700 font-semibold block mb-1"
                        >Blog Slug</label
                    >
                    <input
                        type="text"
                        placeholder="enter blog slug"
                        readonly
                        value="some-simple-slug-for-a-blog"
                        class="w-full border-gray-400 rounded-md"
                    />
                </div>

                <div class="form-control">
                    <label
                        class="text-sm text-gray-700 font-semibold block mb-1"
                        >Blog Tags</label
                    >

                    <SelectTag />
                </div>

                <div class="form-control">
                    <label
                        class="text-sm text-gray-700 font-semibold block mb-1"
                        >Blog Summary</label
                    >

                    <textarea
                        name=""
                        id=""
                        cols="30"
                        rows="10"
                        class="w-full border-gray-400 rounded-md resize-none"
                    ></textarea>
                </div>
            </div>
            <h1 class="text-xl font-semibold whitespace-nowrap mb-5 mt-9">
                Blog Content
            </h1>
            <QuillEditor toolbar="full" />
        </form>
        <!-- <div class="space-y-6 md:space-x-2 md:space-y-0"></div> -->
    </div>
</template>

<style lang="css">
.v3ti {
    padding-block: 5px;
}
.v3ti .v3ti-tag {
    background: #4a3a92;
}

.v3ti .v3ti-tag .v3ti-remove-tag {
    color: #000000;
    transition: color 0.3s;
}

.v3ti .v3ti-tag .v3ti-remove-tag:hover {
    color: #ffffff;
}

.ql-toolbar.ql-snow + .ql-container.ql-snow {
    height: 400px;
}
</style>
