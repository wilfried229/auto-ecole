var test = $('#link').attr('href');
var reponse = $('#reponse').val();
var chapitreId = $('#chapitreId').val();
var sujetId = parseInt($('#sujetId').val());
var question_id = $('#questionId').val();
var urlEnd = '/test/page/loadingbyResultats/';
var loopCount = 0;
var key = $('#key').val();
var urlStartContinue = '/test/generales/' + key;

document.getElementById('myaudio').addEventListener('timeupdate', function () {
    if (this.currentTime == 0) {
        ++loopCount;
    }
    if (loopCount == 2) {
        this.pause();
        key++;
        var link = $('#link').attr('href');
    console.log("key :" +key);

        if (link != undefined) {
        questionnaires();
        } else {
        endPage(urlEnd);
        }
    }
});


$('#link').click(function (e) {
    e.preventDefault();
    key++;

    console.log("key :" +key);
    if (key === 20) {
        endPage(urlEnd);
    } else {
        questionnaires();
    }
});


function questionnaires() {

    var test = '/test/generales/' + key;
    var questions = addTypeValueCheckbox().join('');
    if (questions == reponse) {
        $('#alert-reponse').html('<button class="alert alert-success">Juste <i class="fa fa-check"></i></button>');
        addReponseUserByQuestion(questions, questions, sujetId, chapitreId, question_id);
    } else {
        $('#alert-reponse').html('<button class="alert alert-danger"><i class="fa fa-remove"></i> Faux</button>');
        addReponseUserByQuestion(questions, null, sujetId, chapitreId, question_id);
    }
    redirectToPage(urlStartContinue)

}



function endPage(test) {
    var questions = addTypeValueCheckbox().join('');
    if (questions == reponse) {
        $('#alert-reponse').html('<button class="alert alert-success">Juste <i class="fa fa-check"></i></button>');
        addReponseUserByQuestion(questions, questions, sujetId, chapitreId, question_id);
    } else {
        $('#alert-reponse').html('<button class="alert alert-danger"><i class="fa fa-remove"></i> Faux</button>');
        addReponseUserByQuestion(questions, null, sujetId, chapitreId, question_id);
    }
    redirectToPage(test)
}


function redirectToPage(urlLoin) {
    setTimeout(() => {
        window.location.href = urlLoin
    }, 800);
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

function addTypeValueCheckbox() {
    var array = [];
    $('input:checkbox[name=type]:checked').each(function () {
        array.push($(this).val());
    })
    return array;
}

