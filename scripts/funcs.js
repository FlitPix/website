// Copy link text to clipboard, for some socials.
function copy(tag) {
    var copyFrom = tag.innerText;
    navigator.clipboard.writeText(copyFrom);
    alert('Copied ' + copyFrom + ' to clipboard.');
}
