
           if (checkedA.checked == true && checkedB.checked == true && reponse == a+b) {

            alert('ok');
           }
           else if (checkedA.checked == true && reponse == a) {
            alert('ok');
            }

           else if (checkedA.checked == true   && checkedD.checked == true  && reponse == a+d) {
            alert('ok');

            }
            else if (checkedA.checked == true   && checkedC.checked == true  && reponse == a+c) {
                alert('ok');

                }
            else if (checkedA.checked == true && checkedB.checked == true && checkedC.checked == true  && reponse == a+b+c) {
                alert('ok');

           }
           else if (checkedA.checked == true && checkedB.checked == true && checkedD.checked == true  && reponse == a+b+d) {
            alert('ok');

            }
            else if (checkedB.checked == true && checkedC.checked == true  && reponse == b+c) {
                alert('ok');

            }
            else if (checkedB.checked == true && checkedC.checked == true && reponse == b) {
                alert('non');
            }

            else if (checkedB.checked == true && checkedC.checked == true && reponse == c) {
                alert('non');
            }

            else if (checkedB.checked == true && checkedC.checked == true && reponse == c) {
                alert('non');
            }
            else if (checkedB.checked == true && reponse == b) {
                alert('ok');
            }

           else {

            alert('non');
           }

