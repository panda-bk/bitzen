<template>
   <div>

   <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
                <span class="info-box-icon bg-aqua"><i class="fa fa-cube"></i></span>    
                <div class="info-box-content">
                    <span class="info-box-text">Produtos</span>
                    <span class="info-box-number">{{this.info.product}}<small></small></span>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
                <span class="info-box-icon bg-red"><i class="fa fa-list-alt"></i></span>    
                <div class="info-box-content">
                    <span class="info-box-text">Categorias</span>
                    <span class="info-box-number">{{this.info.category}}</span>
                </div>
            </div>
        </div>
         <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
                <span class="info-box-icon bg-green"><i class="fa fa-user"></i></span>    
                <div class="info-box-content">
                    <span class="info-box-text">Usuarios Cadastrado</span>
                    <span class="info-box-number">{{this.info.user}}</span>
                </div>
            </div>
        </div>
    </div>


   </div>
</template>

<script>
export default {
    data () {
        return {
            info: {},
        }
    },
    mounted () {        
    axios.get('/api/total')
    .then(response => (this.info = response.data))
    }
}
</script>
