<template>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-10">
        <h3 class="text-center text-dark mt-2">Cadastro de Departamentos</h3>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4">
        <div class="card-header">
          Adicionar Departamento
        </div>
        <div class="card-body">
          <form @submit.prevent="save">
            <div class="form-group mb-2">
              <label>Nome</label>
              <input type="text" v-model="departamento.nome" class="form-control" placeholder="Nome do Departamento">
            </div>
            <div class="form-group mb-2">
              <label>Descrição</label>
              <input type="text" v-model="departamento.descricao" class="form-control" placeholder="Descrição">
            </div>
            <button type="submit" class="btn btn-primary">Salvar</button>
          </form>
        </div>
      </div>
      <div class="col-md-8">
        <h2>Lista de Departamentos</h2>
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
                <button class="btn btn-danger" @click="remove(dep)">Excluir</button>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: 'Departamento',
  data() {
    return {
      departamentos: [
        { id: 1, nome: 'TI', descricao: 'Tecnologia da Informação' },
        { id: 2, nome: 'RH', descricao: 'Recursos Humanos' }
      ],
      departamento: {
        id: '',
        nome: '',
        descricao: ''
      },
      nextId: 3 // para simular auto incremento
    };
  },
  methods: {
    save() {
      if (this.departamento.id === '') {
        this.createDepartamento();
      } else {
        this.updateDepartamento();
      }
    },
    createDepartamento() {
      const novo = { ...this.departamento, id: this.nextId++ };
      this.departamentos.push(novo);
      this.clearForm();
    },
    edit(dep) {
      this.departamento = { ...dep };
    },
    updateDepartamento() {
      const index = this.departamentos.findIndex(d => d.id === this.departamento.id);
      if (index !== -1) {
        this.departamentos[index] = { ...this.departamento };
      }
      this.clearForm();
    },
    remove(dep) {
      this.departamentos = this.departamentos.filter(d => d.id !== dep.id);
    },
    clearForm() {
      this.departamento = {
        id: '',
        nome: '',
        descricao: ''
      };
    }
  }
};
</script>
