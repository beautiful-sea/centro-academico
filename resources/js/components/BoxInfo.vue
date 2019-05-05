<template>
    <div class="col-lg-3 col-6">
        <!-- small box -->
        <div :class="'small-box bg-'+color+'-gradient'"">
            <div class="inner">
                <h3>{{number}}</h3>

                <p>{{description}}</p>
            </div>
            <div class="icon">
                <i :class="icon"></i>
            </div>
            <a :href="link" class="small-box-footer">{{action}} <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>
</template>

<script>
    export default {
        props:['number','description','action','link','color','icon'],
        mounted() {
        }

    }
</script>