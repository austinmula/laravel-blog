<!-- https://codepen.io/A_kamel/pen/wvzzGjG -->
<template>
    <div class="flex h-screen overflow-y-hidden bg-white">
        <div class="flex flex-col flex-1 h-full overflow-hidden">
            <!-- Navbar -->
            <header class="flex-shrink-0 border-b">
                <div class="flex items-center justify-between p-2">
                    <!-- Desktop search box -->

                    <!-- Navbar right -->
                    <div class="relative flex items-center space-x-3">
                        <div
                            class="items-center hidden space-x-3 md:flex"
                        ></div>

                        <!-- avatar button -->
                        <div class="relative" x-data="{ isOpen: false }">
                            <button
                                @click="isOpen = !isOpen"
                                class="p-1 bg-purple-600 rounded-full focus:outline-none focus:ring"
                            >
                                <img
                                    class="object-cover w-8 h-8 rounded-full"
                                    src="https://avatars0.githubusercontent.com/u/57622665?s=460&u=8f581f4c4acd4c18c33a87b3e6476112325e8b38&v=4"
                                    alt="Ahmed Kamel"
                                />
                            </button>
                        </div>
                    </div>
                </div>
            </header>
            <!-- Main content -->
            <main
                class="flex-1 max-h-full p-5 overflow-hidden overflow-y-scroll"
            >
                <div class="py-3">
                    <span> Dashboard </span>
                    <span> > </span>
                    <span> Blog </span>
                    <span> > </span>
                    <span> Create </span>
                </div>

                <!-- Main content header -->
                <div
                    class="h-full pb-6 space-y-4 lg:items-center lg:space-y-0 lg:flex-row"
                >
                    <h1 class="text-2xl font-semibold whitespace-nowrap">
                        Create New Blog
                    </h1>

                    <div class="flex justify-between items-center gap-3 py-3">
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing
                            elit. Aut expedita architecto dolor cupiditate porro
                            earum nobis autem,
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

                            <Vue3TagsInput
                                :tags="tags"
                                placeholder="input tags"
                            />
                        </div>
                    </form>
                    <slot />
                    <!-- <div class="space-y-6 md:space-x-2 md:space-y-0"></div> -->
                </div>

                <!-- Start Content -->
                <!-- <div
                    class="grid grid-cols-1 gap-5 mt-6 sm:grid-cols-2 lg:grid-cols-4"
                >
                </div> -->
            </main>
        </div>
    </div>
</template>

<script>
// import SideBar from "@/Layouts/Partials/Sidebar.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import TextInput from "@/Components/TextInput.vue";
import Vue3TagsInput from "vue3-tags-input";
export default {
    components: {
        // SideBar,
        PrimaryButton,
        TextInput,
        Vue3TagsInput,
    },

    data() {
        return {
            isSearchBoxOpen: true,
            tags: ["VUE", "HTML", "CSS"],
        };
    },
};
</script>

<style></style>
