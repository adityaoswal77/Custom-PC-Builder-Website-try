function fetchcpu(str) {
  var req = new XMLHttpRequest();
  req.open(
    "get",
    "http://localhost/practise/mocpu.php?motherboard=" + str,
    true
  );
  req.send();
  req.onreadystatechange = function() {
    if (req.readyState == 4 && req.status == 200) {
      document.getElementById("cpu").innerHTML = req.responseText;
    }
  };
}
