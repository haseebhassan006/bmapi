<template>
<div>
     <template>
    <div class="center">
      <vs-button gradient warn @click="active=!active">
        Open Dialog
      </vs-button>
      <vs-dialog overflow-hidden full-screen v-model="active">
        <template #header>
          <h4 class="not-margin">
            Welcome to <b>Vuesax</b>
          </h4>
        </template>


        <div class="con-form">
          <vs-input v-model="input1" placeholder="Email">
            <template #icon>
              @
            </template>
          </vs-input>
          <vs-input type="password" v-model="input2" placeholder="Password">
            <template #icon>
              <i class='bx bxs-lock'></i>
            </template>
          </vs-input>
          <div class="flex">
            <vs-checkbox v-model="checkbox1">Remember me</vs-checkbox>
            <a href="#">Forgot Password?</a>
          </div>
        </div>

        <template #footer>
          <div class="footer-dialog">
            <vs-button block>
              Sign In
            </vs-button>

            <div class="new">
              New Here? <a href="#">Create New Account</a>
            </div>
          </div>
        </template>
      </vs-dialog>
    </div>
  </template>
</div>

</template>
  <script>
 export default{

      data:() => ({
      active: false,
      input1: '',
      input2: '',
      checkbox1: false
    })

 }
</script>

