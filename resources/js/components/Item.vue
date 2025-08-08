<template>
  <div v-if="item">
    <h2>{{ item.nome }}</h2>
    <p>{{ item.descricao }}</p>

    <input v-model="item.nome" placeholder="Novo nome" />
    <input v-model="item.descricao" placeholder="Nova descrição" />

    <button @click="atualizarItem">Atualizar</button>
    <button @click="deletarItem">Deletar</button>
  </div>
</template>

<script setup>
import { ref, onMounted } from 'vue'
import axios from 'axios'

const item = ref(null)
const id = 7 // ou pegue dinamicamente via props ou route

onMounted(async () => {
  const response = await axios.get(`/api/items/${id}`)
  item.value = response.data
})

const atualizarItem = async () => {
  await axios.put(`/api/items/${id}`, item.value)
  alert('Item atualizado!')
}

const deletarItem = async () => {
  await axios.delete(`/api/items/${id}`)
  alert('Item deletado!')
  item.value = null
}
</script>
