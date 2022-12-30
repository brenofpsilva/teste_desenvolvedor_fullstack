<template>
<div class="home">
    <div class="bg-white">
        <div class="mt-6 grid grid-cols-1 gap-y-10 gap-x-6 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">
            <div v-for="(item, index) in appliances" :key="item.id" class="group relative">
                <ApplianceDetail :index="index" :product="item" />
            </div>
        </div>
    </div>
</div>
</template>

<script>

import ApplianceDetail from "@/components/appliance/ApplianceDetail.vue"

import { onMounted, ref } from "vue"
import api from "@/services/api"

export default {
    name: 'HomeView',
    components: {
        ApplianceDetail
    },
    setup() {
        const appliances = ref([])

        const fetchAppliances = () => api.get("/appliances")
            .then((response) => (
                // console.log(response)
                appliances.value = response.data.data
            ));

        onMounted(fetchAppliances)

        return { appliances }
    }
}
</script>
