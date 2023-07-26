<script>
import AdminLayout from "@/Layouts/AdminLayout.vue";

export default {
    layout: AdminLayout,
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

        <form>
            <div class="flex flex-col gap-5 mb-5">
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

                <Vue3TagsInput :tags="tags" placeholder="input tags" />
            </div>
        </form>
        <!-- <div class="space-y-6 md:space-x-2 md:space-y-0"></div> -->
    </div>
</template>
