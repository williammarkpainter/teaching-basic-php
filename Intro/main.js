// Pushing the button, click to support, will trigger an ajax query to getsupport.php
// getsupport.php will echo back a json object with an allocated support person, and a list of other support people

function displaySupport(results){
    
}

function getSupport(){

    var request = $.ajax({
        url: "getsupport.php",
        method: "GET",
        dataType: "json"
    })

    request.done(function(data){

        console.log(data)
        $("#support-name").text(data.supportName)


        var supportNames = ""

        var onCall = data.onCallSupportNames

        console.log(onCall[0])

        for(var i = 0; i < onCall.length; i++){
            supportNames += onCall[i].toString()
            if(i < onCall.length - 1){
                supportNames += ', '
            }
        }

        $("#other-support-names").text(supportNames)

    })
}

$("#get-support-name").click(getSupport)