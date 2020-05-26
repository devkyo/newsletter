<template>
<div>
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">

        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Usuarios</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li v-if="form" >
              <button  v-on:click="openForm" class="btn btn-danger">
                <i class="fas fa-times-circle"></i> Cerrar formulario
                </button>
            </li>
            <li v-else>
              <button  v-on:click="openForm" class="btn btn-primary">
                <i class="fas fa-plus-circle"></i> Crear usuario
              </button>
            </li>
          </ol>
        </div>
      </div>
    </div>
  </div>

  <section class="content" v-if="form">
    <div class="container-fluid">


      <div class="card" v-if="modoEditar">
        <div class="card-header">
          <strong>EDITAR USUARIO</strong>
        </div>
        <div class="card-body">
          <form @submit.prevent="editUser(usuario)" enctype="multipart/form-data">
            <div class="row">
              <div class="col-md-6 col-12">
                <div class="form-group">
                  <label for="nombre">Nombre</label>
                  
                  <input v-model="usuario.name" type="text" class="form-control" id="nombre" name="name" placeholder="Nombre">
                </div>
                <div class="form-group">
                  <label for="first_surname">Apellido Paterno</label>
                  <input  v-model="usuario.first_surname" type="text" class="form-control" id="first_surname" name="first_surname" placeholder="Apellido Paterno">
                </div>
                <div class="form-group">
                  <label for="last_surname">Apellido Materno</label>
                  <input v-model="usuario.last_surname" type="text" class="form-control" id="last_surname" name="last_surname" placeholder="Apellido Materno">
                </div>
                <div class="form-group">

                  <label for="email">Correo</label>
                  <input v-model="usuario.email" type="text" id="email" name="email" placeholder="mi@correo.com" class="form-control">
                 
                </div>
                <div class="form-group">
                  <label for="password">Password</label>
                  <input v-model="usuario.password" type="password" class="form-control" id="password" name="password" placeholder="ingrese su comtraseña">
                </div>
              
              </div> 
              <div class="col-md-6 col-12">
                <div class="form-group">
                  <label for="phone">Celular o WhatsApp</label>
                  <input v-model="usuario.phone" type="text" class="form-control" id="telefono" placeholder="+51987654321" name="phone">
                </div>
                <div class="form-group">
                  <label for="charge">Cargo</label>
                  <select v-model="usuario.charge" class="form-control" id="cargo" name="charge" placeholder="cargo">
                    <option value="" selected disabled hidden>Seleciona un cargo</option>
                    <option>Asesor</option>
                    <option>Ventas</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="rol">Rol</label>
                  <select v-model="usuario.rol" class="form-control" id="rol" name="rol">
                    <option value="" selected disabled hidden>Seleciona un rol</option>
                    <option>Administrador</option>
                    <option>Asesor</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="avatar">Foto</label>
                  <input type="file" @change="getImage" class="form-control-file" id="avatar">
                    <img width="100" :src="imagen"  alt="" class="user__avatarthumb">
                </div>
              </div>

            </div>

            <button type="submit" class="btn btn-warning">Guardar</button>
            
          </form>
        </div>
      </div>

      <div class="card" v-else>
        <div class="card-header">
          <strong>CREAR USUARIO</strong>
        </div>
        <div class="card-body">
          <form @submit.prevent="addUser" enctype="multipart/form-data">
            <div class="row">
              <div class="col-md-6 col-12">
                <div class="form-group">
                  <label for="nombre">Nombre</label>
                  
                  <input v-model="usuario.name" type="text" class="form-control" id="nombre" name="name" placeholder="Nombre">
                </div>
                <div class="form-group">
                  <label for="first_surname">Apellido Paterno</label>
                  <input  v-model="usuario.first_surname" type="text" class="form-control" id="first_surname" name="first_surname" placeholder="Apellido Paterno">
                </div>
                <div class="form-group">
                  <label for="last_surname">Apellido Materno</label>
                  <input v-model="usuario.last_surname" type="text" class="form-control" id="last_surname" name="last_surname" placeholder="Apellido Materno">
                </div>
                <div class="form-group">

                  <label for="email">Correo</label>
                  <input v-model="usuario.email" type="text" id="email" name="email" placeholder="mi@correo.com" class="form-control">
                 
                </div>
                <div class="form-group">
                  <label for="password">Password</label>
                  <input v-model="usuario.password" type="password" class="form-control" id="password" name="password" placeholder="ingrese su comtraseña">
                </div>
              
              </div> 
              <div class="col-md-6 col-12">
                <div class="form-group">
                  <label for="phone">Celular o WhatsApp</label>
                  <input v-model="usuario.phone" type="text" class="form-control" id="telefono" placeholder="+51987654321" name="phone">
                </div>
                <div class="form-group">
                  <label for="charge">Cargo</label>
                  <select v-model="usuario.charge" class="form-control" id="cargo" name="charge" placeholder="cargo">
                    <option value="" selected disabled hidden>Seleciona un cargo</option>
                    <option>Asesor</option>
                    <option>Ventas</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="rol">Rol</label>
                  <select v-model="usuario.rol" class="form-control" id="rol" name="rol">
                    <option value="" selected disabled hidden>Seleciona un rol</option>
                    <option>Administrador</option>
                    <option>Asesor</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="avatar">Foto</label>
                  <input type="file" @change="getImage" class="form-control-file" id="avatar">
                    <img width="100" :src="imagen"  alt="" class="user__avatarthumb">
                </div>
              </div>

            </div>

            <button class="btn btn-primary">Crear</button>
            <!-- <button  class="btn btn-danger">Cancelar crear usuario</button> -->
          </form>
        </div>
      </div>

    </div>
  </section>

  <br>
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Lista de usuarios</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example2" class="table  table-hover table-responsive-md">
                <thead>
                <tr>
                  <th>Nombre</th>
                  <th>Foto</th>
                  <th>Email</th>
                  <th>Cargo</th>
                  <th>Rol</th>
                  <th>Option</th>
                </tr>
                </thead>
                <tbody>

                <tr 
                v-for="(item, index) in usuarios" :key="index">
                  <td>{{ item.name }} {{ item.first_surname }}</td>
                  <td>
                    <div class="user__avatar">
                      <img :src="'/profiles/'+item.avatar" alt="" class="img-thumbnail"
                      ></div>
                      </td>
                  <td>{{ item.email }}</td>
                  <td>{{ item.charge }}</td>
                  <td>{{ item.rol }}</td>
                  <td>
                    <button @click="editForm(item)" class="btn btn-success btn-sm">Editar</button>
                    <button @click="deleteUser(item, index)" href="" class="btn btn-danger btn-sm">Eliminar</button>
                  </td>
                </tr>
                
                </tbody>
               
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->

        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
  </section>

  </div>
