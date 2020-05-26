<template>
  <div class="form-group">
    <label for="avatar">Foto</label>


    <input type="file" @change="getImage" class="form-control-file" id="avatar" name="avatar">

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
    props: ['userimagen'],
    data(){
      return{
        avatarThumb: '',
        usuario: {
          avatar: ''
        }
      }
    },
    mounted(){
      console.log(this.userimagen)
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
