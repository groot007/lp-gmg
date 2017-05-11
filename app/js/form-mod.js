  valid = false;
  $("form").each(function(){
      $(this).validate({
        // errorElement: "",
       rules:{
            firstname:{
                required: true,
            },
            mobile:{
                required: true,
            },
       },

       messages:{
           firstname:{
                // required: "",
                // minlength: "Логин должен быть минимум 4 символа",
                // maxlength: "Максимальное число символо - 16",
            },
            mobile:{
                // required: "",
            },
       },
        success: function(){
           valid = true;
      },
    });
  })
if(valid){
  $('form').submit(function(e){
    e.preventDefault();
    var form = $(this);
    var data ={};

    form.find("input").each(function(){
      if ($(this).val() == ""){
        // $(this).css("border-color", 'red')
        console.log("err");
        // valid = false;
        return false;
      }
    })

          form.find('input').not('input[type=checkbox]').each(function() {
            var $el = $(this);
            var key = $el.attr('name');
            if (key) {
              data[key] = $el.val();
            }
          });
          form.find('input[type=checkbox]').each(function() {
            if ($(this).prop("checked")) {
              var key = $(this).attr('name');
              if (!data[key]) {
                data[key] = [];
              }
              if (key && $(this).val()) {
                data[key].push($(this).val());
              }
            }
          });
          var yaCounter      = new Ya.Metrika();
          var yaCounterVal   = yaCounter.getClientID();
          data['ClientidYM'] = yaCounterVal;
          var formURL = 'integration_vtiger/post.php';
          formURL = formURL.replace('//', '/');


          $.post(formURL, data).done(function(done) {
            form.find('input').not('input[type=hidden], input[type=checkbox]').each(function() {
              $(this).val('');
              valid = false;
            });
            if(form.hasClass("pop-up")){
                  form.addClass("answer");
                  form.find("h2").css("display", "none");
                  form.find("fieldset").css("display", "none");
                  form.find(".success").removeClass("hidden-s");
                  setTimeout(function(){
                    $(".mfp-close").trigger("click");
                  }, 5000)
          }else{
            form.find(".success").removeClass("hidden-s");
            setTimeout(function(){
              form.find(".success").addClass("hidden-s");
            }, 5000)
          }
      })
          .fail(function(){
              alert('not good');
          });
          return false;
  });
    }