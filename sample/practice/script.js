function clickTest() {
  const target = document.getElementById("anime_test");
  if (target.className == null || target.className=="") {
    target.className = "active";
  } else {
    target.className = "";
  }
}