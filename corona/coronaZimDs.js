
var fields3 = ['Age','Gender','pmh1','pmh2','pmh3','pmh4','smoking','TravelHistory','TravelContact','SickPersonContact','FluStatus','symptom1','symptom2','symptom3','symptom4','symptom5','symptom6','symptom7','symptom8','symptom9','symptom10','symptom11','symptom12','symptom13','symptom14' ,'symptom15','symptom16','symptom17'];

var row = '';
var corona = ['symptom1','symptom2','symptom3','symptom4','symptom5','symptom6','symptom7','symptom8','symptom9','symptom10','symptom11','symptom12','symptom13','symptom14','symptom17'];
var flu = ['symptom1','symptom2','symptom3','symptom4','symptom5','symptom6','symptom7','symptom8','symptom9','symptom10','symptom11','symptom12','symptom13','symptom15','symptom16','symptom17'];
var cold = ['symptom2','symptom3','symptom4','symptom6','symptom7','symptom8','symptom9','symptom10','symptom11','symptom12','symptom13','symptom15','symptom16'];
var allergies = ['symptom2','symptom3','symptom6','symptom7','symptom8','symptom10','symptom11','symptom12','symptom15','symptom16'];

function submit_form() {    
   // var date = $('#date').val();
	// Check Fields
	var Idc = Math.floor(Math.random() * 100001);
	var finalCount = 0;
    var complete = true;
	var error_color = '#FFD9D9';
    var fields = ['first_name','last_name','email'];
    var fields3 = ['Age','Gender','pmh1','pmh2','pmh3','pmh4','smoking','TravelHistory','TravelContact','SickPersonContact','FluStatus','symptom1','symptom2','symptom3','symptom4','symptom5','symptom6','symptom7','symptom8','symptom9','symptom10','symptom11','symptom12','symptom13','symptom14' ,'symptom15','symptom16','symptom17'];
    var row = '';
    var i;
    for(i=0; i < fields3.length; ++i) {
        var field = fields3[i];
        $('#'+field).css('backgroundColor', 'inherit');
        var value = $('#'+field).val();       
	    // Validate Field
	    var nw = "0";
        if(!value) {
            if(field != 'message') {
                $('#'+field).css('backgroundColor', error_color);
                var complete = false;
            }
            } else {            
			// Sheet Data
		
            switch(document.getElementById(field).type) {
              case 'checkbox':
                if(document.getElementById(field).checked == true){
			    row += '"'+value+'",';
			    if(parseInt(value) == 0 || parseInt(value) == 1 ){
                   finalCount = finalCount + parseInt(value); 
                  
                }else if(value === "Male" || parseInt(value) > 45){
                    finalCount = finalCount + 1; 
                }
			   
			    
			    
    			}else{
    			    row +='"'+nw+'",';
    			    
    			}
                break;
              case 'text':
                
			    row += '"'+value+'",';
    			
                break;
              default:
                row += '"'+value+'",';
                if(parseInt(value) == 0 || parseInt(value) == 1 ){
                   finalCount = finalCount + parseInt(value); 
                  
                }else if(value === "Male" || parseInt(value) > 45){
                    finalCount = finalCount + 1; 
                }
                
                // code block
            }
			
			// row += '"'+value+'",';
            
        }
    }
    
row += '"'+finalCount +'",';
row += '"'+Idc +'",';


//row += '"'+date+'"';
txt = ''
if(0 < finalCount && finalCount < 5 ){
    txt = "Self Quaruantine - Low Risk"
}else if(5 <= finalCount && finalCount < 15 ){
    txt = "Self Quaruantine and Call a Doctor - Medium Risk"
}else if(15 <= finalCount ){
    txt = "Call a Doctor Immediately  - High Risk"
}
document.getElementById('ScoreOutput').innerHTML = txt;
    // Submission
    if(complete) {	
        Idc = Idc + 1;
		// Clean Row
		row = row.slice(0, -1);		
        // Config
        var gs_sid = '1y4miS9QF33pO0ZD_DuRrlxfRPHGBL6ozs2xs0zJYeKk'; // Enter your Google Sheet ID here
        var gs_clid = '88787495480-hb4lc7r7jiui5rvngdi659ipm0b506br.apps.googleusercontent.com'; // Enter your API Client ID here
        var gs_clis = '5BZ6Pg3_lnexRJZtrYiBhhpV'; // Enter your API Client Secret here
        var gs_rtok = '1//090xQhnEqNZxVCgYIARAAGAkSNwF-L9IrFJ7nmGixA9BuYL_8LAbZs3JW2FUnkZWwBGDY9pX8eFV-YeOc6l2yFb81tws7AmAQ6Jk'; // Enter your OAuth Refresh Token here
        var gs_atok = false;
        var gs_url = 'https://sheets.googleapis.com/v4/spreadsheets/'+gs_sid+'/values/A1:append?includeValuesInResponse=false&insertDataOption=INSERT_ROWS&responseDateTimeRenderOption=SERIAL_NUMBER&responseValueRenderOption=FORMATTED_VALUE&valueInputOption=USER_ENTERED';
        var gs_body = '{"majorDimension":"ROWS", "values":[['+row+']]}';        
         // HTTP Request Token Refresh
        var xhr = new XMLHttpRequest();
        xhr.open('POST', 'https://www.googleapis.com/oauth2/v4/token?client_id='+gs_clid+'&client_secret='+gs_clis+'&refresh_token='+gs_rtok+'&grant_type=refresh_token');
        xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
        xhr.onload = function() {            
            var response = JSON.parse(xhr.responseText);
            var gs_atok = response.access_token;            
			// HTTP Request Append Data
            if(gs_atok) {
                var xxhr = new XMLHttpRequest();
                xxhr.open('POST', gs_url);
                xxhr.setRequestHeader('Content-length', gs_body.length);
                xxhr.setRequestHeader('Content-type', 'application/json');
                xxhr.setRequestHeader('Authorization', 'OAuth ' + gs_atok );
                xxhr.onload = function() {
					if(xxhr.status == 200) {
						// Success
						$('#message').html('<p>Row Added to Sheet | <a href="http://snydergroupinc.com/tutorials/tutorial-google-sheets-api.php">Add Another &raquo;</a></p><p>Response:<br/>'+xxhr.responseText+'</p>');
						} else {
						// Fail
						$('#message').html('<p>Row Not Added</p><p>Response:<br/>'+xxhr.responseText+'</p>');
					}
                };
                xxhr.send(gs_body);
            }            
        };
        xhr.send();
    }
}
