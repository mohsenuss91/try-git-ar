
$(document).ready(function(){
    var challenge_ = $('#challengeStatus li a');
	var ioObject = new IO(); // create IO obeject.
    updateBar();
    
    // put commands in the terminal, (commands in the documentation).
    promptCommand();

    // when the mouse over the cercl of challenge.
    challenge_.hover(function() {
            // get number of challenge.
            var numOfChallenge  = $(this).data('num-of-challenge');
            // show the name of challenge in the challenge name.
            updateChallengeName(numOfChallenge);
        },
        function() {
            // and if the mouse is out name of challenge become 
            // the current challenge.
            updateChallengeName_(); 
    });

    // when the cercle clicked the challenge changed.
    challenge_.click(function() {
        var numOfChallenge = $(this).data('num-of-challenge');
        changeChallenge(numOfChallenge);
    });

    /**
     * Generate CodeMirror and apply it to #terminal element
     */
    var el = document.getElementById('terminal');
          window.cs_console = new CSConsole(el,{
              prompt: '> ',
              historyLabel: 'cs-console-git',
              syntax: 'shell',
              welcomeMessage: 'Git باللغة العربية!',
              autoFocus: true,
              commandValidate: function(line){
                return line.length > 0
              },
              commandHandle: function(line, report, prompt){
                /*
                 *  We aren't doing anything with the console input.
                 *
                 *  This is where you might send the input to the server and get a response
                 *  for example, an irb response or you could eval javascript here.
                 *                                               
                 */
                try {

                    var valueOfCommand = $.trim(line); // delete "space character".
                    // check if the command is Git comand
                    // else run cs_console like js console
                    if(isGitCommand(valueOfCommand)) {
                        // send command to the server for test it.
                        ioObject.inputCommand(valueOfCommand);
                        // get the result come in from the server.
                        var content = ioObject.getResult();
                    } else {
                        var content = eval.call(this,line);
                    }

                } catch(e){
                   var content = e.message
                }
                report({content: (content ? content.toString() : '')})
           }
        });

});
