checkCookie();

function showAlert(){
	var r = confirm("Please be advised that you can only buy Allesgen from our West Covina Office. We don't have authorized dealer at this time.\n我們只在南加州的西科文那市出售 Allesgen, 我們並沒有其他的代理商或銷售分店。 \n\nClick OK for more information;\nClick CANCEL to close this box.\n\n更多詳情請按 OK\n略過請按 Cancel");
	if(r==true){
		window.location="spoof.php";
	}

}

function setCookie(cname, cvalue, exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays*24*60*60*1000));
    var expires = "expires="+d.toUTCString();
    document.cookie = cname + "=" + cvalue + "; " + expires;
}

function getCookie(cname) {
    var name = cname + "=";
    var ca = document.cookie.split(';');
    for(var i=0; i<ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0)==' ') c = c.substring(1);
        if (c.indexOf(name) == 0) return c.substring(name.length, c.length);
    }
    return "";
}

function checkCookie() {
    var user = getCookie("newVisitor");
    //alert("-"+user+"-");
    if (user == "") { // for production
    //if(true){       // for development
        showAlert();
        setCookie("newVisitor", "visited", 365);
    } else {

    }
}
