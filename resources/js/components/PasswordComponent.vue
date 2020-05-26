

<template>
  <div>
    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModal">
            Cambiar contraseña  1
          </button>
    <div class="modal" tabindex="-1" role="dialog" id="exampleModal">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Cambiar contraseña</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form @submit.prevent="updatePassword(users)" action="" method="POST"  >
      
            <div class="modal-body">
              <div class="form-group">
                <label for="password">Contraseña actual</label>
                <input  type="password"  v-model="user.password" class="form-control" id="password" name="password" placeholder="Ingrese su contraseña">
              </div>
              <div class="form-group">
                <label for="newpassword">Nueva contraseña</label>
                <input  type="password" v-model="user.newPassword" class="form-control" id="newpassword" name="newpassword" placeholder="Ingrese su contraseña">
              </div>
              <div class="form-group">
                <label for="newrepassword">Repita la nueva contraseña</label>
                <input  type="password" v-model="user.reNewPassword" class="form-control"  id="newrepassword" name="repassword" placeholder="Ingrese su contraseña" >
              </div>

            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
              <button type="submit" class="btn btn-primary">Cambiar</button>
            </div>
          </form>
        </div>
      </div>
    </div>

  </div>
</template>

<script>
  export default {
    props: ['password'],
    data(){
      return{
        user: {
          password: '',
          newPassword: '',
          reNewPassword: ''
        }
      }
    },
    created(){
      axios.get(`/users/1`).then( res=> {
          this.user = res.data;
          console.log(res.data);
        });

        console.log(this.password)
    },
    methods: {
      updatePassword(){
        // event.preventDefault();
        
        console.log('update password');
      }
    }
  }
</script>
