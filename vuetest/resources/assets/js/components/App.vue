<template>
    <div id="app">
        <div class="heading">
            <h1>Cruds</h1>
        </div>
        <cruds-component
            
            valid-v-for="cruds in cruds"
            v-bind="crud"
            :key="crud.id"
            @update="update"
            @delete="del"
            
            >
        </cruds-component>
        <div>
            <button @click="create">Add</button>
        </div>
    </div>
</template>
<script>
  function Crud({ id, color, name}) {
    this.id = id;
    this.color = color;
    this.name = name;
  }

  import CrudComponent from 'CrudsComponent.vue';

  export default {
    data() {
      return {
        cruds: []
      }
    },
    methods: {
      async create() {
        // To do
      },
      async read() {
        
            const { data } = window.axios.get('/api/cruds');
                data.forEach(crud => this.cruds.push(new Crud(crud)));
      },
      async update(id, color) {
        // To do
      },
      async del(id) {
        // To do
      }
    },
    components: {
      CrudComponent
    }
  }
</script>
