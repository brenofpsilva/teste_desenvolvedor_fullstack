<template>
<VueYupValidation :schema="schema" @submit="submit" :values="values" v-slot="{ errors }" enctype="multipart/form-data">
    <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 flex flex-col my-2">
        <div class="-mx-3 md:flex mb-6">
            <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="name">
                    Nome do Produto
                </label>
                <input v-model="values.name" name="name" id="name" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3" type="text" placeholder="Geladeira">
                <p v-if="errors?.name" class="text-red-600 text-xs italic">{{ errors?.name }}</p>
            </div>
            <div class="md:w-1/2 px-3">
                <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="brand">
                    Marca
                </label>
                <input v-model="values.brand" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4" id="brand" type="text" placeholder="Eletrolux">
                <p v-if="errors?.brand" class="text-red-600 text-xs italic">{{ errors?.brand }}</p>
            </div>
        </div>

        <div class="-mx-3 md:flex mb-6">
            <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="reference">
                    Referência
                </label>
                <input v-model="values.reference" name="reference" id="reference" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3" type="text" placeholder="NR-BT41PD1XA_11">
                <p v-if="errors?.reference" class="text-red-600 text-xs italic">{{ errors?.reference }}</p>
            </div>
            <div class="md:w-1/2 px-3">
                <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="line">
                    Linha
                </label>
                <input v-model="values.line" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4" id="line" type="text" placeholder="Top Freezer">
                <p v-if="errors?.line" class="text-red-600 text-xs italic">{{ errors?.line }}</p>
            </div>
            <div class="md:w-1/2 px-3">
                <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="voltage">
                    Voltagem
                </label>
                <div class="relative">
                    <select v-model="values.voltage" name="voltage" value="{{ appliance.voltage }}" id="voltage" class="block appearance-none w-full bg-grey-lighter border border-grey-lighter text-grey-darker py-3 px-4 pr-8 rounded">
                        <option value="bivolt">Bivolte</option>
                        <option value="110v">110v</option>
                        <option value="220v">220v</option>
                    </select>
                    <div class="pointer-events-none absolute pin-y pin-r flex items-center px-2 text-grey-darker">
                        <svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" /></svg>
                    </div>
                    <p v-if="errors?.voltage" class="text-red-600 text-xs italic">{{ errors?.voltage }}</p>
                </div>
            </div>
        </div>

        <div class="-mx-3 md:flex mb-6">
            <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="color">
                    Cor
                </label>
                <input v-model="values.color" name="color" id="color" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3" type="text" placeholder="Aço Escovado">
                <p v-if="errors?.color" class="text-red-600 text-xs italic">{{ errors?.color }}</p>
            </div>
            <div class="md:w-1/2 px-3">
                <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="product_weight">
                    Capacidade Líquida Total
                </label>
                <input v-model="values.product_weight" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4" id="product_weight" type="text" placeholder="320L">
                <p v-if="errors?.product_weight" class="text-red-600 text-xs italic">{{ errors?.product_weight }}</p>
            </div>
            <div class="md:w-1/2 px-3">
                <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="status">
                    Status
                </label>
                <div class="relative">
                    <select v-model="values.status" name="status" id="status" class="block appearance-none w-full bg-grey-lighter border border-grey-lighter text-grey-darker py-3 px-4 pr-8 rounded">
                        <option value="0">Ativo</option>
                        <option value="1">Inativo</option>
                    </select>
                    <div class="pointer-events-none absolute pin-y pin-r flex items-center px-2 text-grey-darker">
                        <svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" /></svg>
                    </div>
                    <p v-if="errors?.status" class="text-red-600 text-xs italic">{{ errors?.status }}</p>
                </div>
            </div>
        </div>

        <div class="-mx-3 md:flex mb-6">
            <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="price">
                    Preço
                </label>
                <input v-model="values.price" name="price" id="price" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3" type="text" placeholder="300.00">
                <!-- <money v-model="price" v-bind="money"></money> {{price}} -->
                <p v-if="errors?.price" class="text-red-600 text-xs italic">{{ errors?.price }}</p>
            </div>
            <div class="md:w-1/2 px-3">
                <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="product_weight">
                    Imagem
                </label>
                <!-- <input v-model="values.product_weight" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4" id="product_weight" type="text" placeholder="320L"> -->
                <!-- <input type="file" id="file" name="file" ref="file" /> -->
                <input class="block w-full py-3 px-4 mb-3 text-xs text-gray-900 border border-gray-300 rounded cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none" aria-describedby="file_input_help" id="file" type="file">
                <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">SVG, PNG, JPG or GIF (MAX. 800x400px).</p>
                <p v-if="errors?.product_weight" class="text-red-600 text-xs italic">{{ errors?.product_weight }}</p>

            </div>
        </div>

        <div class="-mx-3 md:flex mb-6">
            <div class="md:w-full px-3">
                <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="description">
                    Descrição do Produto
                </label>
                <textarea v-model="values.description" name="description" id="description" rows="4" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3" placeholder="Descrição do produto..."></textarea>
                <p v-if="errors?.description" class="text-red-600 text-xs italic">{{ errors?.description }}</p>
            </div>
        </div>

        <div class=" px-4 py-3 text-right sm:px-6">
            <button type="submit" class="inline-flex justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                Salvar Produto
            </button>
        </div>
    </div>
</VueYupValidation>
</template>

<script>
import * as yup from "yup"
import { ptShort } from 'yup-locale-pt'
import VueYupValidation from "@/components/vueYuoValidation/index"
import api from '@/services/api'

export default {
    components: {
        VueYupValidation,
    },
    name: "DetailView",
    data() {
        yup.setLocale(ptShort);

        return {
            schema: yup.object().shape({
                name: yup.string().required().min(5),
                brand: yup.string().required().min(5),
                reference: yup.string().required().min(5),
                line: yup.string().required().min(5),
                color: yup.string().required().min(3),
                product_weight: yup.string().required().min(1),
                description: yup.string().required().min(5),
                voltage: yup.string().required(),
                price: yup.number().required(),
                status: yup.string().required(),
            }),
            values: {
                name: "",
                brand: "",
                reference: "",
                line: "",
                color: "",
                product_weight: "",
                voltage: "",
                status: "",
                description: "",
                price: "",
                image: "",
            },
        };
    },
    methods: {
        fetchAppliance() {
            api.get(`/appliances/${this.$route.params.id}`)
                .then((response) => {
                    console.log(response.data.data.image)
                    this.values.name = response.data.data.name
                    this.values.brand = response.data.data.brand
                    this.values.reference = response.data.data.reference
                    this.values.line = response.data.data.line
                    this.values.color = response.data.data.color
                    this.values.product_weight = response.data.data.product_weight
                    this.values.voltage = response.data.data.voltage
                    this.values.status = response.data.data.status
                    this.values.description = response.data.data.description
                    this.values.price = response.data.data.price
                });
        },
        submit(values) {
            console.log('submit', values)
            api.patch(`/appliances/${this.$route.params.id}`, values, {
                    headers: {
                        'Content-Type': 'application/x-www-form-urlencoded',
                        'Accept': 'application/json'
                    }
                })
                .then(response => {
                    console.log(response)
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
                        title: 'Produto atualizado com sucesso.'
                    })
                    this.$router.push('/admin/appliance')
                })
                .catch(e => {
                    console.log(e.response.data.errors);
                });
        },
    },
    mounted() {
        this.fetchAppliance();
    }
}
</script>
