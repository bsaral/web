function toggle(chkbox, txt) { 
    var visSetting = (chkbox.checked) ? "visible" : "hidden"; 
    document.getElementById(txt).style.visibility = visSetting; 
} 

function toggle_accord(chkbox) { 
    var visSetting = (chkbox.checked) ? "visible" : "hidden"; 
    document.getElementById("fs_content_accordion").style.visibility = visSetting; 
} 
