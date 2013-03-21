
function update_current_url()
{
    var current_url = document.getElementById("testing_content_frame").contentWindow.location.href;
    document.getElementById('current_url').value = current_url;
}
    
    
$(document).ready(function() {
    
    var top_bar_height= 50;
    var visible_width = window.innerWidth; // visible width
    var visible_height = window.innerHeight// visible height
    
    document.getElementById('testing_content_frame').width = visible_width -10;
    document.getElementById('testing_content_frame').height = visible_height- top_bar_height;
    

});