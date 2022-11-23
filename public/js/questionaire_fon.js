
var loopCount = 0;
document.getElementById('myaudio').addEventListener('timeupdate', function () {
    if (this.currentTime == 0) {
        ++loopCount;
    }
    if (loopCount == 2) {
        this.pause();
        var   test = $('#link').attr('href');
        if (test != undefined) {
            questionnaires();
            /*   setTimeout(() => {
                  redirectToPage(test)
               }, 800); */
        } else {

            EndPage();

        }
    }
});


$('#link').click(function (e) {
    e.preventDefault();
    questionnaires();
});


$('#linkFin').click(function (e) {
    e.preventDefault();
    EndPage();

});

function questionnaires() {

    var test = $('#link').attr('href');

    var testId = parseInt($('#testId').val());
    var reponse = $('#reponse').val();
    var chapitreId = $('#chapitreId').val();
    var sujetId = parseInt($('#sujetId').val());
    var question_id = $('#questionId').val();
    var pages = parseInt($('#pages').val());


    var link = "";
    if (test != undefined) {
        test = test;
        link == setTimeout(() => {
            redirectToPage(test)
        }, 800);
    }

    console.log(link);
    var array = [];
    $('input:checkbox[name=type]:checked').each(function () {
        array.push($(this).val());
    })
    var reponse = $('#reponse').val();
    var questions = array.join('');

    if (questions == reponse) {
        $('#alert-reponse').html('<button class="alert alert-success">Juste <i class="fa fa-check"></i></button>');
        addReponseUserByQuestion(questions, questions, sujetId, chapitreId, testId, question_id);
        link;

    } else {

        $('#alert-reponse').html('<button class="alert alert-danger"><i class="fa fa-remove"></i> Faux</button>');

        addReponseUserByQuestion(questions, null, sujetId, chapitreId, testId, question_id);

        linK;


    }


}



function EndPage() {


    var testId = parseInt($('#testId').val());
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

    var test = '/page/loadingbyResultats/fon/' + sujetId;

    if (questions == reponse) {
        $('#alert-reponse').html('<button class="alert alert-success">Juste <i class="fa fa-check"></i></button>');
        addReponseUserByQuestion(questions, questions, sujetId, question_id);

        setTimeout(() => {
            redirectToPage(test)

        }, 800);

    } else {
        $('#alert-reponse').html('<button class="alert alert-danger"><i class="fa fa-remove"></i> Faux</button>');
        addReponseUserByQuestion(questions, null, sujetId, question_id);
        setTimeout(() => {
            redirectToPage(test)
        }, 800);

    }


}


function redirectToPage(urlLoin) {
    window.location.href = urlLoin

}



function addReponseUserByQuestion(question_choice, reponseVrai, sujet, question_id) {

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });


    var dataQuestion = {
        question_choice: question_choice,
        vrai: reponseVrai,
        sujet: sujet,
        question_id: question_id
    }

    $.ajax({
        url: '/reponse/by/user/examen/fon',
        type: 'post',
        data: dataQuestion,
        dataType: 'json',
        beforeSend: function () {

        }
    }).done(function (data) {

        console.log(data);
    }).fail(function (xhr) {

        console.log(xhr)
    });
}

