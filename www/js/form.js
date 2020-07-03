/*$(document).ready(function() {

    var $connexion_error = $('#connexion_error'),
      $login = $('#login'),
      $pwd = $('#pwd');

    $('#submit').on('click', function(event) {
      event.preventDefault();

      // recupere les valeurs entrees pour la connexion
      var loginValue = $login.val(),
        pwdValue = $pwd.val();

      // demarrage de la requet Ajax
      $.ajax({
          url: "log.php",
          data: {
            login: loginValue,
            pwd: pwdValue
          },
        //  type: "POST"
          dataType: 'json'
        })
        .done(function() {
        
          header('Location:' . buildUrl('/show_post')); 
        })
        .fail(function(jqxhr) {
          // on affiche les erreurs
          $connexion_error.html('').html(jqxhr.responseText);
        });
    })
  });

  */

 $(document).ready(function(){
 
    $("#submit").click(function(e){
        e.preventDefault();
 

        $.ajax({
            url : '../src/controllers/log.php',
            type : 'POST', // Le type de la requête HTTP, ici devenu POST
            data: FormData,
            /*
            {
                email : $("email").val(),
                pseudo : $("#pseudo").val(), 
                password : $("#password").val(),
            },
            */
            dataType : 'json',
            success : function(data)
         });

            function(data){
 
                if(ok == 'Success'){
                     // Le membre est connecté. Ajoutons lui un message dans la page HTML.
                     header(buildUrl('/show_post'));
                }
                else{
 
                     $("#connexion_error").html("<p>Erreur lors de la connexion...</p>");
                }
         
            },

         );
    });
});