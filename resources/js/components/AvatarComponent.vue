<template>
  <div class="form-group">
    <label for="avatar">Imagen</label>


    <input type="file" @change="getImage" class="form-control-file" id="avatar" >
    <small id="avatar" class="form-text text-muted">
    {{ message }}
    </small>

      <div v-if="userimagen">

        
        <img  width="100" :src="`/profiles/${userimagen}`" class="user__avatarthumb if">
        
      </div>
      <div v-else-if="imagen">
        <img  width="100" :src="imagen"  alt="" class="user__avatarthumb else-if">
      </div>
      <div v-else>
        <img  width="100" :src="imagen"  alt="" class="user__avatarthumb else">
      </div>

  </div>
</template>

<script>
  export default {
    props: ['userimagen','message','name'],
    data(){
      return{
        avatarThumb: '',
        usuario: {
          avatar: ''
        }
      }
    },
    mounted(){
      document.querySelector('#avatar').setAttribute('name', this.name)
    },
    methods: {
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
      }
    },
    computed: {
      imagen(){
        return this.avatarThumb;
      }
    }
  }
</script>
