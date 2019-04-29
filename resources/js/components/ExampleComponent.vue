<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{titulo}}</div>

                    <div class="card-body">
                        <teste></teste>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props:['texto','titulo'],
        mounted() {
            console.log('Component mounted.');

        }

    }
</script>
