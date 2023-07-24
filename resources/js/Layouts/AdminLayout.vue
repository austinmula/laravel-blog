<!-- https://codepen.io/A_kamel/pen/wvzzGjG -->
<template>
    <div class="flex h-screen overflow-y-hidden bg-white">
        <div class="flex flex-col flex-1 h-full overflow-hidden">
            <!-- Navbar -->
            <header class="flex-shrink-0 border-b">
                <div class="flex items-center justify-between p-2">
                    <!-- Desktop search box -->
                    <div
                        class="items-center hidden px-2 space-x-2 md:flex-1 md:flex md:mr-auto md:ml-5"
                    >
                        <!-- search icon -->
                        <span>
                            <svg
                                class="w-5 h-5 text-gray-500"
                                xmlns="http://www.w3.org/2000/svg"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"
                                />
                            </svg>
                        </span>
                        <input
                            type="text"
                            placeholder="Search"
                            class="px-4 py-3 rounded-md hover:bg-gray-100 lg:max-w-sm md:py-2 md:flex-1 focus:outline-none md:focus:bg-gray-100 md:focus:shadow md:focus:border"
                        />
                    </div>

                    <!-- Navbar right -->
                    <div class="relative flex items-center space-x-3">
                        <!-- Search button -->
                        <button
                            @click="isSearchBoxOpen = true"
                            class="p-2 bg-gray-100 rounded-full md:hidden focus:outline-none focus:ring hover:bg-gray-200"
                        >
                            <svg
                                class="w-6 h-6 text-gray-500"
                                xmlns="http://www.w3.org/2000/svg"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"
                                />
                            </svg>
                        </button>

                        <div
                            class="items-center hidden space-x-3 md:flex"
                        ></div>

                        <!-- avatar button -->
                        <div class="relative" x-data="{ isOpen: false }">
                            <button
                                @click="isOpen = !isOpen"
                                class="p-1 bg-gray-200 rounded-full focus:outline-none focus:ring"
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
                <!-- Main content header -->
                <div
                    class="flex flex-col items-start justify-between pb-6 space-y-4 lg:items-center lg:space-y-0 lg:flex-row"
                >
                    <h1 class="text-2xl font-semibold whitespace-nowrap">
                        Dashboard
                    </h1>
                    <div class="space-y-6 md:space-x-2 md:space-y-0"></div>
                </div>
                <slot />

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
import SideBar from "@/Layouts/Partials/Sidebar.vue";
export default {
    components: {
        SideBar,
    },

    data() {
        return {
            isSearchBoxOpen: true,
        };
    },
};
</script>

<style></style>
