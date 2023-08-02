<template>
    <AdminLayout>
        <Card>
            <template #title>
                <div class="flex justify-between items-center">
                    <h1>My Articles</h1>

                    <Button label="Create New Article" />
                </div>
            </template>
            <template #content>
                <DataTable
                    :value="posts"
                    paginator
                    :rows="5"
                    :rowsPerPageOptions="[5, 10, 20, 50]"
                    tableStyle="min-width: 50rem"
                >
                    <Column
                        field="title"
                        header="Title"
                        style="width: 15%"
                    ></Column>
                    <Column
                        field="slug"
                        header="Slug"
                        style="width: 15%"
                    ></Column>
                    <Column
                        class="text-ellipsis"
                        field="summary"
                        header="Summary"
                        style="width: 50%"
                    ></Column>
                    <Column header="Actions" style="width: 20%"></Column>
                </DataTable>
            </template>
        </Card>
    </AdminLayout>
</template>

<script>
import AdminLayout from "@/Layouts/AdminLayout.vue";
import DataTable from "primevue/datatable";
import Column from "primevue/column";
import Card from "primevue/card";
import Button from "primevue/button";
import ColumnGroup from "primevue/columngroup"; // optional
import Row from "primevue/row"; // optional

export default {
    layout: AdminLayout,
    components: {
        DataTable,
        Column,
        Card,
        Button,
    },
    props: {
        posts: Array,
    },
};
</script>
