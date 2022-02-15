





document.querySelector('.play').addEventListener('click',function () {

    context.resume().then(()=> {
      console.log('bonjour comment tu va');
    });
    });



           if($('#a').is(':checked') && reponse ==a) {
            var reponseVrai = a;
            var reponseChoisir  = a;
            addReponseUserByQuestion(reponseChoisir,reponseVrai,sujetId,chapitreId,testId,question_id);

            $('#alert-reponse').html('<button class="alert alert-success">Juste <i class="fa fa-check"></i></button>');

            link;

             }else if ($('#a').is(':checked')&& $('#b').is(':checked')&& reponse == a+b) {
                var reponseVrai = a+b;
                var reponseChoisir  = a+b;

                addReponseUserByQuestion(reponseChoisir,reponseVrai,sujetId,chapitreId,testId,question_id);

            $('#alert-reponse').html('<button class="alert alert-success">Juste <i class="fa fa-check"></i></button>');

            link;
             }else if ($('#a').is(':checked')&& $('#c').is(':checked')&& reponse == a+c) {
                var reponseVrai = a+c;
                var reponseChoisir  = a+c;

            addReponseUserByQuestion(reponseChoisir,reponseVrai,sujetId,chapitreId,testId,question_id);

            $('#alert-reponse').html('<button class="alert alert-success">Juste <i class="fa fa-check"></i></button>');

            link;
             }else if ($('#a').is(':checked')&& $('#d').is(':checked')&& reponse == a+d) {
                var reponseVrai = a+d;
                var reponseChoisir  = a+d;

            addReponseUserByQuestion(reponseChoisir,reponseVrai,sujetId,chapitreId,testId,question_id);

            $('#alert-reponse').html('<button class="alert alert-success">Juste <i class="fa fa-check"></i></button>');

            link;
             }else if ($('#b').is(':checked') && reponse == b) {
                var reponseVrai = b;
                var reponseChoisir  = b;
            addReponseUserByQuestion(reponseChoisir,reponseVrai,sujetId,chapitreId,testId,question_id);

            //addReponseUserByQuestion(reponseChoisir,reponseVrai,sujetId,chapitreId,testId);

            $('#alert-reponse').html('<button class="alert alert-success">Juste <i class="fa fa-check"></i></button>');

            link;
             }else if ($('#b').is(':checked')&& $('#c').is(':checked')&& reponse == b+c) {

                var reponseVrai = b+c;
                var reponseChoisir  = b+c;

            addReponseUserByQuestion(reponseChoisir,reponseVrai,sujetId,chapitreId,testId,question_id);


            $('#alert-reponse').html('<button class="alert alert-success">Juste <i class="fa fa-check"></i></button>');

            link;
             } else if ($('#b').is(':checked')&& $('#d').is(':checked')&& reponse == b+d) {

                var reponseVrai = b+d;
                var reponseChoisir  = b+d;

            addReponseUserByQuestion(reponseChoisir,reponseVrai,sujetId,chapitreId,testId,question_id);

            $('#alert-reponse').html('<button class="alert alert-success">Juste <i class="fa fa-check"></i></button>');

            link;
             }else if ($('#c').is(':checked') && reponse == c) {
                var reponseVrai = c;
                var reponseChoisir  = c;

            addReponseUserByQuestion(reponseChoisir,reponseVrai,sujetId,chapitreId,testId,question_id);

            $('#alert-reponse').html('<button class="alert alert-success">Juste <i class="fa fa-check"></i></button>');

            link;
             }else if ($('#c').is(':checked')&& $('#d').is(':checked')&& reponse == c+d) {
                var reponseVrai = c+d;
                var reponseChoisir  = c+d;

            addReponseUserByQuestion(reponseChoisir,reponseVrai,sujetId,chapitreId,testId,question_id);

            $('#alert-reponse').html('<button class="alert alert-success">Juste <i class="fa fa-check"></i></button>');

            link;
             }else if ($('#a').is(':checked')&& $('#b').is(':checked') && $('#c').is(':checked')&& reponse == a+b+c) {

                var reponseVrai = a+b+c;
                var reponseChoisir  = a+b+c;

            addReponseUserByQuestion(reponseChoisir,reponseVrai,sujetId,chapitreId,testId,question_id);

            $('#alert-reponse').html('<button class="alert alert-success">Juste <i class="fa fa-check"></i></button>');


            link;
             }else if ( $('#c').is(':checked') == false && $('#a').is(':checked')&& $('#b').is(':checked') && $('#d').is(':checked')   && reponse == a+b+d) {

              var reponseVrai = a+b+d;
              var reponseChoisir  = a+b+d;

               addReponseUserByQuestion(reponseChoisir,reponseVrai,sujetId,chapitreId,testId,question_id);

               $('#alert-reponse').html('<button class="alert alert-success">Juste <i class="fa fa-check"></i></button>');

               link;



             }else if ($('#b').is(':checked')&& $('#c').is(':checked') && $('#d').is(':checked') && reponse == b+c+d) {
                 var reponseVrai = b+c+d;
                var reponseChoisir  = b+c+d;

            addReponseUserByQuestion(reponseChoisir,reponseVrai,sujetId,chapitreId,testId,question_id);

            $('#alert-reponse').html('<button class="alert alert-success">Juste <i class="fa fa-check"></i></button>');

            link;

             }else if ($('#d').is(':checked') && reponse == d) {
                 var reponseVrai = d;
                var reponseChoisir  = d;

            addReponseUserByQuestion(reponseChoisir,reponseVrai,sujetId,chapitreId,testId,question_id);

            $('#alert-reponse').html('<button class="alert alert-success">Juste <i class="fa fa-check"></i></button>');

            link;
             }
             else if ($('#a').is(':checked') && $('#b').is(':checked')&& $('#c').is(':checked') && $('#d').is(':checked')) {
              var reponseChoisir = a+b+c+d;
              addReponseUserByQuestion(reponseChoisir,null,sujetId,chapitreId,testId,question_id);
              $('#alert-reponse').html('<button class="alert alert-danger"><i class="fa fa-remove"></i> Faux</button>');

             }
             else if ($('#a').is(':checked') == true && $('#b').is(':checked') ==true && $('#c').is(':checked') ==  true) {
              alert('non')
             }

             else if ($('#a').is(':checked') && $('#b').is(':checked')&&  $('#d').is(':checked')) {
              alert('non')
              var reponseChoisir = a+b+d;
              addReponseUserByQuestion(reponseChoisir,null,sujetId,chapitreId,testId,question_id);
              $('#alert-reponse').html('<button class="alert alert-danger"><i class="fa fa-remove"></i> Faux</button>');

             }

             else if ($('#a').is(':checked') && $('#c').is(':checked') && $('#d').is(':checked')) {
              alert('non')
              var reponseChoisir = b+c+d;

              addReponseUserByQuestion(reponseChoisir,null,sujetId,chapitreId,testId,question_id);
              $('#alert-reponse').html('<button class="alert alert-danger"><i class="fa fa-remove"></i> Faux</button>');

             }

             else if ($('#b').is(':checked') && $('#c').is(':checked') && $('#d').is(':checked')) {
              alert('non')
              var reponseChoisir = b+c+d;

              addReponseUserByQuestion(reponseChoisir,null,sujetId,chapitreId,testId,question_id);
              $('#alert-reponse').html('<button class="alert alert-danger"><i class="fa fa-remove"></i> Faux</button>');

             }
             else if ($('#b').is(':checked') && $('#d').is(':checked')) {
              alert('non')
              var reponseChoisir = b+c;

              addReponseUserByQuestion(reponseChoisir,null,sujetId,chapitreId,testId,question_id);
              $('#alert-reponse').html('<button class="alert alert-danger"><i class="fa fa-remove"></i> Faux</button>');

             }

             else if ($('#b').is(':checked') && $('#c').is(':checked')) {
              alert('non')
              var reponseChoisir = b+c;

            addReponseUserByQuestion(reponseChoisir,null,sujetId,chapitreId,testId,question_id);
            $('#alert-reponse').html('<button class="alert alert-danger"><i class="fa fa-remove"></i> Faux</button>');

             }
             else if ($('#b').is(':checked') ) {
              var reponseChoisir = b;

            addReponseUserByQuestion(reponseChoisir,null,sujetId,chapitreId,testId,question_id);
            $('#alert-reponse').html('<button class="alert alert-danger"><i class="fa fa-remove"></i> Faux</button>');

             }
             else if ($('#c').is(':checked') ) {
              alert('non')
              var reponseChoisir = c;

            addReponseUserByQuestion('c',null,sujetId,chapitreId,testId,question_id);
            $('#alert-reponse').html('<button class="alert alert-danger"><i class="fa fa-remove"></i> Faux</button>');

             }
             else if ($('#a').is(':checked') ) {
              alert('non')
              var reponseChoisir = c;

            addReponseUserByQuestion(reponseChoisir,null,sujetId,chapitreId,testId,question_id);
            $('#alert-reponse').html('<button class="alert alert-danger"><i class="fa fa-remove"></i> Faux</button>');

             }

             else if ($('#d').is(':checked') ) {
              var reponseChoisir = c;
            addReponseUserByQuestion(reponseChoisir,null,sujetId,chapitreId,testId,question_id);
            $('#alert-reponse').html('<button class="alert alert-danger"><i class="fa fa-remove"></i> Faux</button>');
             }
             else{
              var reponseChoisir = a+b+c+d;
              addReponseUserByQuestion(reponseChoisir,null,sujetId,chapitreId,testId,question_id);

              $('#alert-reponse').html('<button class="alert alert-danger"><i class="fa fa-remove"></i> Faux</button>');
                  link;
             }
