function createCookie(name, value, days) {
    var expires;

    if (days) {
        var date = new Date();
        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
        expires = "; expires=" + date.toGMTString();
    } else {
        expires = "";
    }
    document.cookie = encodeURIComponent(name) + "=" + encodeURIComponent(value) + expires + "; path=/";
}

function readCookie(name) {
    var nameEQ = encodeURIComponent(name) + "=";
    var ca = document.cookie.split(';');
    for (var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) === ' ')
            c = c.substring(1, c.length);
        if (c.indexOf(nameEQ) === 0)
            return decodeURIComponent(c.substring(nameEQ.length, c.length));
    }
    return null;
}

function eraseCookie(name) {
    createCookie(name, "", -1);
}

// TEXT RESIZER //

const textResize =(dir)=> {
  const maxSize = 150;
  const minSize = 75;
  let sizeCookie = parseInt(readCookie('resizer'));
  let rootTag = document.getElementsByTagName("HTML")[0];

  let test = (dir == "up");



  const sizeResizer=(initSize,newSize,sizeDiff)=>{
    if(!sizeCookie){
      createCookie("resizer", initSize ,30);
      rootTag.style.fontSize = initSize + "%";
    } else {
      if(sizeDiff) {
        createCookie("resizer", newSize, 30);
        rootTag.style.fontSize = newSize +"%"
      }
    }
  }

  if(dir == "up") {
    sizeResizer(125, sizeCookie + 25, sizeCookie < maxSize);
  } else {
    sizeResizer(75, sizeCookie - 25, sizeCookie > minSize);
  }

}

jQuery(function($) {

    // Add custom script here. Please backup the file before editing/modifying. Thanks
    $('.navbar-collapse .dropdown-toggle').removeAttr('data-toggle');
    // Run the script once the document is ready
    $(document).ready(function() {
      $('#rt-buttons a').on('click', function(e) {
          e.preventDefault;
          if($(this).hasClass('increase')) {
          textResize("up")
        } else {
          textResize("down");
        }
      });

      let sizeCookie = readCookie('resizer');

      if(sizeCookie) {
        console.log('cookie size:' + sizeCookie)
        document.getElementsByTagName("HTML")[0].style.fontSize = sizeCookie +"%";
      }
    });

    // Run the script once the window finishes loading
    $(window).load(function(){

    });




});
