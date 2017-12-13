<template>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Example Component</div>

                    <div class="panel-body">
                        I'm an example component! 3
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.');
            // axios.get('api/posts/2').then(response => console.log(response.data));
            // http://blog2.com/api/posts/2?api_token=jkhasdfjkasdhlfjk%20asdh%20fkjasdhfjkasdhfkjasdhf
        }
    }
</script>
