<template>
  <main class="form-signin w-100 m-auto">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <div class="text-center mb-4">
      <img class="mb-4" src="@/assets/logo.svg" alt="Logo da Empresa" width="72" height="57">
      <i class="fa fa-address-card-o" aria-hidden="true"></i>
      <h1 class="h3 mb-3 fw-normal">NOVO CADASTRO</h1>
    </div>

    <form @submit.stop.prevent="submit">
      <div class="form-floating custom-spacing">
        <input
            v-model="name"
            type="text" class="form-control" id="floatingName" placeholder="Maria Santos">
        <label for="floatingName">Nome</label>
      </div>
      <div class="form-floating custom-spacing">
        <input
            v-model="email"
            type="email" class="form-control" id="floatingInput" placeholder="maria.santos@gmail.com">
        <label for="floatingInput">Email</label>
      </div>
      <div class="form-floating custom-spacing">
        <input
            v-model="password"
            type="password" class="form-control" id="floatingPassword" placeholder="Password">
        <label for="floatingPassword">Senha</label>
      </div>
      <button class="w-100 btn btn-lg btn-primary" type="submit">Salvar</button>

    </form>
  </main>
</template>


<script>
import Cookie from 'js-cookie';
import Router from "@/router";

export default {
  // eslint-disable-next-line vue/multi-word-component-names
  name: "Cadastro",

  data(){
    return{
      name:'',
      email:'',
      password:'',

    };

  },

  methods:{

    submit(){
     const payload = {
       name: this.name,
       email: this.email,
       password: this.password,
     }
     fetch('http://127.0.0.1:8000/api/users',{
       method:'POST',
       headers:{
         'Content-Type':'application/json',
         'Accept':'application/json',
       },
       body:JSON.stringify(payload)
     }).then(response=> response.json())
        .then(
          Router.push({name: 'login'})
         )
    },
    novo(){
            Router.push({name: 'login'})
    },
  },
};
</script>

<style scoped>
body {
  height: 100%;
}

body {
  display: flex;
  align-items: center;
  padding-top: 40px;
  padding-bottom: 40px;
  background-color: #f5f5f5;
}

.form-signin {
  max-width: 330px;
  padding: 15px;
  margin: auto;
}

.form-signin .form-floating:focus-within {
  z-index: 2;
}

.form-signin input[type="email"] {
  margin-bottom: -1px;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}

.form-signin input[type="password"] {
  margin-bottom: 10px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}
.custom-spacing {
  margin-bottom: 15px;
}

</style>