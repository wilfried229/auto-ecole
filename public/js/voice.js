

if(window.speechSynthesis.getVoices().length == 0) {
	window.speechSynthesis.addEventListener('voiceschanged', function() {
		textToSpeech();
	});
}
else {
	// languages list available, no need to wait
	textToSpeech()
}

function textToSpeech() {
	// get all voices that browser offers
	var available_voices = window.speechSynthesis.getVoices();

	// this will hold an english voice
	var english_voice = '';

	// find voice by language locale "en-US"
	// if not then select the first voice
	for(var i=0; i<available_voices.length; i++) {
		if(available_voices[i].lang === 'fr-FR') {
			english_voice = available_voices[i];
			break;
		}
	}
	if(english_voice === '')
		english_voice = available_voices[0];

    // new SpeechSynthesisUtterance object

	var utter = new SpeechSynthesisUtterance();
	utter.rate = 0;
    utter.pitch = 0.5;
	utter.text = "Sur une motocyclette, le passager a) Peut-être assis devant le conducteur b) Peut-être assis dans la position dite « en amazone » c) Doit être assis sur le siège arrière d) Doit faire corps avec la moto et son conducteur";
    utter.voice = english_voice;
	utter.voiceURI = 'native';


	// event after text has been spoken
	utter.onend = function() {
		alert('Speech has finished');
	}

	// speak
	window.speechSynthesis.speak(utter);
}
