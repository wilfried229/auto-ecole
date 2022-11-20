
var loopCount = 0;
document.getElementById('myaudio').addEventListener('timeupdate', function () {
    if (this.currentTime == 0) {
        ++loopCount;
    }
    if (loopCount == 2) {
        this.pause();
        //var   test = $('#link').attr('href');
        if (test != undefined) {
            questionnaires()
        } else {

            EndPage();

        }
    }
});
 
var key = $('#key').val();

$('#link').click(function (e) {
    e.preventDefault();
    key++;

    if (key === 20) {
        var test = '/test/page/loadingbyResultats/';
        EndPage(test);

    } else {
        var tests = '/test/generales/' + key;
        questionnaires(tests);

    }


});

$('#linkFin').click(function (e) {
    e.preventDefault();
    EndPage();

});

function questionnaires(test) {

    var test = $('#link').attr('href');

    var reponse = $('#reponse').val();
    var chapitreId = $('#chapitreId').val();
    var sujetId = parseInt($('#sujetId').val());
    var question_id = $('#questionId').val();

    var link = "";
    var test = '/test/generales/' + key;

    link == setTimeout(() => {
        redirectToPage(test)
    }, 800);

    var array = [];
    $('input:checkbox[name=type]:checked').each(function () {
        array.push($(this).val());
    })
    var reponse = $('#reponse').val();
    var questions = array.join('');

    if (questions == reponse) {
        $('#alert-reponse').html('<button class="alert alert-success">Juste <i class="fa fa-check"></i></button>');
        addReponseUserByQuestion(questions, questions, sujetId, chapitreId, question_id);

    } else {

        $('#alert-reponse').html('<button class="alert alert-danger"><i class="fa fa-remove"></i> Faux</button>');

        addReponseUserByQuestion(questions, null, sujetId, chapitreId, question_id);



    }


}



function EndPage(test) {

    var reponse = $('#reponse').val();
    var chapitreId = $('#chapitreId').val();
    var sujetId = parseInt($('#sujetId').val());
    var question_id = $('#questionId').val();

    var array = [];
    $('input:checkbox[name=type]:checked').each(function () {
        array.push($(this).val());
    })
    var reponse = $('#reponse').val();
    var questions = array.join('');

    if (questions == reponse) {
        $('#alert-reponse').html('<button class="alert alert-success">Juste <i class="fa fa-check"></i></button>');
        addReponseUserByQuestion(questions, questions, sujetId, chapitreId, question_id);
        setTimeout(() => {
            redirectToPage(test)

        }, 800);

    } else {

        $('#alert-reponse').html('<button class="alert alert-danger"><i class="fa fa-remove"></i> Faux</button>');
        addReponseUserByQuestion(questions, null, sujetId, chapitreId, question_id);
        setTimeout(() => {
            redirectToPage(test)
        }, 800);

    }


}


function redirectToPage(urlLoin) {
    window.location.href = urlLoin
}


function addReponseUserByQuestion(question_choice, reponseVrai, sujet, chapitre, question_id) {

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    var dataQuestion = {
        question_choice: question_choice,
        vrai: reponseVrai,
        sujet: sujet,
        chapitre_id: chapitre,
        question_id: question_id
    }

    // evaluation to user by question
    $.ajax({
        url: '/test/generale/by/user/examen',
        type: 'post',
        data: dataQuestion,
        dataType: 'json',
        beforeSend: function () {
        }
    }).done(function (data) {
    }).fail(function (xhr) {
    });

}

