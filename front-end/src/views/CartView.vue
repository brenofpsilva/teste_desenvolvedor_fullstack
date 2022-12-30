<template>
<div>
    <!-- {{ $store.getters.cartItems.length }} -->
    <div v-if="!$store.getters.cartItems.length" class="mx-auto max-w-[43rem]">
        <div class="text-center">
            <h1 class="mt-3 text-[3.5rem] font-bold leading-[4rem] tracking-tight text-black">Seu carrinho está vazio</h1>
            <p class="mt-3 text-lg leading-relaxed text-slate-400">Vá para a <router-link class="p-1 text-gray-400 hover:text-black" to="/">página inicial</router-link> ou procure no site os produtos que vão te deixar feliz.
                Quando encontrá-los, clique no botão adicionar ao carrinho;</p>
        </div>
    </div>

    <div v-else class="flex flex-col justify-center h-full">
        <!-- Table -->
        <div class="w-full max-w mx-auto bg-white shadow-lg rounded-md border border-gray-200">
            <header class="px-5 py-4 border-b border-gray-100">
                <div class="font-semibold text-gray-800">Meus Produtos</div>
            </header>

            <div class="overflow-x-auto p-3">
                <table class="table-auto w-full">
                    <thead class="text-xs font-semibold uppercase text-gray-400 bg-gray-50">
                        <tr>
                            <th class="p-2">
                                <div class="font-semibold text-left">Nome do Produto</div>
                            </th>
                            <th class="p-2">
                                <div class="font-semibold text-left">Quantidade</div>
                            </th>
                            <th class="p-2">
                                <div class="font-semibold text-left">Total</div>
                            </th>
                            <th class="p-2">
                                <div class="font-semibold text-center">Ação</div>
                            </th>
                        </tr>
                    </thead>

                    <tbody class="text-sm divide-y divide-gray-100">
                        <CartItem v-for="item in items" :key="item.id" :item="item" />
                    </tbody>
                </table>
            </div>

            <!-- total amount -->
            <div class="flex justify-end font-bold space-x-4 text-2xl border-t border-gray-100 px-5 py-4">
                <div>Total</div>
                <div class="">{{ new Intl.NumberFormat('pt-BR', { style: 'currency', currency: 'BRL' }).format(cart_total) }}</div>
            </div>

            <div class="flex justify-end">
                <!-- send this data to backend (note: use class 'hidden' to hide this input) -->
                <input type="hidden" class="border border-black bg-gray-50" x-model="selected" />
            </div>
        </div>
    </div>
    <!-- </section> -->
    
</div>
</template>

<script>
import CartItem from "@/components/cart/CartItem.vue"

export default {
    name: 'CartView',
    components: {
        CartItem
    },
    computed: {
        items() {
            return this.$store.getters.cartItems
        },
        cart_total() {
            return this.$store.getters.cartItems.reduce((a, b) => a + (b.price * b.quantity), 0)
        }
    }
}
</script>

<style>

</style>
