// $(function () { $("#basic-example").steps({ headerTag: "h3", bodyTag: "section", transitionEffect: "slide" }), $("#vertical-example").steps({ headerTag: "h3", bodyTag: "section", transitionEffect: "slide", stepsOrientation: "vertical" }) });


$("#basic-example, #basic-example-2").steps({
    headerTag: "h3",
    bodyTag: "section",
    transitionEffect: "slide",
    onStepChanging: function(event, currentIndex, newIndex) {
      // Check if the current step is moving forward (not going back)

      if (newIndex > currentIndex) {
        // Get all the input fields and select tags within the current step
        // var currentStepInputs = $(".wizard-step").eq(currentIndex).find("input:required,select:required");

        var currentWizard = $(this); // This ensures we target the correct form
        var currentStep = currentWizard.find(".wizard-step").eq(currentIndex);
        // var currentStep = $(".wizard-step").eq(currentIndex);
        var currentStepInputs = currentStep.find("input,select").filter(function() {
            return ($(this).is(":required") && $(this).is(":visible"));
        });

        // Check if any of the input fields or select tags are empty
        var isEmpty = false;
        
        currentStepInputs.each(function() {
            if ($(this).prop("disabled") || $(this).prop("readonly")) {
                return true; // Continue to the next iteration of the loop
            }

            var fieldValue = $(this).val();

            if (!fieldValue || fieldValue === '' || fieldValue.length == 0) {
                isEmpty = true;
                $(this).addClass("is-invalid").removeClass("is-valid");
                return false; // Exit the loop early if any field is empty
            }else{
                $(this).addClass("is-valid").removeClass("is-invalid");
            }
        });

        if (isEmpty) {
          // Display an error message or do something to notify the user that fields are empty
            // Please fill in all the required fields before proceeding.
          toastr["error"]("Please fill in the required field before proceeding.");
          return false; // Prevent the form from advancing to the next step
        }
      }
      return true; // Allow the form to advance to the next step if all fields are filled
    },
    onFinished: function(event, currentIndex) {
      // Submit the form when the last step is reached
      $("#basic-example, #basic-example-2").submit();
    }
  });

$(document).ready(function() {
    var numberSpans = $('.number');
    numberSpans.each(function() {
        var text = $(this).text();
        text = text.replace('.', '');
        $(this).text(text);
    });
});