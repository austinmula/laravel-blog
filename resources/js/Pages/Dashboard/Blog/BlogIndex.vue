<template>
    <AdminLayout>
        <p>Home!!!</p>
        <div class="card">
            <DataTable
                :value="posts"
                paginator
                :rows="5"
                :rowsPerPageOptions="[5, 10, 20, 50]"
                tableStyle="min-width: 50rem"
            >
                <Column field="title" header="Name" style="width: 25%"></Column>
                <Column
                    field="slug"
                    header="Country"
                    style="width: 25%"
                ></Column>
                <Column
                    field="summary"
                    header="Company"
                    style="width: 25%"
                ></Column>
                <Column field="" header="" style="width: 25%"></Column>
            </DataTable>
        </div>

        <table class="table-auto">
            <tbody>
                <tr v-for="(post, index) in posts" :key="post.id">
                    <td>{{ index + 1 }}</td>
                    <td>{{ post.title }}</td>
                    <td>{{ post.slug }}</td>
                    <td>{{ post.summary }}</td>
                </tr>
            </tbody>
        </table>
    </AdminLayout>
</template>

<script>
import AdminLayout from "@/Layouts/AdminLayout.vue";
import DataTable from "primevue/datatable";
import Column from "primevue/column";
import ColumnGroup from "primevue/columngroup"; // optional
import Row from "primevue/row"; // optional

export default {
    layout: AdminLayout,
    components: {
        DataTable,
        Column,
    },
    props: {
        posts: Array,
    },
};
</script>
