<template>
   <div>

   <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
                <span class="info-box-icon bg-aqua"><i class="ion ion-ios-gear-outline"></i></span>
    
                <div class="info-box-content">
                    <span class="info-box-text">Produtos</span>
                    <span class="info-box-number">10<small></small></span>
                </div>
            </div>
        </div>

        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
                <span class="info-box-icon bg-red"><i class="fa fa-google-plus"></i></span>
    
                <div class="info-box-content">
                    <span class="info-box-text">Likes {{this.info}}</span>
                    <span class="info-box-number">41,410</span>
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
                    info: null,
                }
            },
            methods: {
        
        cep : function(){
                axios
            .get('/api/product/total')
            .then(response => (this.info = response.data))
            }
        }
    }
</script>
