function fetchpro(str) {
  var req = new XMLHttpRequest();
  req.open("get", "http://localhost/practise/mopro.php?processor=" + str, true);
  req.send();
  req.onreadystatechange = function() {
    if (req.readyState == 4 && req.status == 200) {
      document.getElementById("pro").innerHTML = req.responseText;
    }
  };
}