</template>

<script>

  export default {
  
  
    data(){
      return {
        modoEditar: false,
        form: false,
        errors: [],

        avatarThumb: '',
        usuarios: [],
        usuario: {
          name: '',
          first_surname: '',
          last_surname: '',
          email: '',
          phone: '',
          password: '',
          charge: '',
          rol: '',
          avatar: ''
        }
      }
    },

    created(){
      axios.get('/api/users').then(res=> {
        this.usuarios = res.data;
        // console.log(res.data)
      });

      

    },

    methods: {
      toastMessage(text){
        Toastify({
          text: text,
          backgroundColor: "rgba(97, 209, 31,.8)",
          duration: 4000,
          close: true,
          gravity: "top",
          position: 'right', 
          stopOnFocus: true,
        }).showToast();   
      },
      //create user load avatar
      getImage(event){
        let file = event.target.files[0];
        this.usuario.avatar = file;
        this.loadAvatar(file);
      },
      loadAvatar(file){
        let reader = new FileReader();
        reader.onload =  e =>{
          this.avatarThumb = e.target.result;
        } 
        reader.readAsDataURL(file);
      },  
      openForm(){
        this.form = !this.form;
          if(this.modoEditar){
            this.modoEditar = !this.modoEditar;
          }
        this.setInput();  
      },
      addUser(){

        let formData = new FormData();
        formData.append('name', this.usuario.name);
        formData.append('first_surname', this.usuario.first_surname);
        formData.append('last_surname', this.usuario.last_surname);
        formData.append('email', this.usuario.email);
        formData.append('phone', this.usuario.phone);
        formData.append('password', this.usuario.password);
        formData.append('charge', this.usuario.charge);
        formData.append('rol', this.usuario.rol);
        formData.append('avatar', this.usuario.avatar);

        if(!this.usuario.name.length > 4){
            console.log('Ingrese minimo 4 letras de nombre')
        }

        if(this.usuario.password.lenght > 6){
          alert('Ingrese una contraseña de minimo 6 digitos.');
        }

        // axios.post('/api/users', formData)
        //   .then(res => {

        //       console.log(res.data);

        //       if(res.data.error){
        //         this.errors  = res.data.errors;

        //         console.log(`ERRORES: ${res.data.error}`);
        //         console.log(this.errors.name[0]);
        //       }else {
        //         this.toastMessage(`Se registro correctamente el usuario ${res.data.name}`);
        //         this.usuarios.push(res.data);
        //         this.form = !this.form;
        //         if(this.modoEditar){
        //           this.modoEditar = !this.modoEditar;
        //         }
        //         this.setInput();
        //       }
     

  
              
        //   })
        
        
      },
      setInput(){
        this.usuario.name = '';
        this.usuario.first_surname = '';
        this.usuario.last_surname = '';
        this.usuario.email = '';
        this.usuario.phone = '';
        this.usuario.password = '';
        this.usuario.charge = '';
        this.usuario.rol = '';
        this.avatarThumb = '';
      },
      deleteUser(item, index){
        axios.delete(`/api/users/${item.id}`)
          .then( ()=> {
            this.usuarios.splice(index, 1);
            Toastify({
                text: `Se elimino el usuario`,
                backgroundColor: "rgba(194, 1, 1,8)",
                duration: 4000,
                close: true,
                gravity: "top", 
                position: 'right', 
                stopOnFocus: true,
            }).showToast();

          });
      },
      editForm(item){
        this.modoEditar = true;
        this.form = true;
        this.usuario.name = item.name;
        this.usuario.first_surname = item.first_surname;
        this.usuario.last_surname = item.last_surname;
        this.usuario.email = item.email;
        this.usuario.phone = item.phone;
        this.usuario.password = item.password;
        this.usuario.charge = item.charge;
        this.usuario.rol = item.rol;
        this.usuario.id = item.id;
        this.avatarThumb = `/profiles/${item.avatar}`;
      },
      editUser(usuario){

        let updateData = new FormData();
        formData.append('name', usuario.name);
        formData.append('first_surname', usuario.first_surname);
        formData.append('last_surname', usuario.last_surname);
        formData.append('email', usuario.email);
        formData.append('phone', usuario.phone);
        formData.append('password', usuario.password);
        formData.append('charge', usuario.charge);
        formData.append('rol', usuario.rol);
        updateData.append('avatar', this.usuario.avatar);

        axios.post(`/api/users/${usuario.id}`, updateData)
         .then(res => {

          const index = this.usuarios.findIndex(item => item.id === usuario.id);
          this.usuarios[index] = res.data;
          Toastify({
              text: `Usuario actualizdo`,
              backgroundColor: "rgba(238,148,80,0.4)",
              duration: 4000,
              close: true,
              gravity: "top",
              position: 'right', 
              stopOnFocus: true,
          }).showToast();  

          this.form = !this.form;
          if(this.modoEditar){
            this.modoEditar = !this.modoEditar;
          }

          // update data array 
          axios.get('/api/users').then(res=> {  
          this.usuarios = res.data;
          });

          
            
        })

          
        .catch( error => {
          console.log(error)
        });



      }
    },

    computed: {
      imagen(){
        return this.avatarThumb;
      }
    }
  }
</script>
 
