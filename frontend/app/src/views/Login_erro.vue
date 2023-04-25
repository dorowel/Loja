<template>
  <b-row class="vh-100 vw-100 row-login">
    <b-col sm="5" class="d-flex justify-content-center align-items-center left-login">
      <div class="col-8">
        <h2>Faça o login</h2>
        <b-form-group
          label="E-mail"
          label-for="email"
        >
         <b-form-input
           id="email"
           type="email"
           placeholder="welliton@gmail.com"
         autocomplete="off"
           v-model="email"
         >

         </b-form-input>
        </b-form-group>

        <b-form-group
            label="Senha"
            label-for="password"
        >
          <b-form-input
              id="password"
              type="password"
              placeholder="digite sua senha"
              v-model="password"
          >

          </b-form-input>
        </b-form-group>
      </div>
    </b-col>
    <b-col sm="7"></b-col>
  </b-row>
</template>

<script>

export default {
  // eslint-disable-next-line vue/multi-word-component-names
  name: "Login",

  data(){
    return{
      email:'',
      password:'',

    };

  },
};
</script>

<style>

*,
*::after,
*::before {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  text-decoration: none;
}

.row-login {
  margin-left: 0;
}

.left-login {

  background-color: #f2f2f2;
}

</style>