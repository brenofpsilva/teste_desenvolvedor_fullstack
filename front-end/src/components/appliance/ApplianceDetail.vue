<template>
<div>
    <div class="min-h-80 aspect-w-1 aspect-h-1 w-full overflow-hidden rounded-md bg-gray-200 group-hover:opacity-75 lg:aspect-none lg:h-80">
        <img v-if="product.image" :src="`http://127.0.0.1:8000/images/products/${product.image}`" :alt="`${ product.name }`" class="h-full w-full object-cover object-center lg:h-full lg:w-full" />
        <img v-else :src="require('@/assets/image-not-found.jpg')" alt="sem imagem" class="h-full w-full object-cover object-center lg:h-full lg:w-full" />

    </div>
    <div class="mt-4 flex justify-between">
        <div>
            <h3 class="text-sm text-gray-700">
                <router-link :to="{ name: 'Detalhe do Produto', params: { id: product.id } }">
                    <!-- <router-link to="/detail/{{ procuct.name }}"> -->
                        <!-- <a href="#"> -->
                            <span aria-hidden="true" class="absolute inset-0"></span>
                            {{ product.name }}
                        <!-- </a> -->
                    </router-link>
                <!-- </router-link> -->
            </h3>
            <!-- <p class="mt-1 text-sm text-gray-500">Black</p> -->
        </div>
    </div>
    <p class="text-sm font-medium text-gray-900">{{ new Intl.NumberFormat('pt-BR', { style: 'currency', currency: 'BRL' }).format(product.price) }}</p>
</div>
</template>

<script>
// import { objectExpression } from '@babel/types';

export default {
    name: "ApplianceDetail",
    props: {
        product: {
            type: Object,
            require: true
        },
        index: {
            type: Number,
            required: true,
            default: 0,
        },
    }

}
</script>

<style>

</style>
