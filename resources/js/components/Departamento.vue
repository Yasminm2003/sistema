<template>
  <div>
    <div class="card-header">
      Adicionar Departamento
    </div>
    <div class="card-body">
      <form @submit.prevent="save">
        <div class="form-group mb-2">
          <label>Nome</label>
          <input
            type="text"
            v-model="departamento.nome"
            class="form-control"
            placeholder="Nome do Departamento"
            required
          />
        </div>
        <div class="form-group mb-2">
          <label>Descrição</label>
          <input
            type="text"
            v-model="departamento.descricao"
            class="form-control"
            placeholder="Descrição"
            required
          />
        </div>
        <button type="submit" class="btn btn-primary">Salvar</button>
      </form>
    </div>

    <h4 class="mt-4">Lista de Departamentos</h4>
    <table class="table table-dark">
      <thead>
        <tr>
          <th>ID</th>
          <th>Nome</th>
          <th>Descrição</th>
          <th>Ações</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="dep in departamentos" :key="dep.id">
          <td>{{ dep.id }}</td>
          <td>{{ dep.nome }}</td>
          <td>{{ dep.descricao }}</td>
          <td>
            <button class="btn btn-warning" @click="edit(dep)">Editar</button>
            <button class="btn btn-danger" @click="remove(dep.id)">Excluir</button>
          </td>
        </tr>
        <tr v-if="departamentos.length === 0">
          <td colspan="4" class="text-center">Nenhum departamento cadastrado.</td>
        </tr>
      </tbody>
    </table>
  </div>
</template>

<script>
import axios from 'axios'

export default {
  name: 'Departamento',
  data() {
    return {
      departamentos: [],
      departamento: {
        id: '',
        nome: '',
        descricao: ''
      }
    }
  },
  mounted() {
    this.fetchDepartamentos()
  },
  methods: {
    async fetchDepartamentos() {
      try {
        const response = await axios.get('http://127.0.0.1:8000/api/departamentos')
        this.departamentos = response.data
      } catch (error) {
        console.error('Erro ao buscar departamentos:', error)
      }
    },
    async save() {
      if (this.departamento.id === '') {
        await this.createDepartamento()
      } else {
        await this.updateDepartamento()
      }
    },
    async createDepartamento() {
      try {
        const response = await axios.post('http://127.0.0.1:8000/api/departamentos', this.departamento)
        this.departamentos.push(response.data)
        this.clearForm()
      } catch (error) {
        console.error('Erro ao criar departamento:', error)
      }
    },
    edit(dep) {
      this.departamento = { ...dep }
    },
    async updateDepartamento() {
      try {
        await axios.put(`http://127.0.0.1:8000/api/departamentos/${this.departamento.id}`, this.departamento)
        const index = this.departamentos.findIndex(d => d.id === this.departamento.id)
        if (index !== -1) {
          this.departamentos[index] = { ...this.departamento }
        }
        this.clearForm()
      } catch (error) {
        console.error('Erro ao atualizar departamento:', error)
      }
    },
    async remove(id) {
      try {
        await axios.delete(`http://127.0.0.1:8000/api/departamentos/${id}`)
        this.departamentos = this.departamentos.filter(d => d.id !== id)
      } catch (error) {
        console.error('Erro ao deletar departamento:', error)
      }
    },
    clearForm() {
      this.departamento = { id: '', nome: '', descricao: '' }
    }
  }
}
</script>
