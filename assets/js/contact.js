$(document).ready(setHrWidth);

window.onresize = setHrWidth

function setHrWidth() {
    Array.from(document.getElementsByClassName('contact-item')).forEach(
        function (contactItem) {
	    var hr = contactItem.getElementsByTagName('hr').item(0)
	    var p = contactItem.getElementsByTagName('p').item(0)
	    hr.style.width = contactItem.offsetWidth - p.offsetWidth - 3 + 'px'
        }
    );
}
