      new Vue({
            el: '#chat',
            data: {
                messages: [
                ],
                newMessageUsername: "",
                newMessageText: "",
            },
            created: function(){
                var that = this;
                $.getJSON('/chat/get-messages', function(resp){
                    for (var index = 0; index < resp.length; index++) {
                        var element = resp[index];
                        console.log(element);
                        var newAdd = {
                            Username: element.username,
                            text: element.text,
                            date: element.created_at
                        }
                        that.messages.push(newAdd);
                    }
                })
            },
            methods: {
                sendMessage: function(){
                    var newAdd = {
                        username: this.newMessageUsername, // Peteris
                        text: this.newMessageText, // some text
                        date: new Date()
                    }
                    
                    this.messages.push(newAdd);
                    this.newMessageText = '';
                    $.post('/chat/save message', newAdd, function(){
                       console.log(res);     
                    });
                }
            }
        });


function initMap() {
        var uluru = {lat: 56.949649, lng: 24.105186};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 4,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }