
/**
 * This IO class.
 *
 * @author Hachem Zerdia
 **/

function IO() {

	// class attributes.
	this.resultOfCommand;
	this.Documentation;
	this.command;

	// assign the "this" of class to another variable called self.
	var self = this;

	
	/**
	 * This function submit the command to the server. 
	 *
	 * @param arg_command {string} git command.
	 * @return void
	 * @author Hachem Zerdia
	 **/
	this.inputCommand = function inputCommand(arg_command) {
		this.command = arg_command;
		$.ajax({
			type: "POST",
			url: "challenge.php",
            async: false,
			data: {command:arg_command},
			dataType: "json",
			success: function(data) {
                         // result come in from the server.
                         self.resultOfCommand = data["CommandResult"];
                         // documentation come in from the server.
                         self.Documentation = data["DocOfChallenge"];   
                         self.showDocumentation();
       			}
		});
	}

	/**
	 * This function showing the documentation comme in form the server. 
	 * @return void
	 * @author Hachem Zerdia
	 **/
	this.showDocumentation = function showDocumentation() {
		$('#documentation').html(this.Documentation);
        updateBar();

        // put commands in the terminal, (commands in the documentation).
        promptCommand();
	}

	/**
	 * This function return the result comme in form the server. 
	 * @return string
	 * @author Hachem Zerdia
	 **/
    this.getResult = function getResult() {
        return this.resultOfCommand;
    }
}
