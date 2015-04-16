/**
 * Created by THARANGA-PC on 4/16/2015.
 */
// This article:
// http://stackoverflow.com/questions/21246818/how-to-get-the-base-url-in-javascript

var base_url = window.location.origin;
// "http://stackoverflow.com"

var host = window.location.host;
// stackoverflow.com

var pathArray = window.location.pathname.split( '/' );
// ["", "questions", "21246818", "how-to-get-the-base-url-in-javascript"]