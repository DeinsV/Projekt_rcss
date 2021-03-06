@extends('header')

@section('content')

<main>
        <div class="container">
            <div class="row paddding-row" id="chat">
                
                <div class="col-sm-12 ">
                    <div class="chat-main-window">
                        <div class="chat-message" v-for="message in messages">
                            <h5>@{{ message.username }} <em>@{{ message.date }}</em></h5>
                            <p>@{{ message.text }}</p>
                        </div><!-- chat-message -->
                        
                        
                    </div><!-- chat-main-window -->
                </div>
                <div class="col-sm-12 ">
                    <div class="chat-message-form">
                        <div class="row">
                            <div class="form-group col-sm-12">
                                <label for="chat-username-input">Username</label>
                                <input v-model="newMessageUsername" type="text" class="form-control" id="chat-username-input">
                            </div>
                        </div>
                        <div class="row paddding-row">
                        
                            <div class="form-group col-sm-10">
                                <label for="chat-text-input">Message</label>
                                <textarea v-model="newMessageText" class="form-control" id="chat-text-input"></textarea>
                            </div>
                            <div class="form-group col-sm-2">
                                <button class="btn btn-primery" id="chat-send-message-button" v-on:click="sendMessage()">Send</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>    
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
@endsection