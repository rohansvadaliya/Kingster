var toastTrigger = document.getElementById("liveToastBtn"),
	toastLiveExample = document.getElementById("liveToast");
toastTrigger && toastTrigger.addEventListener("click", function() {
    console.log("hello world");
	new bootstrap.Toast(toastLiveExample).show()
});