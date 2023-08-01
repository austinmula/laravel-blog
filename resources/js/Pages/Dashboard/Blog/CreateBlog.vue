<script>
import AdminLayout from "@/Layouts/AdminLayout.vue";
import SelectTag from "@/Components/SelectTag.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import { QuillEditor } from "@vueup/vue-quill";
import "@vueup/vue-quill/dist/vue-quill.snow.css";
import { router } from "@inertiajs/vue3";

export default {
    layout: AdminLayout,
    components: {
        SelectTag,
        PrimaryButton,
        QuillEditor,
    },
    props: ["tags"],
    data() {
        return {
            form: {
                post: null,
                title: "",
                summary: null,
                slug: null,
                tags: [],
                tag: null,
            },
        };
    },
    computed: {
        slug: function () {
            var slug = this.sanitizeTitle(this.form.title);
            return slug;
        },
    },
    methods: {
        submitform() {
            router.post("/blog", this.form);
        },
        sanitizeTitle: function (title) {
            var slug = "";
            // Change to lower case
            var titleLower = title?.toLowerCase();
            // Letter "e"
            slug = titleLower?.replace(/e|é|è|ẽ|ẻ|ẹ|ê|ế|ề|ễ|ể|ệ/gi, "e");
            // Letter "a"
            slug = slug?.replace(/a|á|à|ã|ả|ạ|ă|ắ|ằ|ẵ|ẳ|ặ|â|ấ|ầ|ẫ|ẩ|ậ/gi, "a");
            // Letter "o"
            slug = slug?.replace(/o|ó|ò|õ|ỏ|ọ|ô|ố|ồ|ỗ|ổ|ộ|ơ|ớ|ờ|ỡ|ở|ợ/gi, "o");
            // Letter "u"
            slug = slug?.replace(/u|ú|ù|ũ|ủ|ụ|ư|ứ|ừ|ữ|ử|ự/gi, "u");
            // Letter "d"
            slug = slug?.replace(/đ/gi, "d");
            // Trim the last whitespace
            slug = slug?.replace(/\s*$/g, "");
            // Change whitespace to "-"
            slug = slug?.replace(/\s+/g, "-");

            this.form.slug = slug;

            return slug;
        },
    },
};
</script>

<template>
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
        <form @submit.prevent="submitform">
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
                        v-model="form.title"
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
                        v-model="form.slug"
                        disabled
                        type="text"
                        placeholder="enter blog slug"
                        class="w-full border-gray-400 rounded-md"
                    />
                </div>

                <div class="form-control">
                    <label
                        class="text-sm text-gray-700 font-semibold block mb-1"
                        >Blog Tags</label
                    >

                    <SelectTag
                        :tags="form.tags"
                        :tag="form.tag"
                        :alltags="tags"
                    />
                </div>

                <div class="form-control">
                    <label
                        class="text-sm text-gray-700 font-semibold block mb-1"
                        >Blog Summary</label
                    >

                    <textarea
                        v-model="form.summary"
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
            <QuillEditor
                content-type="html"
                v-model:content="form.post"
                toolbar="full"
            />
            <button type="submit">Submit</button>
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
