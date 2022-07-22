function CustomAlert()
{
	this.render=function(dialog)
	{
		var winW=window.innerWidth;
		var winH=window.innerHeight;
		var dialogoverlay=document.getElementById('dialogoverlay');
		var dialogbox=document.getElementById('dialogbox');

		dialogoverlay.style.display="block";
		dialogoverlay.style.height=winH+"px";
		dialogbox.style.left=(winW/2)-(500*0.5)+"px";
		dialogbox.style.top="100px";
		dialogbox.style.display="block";

		document.getElementById('dialogboxbody').innerHTML=dialog;
	}	
	this.ok=function()
	{
		document.getElementById('dialogbox').style.display="none";
		document.getElementById('dialogoverlay').style.display="none";
	}
}
var Alert = new CustomAlert();



        // JS for styling of contact page

        // returns all elements in the document that matches input CSS selector(s)
        const input = document.querySelectorAll('.input');

        // Declaration of function focusFunc
        function focusFunc() {
            // Refers to the parent of parent of input class
            let parent = this.parentNode.parentNode;
            // add focus as class to the parent 
            parent.classList.add('focus');
        }

        // Declaration of function blurFunc()
        function blurFunc() {
            // Refers to the parent of parent of input class
            let parent = this.parentNode.parentNode;
            //Checks if the input field is blank
            if (this.value == '') {
                // Removes focus class from parent
                parent.classList.remove('focus');
            }
        }

        // Executes every time input is clicked
        input.forEach((input) => {
            // 
            input.addEventListener('focus', focusFunc);
            input.addEventListener('blur', blurFunc);
        });

        //  End of JS styiling of contact page
        // 
    
        // Form Validation
        // stores the value of uerror in err
        var err = document.getElementById('uerror'),
            perr = document.getElementById('perror'),
            terr = document.getElementById('terror');
            // Declaration of validateForm() function
        function validateForm() {
            // Extracting value of form with name as name, email and thoughts
            var fname = document.forms['contactForm']['name'].value;
            var email = document.forms['contactForm']['email'].value;
            var thoughts = document.forms['contactForm']['thoughts'].value;

            if (fname == '' || email == '' || thoughts == '') {
                // Displayed if either one of the field is empty
                alert("Please fill the form");
                if (fname == '') {
                    // if fname is blank, the value is err is set to block which was none before
                    err.style.display = 'block';
                }
                if (email == '') {
                    // if email is blank, the value is perr is set to block which was none before
                    perr.style.display = 'block';
                }
                if (thoughts == '') {
                    // if thoughts is blank, the value is thoughts is set to block which was none before
                    terr.style.display = 'block';
                }
                // The form is not submitted
                return false;
            } else {
                // Displayed in alert box if all the fields are filled
                alert('Thanks for your response');
            }
        }
        // Declaration of checkInput(id) function
        // Called at the time when a user presses a letter
        function checkInput(id) {
            if (id == 'name') {
                // if name id is passed as paramenter then the display property of err is set to none
                err.style.display = 'none';
            } else if (id == 'email') {
                // if email id is passed as paramenter then the display property of err is set to none
                perr.style.display = 'none';
            } else if ((thoughts = 'thoughts')) {
                // if thoughts id is passed as paramenter then the display property of err is set to none
                terr.style.display = 'none';
            }
        }
   
    

   
    