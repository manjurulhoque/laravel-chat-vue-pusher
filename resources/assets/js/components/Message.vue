<template>
    <div>
        <ul class="list-group">
            <li class="list-group-item active">Chat room</li>
            <li class="list-group-item" v-for="message in chat.messages">
                {{ message }}
                <small class="badge badge-danger">You</small>
            </li>
        </ul>
        <div class="input-group">
            <input type="text" class="form-control" v-model="message" placeholder="type your message">
            <span class="input-group-btn">
                    <button @click="send" @keyup.enter='send' class="btn btn-primary" type="button">Send</button>
                </span>
        </div>
    </div>
</template>

<script>
    export default {
        data(){
            return{
                message: '',
                chat: {
                    messages: []
                }
            }
        },
        methods: {
            send(){
                this.chat.messages.push(this.message);
                this.message = "";
            }
        }
    }
</script>
