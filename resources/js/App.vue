<template>
  <div class="container mt-4">
    <h2 class="mb-4 text-center">Sistema de Cadastro</h2>
    <div class="row">
      <div class="col-md-6">
        <Departamento @salvar="handleDepartamentoSalvo" />
      </div>
      <div class="col-md-6">
        <Item @salvar="handleItemSalvo" />
      </div>
    </div>
  </div>
</template>

<script setup>
import Departamento from './components/Departamento.vue'
import Item from './components/Item.vue'

const handleDepartamentoSalvo = (dados) => {
  console.log('Departamento salvo:', dados)
  // Aqui você pode atualizar listas ou mostrar alertas, se precisar
}

const handleItemSalvo = (dados) => {
  console.log('Item salvo:', dados)
  // Similar ao departamento, você pode reagir ao evento de salvamento
}
</script>

<style scoped>
.container {
  max-width: 1200px;
}
</style>
