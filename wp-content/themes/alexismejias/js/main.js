// JavaScript Document
$(document).ready(function(){
var n=0;
var x=$('.projectsList li');
var interval;
function showProjectsList(){
		interval = self.setInterval(show,250);
		function show(){
				if(n>x.length){
					clearInterval(interval);
				}else {	
					$(".projectsList li:eq("+n+")").fadeIn('slow');
					n++;
				}
		}
  
}
function clearProjects(){
		x.hide();
		n=0;
		interval=window.clearInterval(interval);

}
	
		$('.summary').click(function(){
					$(this).css('color','#1a1a1a');
					$('.download').css('color','#fff');
					$('.projects').css('color','#fff');
					
					$('#download').hide();		
					$('#projects').hide();
					$('#content').hide();		
					clearProjects();
					$('#summary').fadeIn();
							
			});	
			
		$('.download').click(function(){
					$(this).css('color','#1a1a1a');	
					$('.summary').css('color','#fff');
					$('.projects').css('color','#fff');
							
					$('#summary').hide();		
					$('#projects').hide();
					$('#content').hide();
					clearProjects()	;						
					$('#download').fadeIn();
							
			});
			
		$('.projects').click(function(){
					$(this).css('color','#1a1a1a');	
					$('.summary').css('color','#fff');
					$('.download').css('color','#fff');
												
					$('#summary').hide();		
					$('#download').hide();
					$('#content').hide();		
					$('#projects').fadeIn();
					showProjectsList();	
						
			});


























	
})

