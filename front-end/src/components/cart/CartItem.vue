<template>
    <tr>
        <td class="p-2">
            <div class="font-medium text-gray-800">
                {{ item.name }}
            </div>
        </td>
        <td class="p-2">
            <div class="text-left">{{ item.quantity }}</div>
        </td>
        <td class="p-2">
            <div class="text-left font-medium">
                {{ new Intl.NumberFormat('pt-BR', { style: 'currency', currency: 'BRL' }).format(item_cost) }}
            </div>
        </td>
        <td class="p-2">
            <div class="flex justify-center">
                <button @click.prevent="removeCart()">
                    <svg class="w-8 h-8 hover:text-blue-600 rounded-full hover:bg-gray-100 p-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16">
                        </path>
                    </svg>
                </button>
            </div>
        </td>
    </tr>
</template>

<script>
export default {
    props: ['item'],
    methods: {
        removeCart() {
            this.$store.commit('removeCart', this.item)
            const Toast = this.$swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', this.$swal.stopTimer)
                    toast.addEventListener('mouseleave', this.$swal.resumeTimer)
                }
            });

            Toast.fire({
                icon: 'success',
                title: 'Produto removido com sucesso.'
            })
        }
    },
    computed: {
        item_cost() {
            return this.item.price * this.item.quantity
        }
    }
}
</script>

<style>

</style>
