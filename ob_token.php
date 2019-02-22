<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Envoi sms test</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
<div class="container">

<div class="row">
    <div class="col-md-4"></div>

    <div class="col-md-4">
        <h3>Meck and co envoi de sms Test</h3>
        <form>
        <div class="form-group">
                <label for="token">Token</label>
                <input type="text" class="form-control" id="token" name="token" placeholder="Retour du token">
            </div>
            <div class="form-group" id="zone_telephone">
                <label for="tel">Numero</label>
                <input type="text" class="form-control" id="tel" name="tel" placeholder="Entrer votre numéro ex 22502020202">
            </div>
            <div class="form-group" id="zone_message">
            <textarea class="form-control" rows="3" id="message" name="message" placeholder="taper vos message ici"></textarea>
            </div>
           
            
            <button type="submit" id="btn_envoyer" class="btn btn-default">Envoyer</button>
        </form>
        <center>
              <img id="img_load" src="load.gif">
        </center>

    </div>
    

    <div>
    </div>
    <div class="col-md-4"></div>

</div>


</div>


<script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>  
<script type="text/javascript">

$( document ).ready(function() {
   
    hide_sms_form();

    $.ajax({

        type: 'POST',
        url: 'http://smstesting.local/getToken.php',
        dataType:'html',
        success: function(response) {

            $("#token").val(response);
            console.log(response);

        },
        complete: function(){

            $("#img_load").hide();
            show_sms_form();

        },
        beforeSend: function(){

            $("#img_load").show();

        },
        error: function (xhr, ajaxOptions, thrownError) {

            console.log("erreur d'execution");
        }

    });
});

$( "#btn_envoyer" ).click(function(e) {

  e.preventDefault();
  var token=$("#token").val();
  var tel=$("#tel").val();
  var message=$("#message").val();

  $.ajax({

        type: 'POST',
        url: 'http://smstesting.local/sendSms.php',
        dataType:'html',
        data: {
                                               
            token:token,
            tel:tel,
            message:message,                           
        },
        success: function(response) {

            
            console.log(response);

        },
        complete: function(){

            $("#img_load").hide();
            show_sms_form();

        },
        beforeSend: function(){

            $("#img_load").show();

        },
        error: function (xhr, ajaxOptions, thrownError) {

            console.log("erreur d'execution");
        }

  });
  
  
});

function hide_sms_form(){
   
    $("#zone_telephone").hide();
    $("#zone_message").hide();
    $("#btn_envoyer").hide();
    $("#img_load").hide();

}

function show_sms_form(){
   
   $("#zone_telephone").show();
   $("#zone_message").show();
   $("#btn_envoyer").show();
   $("#img_load").hide();

}

</script>

</body>
</html>