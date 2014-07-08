$(function() {
    $(".dial").knob({
	    'change' : function (v) { 
	    	change_text($(".dial").val());
	    },
	    'fgColor': '#E74C3C',
	    'inputColor': '#E74C3C'
    });
});

function change_text(val){
	var num = Number(val + "");
	
	if(num <= 2){
		$("#dialog-1").html("Booooring!");
		
		$('.dial').trigger(
	        'configure',{
	        "fgColor":"#E74C3C",
	        "inputColor":"#E74C3C"
	        }
	    );
	}
	else if(num <= 5){
		$("#dialog-1").html("Not bad.");
		
		$('.dial').trigger(
	        'configure',{
	        "fgColor":"#E67E22",
	        "inputColor":"#E67E22"
	        }
	    );
	}
	else if(num <= 10){
		$("#dialog-1").html("Security nut!");
		
		$('.dial').trigger(
	        'configure',{
	        "fgColor":"#F1C40F",
	        "inputColor":"#F1C40F"
	        }
	    );
	}
	else if(num <= 12){
		$("#dialog-1").html("In Soviet Russia, number of words choose YOU");
		
		$('.dial').trigger(
	        'configure',{
	        "fgColor":"#9B59B6",
	        "inputColor":"#9B59B6"
	        }
	    );
	}
	else if(num <= 16){
		$("#dialog-1").html("The voices! Make them stop!");
		
		$('.dial').trigger(
	        'configure',{
	        "fgColor":"#3498DB",
	        "inputColor":"#3498DB"
	        }
	    );
	}
	else if(num <= 18){
		$("#dialog-1").html("STOP! STOP! ABORT!");
		
		$('.dial').trigger(
	        'configure',{
	        "fgColor":"#1ABC9C",
	        "inputColor":"#1ABC9C"
	        }
	    );
	}
	else if(num <= 20){
		$("#dialog-1").html("Show off");
		
		$('.dial').trigger(
	        'configure',{
	        "fgColor":"#16A085",
	        "inputColor":"#16A085"
	        }
	    );
	}
}

