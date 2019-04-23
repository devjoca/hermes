<template>
    <button class="text-red" @click="confirm">Delete</button>
</template>

import axios from 'axios';

<script>
    export default {
        props: ['url'],
        methods: {
            confirm() {
                if(confirm("You want to delete this monitor?")) {
                    axios.delete(this.url)

                    window.location.reload()
                }
            }
        }
    }
</script>
